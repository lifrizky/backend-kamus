<?php

use App\Http\Controllers\Api\KamusController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/kamus', [KamusController::class, 'index'])->name('mahasiswa.index');
