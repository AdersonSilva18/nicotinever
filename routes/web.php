<?php

use App\Http\Controllers\FeedController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::redirect('/', '/login');

Route::get('/termo', function () {
    return view('termo');
})->name('termo');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/profile/{user_id}', [ProfileController::class, 'index'])->name('profile.index');

    Route::redirect('/', '/feed');

    Route::resource('feed', FeedController::class)->only(['index', 'store', 'destroy']);

    Route::get('erro', function (){return view('error.error404');})->name('erro');

    Route::post('/saveicon', [ProfileController::class, 'attIcon'])->name('attIcon');
});

require __DIR__.'/auth.php';
