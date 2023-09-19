<?php

use Illuminate\Support\Facades\Route; // Mengimpor kelas Route dari Laravel
use App\Http\Controllers\IndexController; // Mengimpor kelas IndexController dari namespace yang sesuai
use App\Http\Controllers\BioController; // Mengimpor kelas BioController dari namespace yang sesuai

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini adalah tempat Anda dapat mendaftarkan rute-rute web untuk aplikasi Anda.
| Rute-rute ini akan dimuat oleh RouteServiceProvider dan semuanya akan ditugaskan
| ke grup middleware "web". Buat sesuatu yang hebat!
|
*/

Route::get('/dashboard',  [IndexController::class, 'dashboard']); // Rute untuk menampilkan halaman dashboard dengan menggunakan IndexController dan metode dashboard()
Route::get('/daftar',  [BioController::class, 'daftar']); // Rute untuk menampilkan halaman pendaftaran dengan menggunakan BioController dan metode daftar()
Route::post('/submit',  [BioController::class, 'submit']); // Rute untuk mengirimkan data dari formulir pendaftaran dengan menggunakan BioController dan metode submit()
