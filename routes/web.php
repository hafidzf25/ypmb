<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Auth\AuthenticateUsers;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SeminarController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/pelatihan', function () {
    return view('pelatihan');
});


Route::group(['prefix' => '', 'as' => '', 'middleware' => ['auth']], function () {
    Route::get('/pembayaran', [AnggotaController::class, 'pembayaran'])->name('pembayaran');
    Route::get('/editprofil', [LoginController::class, 'edit_profil'])->name('editprofil');
    Route::get('/seminar', [SeminarController::class, 'seminar'])->name('seminar');
});

Route::get('/detailpelatihan', function () {
    return view('detailpelatihan');
});

Route::get('/detailseminar', function () {
    return view('detailseminar');
});

Route::get('/login', function () {
    if (Auth::check()) {
        return redirect('/');
    }else{
        return view('login');
    }
})->name('login');


Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('/', [HomeController::class, 'index'])->name('/')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/register', function () {
    return view('register');
});

Route::post('/actionregister', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('/pelatihan', [PelatihanController::class, 'pelatihan'])->name('pelatihan');
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/', [IndexController::class, 'index'])->name('index');

Route::group([
    'prefix' => config('admin.prefix'),
    'namespace' => 'App\\Http\\Controllers',
], function () {

    Route::get('/', [Admin\Auth\LoginAdminController::class, 'loginForm']);
    Route::get('/login', [Admin\Auth\LoginAdminController::class, 'loginForm'])->name('admin.login');
    Route::post('/login', [Admin\Auth\LoginAdminController::class, 'signin']);
    Route::get('/dashboard', [Admin\HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('/tables', [Admin\HomeController::class, 'tables'])->name('admin.tables');
});
