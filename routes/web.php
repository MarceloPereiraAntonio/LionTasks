<?php

use App\Http\Controllers\{DashbordController, ProfileController, TaskController};
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [TaskController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/show/{id}', [TaskController::class, 'show'])->name('task.show');

});

Route::get('/', function () {
    return view('welcome');
});
require __DIR__ . '/auth.php';
