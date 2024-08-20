<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;

class AuthController extends Controller
{
    //
    public function login_view()
    {
        return view('auth.login');
    }

    public function register_view()
    {
        // $branch = Branch::all();
        $branch = Branch::orderBy('BranchID')->get();
        $role = Role::orderBy('name')->get();
        return view('auth.register', compact('branch', 'role'));
    }

    public function authenticating(Request $request): RedirectResponse
    {
        // dd($request->all());

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();

            $roles = DB::table('model_has_roles')
                ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
                ->select('roles.name')
                ->where('model_has_roles.model_id', $user->id) // Gunakan $user->id
                ->get();

            // dd($user);

            session(['username' => $user->name, 'email' => $user->email, 'role' => $roles->first()->name]);

            return redirect()->intended('/home');
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'User Name / Password Anda Salah');

        return redirect('/');
    }

    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function register_user(Request $request)
    {

        $time_now = Carbon::now();
        $time_now->setTimezone('Asia/Bangkok');

        $user = new User;
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        // $user->role_id = $request->role;
        $user->created_at = $time_now;
        $user->updated_at = $time_now;

        try {
            $user->save();
            $user->assignRole($request->role);

            // $new_user = User::where('name', $request->username)->first();
            $new_user = User::whereRaw('LOWER(name) = ?', [strtolower($request->username)])->first();

            DB::table('userbranches')->insert([
                'UserID' => $new_user->id,
                'BranchID' => $request->branch,
                'created_at' => $time_now,
                'updated_at' => $time_now,
            ]);

            // $user_branch = new UserBranch;
            // $user_branch->UserID = $user->id;
            // $user_branch->BranchID = $request->branch;
            // $user_branch->created_at = $time_now;
            // $user_branch->updated_at = $time_now;
            // $user_branch->save();

            Session::flash('success', 'success');
            Session::flash('message', 'Register Success');
            return redirect()->back();
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->errorInfo[1] == 1062) { // error code untuk duplicate entry pada MySQL
                // Session::flash('error', 'Error!! Data Sales dengan ID ' . $request->sales_id . ' sudah ada');
                // dd($user);
                Session::flash('error', 'failed');
                Session::flash('message', 'E-mail has been registered');
                return redirect()->back()->withInput();
            }
        }
    }
}
