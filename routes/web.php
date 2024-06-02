<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Auth\LoginAdminController;
use App\Http\Controllers\Admin\Auth\AuthenticateUsers;
use App\Http\Controllers\SeminarController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/pelatihan', function() {
    return view('pelatihan');
});

Route::get('/editprofil', function() {
    return view('editprofil');
});

Route::get('/seminar', function() {
    return view('seminar');
});

Route::get('/detailpelatihan', function() {
    return view('detailpelatihan');
});

Route::get('/login', function() {
    return view('login');
});

Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('/', [HomeController::class, 'index'])->name('/')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/register', function(){
    return view('register');
});

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');
Route::get('register/verify/{verify_key}', [RegisterController::class, 'verify'])->name('verify');

Route::get('/pelatihan', [PelatihanController::class, 'pelatihan'])->name('pelatihan');
Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/seminar', [SeminarController::class, 'seminar'])->name('seminar');
Route::get('/', [IndexController::class, 'index'])->name('index');


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [LoginAdminController::class, 'index'])->name('login');
    Route::get('/login', [LoginAdminController::class, 'index'])->name('login');
    Route::post('/login', [LoginAdminController::class, 'login_proses']);
    Route::get('/logout', [LoginAdminController::class, 'logout'])->name('logout');

});

// Rute yang memerlukan autentikasi admin
Route::group(['prefix' => 'admin', 'middleware' => ['adminMiddle'], 'as' => 'admin.'], function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});

