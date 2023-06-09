<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\DivisiController;

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
    return view('admin.dashboard');
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
//prefix atau grouping
Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
Route::get('/staff', [StaffController::class, 'index']);


Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/create', [PegawaiController::class, 'create']);
Route::post ('/pegawai/store', [PegawaiController::class, 'store']);
Route::post ('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);


Route::get('/jabatan', [JabatanController::class, 'index']);


Route::get('/divisi', [DivisiController::class, 'index']);
Route::get('/divisi/create', [DivisiController::class, 'create']);
Route::post('/divisi/store', [DivisiController::class, 'store']);
Route::get('/divisi/edit/{id}', [DivisiController::class, 'edit']);
Route::post('/divisi/update/{id}', [DivisiController::class, 'update']);

