<?php

use Illuminate\Support\Facades\Route;

// ==========================================
// 1. ROUTE PUBLIK (FRONT-END)
// ==========================================

// Halaman Beranda
Route::get('/', function () {
    return view('beranda'); // Merujuk ke resources/views/beranda.blade.php
})->name('beranda');

// Halaman Tentang Perpustakaan
Route::get('/tentang', function () {
    return view('tentang'); // Merujuk ke resources/views/tentang.blade.php
})->name('tentang');

// Halaman Kiosk Absen Pengunjung
Route::get('/absen', function () {
    return view('absen'); // Merujuk ke resources/views/absen.blade.php
})->name('absen');

// Halaman Koleksi Buku Publik
Route::get('/koleksi', function () {
    return view('koleksi'); // Merujuk ke resources/views/koleksi.blade.php
})->name('koleksi');


// ==========================================
// 2. ROUTE AUTENTIKASI (LOGIN & REGISTER)
// ==========================================

// Halaman Login Admin
Route::get('/login', function () {
    return view('login'); // Merujuk ke resources/views/login.blade.php
})->name('login');

// Halaman Register Admin
Route::get('/register', function () {
    return view('register'); // Merujuk ke resources/views/register.blade.php
})->name('register');


// ==========================================
// 3. ROUTE PANEL ADMIN (BACK-END)
// ==========================================
// Prefix 'admin' membuat semua URL di dalam grup ini diawali dengan /admin/...
// Catatan: Nanti Anda bisa tambahkan middleware(['auth']) di sini jika fungsi login backend sudah jadi.

Route::prefix('admin')->group(function () {

    // Dashboard Utama Admin
    Route::get('/dashboard', function () {
        return view('admin.dashboard'); // resources/views/admin/dashboard.blade.php
    })->name('admin.dashboard');


    // MASTER DATA

    // Data Kelas
    Route::get('/kelas', function () {
        return view('admin.kelas.index'); // resources/views/admin/kelas/index.blade.php
    })->name('admin.kelas.index');

    // Tambah Data Kelas
    Route::get('/kelas/create', function () {
        return view('admin.kelas.create'); // resources/views/admin/kelas/create.blade.php
    })->name('admin.kelas.create');

     // TAMBAH KLASIFIKASI DDC
   
    Route::get('/ddc', function () {
        return view('admin.ddc.index'); // resources/views/admin/ddc/index.blade.php
    })->name('admin.ddc.index');
    
    Route::get('/ddc/create', function () {
        return view('admin.ddc.create'); // resources/views/admin/ddc/create.blade.php
    })->name('admin.ddc.create');

    // Sumber Buku
    Route::get('/sumber-buku', function () {
        return view('admin.sumber_buku.index'); // resources/views/admin/sumber_buku/index.blade.php
    })->name('admin.sumber_buku.index');
    
    Route::get('/sumber-buku/create', function () {
        return view('admin.sumber_buku.create'); // resources/views/admin/sumber_buku/create.blade.php
    })->name('admin.sumber_buku.create');

    // Jenis Buku
 
    Route::get('/jenis-buku', function () {
        return view('admin.jenis_buku.index'); 
    })->name('admin.jenis_buku.index');
    
    Route::get('/jenis-buku/create', function () {
        return view('admin.jenis_buku.create'); 
    })->name('admin.jenis_buku.create');

    // Kategori Buku
    Route::get('/kategori-buku', function () {
        return view('admin.kategori_buku.index'); 
    })->name('admin.kategori_buku.index');
    
    Route::get('/kategori-buku/create', function () {
        return view('admin.kategori_buku.create'); 
    })->name('admin.kategori_buku.create');

    // Data Buku
    Route::get('/buku', function () {
        return view('admin.buku.index'); // resources/views/admin/buku/index.blade.php
    })->name('admin.buku.index');

    // Tambah Data Buku
    Route::get('/buku/create', function () {
        return view('admin.buku.create'); // resources/views/admin/buku/create.blade.php
    })->name('admin.buku.create');


    // Data Anggota
    Route::get('/anggota', function () {
        return view('admin.anggota.index'); // resources/views/admin/anggota/index.blade.php
    })->name('admin.anggota.index');

    // Tambah Data Anggota
    Route::get('/anggota/create', function () {
        return view('admin.anggota.create'); // resources/views/admin/anggota/create.blade.php
    })->name('admin.anggota.create');


    // TRANSAKSI (SIRKULASI)

    // Scan Peminjaman
    Route::get('/transaksi/peminjaman', function () {
        return view('admin.transaksi.peminjaman'); // resources/views/admin/transaksi/peminjaman.blade.php
    })->name('admin.transaksi.peminjaman');

    // Verifikasi Pengembalian (Kembali)
    Route::get('/transaksi/pengembalian', function () {
        return view('admin.transaksi.pengembalian'); // resources/views/admin/transaksi/pengembalian.blade.php
    })->name('admin.transaksi.pengembalian');


    // LAPORAN
    // Laporan Bulanan
    Route::get('/laporan/bulanan', function () {
        return view('admin.laporan.bulanan'); // resources/views/admin/laporan/bulanan.blade.php
    })->name('admin.laporan.bulanan');

    // Laporan Denda
    Route::get('/laporan/denda', function () {
        return view('admin.laporan.denda'); // resources/views/admin/laporan/denda.blade.php
    })->name('admin.laporan.denda');


});
