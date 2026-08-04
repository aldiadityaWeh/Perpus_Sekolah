<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnggotaController extends Controller
{
    public function index()
    {
        // Mengambil data anggota beserta relasi kelasnya agar query efisien
        $data_anggota = Anggota::with('kelas')->orderBy('created_at', 'desc')->get();
        return view('admin.anggota.index', compact('data_anggota'));
    }

    public function create()
    {
        // Lempar data kelas untuk pilihan dropdown
        $data_kelas = Kelas::orderBy('nama_kelas', 'asc')->get();
        return view('admin.anggota.create', compact('data_kelas'));
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nisn'          => 'required|unique:anggota,nisn',
            'nama'          => 'required|string|max:255',
            'kelas_id'      => 'required',
            'jenis_kelamin' => 'required',
            'foto'          => 'nullable|image|mimes:jpeg,png,jpg|max:2048' // Maks 2MB
        ]);

        $data = $request->except('foto');

        // Proses unggah foto (jika ada)
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('anggota_foto', 'public');
            $data['foto'] = $path;
        }

        Anggota::create($data);

        return redirect('/admin/anggota')->with('success', 'Data Anggota berhasil ditambahkan!');
    }

    public function show($id)
    {
        $anggota = Anggota::with('kelas')->findOrFail($id);
        return view('admin.anggota.show', compact('anggota'));
    }

    public function edit($id)
    {
        $anggota = Anggota::findOrFail($id);
        $data_kelas = Kelas::orderBy('nama_kelas', 'asc')->get();

        return view('admin.anggota.edit', compact('anggota', 'data_kelas'));
    }

    public function update(Request $request, $id)
    {
        $anggota = Anggota::findOrFail($id);

        $request->validate([
            'nisn'          => 'required|unique:anggota,nisn,'.$id,
            'nama'          => 'required|string|max:255',
            'kelas_id'      => 'required',
            'jenis_kelamin' => 'required',
            'foto'          => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->except('foto');

        // Jika ada foto baru yang diunggah
        if ($request->hasFile('foto')) {
            // Hapus foto lama dari storage jika ada
            if ($anggota->foto && Storage::disk('public')->exists($anggota->foto)) {
                Storage::disk('public')->delete($anggota->foto);
            }

            // Simpan foto baru
            $path = $request->file('foto')->store('anggota_foto', 'public');
            $data['foto'] = $path;
        }

        $anggota->update($data);

        return redirect('/admin/anggota')->with('success', 'Data Anggota berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $anggota = Anggota::findOrFail($id);

        // Hapus file foto dari harddisk jika ada
        if ($anggota->foto && Storage::disk('public')->exists($anggota->foto)) {
            Storage::disk('public')->delete($anggota->foto);
        }

        $anggota->delete();

        return redirect('/admin/anggota')->with('success', 'Data Anggota berhasil dihapus!');
    }
}
