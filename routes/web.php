<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EbookController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\LandingController;
use App\Models\Jurnal;
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

Auth::routes();

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

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
