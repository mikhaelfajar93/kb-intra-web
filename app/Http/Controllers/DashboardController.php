<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Regulation;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function dashboard_view()
    {
        // $allclient = Client::count();
        // $all_file = Files::count();
        $username = session('username');
        $role = session('role');
        // $view_file = Files::latest()->take(7)->get();
        $view_announcement = Announcement::where('status', '=', '1')->latest()->take(15)->get();
        $view_regulation = Regulation::where('status', '=', '1')->latest()->take(15)->get();
        // $email = session('email');

        return view('dashboard.home', compact('role', 'username', 'view_announcement', 'view_regulation'));
        // return view('dashboard.home', compact('username', 'role', 'all_file', 'file_compliance', 'file_hrd', 'file_it', 'file_legal',
        //     'view_file', 'view_news'));
    }

    public function dashboard_view_announcement()
    {
        $username = session('username');
        $role = session('role');
        $view_announcement = Announcement::where('status', '=', '1')->latest()->take(15)->get();
        $file_compliance = Announcement::where('roleby', 'Compliance')
            ->where('status', '1')
            ->count();
        $file_hrd = Announcement::where('roleby', 'HRD')
            ->where('status', '1')
            ->count();
        $file_legal = Announcement::where('roleby', 'Legal')
            ->where('status', '1')
            ->count();

        return view('layout.announ_dashboard', compact('role', 'username', 'view_announcement', 'file_compliance', 'file_hrd', 'file_legal'));
        // return view('dashboard.home', compact('username', 'role', 'all_file', 'file_compliance', 'file_hrd', 'file_it', 'file_legal',
        //     'view_file', 'view_news'));
    }

    public function view_regulation($idregulation)
    {
        $username = session('username');
        $role = session('role');
        $regulations = Regulation::findOrFail($idregulation);
        $file_regulation = DB::table('file_regulations')->where('regulationid', '=', $idregulation)->get();
        $count_file_regulation = DB::table('file_regulations')->where('regulationid', '=', $idregulation)->count();

        return view('dashboard.view_regulation', compact('username', 'role', 'regulations', 'file_regulation', 'count_file_regulation'));
    }

    public function download_file_regulation($idfile)
    {
        $file_regulation = DB::table('file_regulations')->where('regulationid', '=', $idfile)->first();

        if ($file_regulation) {
            $filePath = storage_path('app/public/' . $file_regulation->pathfile);

            if (file_exists($filePath)) {
                return response()->download($filePath, $file_regulation->filename);
            } else {
                return redirect()->back()->with('error', 'File not found.');
            }
        } else {
            return redirect()->back()->with('error', 'File record not found.');
        }
    }

    public function view_announcement($idannouncement)
    {
        $username = session('username');
        $role = session('role');
        $announcements = Announcement::findOrFail($idannouncement);
        $file_announcement = DB::table('file_announcements')->where('announcementid', '=', $idannouncement)->get();
        $count_file_announcement = DB::table('file_announcements')->where('announcementid', '=', $idannouncement)->count();

        return view('dashboard.view_announcement', compact('username', 'role', 'announcements', 'file_announcement', 'count_file_announcement'));
    }

    public function download_file_announcement($idfile)
    {
        $file_announcement = DB::table('file_announcements')->where('announcementid', '=', $idfile)->first();

        if ($file_announcement) {
            $filePath = storage_path('app/public/' . $file_announcement->pathfile);

            if (file_exists($filePath)) {
                return response()->download($filePath, $file_announcement->filename);
            } else {
                return redirect()->back()->with('error', 'File not found.');
            }
        } else {
            return redirect()->back()->with('error', 'File record not found.');
        }
    }

    public function view_announcement_dash($idannouncement)
    {
        $username = session('username');
        $role = session('role');
        $announcements = Announcement::findOrFail($idannouncement);
        $file_announcement = DB::table('file_announcements')->where('announcementid', '=', $idannouncement)->get();
        $count_file_announcement = DB::table('file_announcements')->where('announcementid', '=', $idannouncement)->count();

        return view('layout.view_announcement', compact('username', 'role', 'announcements', 'file_announcement', 'count_file_announcement'));
    }
}
