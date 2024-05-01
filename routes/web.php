<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\IndexController;
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
    return view('index');
});

Route::get('/pelatihan', function() {
    return view('pelatihan');
});


Route::get('/detailpelatihan', function() {
    return view('detailpelatihan');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});

Route::get('/pelatihan', [PelatihanController::class, 'pelatihan'])->name('pelatihan');
Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/loginadmin', function () {
    return view('admin.sign-in');
});

Route::get('/registeradmin', function () {
    return view('admin.sign-up');
});