<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClubListController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\EventController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/announcement', [AnnouncementController::class, 'allAnnouncement'])->name('announcement');


Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/clublist', [ClubListController::class, 'clublist'])->name('clublist');
Route::get('/club/{clubId}', [ClubController::class, 'clubDisplay'])->name('club');

Route::get('login',[AuthController::class, 'login'])->name('login');
Route::post('login-submit',[AuthController::class, 'loginSubmit'])->name('login-submit');
Route::post('reg-submit',[AuthController::class, 'regSubmit'])->name('reg-submit');
Route::get('logout',[AuthController::class, 'logout'])->name('logout');

Route::get('/search-clubs', [ClubController::class, 'searchClubs'])->name('searchClubs');


Route::middleware(['auth'])->group(function () {
    Route::post('/update-password', [UserController::class, 'updatePassword'])->name('update-password');
});

// For role User
Route::middleware(['checkRole:user'])->group(function () {

    Route::get('/joined-clubs', [UserController::class, 'joinedClubs'])->name('joined-clubs');

    Route::get('/join-req/{clubId}', [ClubController::class, 'joinReq'])->name('join-req');
    Route::get('/leave-req/{clubId}', [ClubController::class, 'leaveReq'])->name('leave-req');

    Route::get('/notification', [NotificationController::class, 'notifications'])->name('notification');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::post('/update-name', [UserController::class, 'updateName'])->name('update-name');
});


// For role Super Admin
Route::middleware(['checkRole:superadmin'])->group(function () {

    Route::get('super-admin/', [HomeController::class, 'superAdminHome'])->name('super-admin/home');

    Route::get('/super-admin/addClub', function () {
        return view('super-admin.addClub');
    })->name('super-admin/addClub');

    Route::get('super-admin/requests', [EventController::class, 'eventsDisplay'])->name('super-admin/requests');

    Route::get('remove-club/{clubId}', [ClubController::class, 'removeClub'])->name('super-admin/remove-club');

    Route::get('super-admin/accept-eve/{id}', [EventController::class, 'acceptEvent'])->name('super-admin/accept-eve');
    Route::get('super-admin/decline-eve/{id}', [EventController::class, 'declineEvent'])->name('super-admin/decline-eve');

    Route::get('/super-admin/settings', function () {
        return view('super-admin.settings');
    })->name('super-admin/settings');

    Route::post('/newClub', [ClubController::class, 'newClub'])->name('newClub');

});


// For role Admin
Route::middleware(['checkRole:admin'])->group(function () {

    Route::get('admin/', [HomeController::class, 'adminHome'])->name('admin/home');

    Route::get('admin/members', [ClubController::class, 'clubMembers'])->name('admin/members');

    Route::get('remove-member/{id}', [ClubController::class, 'removeMember'])->name('admin/remove-member/');
    Route::get('accept-member/{id}', [ClubController::class, 'acceptMember'])->name('admin/accept-member/');
    Route::get('decline-member/{id}', [ClubController::class, 'declineMember'])->name('admin/decline-member/');

    Route::post('admin/settings', [ClubController::class, 'updateInfo'])->name('update.clubInfo');
    Route::post('/update-club-logo', [ClubController::class, 'uploadClubImage'])->name('update-club-logo');

    Route::get('/admin/announcement', function () {
        return view('admin.announcement');
    })->name('admin/announcement');

    Route::get('/admin/event', function () {
        return view('admin.event');
    })->name('admin/event');

    Route::get('/admin/settings', function () {
        return view('admin.settings');
    })->name('admin/settings');

    Route::get('admin/notification', function () {
        return view('admin.notification');
    })->name('admin/notification');

    Route::post('/save-announcement', [AnnouncementController::class, 'saveAnnouncement'])->name('save-announcement');
    Route::post('/save-notification', [NotificationController::class, 'saveNotification'])->name('save-notification');

    Route::post('/event-req', [EventController::class, 'eventReq'])->name('event-req');

    Route::post('/upload-image', [HomeController::class, 'uploadImage'])->name('upload.image');


});





