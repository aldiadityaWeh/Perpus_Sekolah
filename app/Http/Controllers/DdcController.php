<?php

namespace App\Http\Controllers;

use App\Models\KlasifikasiDdc;
use Illuminate\Http\Request;

class DdcController extends Controller
{
    // Menampilkan halaman tabel Data DDC
    public function index()
    {
        // Ambil semua data dari tabel klasifikasi_ddc
        $data_ddc = KlasifikasiDdc::orderBy('kode_ddc', 'asc')->get();

        // Lempar variabel $data_ddc ke view data-ddc
        return view('admin.ddc.index', compact('data_ddc'));
    }

    // Menampilkan halaman Form Tambah DDC
    public function create()
    {
        return view('admin.ddc.create');
    }

    // Memproses penyimpanan data dari Form ke Database
    public function store(Request $request)
    {
        // Validasi input agar tidak ada yang kosong
        $request->validate([
            'kode_ddc' => 'required|unique:klasifikasi_ddc,kode_ddc',
            'kategori' => 'required',
            'warna_label' => 'required'
        ]);

        // Simpan ke database
        KlasifikasiDdc::create([
            'kode_ddc' => $request->kode_ddc,
            'kategori' => $request->kategori,
            'warna_label' => $request->warna_label
        ]);

        // Kembalikan ke halaman tabel dengan pesan sukses
        return redirect('/admin/ddc')->with('success', 'Data Klasifikasi DDC berhasil ditambahkan!');
    }
}
