<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\HomeController;
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

Route::get('/detailseminar', function() {
    return view('detailseminar');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/pembayaran', function() {
    return view('pembayaran');
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

Route::group([
    'prefix'=>config('admin.prefix'),
    'namespace'=>'App\\Http\\Controllers',
],function () {

    Route::get('/',[Admin\Auth\LoginAdminController::class, 'loginForm']);
    Route::get('/login',[Admin\Auth\LoginAdminController::class, 'loginForm'])->name('admin.login');
    Route::post('/login',[Admin\Auth\LoginAdminController::class, 'signin']);
    Route::get('/dashboard',[Admin\HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('/tables',[Admin\HomeController::class, 'tables'])->name('admin.tables');
});
