<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MerbenController;
use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/loginproses', [AuthController::class, 'loginproses']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/beranda', [RouteController::class, 'beranda'])->name('beranda');
Route::get('/beranda/{role_obat}', [RouteController::class, 'berandasortir']);
Route::get('/dataproduk', [RouteController::class, 'dataproduk']);
Route::get('/datakategori', [RouteController::class, 'datakategori']);
Route::get('/tambahdata', [RouteController::class, 'tambahdata']);
Route::get('/tambahkategori', [RouteController::class, 'tambahkategori']);
Route::post('/tambahobatproses', [MerbenController::class, 'StoreDataObat']);
Route::post('/tambahkategoriproses', [MerbenController::class, 'StoreKategoriObat']);
Route::get('/detail/{nama_obat}', [RouteController::class, 'detail']);
Route::post('/transaksiproses/{nama_obat}', [MerbenController::class, 'penjualan']);
Route::get('/dashboard',[RouteController::class,'dashboardadmin']);
Route::delete('/delete/{nama_obat}',[RouteController::class,'destroy']);
Route::get('/edit/{nama_obat}',[RouteController::class,'edit']);
Route::post('/editdataproses/{nama_obat}',[MerbenController::class,'EditDataObat']);
