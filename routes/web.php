<?php

use App\Http\Controllers\ProfileController;
use App\Models\Pin;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Auth/Login', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'isGuest' => Route::has('guest'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
    ]);
//    return Inertia::render('Auth/Login');
//    $pins = \App\Models\Pin::all();
//
//    dd($pins[0]);
});

//! Name the route else Ziggy won't  recognize the route.
Route::get('guest', function (){
    return Inertia::render('Guest',[
        'pins'=> Pin::all(),
    ]);
})->name('guest');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
