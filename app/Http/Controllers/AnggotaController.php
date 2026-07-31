<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\Kelas; // Pastikan Model Kelas dipanggil di sini

class AnggotaController extends Controller
{
    // Menampilkan halaman tabel Data Anggota
    public function index()
    {
        // Menggunakan with('kelas') agar data relasi (nama kelas) ikut terpanggil
        $data_anggota = Anggota::with('kelas')->get();
        return view('admin.anggota.index', compact('data_anggota'));
    }

    // Menampilkan form tambah Anggota
    public function create()
    {
        // Mengambil semua data kelas untuk ditampilkan di dropdown form
        $data_kelas = Kelas::all();
        return view('admin.anggota.create', compact('data_kelas'));
    }

    // Memproses data dari form dan menyimpannya ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nisn' => 'required|unique:anggota,nisn',
            'nama' => 'required',
            'kelas_id' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        // Simpan ke database
        Anggota::create([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'kelas_id' => $request->kelas_id,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        // Lempar kembali ke halaman tabel dengan pesan sukses
        return redirect()->route('admin.anggota.index')
                         ->with('success', 'Data Anggota berhasil ditambahkan!');
    }

    // Menampilkan form edit Anggota
    public function edit($id)
    {
        $anggota = Anggota::findOrFail($id);$data_kelas = Kelas::all(); // Perlu mengirim data kelas lagi untuk dropdown edit

        return view('admin.anggota.edit', compact('anggota', 'data_kelas'));
    }

    // Memproses update data Anggota
    public function update(Request $request,$id)
    {
        // Validasi input (perhatikan pengecualian unique untuk ID yang sedang diedit)
        $request->validate([
            'nisn' => 'required|unique:anggota,nisn,'.$id,
            'nama' => 'required',
            'kelas_id' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $anggota = Anggota::findOrFail($id);$anggota->update([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'kelas_id' => $request->kelas_id,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect()->route('admin.anggota.index')
                         ->with('success', 'Data Anggota berhasil diperbarui!');
    }

    // Menghapus data Anggota
    public function destroy($id)
    {
        $anggota = Anggota::findOrFail($id);$anggota->delete();

        return redirect()->route('admin.anggota.index')
                         ->with('success', 'Data Anggota berhasil dihapus!');
    }
}
