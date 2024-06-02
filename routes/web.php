<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Auth\LoginAdminController;
use App\Http\Controllers\Admin\Auth\AuthenticateUsers;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/pelatihan', [PelatihanController::class, 'pelatihan'])->name('pelatihan');
Route::get('/seminar', [SeminarController::class, 'seminar'])->name('seminar');

Route::get('/detailpelatihan/{id}', [PelatihanController::class, 'detailpelatihan'])->name('detailpelatihan');

Route::get('/detailseminar', function () {
    return view('detailseminar');
});

Route::group(['prefix' => '', 'as' => '', 'middleware' => ['auth']], function () {
    Route::get('/pembayaran', [AnggotaController::class, 'pembayaran'])->name('pembayaran');
    Route::get('editprofil/{id}', [UserController::class, 'edit'])->name('editprofil');
    Route::post('editprofil/{id}', [UserController::class, 'update'])->name('updateprofil');
});

Route::get('/login', function () {
    if (Auth::check()) {
        return redirect('/');
    } else {
        return view('login');
    }
})->name('login');

Route::get('/register', function () {
    if (Auth::check()) {
        return redirect('/');
    } else {
        return view('register');
    }
});

Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/register', function () {
    return view('register');
});

Route::get('register/verify/{verify_key}', [RegisterController::class, 'verify'])->name('verify');

Route::post('/actionregister', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('/pelatihan', [PelatihanController::class, 'pelatihan'])->name('pelatihan');
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

