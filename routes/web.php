<?php

use Illuminate\Support\Facades\Route;

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

<<<<<<< HEAD
Route::get('/login', function() {
    return view('login');
=======
Route::get('/register', function(){
    return view('register');
>>>>>>> 0b67fa27bded0e2eeb07b3ddb193a9e3f7ff06a9
});