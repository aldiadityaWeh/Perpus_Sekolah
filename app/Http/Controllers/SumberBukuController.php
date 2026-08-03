<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SumberBuku;

class SumberBukuController extends Controller
{
    // 1. Tampilkan Data
    public function index()
    {
        $data_sumber = SumberBuku::all();
        return view('admin.sumber_buku.index', compact('data_sumber'));
    }

    // 2. Form Tambah Data
    public function create()
    {
        return view('admin.sumber_buku.create');
    }

    // 3. Simpan Data Baru
    public function store(Request $request)
    {
        $request->validate([
            'kode_sumber' => 'required|unique:sumber_buku,kode_sumber',
            'nama_sumber' => 'required',
        ]);

        SumberBuku::create($request->all());

        return redirect()->route('admin.sumber_buku.index')
                         ->with('success', 'Data Sumber Buku berhasil ditambahkan!');
    }

    // 4. Form Edit Data
    public function edit($id)
    {
        $sumber = SumberBuku::findOrFail($id);
        return view('admin.sumber_buku.edit', compact('sumber'));
    }

    // 5. Simpan Perubahan (Update)
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_sumber' => 'required|unique:sumber_buku,kode_sumber,'.$id,
            'nama_sumber' => 'required',
        ]);

        $sumber = SumberBuku::findOrFail($id);
        $sumber->update($request->all());

        return redirect()->route('admin.sumber_buku.index')
                         ->with('success', 'Data Sumber Buku berhasil diperbarui!');
    }

    // 6. Hapus Data
    public function destroy($id)
    {
        $sumber = SumberBuku::findOrFail($id);
        $sumber->delete();

        return redirect()->route('admin.sumber_buku.index')
                         ->with('success', 'Data Sumber Buku berhasil dihapus!');
    }
}
