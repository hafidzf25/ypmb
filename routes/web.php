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
use App\Http\Controllers\DetailPelatihanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\AdminController;
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
Route::get('/detailseminar/{id}', [SeminarController::class, 'detailseminar'])->name('detailseminar');

Route::group(['prefix' => '', 'as' => '', 'middleware' => ['auth']], function () {
    Route::get('/pembayaran/{id}', [DetailPelatihanController::class, 'pembayaran'])->name('pembayaran');
    Route::get('editprofil/{id}', [UserController::class, 'edit'])->name('editprofil');
    Route::post('editprofil/{id}', [UserController::class, 'update'])->name('updateprofil');
    Route::post('/pembayaran', [PembayaranController::class, 'store'])->name('pembayaran.store');
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
    Route::post('/', [LoginAdminController::class, 'login_proses']);
    Route::get('/logout', [LoginAdminController::class, 'logout'])->name('logout');
});

// Rute yang memerlukan autentikasi admin
Route::group(['prefix' => 'admin', 'middleware' => ['adminMiddle'], 'as' => 'admin.'], function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    
    Route::get('/create', [AdminController::class, 'create'])->name('create');
    Route::post('/store', [AdminController::class, 'store'])->name('store');
    
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::delete('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    Route::get('/user/toggle/{id}', [UserController::class, 'toggleStatus'])->name('user.toggle');

    Route::get('/seminar', [SeminarController::class, 'index'])->name('seminar');
    Route::get('/seminar/create', [SeminarController::class, 'create'])->name('seminar.create');
    Route::post('/seminar/store', [SeminarController::class, 'store'])->name('seminar.store');
    Route::get('/seminar/edit/{id_seminar}', [SeminarController::class, 'edit'])->name('seminar.edit');
    Route::put('/seminar/update/{id_seminar}', [SeminarController::class, 'update'])->name('seminar.update');
    Route::delete('/seminar/delete/{id_seminar}', [SeminarController::class, 'delete'])->name('seminar.delete');
    Route::get('/seminar/toggle/{id_seminar}', [SeminarController::class, 'toggleStatus'])->name('seminar.toggle');

    Route::get('/pelatihan', [PelatihanController::class, 'index'])->name('pelatihan');
    Route::get('/pelatihan/create', [PelatihanController::class, 'create'])->name('pelatihan.create');
    Route::post('/pelatihan/store', [PelatihanController::class, 'store'])->name('pelatihan.store');
    Route::get('/pelatihan/edit/{id_pelatihan}', [PelatihanController::class, 'edit'])->name('pelatihan.edit');
    Route::put('/pelatihan/update/{id_pelatihan}', [PelatihanController::class, 'update'])->name('pelatihan.update');
    Route::delete('/pelatihan/delete/{id_pelatihan}', [PelatihanController::class, 'delete'])->name('pelatihan.delete');
    Route::get('/pelatihan/toggle/{id_pelatihan}', [PelatihanController::class, 'toggleStatus'])->name('pelatihan.toggle');
});

