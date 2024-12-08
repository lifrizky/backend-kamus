<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KamusController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function(){
    Route::get('/registrasi', [AuthController::class, 'tampilRegis'])->name('registrasi.tampil');
    Route::post('/registrasi/submit', [AuthController::class, 'submitRegis'])->name('registrasi.submit');
    
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');
});


Route::middleware('auth')->group(function () {
    // Route::get('/', function () {return view('welcome');});
    Route::get('/', [KamusController::class, 'dashboard'])->name('kamus.dashboard');
    Route::get('/profil', [KamusController::class, 'profil'])->name('kamus.profil');
    Route::get('/kamus/tampil', [KamusController::class, 'tampil'])->name('kamus.tampil');
    Route::get('/kamus/tambah', [KamusController::class, 'tambah'])->name('kamus.tambah');
    Route::post('/kamus/submit', [KamusController::class, 'submit'])->name('kamus.submit');
    Route::get('/kamus/edit/{id}', [KamusController::class, 'edit'])->name('kamus.edit');
    Route::post('/kamus/update/{id}', [KamusController::class, 'update'])->name('kamus.update');
    Route::post('/kamus/delete/{id}', [KamusController::class, 'delete'])->name('kamus.delete');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


