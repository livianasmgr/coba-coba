<?php

use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ProfilController::class)->group(function () {
    Route::get('/profil', 'index');

});

Route::controller(KeranjangController::class)->group(function () {
    Route::get('/keranjang', 'index');
});

Route::controller(FavoriteController::class)->group(function () {
    Route::get('/favorite', 'index');
});
