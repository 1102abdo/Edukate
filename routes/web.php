<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;



Route::name('front.')->controller(FrontController::class)->group(function () {
    // =========================Home page==========
    Route::get('/', 'index')->name('index');

    // =========================about page==========
    Route::get('/about', 'about')->name('about');

    // =========================contact page==========
    Route::get('/contact', 'contact')->name('contact');

    // =========================courses page==========
    Route::get('/courses', 'courses')->name('courses');

    // =========================team page==========
    Route::get('/team', 'team')->name('team');

    // =========================testmonials page==========
    Route::get('/testmonials', 'testmonials')->name('testmonials');

    require __DIR__ . '/auth.php';
});
// =========================testmonials page==========
// Route::view('login', 'front.auth.login');
// Route::view('register', 'front.auth.register');


// Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth', 'verified'])->name('dashboard');
    
    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

