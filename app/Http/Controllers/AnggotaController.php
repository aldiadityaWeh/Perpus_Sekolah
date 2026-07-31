<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    // 1. Menampilkan Tabel Anggota
    public function index()
    {
        $data_anggota = Anggota::all();
        return view('admin.anggota.index', compact('data_anggota'));
    }

    // 2. Menampilkan Form Tambah Anggota
    public function create()
    {
        // Jika Anda memiliki model Kelas, Anda bisa mengirimkannya ke view di sini
        return view('admin.anggota.create');
    }

    // 3. Menyimpan Data dari Form ke Database (Ini yang error sebelumnya)
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
}
