<?php

use App\Http\Controllers\{DashbordController, ProfileController};
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', DashbordController::class)->middleware(['auth', 'verified'])->name('dashboard');
});

Route::get('/', function () {
    return view('welcome');
});
require __DIR__ . '/auth.php';
