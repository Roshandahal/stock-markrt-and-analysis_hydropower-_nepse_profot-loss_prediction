<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\adminhomecontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\blogcontroller;

// Admin Login Routes
Route::middleware('admin:admin')->group(function () {
    Route::get('admin/login', [Admincontroller::class, 'LoginForm']);
    Route::post('admin/login', [Admincontroller::class, 'store'])->name('admin.login');
});

// Admin Dashboard Route
Route::middleware(['auth:sanctum,admin', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/admin/home', [adminhomecontroller::class, 'admin'])->name('admin.home')->middleware('auth:admin');
});

// Update Admin Home
Route::get('/admin/updatehomepage', [adminhomecontroller::class, 'updateadmin'])->middleware('auth:admin');

// Admin Logout
Route::get('admin/logout', [Admincontroller::class, 'destroy'])->middleware('auth:admin');

// User Dashboard
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Home Page
Route::get('/', [homecontroller::class, 'home']);

// Blog Routes
Route::get('/blog', [blogcontroller::class, 'blog']);
Route::get('/admin/updateblog', [blogcontroller::class, 'updateblog'])->middleware('auth:admin');
Route::post('/admin/updateblog', [blogcontroller::class, 'store'])->middleware('auth:admin');
Route::get('/delete-blog/{id}', [blogcontroller::class, 'destroy']);
Route::get('/edit-blog/{id}', [blogcontroller::class, 'editblog']);
Route::put('/update-blog/{id}', [blogcontroller::class, 'update']);
