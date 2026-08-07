<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DdcController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\KategoriBukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SumberBukuController;
use App\Http\Controllers\JenisBukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\LaporanController;


// 1. ROUTE PUBLIK
Route::get('/', function () { return view('beranda'); })->name('beranda');
Route::get('/tentang', function () { return view('tentang'); })->name('tentang');
Route::get('/absen', function () { return view('absen'); })->name('absen');
Route::get('/koleksi', function () { return view('koleksi'); })->name('koleksi');

// Route Kiosk Absen Pengunjung
Route::get('/absen', [AbsenController::class, 'index'])->name('absen.index');
Route::post('/absen', [AbsenController::class, 'store'])->name('absen.store');

// 2. ROUTE AUTH
Route::get('/login', function () { return view('auth.login'); })->name('login');
Route::get('/register', function () { return view('auth.register'); })->name('register');

// 3. ROUTE PANEL ADMIN
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Data Kelas
    Route::resource('kelas', KelasController::class)->names([
        'index' => 'admin.kelas.index',
        'create' => 'admin.kelas.create',
        'store' => 'admin.kelas.store',
        'edit' => 'admin.kelas.edit',
        'update' => 'admin.kelas.update',
        'destroy' => 'admin.kelas.destroy',
    ]);

    // Data Buku
    Route::get('/buku', [BookController::class, 'index'])->name('buku.index');
    Route::get('/buku/create', [BookController::class, 'create'])->name('buku.create');
    Route::post('/buku', [BookController::class, 'store'])->name('buku.store');
    Route::get('/buku/{id}/edit', [BookController::class, 'edit'])->name('buku.edit');
    Route::put('/buku/{id}', [BookController::class, 'update'])->name('buku.update');
    Route::delete('/buku/{id}', [BookController::class, 'destroy'])->name('buku.destroy');


  // Kategori Buku
    Route::get('/kategori-buku', [KategoriBukuController::class, 'index'])->name('kategori_buku.index');
    Route::get('/kategori-buku/create', [KategoriBukuController::class, 'create'])->name('kategori_buku.create');
    Route::post('/kategori-buku', [KategoriBukuController::class, 'store'])->name('kategori_buku.store');
    Route::get('/kategori-buku/{id}/edit', [KategoriBukuController::class, 'edit'])->name('kategori_buku.edit');
    Route::put('/kategori-buku/{id}', [KategoriBukuController::class, 'update'])->name('kategori_buku.update');
    Route::delete('/kategori-buku/{id}', [KategoriBukuController::class, 'destroy'])->name('kategori_buku.destroy');

    // Data Anggota
    Route::resource('anggota', AnggotaController::class)->names('anggota');

    // DDC
    Route::get('/ddc', [DdcController::class, 'index'])->name('ddc.index');
    Route::get('/ddc/create', [DdcController::class, 'create'])->name('ddc.create');
    Route::post('/ddc', [DdcController::class, 'store'])->name('ddc.store');

    // Sumber Buku
    Route::get('/sumber-buku', [SumberBukuController::class, 'index'])->name('sumber_buku.index');
    Route::get('/sumber-buku/create', [SumberBukuController::class, 'create'])->name('sumber_buku.create');
    Route::post('/sumber-buku', [SumberBukuController::class, 'store'])->name('sumber_buku.store');
    Route::get('/sumber-buku/{id}/edit', [SumberBukuController::class, 'edit'])->name('sumber_buku.edit');
    Route::put('/sumber-buku/{id}', [SumberBukuController::class, 'update'])->name('sumber_buku.update');
    Route::delete('/sumber-buku/{id}', [SumberBukuController::class, 'destroy'])->name('sumber_buku.destroy');

    // Jenis Buku
    Route::get('/jenis-buku', [JenisBukuController::class, 'index'])->name('jenis_buku.index');
    Route::get('/jenis-buku/create', [JenisBukuController::class, 'create'])->name('jenis_buku.create');
    Route::post('/jenis-buku', [JenisBukuController::class, 'store'])->name('jenis_buku.store');
    Route::get('/jenis-buku/{id}/edit', [JenisBukuController::class, 'edit'])->name('jenis_buku.edit');
    Route::put('/jenis-buku/{id}', [JenisBukuController::class, 'update'])->name('jenis_buku.update');
    Route::delete('/jenis-buku/{id}', [JenisBukuController::class, 'destroy'])->name('jenis_buku.destroy');

    // Transaksi

    // peminjaman
    Route::get('/transaksi/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    Route::post('/transaksi/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
    Route::delete('/transaksi/peminjaman/{id}', [PeminjamanController::class, 'destroy'])->name('peminjaman.destroy');

    // pengembalian
    Route::get('/transaksi/pengembalian', [PengembalianController::class, 'index'])->name('pengembalian.index');
    Route::post('/transaksi/pengembalian/{id}', [PengembalianController::class, 'verify'])->name('pengembalian.verify');

    // Laporan

    // Laporan (BARU)
   Route::get('/laporan/pengunjung', [LaporanController::class, 'pengunjung'])->name('laporan.pengunjung');
   Route::get('/laporan/kas', [LaporanController::class, 'kas'])->name('laporan.kas');
   Route::get('/laporan/buku', [LaporanController::class, 'buku'])->name('laporan.buku');
    Route::get('/laporan/anggota', [LaporanController::class, 'anggota'])->name('laporan.anggota');





});
