<?php

use App\Http\Controllers\{DashbordController, ProfileController, TaskController};
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [TaskController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/create', [TaskController::class, 'create'])->name('task.create');
    Route::post('/store', [TaskController::class, 'store'])->name('task.store');
    Route::get('/show/{id}', [TaskController::class, 'show'])->name('task.show');
    Route::delete('/destroy/{id}', [TaskController::class, 'destroy'])->name('task.destroy');
    Route::get('/edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
    Route::put('/edit/{id}', [TaskController::class, 'update'])->name('task.update');


});

Route::get('/', function () {
    return view('welcome');
});
require __DIR__ . '/auth.php';
