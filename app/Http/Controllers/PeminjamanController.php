<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\DetailPeminjaman;
use App\Models\Anggota;
use App\Models\Buku;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PeminjamanController extends Controller
{
    public function index()
    {
        // Ambil riwayat peminjaman terbaru
        $data_peminjaman = Peminjaman::with(['anggota.kelas', 'detail.buku'])
            ->orderBy('created_at', 'desc')
            ->get();

        // Ambil data untuk form manual
        $data_anggota = Anggota::orderBy('nama', 'asc')->get();
        // Hanya tampilkan buku yang stoknya lebih dari 0
        $data_buku = Buku::where('stok', '>', 0)->orderBy('judul', 'asc')->get();

        return view('admin.transaksi.peminjaman', compact('data_peminjaman', 'data_anggota', 'data_buku'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'anggota_id' => 'required',
            'buku_id'    => 'required'
        ]);

        // Cek kembali ketersediaan stok buku
        $buku = Buku::findOrFail($request->buku_id);
        if ($buku->stok < 1) {
            return back()->withErrors(['Gagal: Stok buku sedang habis.']);
        }

        // 1. Simpan ke tabel Peminjaman
        $peminjaman = Peminjaman::create([
            'anggota_id'        => $request->anggota_id,
            'tgl_pinjam'        => Carbon::now()->format('Y-m-d'),
            'tgl_batas_kembali' => Carbon::now()->addDays(7)->format('Y-m-d'), // Standar pinjam 7 hari
            'status'            => 'dipinjam'
        ]);

        // 2. Simpan ke tabel Detail Peminjaman
        DetailPeminjaman::create([
            'peminjaman_id' => $peminjaman->id,
            'buku_id'       => $request->buku_id
        ]);

        // 3. Kurangi Stok Buku di perpustakaan
        $buku->decrement('stok');

        return redirect()->back()->with('success', 'Transaksi Peminjaman berhasil dicatat!');
    }

    public function destroy($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        // Jika transaksi dibatalkan/dihapus, kembalikan stok buku seperti semula
        foreach ($peminjaman->detail as $item) {$item->buku->increment('stok');
        }

        // Hapus transaksinya
        $peminjaman->delete();

        return redirect()->back()->with('success', 'Transaksi dibatalkan. Stok buku telah dikembalikan.');
    }
}
