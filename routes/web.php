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

Route::get('/biodata/edit/{id}', [BiodataController::class, 'tampilEdit']);

Route::post('/biodata/simpanUpdate/{id}', [BiodataController::class, 'perbaruiData']);





Route::post('/gambar/simpanGambar', [GambarController::class, 'uploadGambar']);
