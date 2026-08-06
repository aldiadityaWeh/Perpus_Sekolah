<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Kas;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PengembalianController extends Controller
{
    // Menampilkan daftar buku yang sedang dipinjam
    public function index()
    {
        // Ambil data transaksi yang statusnya masih 'dipinjam' atau 'menunggu_verifikasi'
        $data_peminjaman = Peminjaman::with(['anggota.kelas', 'detail.buku'])
            ->whereIn('status', ['dipinjam', 'menunggu_verifikasi'])
            ->orderBy('tgl_batas_kembali', 'asc') // Urutkan dari tenggat waktu terdekat
            ->get();

        return view('admin.transaksi.pengembalian', compact('data_peminjaman'));
    }

    // Memproses verifikasi pengembalian buku
    public function verify($id)
    {
        $peminjaman = Peminjaman::with('detail.buku')->findOrFail($id);$tglBatas = Carbon::parse($peminjaman->tgl_batas_kembali);$hariIni = Carbon::now();

        // Hitung selisih hari. (Parameter false agar bisa bernilai minus jika belum telat)
        // Jika $selisih > 0, berarti sudah terlambat (hari ini melewati tanggal batas)
        $selisih =$tglBatas->diffInDays($hariIni, false);                   // 1. Logika Perhitungan Denda (Contoh: Rp 1.000 per hari)$denda = 0;
        $pesanDenda = '';
        if ($selisih > 0) {
            $denda = ceil($selisih) * 1000;

            // PERBAIKAN: Masukkan denda ke tabel kas HANYA dengan field yang ada di DB
            Kas::create([
                'peminjaman_id' => $peminjaman->id,
                'jumlah_denda'  => $denda
            ]);

            $pesanDenda = " Siswa terlambat $selisih hari (Denda Rp " . number_format($denda, 0, ',', '.') . " ditambahkan ke Laporan Kas).";
        }

        // 2. Ubah status transaksi menjadi dikembalikan
        $peminjaman->update([
            'status' => 'dikembalikan',
            'tgl_dikembalikan_aktual' => $hariIni->format('Y-m-d')
        ]);

        // 3. Kembalikan stok buku ke perpustakaan (+1)
        foreach ($peminjaman->detail as $item) {$item->buku->increment('stok');
        }

        return redirect()->back()->with('success', 'Buku berhasil dikembalikan.' . $pesanDenda);
    }
}
