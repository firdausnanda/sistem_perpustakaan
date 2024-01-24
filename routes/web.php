<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
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
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    // Dashboard
    Route::get('', [DashboardController::class, 'index'])->name('index');

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
