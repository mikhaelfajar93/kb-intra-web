<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComplianceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HrdController;
use App\Http\Controllers\LegalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

//Auth Controller
Route::get('/', function () {
    return view('auth.login');
});

Route::post('/', [AuthController::class, 'authenticating']);
Route::get('/register', [AuthController::class, 'register_view']);
Route::post('/register', [AuthController::class, 'register_user']);

Route::group(['middleware' => ['web']], function () {
    // Rute-rute yang memerlukan autentikasi
    Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
    Route::get('/home', [DashboardController::class, 'dashboard_view'])->name('home')->middleware('auth');
    Route::get('/announ_dash', [DashboardController::class, 'dashboard_view_announcement'])->name('announcement')->middleware('auth');
    Route::get('/dash-view-regulation/{id}', [DashboardController::class, 'view_regulation'])->name('dash.view_regulation')->middleware('auth');
    Route::get('/dash-download-file-regulation/{id}', [DashboardController::class, 'download_file_regulation'])->name('dash.download_file_regulation')->middleware('auth');
    Route::get('/dash-view-announcement/{id}', [DashboardController::class, 'view_announcement'])->name('dash.view_announcement')->middleware('auth');
    Route::get('/dash-download-file-announcement/{id}', [DashboardController::class, 'download_file_announcement'])->name('dash.download_file_announcement')->middleware('auth');
    Route::get('/dashannoun-view-announcement/{id}', [DashboardController::class, 'view_announcement_dash'])->name('dashannoun.view_announcement')->middleware('auth');

//Compliance Controller
    Route::get('/announ_compliance', [ComplianceController::class, 'page_dashboard_announcement'])->name('announ_compliance')->middleware('auth');
    Route::get('/regulation_compliance', [ComplianceController::class, 'page_dashboard_regulation'])->name('regulation_compliance')->middleware('auth');
    Route::get('/comp-input-announcement', [ComplianceController::class, 'page_input_announcement'])->middleware('auth');
    Route::get('/comp-input-regulation', [ComplianceController::class, 'page_input_regulation'])->middleware('auth');
    Route::post('/comp-add-regulation', [ComplianceController::class, 'input_regulation'])->middleware('auth');
    Route::post('/comp-add-announcement', [ComplianceController::class, 'input_announcement'])->middleware('auth');
    Route::put('/comp-post-unpost-regulation/{idregulation}', [ComplianceController::class, 'post_unpost_regulation'])->name('comp.updatestatus_regulation')->middleware('auth');
    Route::put('/comp-post-unpost-announcement/{idannouncement}', [ComplianceController::class, 'post_unpost_announ'])->name('comp.updatestatus_announcement')->middleware('auth');
    Route::delete('/comp-delete-regulation/{id}', [ComplianceController::class, 'delete_regulation'])->name('comp.delete_regulation')->middleware('auth');
    Route::delete('/comp-delete-announcement/{id}', [ComplianceController::class, 'delete_announcement'])->name('comp.delete_announcement')->middleware('auth');
    Route::get('/comp-edit-regulation/{id}', [ComplianceController::class, 'edit_regulation'])->name('comp.edit_regulations')->middleware('auth');
    Route::put('/comp-update-regulation/{id}', [ComplianceController::class, 'update_regulation'])->name('comp.update_regulations')->middleware('auth');
    Route::get('/comp-edit-announcement/{id}', [ComplianceController::class, 'edit_announcement'])->name('comp.edit_announcements')->middleware('auth');
    Route::put('/comp-update-announcement/{id}', [ComplianceController::class, 'update_announcement'])->name('comp.update_announcements')->middleware('auth');
    Route::get('/comp-view-regulation/{id}', [ComplianceController::class, 'view_regulation'])->name('comp.view_regulation')->middleware('auth');
    Route::get('/comp-download-file-regulation/{id}', [ComplianceController::class, 'download_file_regulation'])->name('comp.download_file_regulation')->middleware('auth');
    Route::get('/comp-view-announcement/{id}', [ComplianceController::class, 'view_announcement'])->name('comp.view_announcement')->middleware('auth');
    Route::get('/comp-download-file-announcement/{id}', [ComplianceController::class, 'download_file_announcement'])->name('comp.download_file_announcement')->middleware('auth');

//Legal Controller
    Route::get('/announ_legal', [LegalController::class, 'page_dashboard_announcement'])->name('announ_legal')->middleware('auth');
    Route::get('/regulation_legal', [LegalController::class, 'page_dashboard_regulation'])->name('regulation_legal')->middleware('auth');
    Route::get('/legal-input-announcement', [LegalController::class, 'page_input_announcement'])->middleware('auth');
    Route::get('/legal-input-regulation', [LegalController::class, 'page_input_regulation'])->middleware('auth');
    Route::post('/legal-add-regulation', [LegalController::class, 'input_regulation'])->middleware('auth');
    Route::post('/legal-add-announcement', [LegalController::class, 'input_announcement'])->middleware('auth');
    Route::put('/legal-post-unpost-regulation/{idregulation}', [LegalController::class, 'post_unpost_regulation'])->name('legal.updatestatus_regulation')->middleware('auth');
    Route::put('/legal-post-unpost-announcement/{idannouncement}', [LegalController::class, 'post_unpost_announ'])->name('legal.updatestatus_announcement')->middleware('auth');
    Route::delete('/legal-delete-regulation/{id}', [LegalController::class, 'delete_regulation'])->name('legal.delete_regulation')->middleware('auth');
    Route::delete('/legal-delete-announcement/{id}', [LegalController::class, 'delete_announcement'])->name('legal.delete_announcement')->middleware('auth');
    Route::get('/legal-edit-regulation/{id}', [LegalController::class, 'edit_regulation'])->name('legal.edit_regulations')->middleware('auth');
    Route::put('/legal-update-regulation/{id}', [LegalController::class, 'update_regulation'])->name('legal.update_regulations')->middleware('auth');
    Route::get('/legal-edit-announcement/{id}', [LegalController::class, 'edit_announcement'])->name('legal.edit_announcements')->middleware('auth');
    Route::put('/legal-update-announcement/{id}', [LegalController::class, 'update_announcement'])->name('legal.update_announcements')->middleware('auth');
    Route::get('/legal-view-regulation/{id}', [LegalController::class, 'view_regulation'])->name('legal.view_regulation')->middleware('auth');
    Route::get('/legal-download-file-regulation/{id}', [LegalController::class, 'download_file_regulation'])->name('legal.download_file_regulation')->middleware('auth');

//HRD Controller
    Route::get('/announ_hrd', [HrdController::class, 'page_dashboard_announcement'])->name('announ_hrd')->middleware('auth');
    Route::get('/regulation_hrd', [HrdController::class, 'page_dashboard_regulation'])->name('regulation_hrd')->middleware('auth');
    Route::get('/hrd-input-announcement', [HrdController::class, 'page_input_announcement'])->middleware('auth');
    Route::get('/hrd-input-regulation', [HrdController::class, 'page_input_regulation'])->middleware('auth');
    Route::post('/hrd-add-regulation', [HrdController::class, 'input_regulation'])->middleware('auth');
    Route::post('/hrd-add-announcement', [HrdController::class, 'input_announcement'])->middleware('auth');
    Route::put('/hrd-post-unpost-regulation/{idregulation}', [HrdController::class, 'post_unpost_regulation'])->name('hrd.updatestatus_regulation')->middleware('auth');
    Route::put('/hrd-post-unpost-announcement/{idannouncement}', [HrdController::class, 'post_unpost_announ'])->name('hrd.updatestatus_announcement')->middleware('auth');
    Route::delete('/hrd-delete-regulation/{id}', [HrdController::class, 'delete_regulation'])->name('hrd.delete_regulation')->middleware('auth');
    Route::delete('/hrd-delete-announcement/{id}', [HrdController::class, 'delete_announcement'])->name('hrd.delete_announcement')->middleware('auth');
    Route::get('/hrd-edit-regulation/{id}', [HrdController::class, 'edit_regulation'])->name('hrd.edit_regulations')->middleware('auth');
    Route::put('/hrd-update-regulation/{id}', [HrdController::class, 'update_regulation'])->name('hrd.update_regulations')->middleware('auth');
    Route::get('/hrd-edit-announcement/{id}', [HrdController::class, 'edit_announcement'])->name('hrd.edit_announcements')->middleware('auth');
    Route::put('/hrd-update-announcement/{id}', [HrdController::class, 'update_announcement'])->name('hrd.update_announcements')->middleware('auth');
    Route::get('/hrd-view-regulation/{id}', [HrdController::class, 'view_regulation'])->name('hrd.view_regulation')->middleware('auth');
    Route::get('/hrd-download-file-regulation/{id}', [HrdController::class, 'download_file_regulation'])->name('hrd.download_file_regulation')->middleware('auth');
});

// Route::get('/announ_dash', function () {
//     return view('layout.announ_dashboard');
// });

Route::get('/regulation_dash', function () {
    return view('regulation_dashboard');
});
