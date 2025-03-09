<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogistikController;
use App\Http\Controllers\SettingsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::resource('items', ItemController::class);
});

Route::get('/qr-scanner', [LogistikController::class, 'index'])->name('qr-scanner');

Route::get('/settings', [SettingsController::class, 'index'])->name('settings');

require __DIR__.'/auth.php';
