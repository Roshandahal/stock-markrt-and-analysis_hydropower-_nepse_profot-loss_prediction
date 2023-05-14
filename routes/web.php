<?php

use App\Http\Controllers\Admincontroller;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

// for making route of the login form 
Route::middleware('admin:admin')->group(function(){
    Route::get('admin/login',[Admincontroller::class,'LoginForm']);
    Route::post('admin/login',[Admincontroller::class,'store'])->name('admin.login');
});
// for making route of the admin dashboard 
Route::middleware(['auth:sanctum,admin',config('jetstream.auth_session'),
    'verified'])->group(function () {
    Route::get('/admin/home', function () {
        return view('admin.home');
    })->name('admin.home')->middleware('auth:admin');
});
// for user 
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),
    'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// up all for the home authentication 

// for routing home
Route::get('/admin/home', [\App\Http\Controllers\adminhomecontroller::class, ('admin')])->middleware('auth:admin');

Route::get('/admin/updatehomepage', [\App\Http\Controllers\adminhomecontroller::class, ('updateadmin')])->middleware('auth:admin');

Route::get('admin/logout', [\App\Http\Controllers\Admincontroller::class, ('destroy')])->middleware('auth:admin');

// user home 
Route::get('/', [\App\Http\Controllers\homecontroller::class, ('home')]);

// getting,updating,editing and destroing the blog of the page 
Route::get('/blog', [\App\Http\Controllers\blogcontroller::class, ('blog')]);
Route::get('/admin/updateblog', [\App\Http\Controllers\blogcontroller::class, ('updateblog')])->middleware('auth:admin');
Route::post('/admin/updateblog', [\App\Http\Controllers\blogcontroller::class, ('store')])->middleware('auth:admin');
Route::get('delete-blog/{id}', [\App\Http\Controllers\blogcontroller::class, ('destroy')]);
Route::get('edit-blog/{id}', [\App\Http\Controllers\blogcontroller::class, ('editblog')]);
Route::put('update-blog/{id}', [\App\Http\Controllers\blogcontroller::class, ('update')]);



