<?php

use App\Http\Controllers\BerobatController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('berobat/tambah/{nik}',[BerobatController::class,'tambah'])->name('berobat-tambah');
Route::resource('berobat',BerobatController::class);
Route::resource('dokter',DokterController::class);
Route::resource('obat',ObatController::class);
Route::resource('pasien',PasienController::class);