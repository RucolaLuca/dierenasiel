<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeedingScheduleController;
use App\Http\Controllers\AdopterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/animals', [AnimalController::class, 'index']);
Route::get('/animals/show', [AnimalController::class, 'show'])->name('animals.show');
Route::get('/animals/create', [AnimalController::class, 'create'])->name('animals.create');
Route::post('/animals/store', [AnimalController::class, 'store'])->name('animals.store');
Route::get('/animals/edit/{id}', [AnimalController::class, 'edit'])->name('animals.edit');
Route::post('/animals/update/{id}', [AnimalController::class, 'update'])->name('animals.update');
Route::get('/animals/delete/{id}', [AnimalController::class, 'delete'])->name('animals.delete');
Route::get('/animals/search', [AnimalController::class, 'search'])->name('animals.search');

Route::get('/feedingschedules', [FeedingScheduleController::class, 'index'])->name('feedingschedules.index');
Route::get('/feedingschedules/show/{id}', [FeedingScheduleController::class, 'show'])->name('feedingschedules.show');
Route::get('/feedingschedules/create', [FeedingScheduleController::class, 'create'])->name('feedingschedules.create');
Route::post('/feedingschedules/store', [FeedingScheduleController::class, 'store'])->name('feedingschedules.store');
Route::get('/feedingschedules/edit/{id}', [FeedingScheduleController::class, 'edit'])->name('feedingschedules.edit');
Route::post('/feedingschedules/update/{id}', [FeedingScheduleController::class, 'update'])->name('feedingschedules.update');
Route::get('/feedingschedules/delete/{id}', [FeedingScheduleController::class, 'delete'])->name('feedingschedules.delete');

Route::get('/adopters', [AdopterController::class, 'index'])->name('adopters.index');
Route::get('/adopters/show/{id}', [AdopterController::class, 'show'])->name('adopters.show');
Route::get('/adopters/create', [AdopterController::class, 'create'])->name('adopters.create');
Route::post('/adopters/store', [AdopterController::class, 'store'])->name('adopters.store');

require __DIR__.'/auth.php';
