<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\HomeController::class, 'index']);

Route::get('/layanan',[App\Http\Controllers\LayananController::class,'index']);
Route::get('/layanan/create',[App\Http\Controllers\LayananController::class,'create']);

Route::get('/transaksi',[App\Http\Controllers\TransaksiController::class,'index']);
Route::get('/transaksi/create',[App\Http\Controllers\TransaksiController::class,'create']);

