<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Pengunjung;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AbsenController extends Controller
{
    /**
     * Menampilkan halaman Kiosk Absen Pengunjung
     */
    public function index()
    {
        // Mengambil data pengunjung khusus hari ini untuk ditampilkan di tabel sebelah kanan
        $hariIni = Carbon::today();

        // Eager load relasi 'anggota' dan 'kelas' agar query lebih efisien
        $data_pengunjung = Pengunjung::with('anggota.kelas')
                            ->whereDate('waktu_kunjungan', $hariIni)
                            ->orderBy('waktu_kunjungan', 'desc')
                            ->get();

        // Mengembalikan view resources/views/absen.blade.php
        return view('absen', compact('data_pengunjung'));
    }

    /**
     * Memproses inputan NISN dari Scanner (atau input manual)
     */
    public function store(Request $request)
    {
        // Validasi input agar nisn tidak boleh kosong
        $request->validate([
            'nisn' => 'required'
        ]);

        // 1. Cari data anggota berdasarkan NISN yang di-scan
        $anggota = Anggota::where('nisn', $request->nisn)->first();

        // 2. Jika anggota tidak ditemukan (NISN salah / belum terdaftar)
        if (!$anggota) {
            return redirect()->back()->with('error', 'NISN tidak terdaftar di sistem! Silakan lapor ke Pustakawan.');
        }

        // 3. Jika anggota ditemukan, catat kunjungannya ke tabel pengunjung
        Pengunjung::create([
            'anggota_id'      => $anggota->id,
            'waktu_kunjungan' => Carbon::now() // Mengambil waktu & tanggal saat ini persis saat di-scan
        ]);

        // 4. Kembalikan ke halaman absen dengan pesan sukses
        return redirect()->back()->with('success', 'Selamat datang di Perpustakaan, ' . $anggota->nama . '!');
    }
}
