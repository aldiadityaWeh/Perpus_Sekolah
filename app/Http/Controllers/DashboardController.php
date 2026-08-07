<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman utama Dashboard Admin
     */
    public function index()
    {
        // 1. Total Koleksi Buku (Menghitung total dari kolom 'stok')
        $totalBuku = Buku::sum('stok');

        // 2. Total Anggota Aktif
        $totalAnggota = Anggota::count();

        // 3. Buku yang sedang dipinjam saat ini
        $bukuDipinjam = Peminjaman::where('status', 'dipinjam')->count();

        // 4. Menunggu Verifikasi
        $menungguVerifikasi = Peminjaman::where('status', 'menunggu_verifikasi')->count();

        // 5. Mengambil 5 transaksi peminjaman terbaru beserta relasi tabelnya
        $transaksiTerbaru = Peminjaman::with(['anggota.kelas', 'detail.buku'])
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        // Me-return view dan mengirimkan variabel data
        return view('admin.dashboard', compact(
            'totalBuku',
            'totalAnggota',
            'bukuDipinjam',
            'menungguVerifikasi',
            'transaksiTerbaru'
        ));
    }
}
