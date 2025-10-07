<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaloController;
use App\Http\Controllers\NamaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', [HaloController::class, 'index']);
Route::get('/halo/{nama}', [HaloController::class, 'show']);
Route::get('/nama', [NamaController::class, 'index']);
Route::get('/halo-random', [HaloController::class, 'random']);
