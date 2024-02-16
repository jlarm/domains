<?php

use App\Http\Controllers\Domain\CreateController;
use App\Http\Controllers\Domain\EditController;
use App\Http\Controllers\Domain\IndexController;
use App\Http\Controllers\Domain\UpdateController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', IndexController::class)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/domains/create', function () { return view('domain.create'); })->name('domains.create');
    Route::post('/domains/create', CreateController::class)->name('domains.store');
    Route::get('/domains/{domain}/edit', EditController::class)->name('domains.edit');
    Route::patch('/domains/{domain}', UpdateController::class)->name('domains.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
