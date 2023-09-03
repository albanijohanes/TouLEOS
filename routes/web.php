<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use Mockery\Generator\StringManipulation\Pass\Pass;

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

// Routing landing page
Route::get('/', 'PageController@start')->name('start');

// Routing for login
Route::group([], function () {
    Route::get('login/merchant', [LoginController::class, 'loginmerchant'])->name('loginmerchant');
    Route::get('login/porter', [LoginController::class, 'loginporter'])->name('loginporter');
    Route::get('login/user', [LoginController::class, 'loginuser'])->name('logincustomer');
    Route::get('admin', [LoginController::class, 'loginadmin'])->name('admin');
    Route::post('login', [LoginController::class, 'loginPost'])->name('login.post');
});

// Routing for register
Route::group([], function () {
    Route::get('register/merchant', [RegisterController::class, 'registermerchant'])->name('registermerchant');
    Route::get('register/porter', [RegisterController::class, 'registerporter'])->name('registerporter');
    Route::get('register/user', [RegisterController::class, 'registeruser'])->name('registeruser');
    Route::post('register', [RegisterController::class, 'registerPost'])->name('register.post');
});

//Routing User
Route::group([], function(){
    Route::get('index', [PageController::class, 'index'])->name('index');
    Route::get('profiluser', [PageController::class, 'profiluser'])->name('profiluser');
    Route::get('edituser', [PageController::class, 'edituser'])->name('edituser');
});

// Routing Authentication for every role
Route::middleware('auth')->group(function(){
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    //Sebagai Customer
    Route::middleware('role:customer')->group(function(){
        Route::get('index', [PageController::class, 'index'])->name('index');
        Route::get('services', [PageController::class, 'services'])->name('services');
    });

    //Sebagai Porter
    Route::middleware('role:porter')->group(function(){
        Route::get('porter', [PageController::class, 'porter'])->name('porter');
        Route::get('porter/profile' , [PageController::class, 'userporter'])->name('userporter');
    });

    //Sebagai Merchant
    Route::middleware('role:merchant')->group(function(){
        Route::get('merchant', [PageController::class, 'berandaMerchant'])->name('beranda_merchant');
        Route::get('merchant/dagangan', [PageController::class, 'editDagang'])->name('dagangan_merchant');
        Route::get('merchant/profile', [PageController::class, 'ProfileMerchant'])->name('profile_merchant');
        Route::get('merchant/tambahdagangan', [PageController::class, 'tambahDagang'])->name('tambah_dagang');
        Route::get('merchant/editprofile', [PageController::class, 'EditprofileMerchant'])->name('editmerchant');
    });

    //Sebagai Admin
    Route::middleware('role:admin')->group(function(){
        Route::get('admin/beranda', [PageController::class, 'AdminBeranda'])->name('berandaAdmin');
        Route::get('admin/merchant/aktif', [PageController::class, 'AdminMerchantAktif'])->name('merchant_aktif');
        Route::get('admin/merchant/permohonan', [PageController::class, 'AdminMerchantPermohonan'])->name('merchant_permohonan');
        Route::get('admin/porter/aktif', [PageController::class, 'AdminPorterAktif'])->name('porter_aktif');
        Route::get('admin/porter/permohonan', [PageController::class, 'AdminPorterPermohonan'])->name('porter_permohonan');
    });
});
