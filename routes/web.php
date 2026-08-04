<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DdcController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\KategoriBukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SumberBukuController;
use App\Http\Controllers\JenisBukuController;


// 1. ROUTE PUBLIK
Route::get('/', function () { return view('beranda'); })->name('beranda');
Route::get('/tentang', function () { return view('tentang'); })->name('tentang');
Route::get('/absen', function () { return view('absen'); })->name('absen');
Route::get('/koleksi', function () { return view('koleksi'); })->name('koleksi');

// 2. ROUTE AUTH
Route::get('/login', function () { return view('auth.login'); })->name('login');
Route::get('/register', function () { return view('auth.register'); })->name('register');

// 3. ROUTE PANEL ADMIN
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Data Kelas
    Route::resource('kelas', KelasController::class);

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
    Route::get('/transaksi/peminjaman', function () { return view('admin.transaksi.peminjaman'); })->name('transaksi.peminjaman');
    Route::get('/transaksi/pengembalian', function () { return view('admin.transaksi.pengembalian'); })->name('transaksi.pengembalian');

    // Laporan
    Route::prefix('laporan')->name('laporan.')->group(function () {
        Route::get('/anggota', function () { return view('admin.laporan.laporan_anggota.index'); })->name('anggota.index');
        Route::get('/buku', function () { return view('admin.laporan.laporan_buku.index'); })->name('buku.index');
        Route::get('/kas', function () { return view('admin.laporan.laporan_kas.index'); })->name('kas.index');
        Route::get('/pengunjung', function () { return view('admin.laporan.laporan_pengunjung.index'); })->name('pengunjung.index');
    });

});
