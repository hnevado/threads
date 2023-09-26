<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/',[PageController::class,'home'])->name('home');

Route::get('/categoria/{category:slug}',[PageController::class,'category'])->name('page.category');
Route::get('/etiqueta/{tag:slug}',[PageController::class,'tag'])->name('page.tag');
Route::get('/hilo/{thread:slug}',[PageController::class,'thread'])->name('page.thread');

require __DIR__.'/auth.php';
