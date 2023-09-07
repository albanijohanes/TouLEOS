<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PorterController;
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
Route::group([], function (){
    Route::get('/', [LoginController::class, 'start'])->name('start');
});

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

// Routing Authentication for every role
Route::middleware('auth')->group(function(){
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    //Sebagai Customer
    Route::middleware('role:customer')->group(function(){
        Route::get('user/index', [CustomerController::class, 'index'])->name('index');
        Route::get('user/profile', [CustomerController::class, 'profiluser'])->name('profiluser');
        Route::get('user/edit', [CustomerController::class, 'edituser'])->name('edituser');
    });

    //Sebagai Porter
    Route::middleware('role:porter', 'approval')->group(function(){
        Route::get('porter/index', [PorterController::class, 'porter'])->name('porter');
        Route::get('porter/profile' , [PorterController::class, 'userporter'])->name('userporter');
    });

    //Sebagai Merchant
    Route::middleware('role:merchant', 'approval')->group(function(){
        Route::get('merchant/index', [MerchantController::class, 'berandaMerchant'])->name('beranda_merchant');
        Route::get('merchant/dagangan', [MerchantController::class, 'editDagang'])->name('dagangan_merchant');
        Route::get('merchant/profile', [MerchantController::class, 'ProfileMerchant'])->name('profile_merchant');
        Route::get('merchant/tambahdagangan', [MerchantController::class, 'tambahDagang'])->name('tambah_dagang');
        Route::get('merchant/editprofile', [MerchantController::class, 'EditprofileMerchant'])->name('editmerchant');
    });

    //Sebagai Admin
    Route::middleware('role:admin')->group(function(){
        Route::get('admin/index', [AdminController::class, 'indexUser'])->name('berandaAdmin');
        Route::get('admin/merchant/aktif', [AdminController::class, 'indexMerchantAktif'])->name('merchant_aktif');
        Route::get('admin/merchant/permohonan', [AdminController::class, 'AdminMerchantPermohonan'])->name('merchant_permohonan');
        Route::post('admin/merchant/permohonan/approve/{id}', [AdminController::class, 'approveMerchant'])->name('appMerchant');
        Route::post('admin/merchant/permohonan/reject/{id}', [AdminController::class, 'rejectMerchant'])->name('rejMerchant');
        Route::get('admin/porter/aktif', [AdminController::class, 'indexPorterAktif'])->name('porter_aktif');
        Route::get('admin/porter/permohonan', [AdminController::class, 'AdminPorterPermohonan'])->name('porter_permohonan');
        Route::post('admin/porter/permohonan/approve/{id}', [AdminController::class, 'approvePorter'])->name('appPorter');
        Route::post('admin/porter/permohonan/reject/{id}', [AdminController::class, 'rejectPorter'])->name('rejPorter');
        Route::get('admin/view/{type}/{filename}', [AdminController::class, 'viewImg'])->name('viewImg');
    });
});
