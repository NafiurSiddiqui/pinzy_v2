<?php

use App\Http\Controllers\ProfileController;
use App\Models\Pin;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Auth/Login', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);

//    $pins = \App\Models\Pin::all();
//
//    dd($pins[0]);
});

//! Name the route else Ziggy won't  recognize the route.
Route::get('guest', function () {
    return Inertia::render('Guest', [
//        'pins' => Pin::all(), //this only queries for pins not the relationship
        'pins' => Pin::with('user')->get(), //This also solves n + 1 issue. The name 'user' is a method we have inside the 'Pin' model. Still, perform limitation on this query, what if you had millions user? use pagination or something.
        //you can also make a guard by disabling lazyLoading. go ahead and uncomment, the preventLazyLoading() method inside AppServiceProvider.
    ]);
})->name('guest');

//Route::get('/dashboard', function () {
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('/mapview',function (){
//    return Inertia::render('MapView');
//})->middleware(['auth'])->name('mapview')->name("mapview");

Route::get('/mapview', function () {
    return Inertia::render('MapView');
})->name("mapview");


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
