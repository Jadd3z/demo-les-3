<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/diner', function () {
    return view('diner');
});

Route::get('/diner', function () {
    return view('diner');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('contact', function () {
    return View('contact');
});

//Route::get('/about/{name}', function ($name) {
////    $name = 'Jade hr';
//    return view('about', compact(var_name: 'name'));
//});

Route::get('about/{name}', [\App\Http\Controllers\AboutController::class, 'index'])
    ->name('about');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
