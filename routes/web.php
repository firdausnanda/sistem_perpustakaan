<?php

use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EbookController;
use App\Http\Controllers\IpController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\EbookController as UserEbookController;
use App\Http\Controllers\User\JurnalController as UserJurnalController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [LandingController::class, 'index'])->name('landing.index');

// Ebook
Route::group(['prefix' => 'ebook', 'as' => 'ebook.'], function () {
    Route::get('', [UserEbookController::class, 'index'])->name('index');
    Route::get('/cari', [UserEbookController::class, 'cari'])->name('cari');
    Route::get('/download', [UserEbookController::class, 'download'])->name('download');
    Route::get('/{id}', [UserEbookController::class, 'detail'])->name('detail');
});

Auth::routes([
    'register' => false, 
    'reset' => false, 
    'verify' => false, 
]);

// Admin Pages
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['role:admin']], function () {

    // Dashboard
    Route::get('', [DashboardController::class, 'index'])->name('index');
    
    // Ebook
    Route::group(['prefix' => 'ebook', 'as' => 'ebook.'], function () {
        Route::get('', [EbookController::class, 'index'])->name('index');
        Route::post('', [EbookController::class, 'store'])->name('store');
        Route::post('/update', [EbookController::class, 'update'])->name('update');
        Route::get('/create', [EbookController::class, 'create'])->name('create');
        Route::get('/{id}', [EbookController::class, 'edit'])->name('edit');
    });

    // Jurnal
    Route::group(['prefix' => 'jurnal', 'as' => 'jurnal.'], function () {
        Route::get('', [JurnalController::class, 'index'])->name('index');
        Route::post('', [JurnalController::class, 'store'])->name('store');
        Route::post('/update', [JurnalController::class, 'update'])->name('update');
        Route::get('/create', [JurnalController::class, 'create'])->name('create');
        Route::get('/{id}', [JurnalController::class, 'edit'])->name('edit');
    });
    
    // Kategori
    Route::group(['prefix' => 'kategori', 'as' => 'kategori.'], function () {
        Route::get('', [KategoriController::class, 'index'])->name('index');
        Route::post('', [KategoriController::class, 'store'])->name('store');
        Route::put('', [KategoriController::class, 'update'])->name('update');
    });
    
    // Menu
    Route::group(['prefix' => 'menu', 'as' => 'menu.'], function () {
        Route::get('', [MenuController::class, 'index'])->name('index');
        Route::post('', [MenuController::class, 'store'])->name('store');
        Route::post('/update', [MenuController::class, 'update'])->name('update');
    });

    // IP
    Route::group(['prefix' => 'ip', 'as' => 'ip.'], function () {
        Route::get('', [IpController::class, 'index'])->name('index');
        Route::post('', [IpController::class, 'store'])->name('store');
        Route::put('', [IpController::class, 'update'])->name('update');
    });

    // Activity Log
    Route::group(['prefix' => 'activity-log', 'as' => 'activity-log.'], function () {
        Route::get('', [ActivityLogController::class, 'index'])->name('index');
    });

});

// Mahasiswa / Dosen Pages
Route::group(['prefix' => 'user', 'as' => 'user.'], function () {

    // Dashboard
    Route::get('', [UserDashboardController::class, 'index'])->name('index');

    // Ebook
    Route::group(['prefix' => 'ebook', 'as' => 'ebook.'], function () {
        Route::get('', [UserEbookController::class, 'index'])->name('index');
        Route::get('/cari', [UserEbookController::class, 'cari'])->name('cari');
        Route::get('/download', [UserEbookController::class, 'download'])->name('download');
        Route::get('/{id}', [UserEbookController::class, 'detail'])->name('detail');
    });

    // Jurnal
    Route::group(['prefix' => 'jurnal', 'as' => 'jurnal.'], function () {
        Route::get('', [UserJurnalController::class, 'index'])->name('index');
        Route::get('/download', [UserJurnalController::class, 'download'])->name('download');
        Route::get('/{id}', [UserJurnalController::class, 'detail'])->name('detail');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
