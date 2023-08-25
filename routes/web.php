<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('landingpage');
});

Route::group([], function () {
    Route::post('login', [LoginController::class, 'loginPost'])->name('login.post');
});
Route::group([], function () {
    Route::get('register', [RegisterController::class, 'register'])->name('register');
    Route::post('register', [RegisterController::class, 'registerPost'])->name('register.post');
});

Route::middleware('auth')->group(function(){
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    //Sebagai Customer
    Route::middleware('role:Customer')->group(function(){
        Route::get('index', [PageController::class, 'index'])->name('index');
        Route::get('services', [PageController::class, 'services'])->name('services');
    });

    //Sebagai Porter
    Route::middleware('role:Porter')->group(function(){
        Route::get('porter', [PageController::class, 'porter'])->name('porter');
        Route::get('user' , [PageController::class, 'userporter'])->name('userporter');
    });
});
