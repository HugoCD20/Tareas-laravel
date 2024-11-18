<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskCategoryController;
use App\Http\Controllers\TaskController;
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

Route::get('/registro', function () {
    return view('registro');
})->middleware(['auth', 'verified'])->name('registro');

Route::get('/verTarea', function () {
    return view('verTarea');
})->middleware(['auth', 'verified'])->name('verTarea');

Route::resource('category', CategoriesController::class)
    ->only(['index', 'store', 'create'])->middleware(['auth', 'verified']);

Route::resource('tarea', TaskController::class)
    ->only(['index', 'store', 'create', 'show', 'update'])->middleware(['auth', 'verified']);

Route::resource('taskcategory', TaskCategoryController::class)
    ->only(['index', 'create', 'show'])->middleware(['auth', 'verified']);

Route::get('/taskcategory/store/{id}/{category_id}', [TaskCategoryController::class, 'store'])
    ->name('taskcategory.store.get')
    ->middleware(['auth', 'verified']);


require __DIR__ . '/auth.php';
