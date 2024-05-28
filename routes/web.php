<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\GambarController;
use App\Models\Biodata;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', [BiodataController::class, 'index']); // tambah route ini
Route::get('/biodata/tambahBiodata', [BiodataController::class, 'tambah']);
Route::post('/biodata/tambahBiodata', [BiodataController::class, 'simpanBiodata']);





Route::post('/gambar/simpanGambar', [GambarController::class, 'uploadGambar']);
