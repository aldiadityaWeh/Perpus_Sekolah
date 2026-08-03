<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisBuku;

class JenisBukuController extends Controller
{
    // 1. Tampilkan Data
    public function index()
    {
        $data_jenis = JenisBuku::all();
        return view('admin.jenis_buku.index', compact('data_jenis'));
    }

    // 2. Form Tambah Data
    public function create()
    {
        return view('admin.jenis_buku.create');
    }

    // 3. Simpan Data Baru
    public function store(Request $request)
    {
        $request->validate([
            'kode_jenis' => 'required|unique:jenis_buku,kode_jenis',
            'nama_jenis' => 'required',
        ]);

        JenisBuku::create($request->all());

        // PERBAIKAN: Menggunakan URL langsung agar tidak terjadi error Route Not Defined
        return redirect('/admin/jenis-buku')
                         ->with('success', 'Data Jenis Buku berhasil ditambahkan!');
    }

    // 4. Form Edit Data
    public function edit($id)
    {
        $jenis = JenisBuku::findOrFail($id);
        return view('admin.jenis_buku.edit', compact('jenis'));
    }

    // 5. Simpan Perubahan (Update)
    public function update(Request $request,$id)
    {
        $request->validate([
            'kode_jenis' => 'required|unique:jenis_buku,kode_jenis,'.$id,
            'nama_jenis' => 'required',
        ]);

        $jenis = JenisBuku::findOrFail($id);
        $jenis->update($request->all());

        // PERBAIKAN: Menggunakan URL langsung
        return redirect('/admin/jenis-buku')
                         ->with('success', 'Data Jenis Buku berhasil diperbarui!');
    }

    // 6. Hapus Data
    public function destroy($id)
    {
        $jenis = JenisBuku::findOrFail($id);$jenis->delete();

        // PERBAIKAN: Menggunakan URL langsung
        return redirect('/admin/jenis-buku')
                         ->with('success', 'Data Jenis Buku berhasil dihapus!');
    }
}
