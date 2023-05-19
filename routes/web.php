<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DashboardController;

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
    return view('welcome');
});

Route::get('/salam', function () {
    return "Selamat pagi";
});

Route::get('/ucapan', function () {
    return view('ucapan');
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/daftar_nilai', function () {
    return view('daftar_nilai');
});

// mengarahkan routing ke controller
Route::get('/data_siswa', [SiswaController::class, 'dataSiswa']);

// mengarahkan ke controller dashboardController
Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');

