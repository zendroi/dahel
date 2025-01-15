<?php
use App\Http\Controllers\PesananControler;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FestivalController;
use App\Http\Controllers\HoneymoonPackageController;
use App\Http\Controllers\SchoolTourController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/gunung-bromo', function () {
    return view('destinations.bromo');
})->name('destinations.bromo');


Route::get('/pesanan/create', [PesananControler::class, 'create'])->name('pesanan.create');

Route::get('/pesanan/index', [PesananControler::class, 'index'])->name('pesanan.index');

Route::post('/pesanan', [PesananControler::class, 'store'])->name('pesanan.store');

Route::get('/booking', [PesananControler::class, 'index'])->name('booking.index');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/rekomendasi', function () {
    return view('rekomendasi');
})->name('rekomendasi');


Route::get('/event', [EventController::class, 'index'])->name('event');


Route::get('/festival', [FestivalController::class, 'index']);


Route::get('/honeymoon_package', [HoneymoonPackageController::class, 'index'])->name('honeymoon_package');



Route::get('/packages', [SchoolTourController::class, 'school_tour'])->name('packages');

