<?php

use App\Http\Controllers\BlogEventController;
use App\Http\Controllers\ContactInformationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('about', function () {
    return view('about');
});


Route::get('contact', function () {
    return view('contact');
});


Route::get('blog', function () {
    return view('blog');
});


Route::get('services', function () {
    return view('services');
});


Route::get('case-study', function () {
    return view('case-study');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


















// ADMIN ROUTE
Route::middleware(['auth', 'isSuperAdmin'])->group(function () {
    Route::get('admin/dashboard', [SuperAdminController::class, 'admin_dashboard'])->name('admin_dashboard');

    Route::get('admin/users', [SuperAdminController::class, 'users'])->name('users');

    Route::post('admin/create-sub-admin', [SuperAdminController::class, 'create_sub_admin'])->name('create_sub_admin');

    Route::get('admin/delete-sub-admin/{id}', [SuperAdminController::class, 'delete_sub_admin'])->name('delete_sub_admin');

    Route::get('admin/ban-sub-admin/{id}', [SuperAdminController::class, 'ban_sub_admin'])->name('ban_sub_admin');

    Route::get('admin/unban-sub-admin/{id}', [SuperAdminController::class, 'unban_sub_admin'])->name('unban_sub_admin');


    // profile setting
    Route::get('admin/profile-setting', [SuperAdminController::class, 'profile_setting'])->name('profile_setting');

    // In routes/web.php
    Route::post('admin/profile-update', [SuperAdminController::class, 'profile_update'])->name('profile_update');

    // In routes/web.php
    Route::post('admin/password-update', [SuperAdminController::class, 'password_update'])->name('password_update');





    // testimonials
    Route::get('admin/add-testmonial', [TestimonialController::class, 'add_testimonial'])->name('add_testimonial');

    Route::post('create-testimonial', [TestimonialController::class, 'create_testimonial'])->name('create_testimonial');

    Route::get('admin/testimonials', [TestimonialController::class, 'testimonials'])->name('testimonials');

    Route::get('admin/delete-testimonial/{id}', [TestimonialController::class, 'delete_testimonial'])->name('delete_testimonial');

    Route::get('admin/edit-testimonial/{id}', [TestimonialController::class, 'edit_testimonial'])->name('edit_testimonial');

    Route::post('admin/update-testimonial/{id}', [TestimonialController::class, 'update_testimonial'])->name('update_testimonial');





    // contact information
    Route::get('contact-information', [ContactInformationController::class, 'contact_information'])->name('contact_information');

    Route::post('store-contact-information', [ContactInformationController::class, 'store_contact_information'])->name('store_contact_information');


    // inquiry
    Route::get('inquiry', [SuperAdminController::class, 'inquiry'])->name('inquiry');

    Route::get('delete-inq/{id}', [SuperAdminController::class, 'delete_inq'])->name('delete_inq');

    Route::get('reply-inq/{id}', [SuperAdminController::class, 'reply_inq'])->name('reply_inq');

    Route::get('inquiry.read/{id}', [SuperAdminController::class, 'view_inq'])->name('view_inq');



    // training service
    Route::get('admin/add-service', [ServiceController::class, 'add_service'])->name('add_service');

    Route::post('admin/create-service', [ServiceController::class, 'create_service'])->name('create_service');

    Route::get('admin/services', [ServiceController::class, 'service'])->name('service');

    Route::get('admin/delete-service/{id}', [ServiceController::class, 'delete_service'])->name('delete_service');

    Route::get('admin/edit-service/{id}', [ServiceController::class, 'edit_service'])->name('edit_service');

    Route::post('admin/update-service/{id}', [ServiceController::class, 'update_service'])->name('update_service');





    // News and events
    Route::get('admin/add-blog', [BlogEventController::class, 'add_blog'])->name('add_blog');

    Route::post('admin/create-blog', [BlogEventController::class, 'create_blog'])->name('create_blog');

    Route::get('admin/blogs', [BlogEventController::class, 'blogs'])->name('blogs');

    Route::get('admin/delete-blog/{id}', [BlogEventController::class, 'delete_blog'])->name('delete_blog');

    Route::get('admin/edit-blog/{id}', [BlogEventController::class, 'edit_blog'])->name('edit_blog');

    Route::post('admin/update-blog/{id}', [BlogEventController::class, 'update_blog'])->name('update_blog');

    Route::get('/blog/details/{id}', [BlogEventController::class, 'blowShow'])->name('blog.show');



    // Team Members
    Route::get('admin/add-team', [TeamController::class, 'add_team'])->name('add_team');

    Route::post('admin/create-team', [TeamController::class, 'create_team'])->name('create_team');

    Route::get('admin/teams', [TeamController::class, 'teams'])->name('teams');

    Route::get('admin/delete-team/{id}', [TeamController::class, 'delete_team'])->name('delete_team');

    Route::get('admin/edit-team/{id}', [TeamController::class, 'edit_team'])->name('edit_team');

    Route::post('admin/update-team/{id}', [TeamController::class, 'update_team'])->name('update_team');
});
