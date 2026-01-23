<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\HomeController::class, 'index']);

Route::get('/layanan',[App\Http\Controllers\LayananController::class,'index']);
Route::get('/layanan/create',[App\Http\Controllers\LayananController::class,'create']);
Route::post('/layanan/store',[App\Http\Controllers\LayananController::class,'store'])->name('layanan.store');
Route::get('/layanan/destroy/{id}',[App\Http\Controllers\LayananController::class,'destroy']);
Route::get('/layanan/edit/{id}',[App\Http\Controllers\LayananController::class,'edit']);
Route::post('/layanan/update/{id}',[App\Http\Controllers\LayananController::class,'update'])->name('layanan.update');


// Route::get('/layanan/edit',[App\Http\Controllers\LayananController::class,'edit']);

Route::get('/transaksi',[App\Http\Controllers\TransaksiController::class,'index']);
Route::get('/transaksi/create',[App\Http\Controllers\TransaksiController::class,'create']);
Route::post('/transaksi/store',[App\Http\Controllers\TransaksiController::class,'store'])->name('transaksi.store');
Route::get('/transaksi/edit/{id}',[App\Http\Controllers\TransaksiController::class,'edit']);
Route::post('/transaksi/update/{id}',[App\Http\Controllers\TransaksiController::class,'update']);
Route::get('/transaksi/destroy/{id}',[App\Http\Controllers\TransaksiController::class,'destroy']);
Route::get('/transaksi/struk/{id}',[App\Http\Controllers\TransaksiController::class,'struk']);


// Route::get('/transaksi/edit',[App\Http\Controllers\TransaksiController::class,'edit']);

