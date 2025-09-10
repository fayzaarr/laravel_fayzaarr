<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RumahSakitController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

// Dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return redirect()->route('rumah-sakit.index'); 
    })->name('home');

    Route::resource('rumah-sakit', RumahSakitController::class);
    Route::resource('pasien', PasienController::class);
});
