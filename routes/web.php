<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Main\AgamaController;
use App\Http\Controllers\Main\HomeController;
use App\Http\Controllers\Main\KelasController;
use App\Http\Controllers\Main\KelompokController;
use App\Http\Controllers\Main\Laporan\HarianController;
use App\Http\Controllers\Main\Laporan\LaporanTugas;
use App\Http\Controllers\Main\Laporan\LaporanUas;
use App\Http\Controllers\Main\Laporan\LaporanUts;
use App\Http\Controllers\Main\MapelController;
use App\Http\Controllers\Main\NilaiHarianController;
use App\Http\Controllers\Main\Raport\TengahController;
use App\Http\Controllers\Main\SemesterController;
use App\Http\Controllers\Main\SiswaController;
use App\Http\Controllers\Main\TahunController;
use App\Http\Controllers\Main\TugasController;
use App\Http\Controllers\Main\UasController;
use App\Http\Controllers\Main\UserController;
use App\Http\Controllers\Main\UtsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', '/auth/login');
Route::prefix('auth')->middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'processLogin']);
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'processRegister']);
});
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


Route::prefix('main')->middleware('auth')->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');

    // user
    Route::get('user', [UserController::class, 'index'])->name('user');
    Route::get('user/tambah', [UserController::class, 'tambah'])->name('tambah');
    Route::post('user/simpan', [UserController::class, 'simpan'])->name('user.simpan');
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::get('user/lihat/{id}', [UserController::class, 'lihat'])->name('user.lihat');
    Route::post('user/aksi_ubah/{id}', [UserController::class, 'aksi_ubah'])->name('user.aksi_ubah');
    Route::get('user/hapus/{id}', [UserController::class, 'hapus'])->name('user.hapus');

    // semester
    Route::resource('semester', SemesterController::class);
    // tahun
    Route::resource('tahun', TahunController::class);
    // agama
    Route::resource('agama', AgamaController::class);
    // kelas
    Route::resource('kelas', KelasController::class);
    // kelompok
    Route::resource('kelompok', KelompokController::class);
    // mapel
    Route::resource('mapel', MapelController::class);
    // siswa
    Route::resource('siswa', SiswaController::class);
    // nilai_harian
    Route::resource('nilai_harian', NilaiHarianController::class);
    // tugas
    Route::resource('tugas', TugasController::class);
    // uas
    Route::resource('uas', UasController::class);
    // uts
    Route::resource('uts', UtsController::class);


    // Laporan Harian
    Route::get('laporan/harian', [HarianController::class, 'index'])->name('harian');
    Route::get('laporan/harian/cetak', [HarianController::class, 'cetakPerTahunAkademik'])->name('laporan.harian.cetak');
    // Laporan Tugas
    Route::get('laporan/tugas', [LaporanTugas::class, 'index'])->name('tugas');
    Route::get('laporan/tugas/cetak', [LaporanTugas::class, 'cetakPerTahunAkademik'])->name('laporan.tugas.cetak');
    // Laporan uas
    Route::get('laporan/uas', [LaporanUas::class, 'index'])->name('uas');
    Route::get('laporan/uas/cetak', [LaporanUas::class, 'cetakPerTahunAkademik'])->name('laporan.uas.cetak');
    // Laporan uts
    Route::get('laporan/uts', [LaporanUts::class, 'index'])->name('uts');
    Route::get('laporan/uts/cetak', [LaporanUts::class, 'cetakPerTahunAkademik'])->name('laporan.uts.cetak');


    // Raport Tengah
    Route::get('raport/tengah', [TengahController::class, 'index'])->name('tengah');
    Route::get('raport/tengah/cetak/{siswa_id}', [TengahController::class, 'cetakRaport'])->name('raport.tengah.cetak');
});



    // gejala
    // Route::get('gejala', [GejalaController::class, 'index'])->name('gejala');
    // Route::get('gejala/tambah', [GejalaController::class, 'tambah'])->name('tambah');
    // Route::post('gejala/simpan', [GejalaController::class, 'simpan'])->name('gejala.simpan');
    // Route::get('gejala/edit/{id}', [GejalaController::class, 'edit'])->name('gejala.edit');
    // Route::get('gejala/lihat/{id}', [GejalaController::class, 'lihat'])->name('gejala.lihat');
    // Route::post('gejala/aksi_ubah/{id}', [GejalaController::class, 'aksi_ubah'])->name('gejala.aksi_ubah');
    // Route::get('gejala/hapus/{id}', [GejalaController::class, 'hapus'])->name('gejala.hapus');