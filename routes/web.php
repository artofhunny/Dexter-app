<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\launchpadController;
use App\Http\Controllers\appController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Middleware\AuthSessionMiddleware;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Auth;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\HotOffersController;
use App\Http\Controllers\TopGameController;
use App\Http\Controllers\TopUtilityController;
use App\Http\Controllers\HotPickController;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\FollowController;




Route::get('/', [appController::class, 'index'])->name('home');


//Register section
Route::get('/register' ,function(){
    return view('auth.register');
})->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Login Section
Route::get('/login', function(){
    return view('auth.login');
})->name("login");
Route::post('/login', [AuthController::class, 'login'])->name(' ');

Route::get('/listing' ,function(){
    return view('appUpload.app-listing');
});



Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email');
Route::get('/reset-password/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');



Route::get('/appview/{id}', [appController::class,'appView'])->name('app.view');


//blog show 
Route::get('/blogs', [BlogController::class, 'viewBlogs'])->name('blogs.view');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs.show');





//admin-check
Route::middleware(['adminCheck'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('wa.admin');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/admin/user/edit/{id}', [AdminController::class, 'editUser'])->name('admin.user.edit');
    Route::post('/admin/user/update/{id}', [AdminController::class, 'updateUser'])->name('admin.user.update');
    Route::get('/admin/products', [AdminController::class, 'products'])->name('admin.products');
    Route::get('/admin/application' ,[AdminController::class , 'applications'])->name('admin.applications');
    
    Route::get('/admin/setting', [adminController::class, 'settings'])->name('admin.settings');
    Route::get('/admin/user' ,[AdminController::class , 'userMain'])->name('admin.usermains');
    Route::get('/admin/homepagemenu' ,[AdminController::class , 'homepagemenu'])->name('admin.homepagemenu');



    // Hot Offer

    // Display the hot offers upload form
    Route::get('/hot-offers', [HotOffersController::class, 'create'])->name('hot-offers.create');

    // Update
    Route::post('/update-app-order', [HotOfferController::class, 'updateAppOrder'])->name('updateAppOrder');


    // Handle form submission
    Route::post('/save-selected-apps', [HotOffersController::class, 'store'])->name('saveSelectedApps');

    Route::get('/admin/user/editapp/{id}', [AdminController::class, 'editProduct'])->name('admin.app.edit');
    Route::post('/admin/user/updateapp/{id}', [AdminController::class, 'updateApp'])->name('admin.app.update');

    // Blogs 
    // Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');
    
    Route::get('/blog/create', [BlogController::class, 'createBlog'])->name('create.blog');
    Route::post('/blog/post', [BlogController::class, 'storeBlog'])->name('admin.blog.store');
    Route::post('/admin/blog/upload-image', [BlogController::class, 'uploadImage'])->name('admin.blog.uploadImage');


    // Toop Games
    Route::get('/admin/top-Games', [TopGameController::class, 'create'])->name('topGame.create');
    Route::post('/admin/top-Games', [TopGameController::class, 'store'])->name('topGame.store');


    // ... your existing admin routes ...
    Route::get('/top-utilities', [TopUtilityController::class, 'create'])->name('top-utilities.create');
    Route::post('/top-utilities', [TopUtilityController::class, 'store'])->name('top-utilities.store');

    // .....Hot Picks
    Route::get('/admin/hot-picks/create', [HotPickController::class, 'create'])->name('hot-picks.create');
    Route::post('/admin/hot-picks', [HotPickController::class, 'store'])->name('hot-picks.store');



        // Launchpad
    Route::get('/launchpad', function () {
            return view('appUpload.appUpload');
        })->name('launchpad');
    
        // Launchpad application can be listed from here
    Route::post('/launchpad', [LaunchpadController::class, 'launch'])->name('launchpad');
        
});






Route::middleware([AuthSessionMiddleware::class])->group(function () {


    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Dashboard
    Route::get('/dashboard/{id}', [appController::class, 'dashboard'])->name('dashboard');

    // follow:
    
    Route::post('/follow/{app}', [appController::class, 'toggleFollow'])->name('toggle.follow');

    //Profile section & Update
    Route::get('/profile/{id}', [UserController::class, 'profile'])->name('profile');
    Route::post('/profile/update/{id}', [UserController::class, 'updateProfile'])->name('profile.update');

    //contact form 
    Route::post('/contact', [ContactController::class, 'storeContact'])->name('contact.store');

    Route::get('/requests', [ContactController::class, 'showRequests'])->name('requests.show');

    Route::post('/submit-review/{id}', [appController::class, 'submitReview'])->name('submit.review');


});
