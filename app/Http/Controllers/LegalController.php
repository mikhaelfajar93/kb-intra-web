<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Regulation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LegalController extends Controller
{
    public function page_dashboard_announcement()
    {
        $username = session('username');
        $role = session('role');

        if ($role == 'Legal') {
            $list_announ = Announcement::where('roleby', '=', 'Legal')->get();
        } else {
            $list_announ = Announcement::where('roleby', 'Legal')
                ->where('status', 1)
                ->get();
        }

        return view('legal.home_announcement', compact('username', 'role', 'list_announ'));
    }

    public function page_dashboard_regulation()
    {
        $username = session('username');
        $role = session('role');

        if ($role == 'Legal') {
            $list_regulation = Regulation::where('roleby', '=', 'Legal')->get();
        } else {
            $list_regulation = Regulation::where('roleby', 'Legal')
                ->where('status', 1)
                ->get();
        }

        return view('legal.home_regulation', compact('username', 'role', 'list_regulation'));
    }

    public function page_input_announcement()
    {
        $username = session('username');
        $role = session('role');

        return view('legal.add_announcement', compact('username', 'role'));
    }

    public function page_input_regulation()
    {
        $username = session('username');
        $role = session('role');

        return view('legal.add_regulation', compact('username', 'role'));
    }

    public function input_regulation(Request $request)
    {
        $username = session('username');
        $role = session('role');

        $today = Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s');

        $regulations = new Regulation;
        $regulations->title = $request->title_regulation_legal;
        $regulations->details = $request->detail_regulation_legal;
        $regulations->status = '0';
        $regulations->uploadby = $username;
        $regulations->roleby = $role;
        $regulations->created_at = $today;
        $regulations->updated_at = $today;

        // dd($news->id);

        $maxFileSize = 12 * 1024; //maxium size file upload
        $validator = Validator::make($request->all(), [
            'file_regulation_legal.*' => 'file|mimes:jpg,jpeg,png,pdf,doc,docx,xls,xlsx,ppt,pptx||max:' . $maxFileSize,
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $regulations->save();
        }

        $file_regulation = [];
        if ($request->hasFile('file_regulation_legal')) {
            foreach ($request->file('file_regulation_legal') as $value) {
                $filename = $value->getClientOriginalName();
                $path = $value->storeAs('regulation_file', $filename, 'public');

                $file_regulation[] = [
                    'filename' => $filename,
                    'pathfile' => $path,
                    'regulationid' => $regulations->id,
                    'created_at' => $today,
                    'updated_at' => $today,
                ];
            }
            DB::table('file_regulations')->insert($file_regulation);
        }

        return redirect()->back()->with('status', 'Uploaded Successfully');
    }

    public function input_announcement(Request $request)
    {
        $username = session('username');
        $role = session('role');

        $today = Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s');

        $annoucements = new Announcement;
        $annoucements->title = $request->title_announ_legal;
        $annoucements->details = $request->detail_announ_legal;
        $annoucements->status = '0';
        $annoucements->uploadby = $username;
        $annoucements->roleby = $role;
        $annoucements->created_at = $today;
        $annoucements->updated_at = $today;

        // dd($news->id);

        $maxFileSize = 12 * 1024; //maxium size file upload
        $validator = Validator::make($request->all(), [
            'file_announ_legal.*' => 'file|mimes:jpg,jpeg,png,pdf,doc,docx,xls,xlsx,ppt,pptx||max:' . $maxFileSize,
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $annoucements->save();
        }

        $file_announcement = [];
        if ($request->hasFile('file_announ_legal')) {
            foreach ($request->file('file_announ_legal') as $value) {
                $filename = $value->getClientOriginalName();
                $path = $value->storeAs('announcement_file', $filename, 'public');

                $file_announcement[] = [
                    'filename' => $filename,
                    'pathfile' => $path,
                    'announcementid' => $annoucements->id,
                    'created_at' => $today,
                    'updated_at' => $today,
                ];
            }
            DB::table('file_announcements')->insert($file_announcement);
        }

        return redirect()->back()->with('status', 'Uploaded Successfully');
    }

    public function post_unpost_regulation($idregulation)
    {
        $regulations = Regulation::findOrFail($idregulation);
        $regulation_status = $regulations->status;

        if ($regulation_status == 0) {
            $regulations->update(['status' => '1']);
        } else {
            $regulations->update(['status' => '0']);
        }
        return redirect()->back();
    }

    public function post_unpost_announ($idannouncement)
    {
        $announcements = Announcement::findOrFail($idannouncement);
        $announcement_status = $announcements->status;

        if ($announcement_status == 0) {
            $announcements->update(['status' => '1']);
        } else {
            $announcements->update(['status' => '0']);
        }
        return redirect()->back();
    }

    public function delete_regulation($idregulation)
    {

        $regulations = Regulation::findOrFail($idregulation);

        $file_regulation = DB::table('file_regulations')->where('regulationid', '=', $idregulation)->get();

        if ($file_regulation->isNotEmpty()) {
            foreach ($file_regulation as $file) {
                $filePath = $file->pathfile;
                $fileName = $file->filename;
                $absoluteFilePath = $filePath . DIRECTORY_SEPARATOR . $fileName;

                if (file_exists($absoluteFilePath)) {
                    unlink(($absoluteFilePath));
                }
            }
            DB::table('file_regulations')->where('regulationid', '=', $idregulation)->delete();
        }
        $regulations->delete();
        return redirect()->back();
    }

    public function delete_announcement($idannouncement)
    {

        $announcements = Announcement::findOrFail($idannouncement);

        $file_announcement = DB::table('file_announcements')->where('announcementid', '=', $idannouncement)->get();

        if ($file_announcement->isNotEmpty()) {
            foreach ($file_announcement as $file) {
                $filePath = $file->pathfile;
                $fileName = $file->filename;
                $absoluteFilePath = $filePath . DIRECTORY_SEPARATOR . $fileName;

                if (file_exists($absoluteFilePath)) {
                    unlink(($absoluteFilePath));
                }
            }
            DB::table('file_announcements')->where('announcementid', '=', $idannouncement)->delete();
        }
        $announcements->delete();
        return redirect()->back();
    }

    public function edit_regulation($idregulation)
    {
        $username = session('username');
        $role = session('role');
        $regulations = Regulation::findOrFail($idregulation);
        $file_regulation = DB::table('file_regulations')->where('regulationid', '=', $idregulation)->get();
        $count_file_regulation = DB::table('file_regulations')->where('regulationid', '=', $idregulation)->count();
        $list_regulation = Regulation::where('roleby', '=', 'Legal')->get();

        if ($regulations->status == 0) {
            return view('legal.edit_regulation', compact('username', 'role', 'regulations', 'file_regulation', 'count_file_regulation'));
        } else {
            session(['username' => $username, 'role' => $role]);
            session()->flash('status', 'You cannot update regulation because the regulation has been posted');
            // return redirect()->route('regulation_compliance')->with(compact('username', 'role', 'list_regulation'));
            return redirect()->route('regulation_legal');
        }

    }

    public function update_regulation(Request $request, $idregulation)
    {
        $username = session('username');
        $role = session('role');
        $today = Carbon::now()->format('Y-m-d');
        $list_regulation = Regulation::where('roleby', '=', 'Legal')->get();

        $regulations = Regulation::findOrFail($idregulation);
        // dd($request->title_news_comp);
        $regulations->title = $request->title_news_legal;
        $regulations->details = $request->detail_news_legal;
        $regulations->uploadby = $username;
        $regulations->roleby = $role;
        $regulations->updated_at = $today;
        $regulations->update();

        $count_file_regulation = DB::table('file_regulations')->where('regulationid', '=', $idregulation)->count();

        if ($count_file_regulation == 0) {
            $file_regulation = [];

            $maxFileSize = 12 * 1024; //maxium size file upload

            $validator = Validator::make($request->all(), [
                'file_regulation.*' => [
                    'file',
                    'mimes:jpg,jpeg,png,pdf,doc,docx,xls,xlsx,ppt,pptx',
                    'max:' . $maxFileSize,
                ],
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            } else if ($request->hasFile('file_regulation')) {
                foreach ($request->file('file_regulation') as $value) {
                    $filename = $value->getClientOriginalName();
                    $path = $value->storeAs('regulation_file', $filename, 'public');

                    $file_regulation[] = [
                        'filename' => $filename,
                        'pathfile' => $path,
                        'regulationid' => $regulations->id,
                        'created_at' => $today,
                        'updated_at' => $today,
                    ];
                }
                DB::table('file_regulations')->insert($file_regulation);
            }
        }
        session(['username' => $username, 'role' => $role]);
        session()->flash('success', 'Your data has been successfully updated');
        return redirect()->route('regulation_legal');

        // return redirect()->back()->with('status', 'Updated Data Successfully');
        // session()->flash('success', 'You data success updated');
        // return redirect()->route('regulation_compliance')->with(compact('username', 'role', 'list_regulation'));
    }

    public function edit_announcement($idannouncement)
    {
        $username = session('username');
        $role = session('role');
        $announcements = Announcement::findOrFail($idannouncement);
        $file_announcement = DB::table('file_announcements')->where('announcementid', '=', $idannouncement)->get();
        $count_file_announcement = DB::table('file_announcements')->where('announcementid', '=', $idannouncement)->count();
        $list_announcement = Announcement::where('roleby', '=', 'Legal')->get();

        if ($announcements->status == 0) {
            return view('legal.edit_announcement', compact('username', 'role', 'announcements', 'file_announcement', 'count_file_announcement'));
        } else {
            session(['username' => $username, 'role' => $role]);
            session()->flash('status', 'You cannot update regulation because the regulation has been posted');
            // return redirect()->route('regulation_compliance')->with(compact('username', 'role', 'list_regulation'));
            return redirect()->route('announ_legal');
        }

    }

    public function update_announcement(Request $request, $idannouncement)
    {
        $username = session('username');
        $role = session('role');
        $today = Carbon::now()->format('Y-m-d');
        $list_announcement = Announcement::where('roleby', '=', 'Legal')->get();

        $announcements = Announcement::findOrFail($idannouncement);
        // dd($request->title_news_comp);
        $announcements->title = $request->title_announcement_comp;
        $announcements->details = $request->detail_announcement_comp;
        $announcements->uploadby = $username;
        $announcements->roleby = $role;
        $announcements->updated_at = $today;
        $announcements->update();

        $count_file_announcement = DB::table('file_announcements')->where('announcementid', '=', $idannouncement)->count();

        if ($count_file_announcement == 0) {
            $file_announcement = [];
            $maxFileSize = 12 * 1024; //maxium size file upload

            $validator = Validator::make($request->all(), [
                'file_announcement.*' => [
                    'file',
                    'mimes:jpg,jpeg,png,pdf,doc,docx,xls,xlsx,ppt,pptx',
                    'max:' . $maxFileSize,
                ],
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            } else if ($request->hasFile('file_announcement')) {
                foreach ($request->file('file_announcement') as $value) {
                    $filename = $value->getClientOriginalName();
                    $path = $value->storeAs('regulation_file', $filename, 'public');

                    $file_announcement[] = [
                        'filename' => $filename,
                        'pathfile' => $path,
                        'announcementid' => $announcements->id,
                        'created_at' => $today,
                        'updated_at' => $today,
                    ];
                }
                DB::table('file_announcements')->insert($file_announcement);
            }
        }
        session(['username' => $username, 'role' => $role]);
        session()->flash('success', 'Your data has been successfully updated');
        return redirect()->route('announ_legal');
    }

    public function view_regulation($idregulation)
    {
        $username = session('username');
        $role = session('role');
        $regulations = Regulation::findOrFail($idregulation);
        $file_regulation = DB::table('file_regulations')->where('regulationid', '=', $idregulation)->get();
        $count_file_regulation = DB::table('file_regulations')->where('regulationid', '=', $idregulation)->count();

        return view('legal.view_regulation', compact('username', 'role', 'regulations', 'file_regulation', 'count_file_regulation'));
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

        return view('legal.view_announcement', compact('username', 'role', 'announcements', 'file_announcement', 'count_file_announcement'));
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
}
