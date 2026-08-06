<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;
use App\Models\Kas;
use App\Models\Buku;
use App\Models\KategoriBuku;
use App\Models\KlasifikasiDdc;
use App\Models\SumberBuku;
use App\Models\Anggota; 
use App\Models\Kelas;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LaporanController extends Controller
{
    /**
     * Menampilkan halaman Laporan Pengunjung
     */
    public function pengunjung(Request $request)
    {
        $query = Pengunjung::with(['anggota.kelas'])->orderBy('waktu_kunjungan', 'desc');

        if ($request->filled('rentangWaktu')) {
            // Logika filter bisa ditambahkan di sini nantinya
        }

        $data_pengunjung = $query->paginate(15);
        return view('admin.laporan.laporan_pengunjung.index', compact('data_pengunjung'));
    }

    /**
     * Menampilkan halaman Laporan Kas (Denda)
     */
    public function kas(Request $request)
    {
        $query = Kas::with(['peminjaman.anggota.kelas', 'peminjaman.detail.buku'])
                    ->orderBy('created_at', 'desc');

        $data_kas = $query->paginate(15);

        $bulanIni = Carbon::now()->month;
        $tahunIni = Carbon::now()->year;

        $kasBulanIni = Kas::whereMonth('created_at', $bulanIni)->whereYear('created_at', $tahunIni)->sum('jumlah_denda');
        $kasTahunIni = Kas::whereYear('created_at', $tahunIni)->sum('jumlah_denda');
        $totalTransaksi = Kas::count();

        return view('admin.laporan.laporan_kas.index', compact('data_kas', 'kasBulanIni', 'kasTahunIni', 'totalTransaksi'));
    }

    /**
     * Menampilkan halaman Laporan Buku & Cetak Label
     */
    public function buku(Request $request)
    {
        // Ambil data buku beserta relasinya
        $query = Buku::with(['ddc', 'kategori', 'jenis', 'sumber'])->orderBy('judul', 'asc');

        // Logika Filter Laporan (Akan merespon jika ada parameter GET dari form)
        if ($request->filled('filter_laporan')) {
            if ($request->filter_laporan == 'kategori' && $request->filled('kategori_laporan_id')) {
                $query->where('kategori_id', $request->kategori_laporan_id);
            } elseif ($request->filter_laporan == 'ddc' && $request->filled('ddc_laporan_id')) {
                $query->where('ddc_id', $request->ddc_laporan_id);
            } elseif ($request->filter_laporan == 'sumber' && $request->filled('sumber_laporan_id')) {
                $query->where('sumber_id', $request->sumber_laporan_id);
            }
        }

        $data_buku = $query->paginate(20);

        // Mengambil data master untuk dropdown filter form cetak
        $kategoris = KategoriBuku::all();
        $ddcs = KlasifikasiDdc::orderBy('kode_ddc', 'asc')->get();
        $sumbers = SumberBuku::all();

        return view('admin.laporan.laporan_buku.index', compact('data_buku', 'kategoris', 'ddcs', 'sumbers'));
    }

    /**
     * Menampilkan halaman Laporan Anggota & Cetak Kartu
     */
    public function anggota(Request $request)
    {
        $query = Anggota::with('kelas')->orderBy('nama', 'asc');

        // Logika Filter Laporan Anggota
        if ($request->filled('filter_laporan')) {
            if ($request->filter_laporan == 'kelas' && $request->filled('kelas_laporan_id')) {
                $query->where('kelas_id', $request->kelas_laporan_id);
            }
        }

        $data_anggota = $query->paginate(20);
        $kelas_list = Kelas::orderBy('nama_kelas', 'asc')->get();

        return view('admin.laporan.laporan_anggota.index', compact('data_anggota', 'kelas_list'));
    }
}
