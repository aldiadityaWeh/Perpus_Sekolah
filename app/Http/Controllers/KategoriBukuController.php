<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriBuku; // Memanggil model KategoriBuku

class KategoriBukuController extends Controller
{
    // Menampilkan halaman tabel Data Kategori
    public function index()
    {
        $data_kategori = KategoriBuku::all(); // Mengambil semua data dari tabel kategori_buku
        return view('admin.kategori_buku.index', compact('data_kategori'));
    }

    // Menampilkan form tambah Kategori
    public function create()
    {
        return view('admin.kategori_buku.create');
    }

    // Memproses data dari form dan menyimpannya ke database
    public function store(Request $request)
    {
        // Validasi data (pastikan nama_kategori diisi)
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        // Simpan ke database
        KategoriBuku::create([
            'nama_kategori' => $request->nama_kategori,
        ]);

        // Arahkan kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.kategori_buku.index')
                         ->with('success', 'Data Kategori Buku berhasil ditambahkan!');
    }

    // --------------------------------------------------------
    // FUNGSI BARU UNTUK EDIT & HAPUS
    // --------------------------------------------------------

    // Menampilkan form Edit Kategori
    public function edit($id)
    {
        // Mencari data kategori berdasarkan ID yang diklik
        $kategori = KategoriBuku::findOrFail($id);

        // Mengarahkan ke form edit dan mengirimkan data $kategori
        return view('admin.kategori_buku.edit', compact('kategori'));
    }

    // Memproses data yang diubah dan menyimpannya ke database
    public function update(Request $request,$id)
    {
        // Validasi input
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        // Cari data berdasarkan ID, lalu update
        $kategori = KategoriBuku::findOrFail($id);$kategori->update([
            'nama_kategori' => $request->nama_kategori,
        ]);

        // Lempar kembali ke tabel dengan pesan sukses
        return redirect()->route('admin.kategori_buku.index')
                         ->with('success', 'Data Kategori Buku berhasil diperbarui!');
    }

    // Memproses penghapusan data
    public function destroy($id)
    {
        // Cari data berdasarkan ID, lalu hapus
        $kategori = KategoriBuku::findOrFail($id);$kategori->delete();

        // Lempar kembali ke tabel dengan pesan sukses
        return redirect()->route('admin.kategori_buku.index')
                         ->with('success', 'Data Kategori Buku berhasil dihapus!');
    }
}
