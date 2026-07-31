<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    // Menampilkan Tabel Kelas
    public function index()
    {
        $data_kelas = Kelas::all();
        return view('admin.kelas.index', compact('data_kelas'));
    }

    // Menampilkan Form Tambah
    public function create()
    {
        return view('admin.kelas.create');
    }

    // Memproses Simpan Data
    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:255|unique:kelas,nama_kelas',
        ]);

        Kelas::create([
            'nama_kelas' => $request->nama_kelas
        ]);

        return redirect()->route('admin.kelas.index')->with('success', 'Data Kelas berhasil ditambahkan!');
    }

    // Menampilkan Form Edit
    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('admin.kelas.edit', compact('kelas'));
    }

    // Memproses Update Data
    public function update(Request $request,$id)
    {
        $request->validate([
            'nama_kelas' => 'required|string|max:255|unique:kelas,nama_kelas,'.$id,
        ]);

        $kelas = Kelas::findOrFail($id);$kelas->update([
            'nama_kelas' => $request->nama_kelas
        ]);

        return redirect()->route('admin.kelas.index')->with('success', 'Data Kelas berhasil diperbarui!');
    }

    // Memproses Hapus Data
    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);$kelas->delete();

        return redirect()->route('admin.kelas.index')->with('success', 'Data Kelas berhasil dihapus!');
    }
}
