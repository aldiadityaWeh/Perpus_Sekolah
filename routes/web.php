<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DdcController;
use App\Http\Controllers\BookController;

// 1. ROUTE PUBLIK (FRONT-END)

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


// 2. ROUTE AUTENTIKASI (LOGIN & REGISTER)

// Halaman Login Admin (Mencari ke resources/views/auth/login.blade.php)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Halaman Register Admin (Mencari ke resources/views/auth/register.blade.php)
Route::get('/register', function () {
    return view('auth.register');
})->name('register');



// 3. ROUTE PANEL ADMIN (BACK-END)

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

    // === MODUL KLASIFIKASI DDC (Terhubung ke Controller) ===
    Route::get('/ddc', [DdcController::class, 'index'])->name('admin.ddc.index');           // Menampilkan Tabel Data
    Route::get('/ddc/create', [DdcController::class, 'create'])->name('admin.ddc.create');  // Menampilkan Form Tambah
    Route::post('/ddc', [DdcController::class, 'store'])->name('admin.ddc.store');          // Proses Simpan Data dari Form

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
    Route::get('/buku', [BookController::class, 'index'])->name('admin.buku.index');
    Route::get('/buku/create', [BookController::class, 'create'])->name('admin.buku.create');
    Route::post('/buku', [BookController::class, 'store'])->name('admin.buku.store');

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


    // LAPORAN (Lama)
    // Laporan Bulanan
    Route::get('/laporan/bulanan', function () {
        return view('admin.laporan.bulanan'); // resources/views/admin/laporan/bulanan.blade.php
    })->name('admin.laporan.bulanan');

    // Laporan Denda
    Route::get('/laporan/denda', function () {
        return view('admin.laporan.denda'); // resources/views/admin/laporan/denda.blade.php
    })->name('admin.laporan.denda');


    // LAPORAN (Struktur Baru)
    // -------------------------
    Route::prefix('laporan')->name('laporan.')->group(function () {

        // Laporan Anggota (Cetak Kartu)
        Route::get('/anggota', function () {
            return view('admin.laporan.laporan_anggota.index');
        })->name('anggota.index');

        // Laporan Buku
        Route::get('/buku', function () {
            return view('admin.laporan.laporan_buku.index');
        })->name('buku.index');

        // Laporan Kas (Denda/Pemasukan)
        Route::get('/kas', function () {
            return view('admin.laporan.laporan_kas.index');
        })->name('kas.index');

        // Laporan Pengunjung (Buku Tamu)
        Route::get('/pengunjung', function () {
            return view('admin.laporan.laporan_pengunjung.index');
        })->name('pengunjung.index');

    });

});
