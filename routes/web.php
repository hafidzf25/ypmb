<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Auth\AuthenticateUsers;
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

Route::get('/pelatihan', [PelatihanController::class, 'pelatihan'])->name('pelatihan');
Route::get('/', [IndexController::class, 'index'])->name('index');

Route::group([
    'prefix'=>config('admin.prefix'),
    'namespace'=>'App\\Http\\Controllers',
],function () {

    Route::get('/sign-in',[Admin\Auth\LoginAdminController::class, 'formLogin'])->name('admin.sign-in');
    Route::post('/sign-in',[Admin\Auth\LoginAdminController::class, 'signin']);

    Route::middleware(['auth:admin'])->group(function () {
        Route::post('logout',[Admin\Auth\LoginAdminController::class, 'logout'])->name('admin.logout');
        Route::view('/','admin.dashboard')->name('admin.dashboard');
    });
});