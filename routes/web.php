<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthCotroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthCotroller::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::controller(UserController::class)->group(function () {
    Route::get('userprofile', 'userprofile')->name('userprofile');
    Route::post('userprofile', 'userprofileSave')->name('userprofile.save');

    Route::get('showprofile', 'showprofile')->name('showprofile');
    Route::get('aboutpage', 'aboutpage')->name('aboutpage');
    Route::get('contactpage', 'contactpage')->name('contactpage');

    Route::get('edituserprofile/{id}', 'edituserprofile')->name('edituserprofile');
    Route::put('edituserprofile/{id}', 'updateUserProfile')->name('updateuserprofile');

    Route::get('checkprofile/{id}', 'checkprofile')->name('checkprofile');
});

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    // Route::get('/profile', [UserController::class, 'userprofile'])->name('profile');
});

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');

    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');

    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin/products');

    Route::get('/admin/allprofiles', [ProductController::class, 'allprofiles'])->name('admin/allprofiles');
    Route::get('/admin/editprofiles/{id}', [ProductController::class, 'editprofiles'])->name('admin.editprofiles');
    Route::put('/admin/updateprofiles/{id}', [ProductController::class, 'updateprofiles'])->name('admin.updateprofiles');
    
    Route::get('/admin/assign-view-permissions/{userId}', [AdminController::class, 'showAssignViewPermissionsForm'])->name('admin.showAssignViewPermissionsForm');
    Route::post('/admin/assign-view-permissions/{userId}', [AdminController::class, 'assignViewPermissions'])->name('admin.assignViewPermissions');



    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin/products/create');
    Route::post('/admin/products/store', [ProductController::class, 'store'])->name('admin/products/store');
    Route::get('/admin/products/show/{id}', [ProductController::class, 'show'])->name('admin/products/show');
    Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin/products/edit');
    Route::put('/admin/products/edit/{id}', [ProductController::class, 'update'])->name('admin/products/update');
    Route::delete('/admin/products/destroy/{id}', [ProductController::class, 'destroy'])->name('admin/products/destroy');
});
