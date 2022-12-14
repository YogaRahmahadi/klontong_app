<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\LabaController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\StockController;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\Staff\StockController as StaffStockController;
use App\Http\Controllers\Staff\TransaksiController as StaffTransaksiController;
use Illuminate\Support\Facades\Artisan;


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
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::resource('home', AdminController::class);
        Route::resource('users', UserController::class);
        Route::resource('stock', StockController::class);
        Route::resource('transaksi', TransaksiController::class);
        Route::resource('laba', LabaController::class);
        Route::get('/laporan', [LabaController::class, 'cetak_laporan'])->name('cetak_laporan');
    });
});

// Route::middleware('auth')->group(function () {
//     Route::prefix('staff')->group(function () {
//         Route::resource('home', StaffController::class);
//         Route::resource('stock', StaffStockController::class);
//         Route::resource('transaksi', StaffTransaksiController::class);
//     });
// });

Route::get('/keluar', function () {
    Auth::logout();

    request()->session()->invalidate();

    request()->session()->regenerateToken();

    return redirect('/');
});

Route::controller(StaffController::class)->group(function () {
    Route::get('staff', 'index');
});

Route::get('/config', function () {
    Artisan::call(
        'migrate:fresh',
        [
            '--force' => true
        ]
    );
    Artisan::call(
        'db:seed',
        [
            '--force' => true
        ]
    );
});
