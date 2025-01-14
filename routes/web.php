<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FestivalController;
=======
use App\Http\Controllers\BookingController;

>>>>>>> a22b3bb3a28b2ea42b413ecb6dd28d532cb6cc05

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/gunung-bromo', function () {
    return view('destinations.bromo');
})->name('destinations.bromo');

Route::get('/booking', [BookingController::class, 'index'])->name('booking');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/rekomendasi', [RekomendasiController::class, 'index']);

Route::get('/event', [EventController::class, 'index'])->name('event.index');

Route::get('/festival', [FestivalController::class, 'index']);
