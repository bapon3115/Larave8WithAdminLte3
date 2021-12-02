<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login', function () {
    return view('admin.login');
});
Route::get('/login2', function () {
    return view('admin.login2');
});
Route::get('/register', function () {
    return view('admin.register');
});
Route::get('/register2', function () {
    return view('admin.register2');
});
Route::get('/500', function () {
    return view('admin.errors.500');
});
Route::get('/404', function () {
    return view('admin.errors.404');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
})->name('dashboard');
Route::get('/dashboard2', function () {
    return view('admin.dashboard.index2');
})->name('dashboard2');
Route::get('/dashboard3', function () {
    return view('admin.dashboard.index3');
})->name('dashboard3');
//Route::get('/admin', function () {
//    return view('admin.index');
//});
Route::get('/', function () {
    return view('welcome');
});


