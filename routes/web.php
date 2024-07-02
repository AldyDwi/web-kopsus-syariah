<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KaryawanController;

// layanan
Route::get('/pembiayaan-murabahah', function () {
    return view('layanan.layanan1');
});
Route::get('/simpanan-amanah', function () {
    return view('layanan.layanan2');
});
Route::get('/simpanan-umroh-dan-haji', function () {
    return view('layanan.layanan3');
});
Route::get('/simpanan-wadiah', function () {
    return view('layanan.layanan4');
});

// profil
Route::get('/profil', [PegawaiController::class, 'tampil'])->name('profil');

// home
Route::get('/', [HomeController::class, 'index'])->name('home');

// news
Route::get('/news', [NewsController::class, 'tampil'])->name('news');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

// login dan logout
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// autentikasi
Route::middleware(['auth'])->group(function () {
    // jabatan
    Route::get('/admin/jabatan', [JabatanController::class, 'index'])->name('jabatan.admin');
    Route::get('/jabatan/create', [JabatanController::class, 'create'])->name('jabatan.create');
    Route::post('/jabatan/store', [JabatanController::class, 'store'])->name('jabatan.store');
    Route::get('/jabatan/edit/{id}', [JabatanController::class, 'edit'])->name('jabatan.edit');
    Route::post('/jabatan/{id}', [JabatanController::class, 'update'])->name('jabatan.update');
    Route::delete('/jabatan/{id}', [JabatanController::class, 'destroy'])->name('jabatan.destroy');
    Route::resource('jabatan', JabatanController::class);

    // karyawan
    Route::get('/admin/pegawai', [PegawaiController::class, 'index'])->name('karyawan.pegawai');
    Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('karyawan.create');
    Route::post('/pegawai', [PegawaiController::class, 'store'])->name('karyawan.store');
    Route::get('/tambah-jabatan', [PegawaiController::class, 'getJabatan'])->name('jabatan');
    Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('karyawan.edit');
    Route::post('/pegawai/{id}', [PegawaiController::class, 'update'])->name('karyawan.update');
    Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('karyawan.destroy');

    // news
    Route::get('/admin/berita', [NewsController::class, 'index'])->name('berita.index');
    Route::get('/berita/create', [NewsController::class, 'create'])->name('berita.create');
    Route::post('/berita', [NewsController::class, 'store'])->name('news.store');
    Route::get('/berita/edit/{id}', [NewsController::class, 'edit'])->name('berita.edit');
    Route::post('/berita/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/berita/{id}', [NewsController::class, 'destroy'])->name('berita.destroy');

    // admin
    Route::get('/admin/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::post('/admin/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
});