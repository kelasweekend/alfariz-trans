<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('armada/{id}', [App\Http\Controllers\HomeController::class, 'detail'])->name('index.detail');
Route::get('lacak', [App\Http\Controllers\HomeController::class, 'lacak'])->name('lacak');
Route::post('lacak', [App\Http\Controllers\HomeController::class, 'lacakStore'])->name('lacak.store');
Route::get('sewa', [App\Http\Controllers\HomeController::class, 'sewa'])->name('sewa');
Route::post('sewa', [App\Http\Controllers\HomeController::class, 'store'])->name('sewa.store');


Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('', [App\Http\Controllers\Admin\IndexController::class, 'index'])->name('admin');
    Route::resource('armada', App\Http\Controllers\Admin\ArmadaController::class, [
        'as' => 'admin',
        'only' => ['index', 'edit', 'store', 'destroy', 'create', 'update']
    ]);

    Route::prefix('order')->group(function () {
        Route::get('', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('admin.orderan.index');
        Route::get('{inv}', [App\Http\Controllers\Admin\OrderController::class, 'show'])->name('admin.orderan.show');
        Route::get('{inv}/invoice', [App\Http\Controllers\Admin\OrderController::class, 'invoice'])->name('admin.orderan.invoice');
        Route::post('{inv}', [App\Http\Controllers\Admin\OrderController::class, 'update'])->name('admin.orderan.update');
        Route::delete('{inv}', [App\Http\Controllers\Admin\OrderController::class, 'destroy'])->name('admin.orderan.destroy');
    });

    Route::get('jadwal', [App\Http\Controllers\Admin\JadwalController::class, 'index'])->name('admin.jadwal');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
