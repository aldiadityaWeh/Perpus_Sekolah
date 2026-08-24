<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\KlasifikasiDdc;
use App\Models\KategoriBuku;
use App\Models\JenisBuku;
use App\Models\SumberBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Menampilkan daftar semua buku (Read)
     */
    public function index()
    {
        // Mengambil data buku dan relasinya (Eager Loading) agar query lebih optimal
        $data_buku = Buku::with(['ddc', 'kategori', 'jenis', 'sumber'])
                         ->orderBy('created_at', 'desc')
                         ->get();

        return view('admin.buku.index', compact('data_buku'));
    }

    /**
     * Menampilkan form untuk menambah buku baru (Create)
     */
    public function create()
    {
        // Mengirim data master untuk dropdown di form
        $ddcs = KlasifikasiDdc::all();
        $kategoris = KategoriBuku::all();
        $jenis = JenisBuku::all();
        $sumbers = SumberBuku::all();

        return view('admin.buku.create', compact('ddcs', 'kategoris', 'jenis', 'sumbers'));
    }

    /**
     * Menyimpan data buku baru ke dalam database (Store)
     */
    public function store(Request $request)
    {
        // --- TAMBAHAN WAJIB: Paksa tambah BK- dari sisi Server ---
        $kode = strtoupper(trim($request->kode_buku));
        if ($kode !== '' && !str_starts_with($kode, 'BK-')) {
            $request->merge(['kode_buku' => 'BK-' . $kode]);
        }
        // ---------------------------------------------------------

        // 1. Validasi Input dari Form
        $request->validate([
            'kode_buku'    => 'required|unique:buku,kode_buku',
            'judul'        => 'required|string|max:255',
            'pengarang'    => 'required|string|max:255',
            'penerbit'     => 'required|string|max:255',
            'tahun_terbit' => 'required|numeric|digits:4',
            'stok'         => 'required|numeric|min:0',
            'ddc_id'       => 'required',
            'kategori_id'  => 'required',
            'jenis_id'     => 'required',
            'sumber_id'    => 'required',
            'cover'        => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validasi file gambar
            'rak'          => 'nullable|string|max:50',
            'sinopsis'     => 'nullable|string'
        ], [
            'kode_buku.unique' => 'Kode Buku ini sudah terdaftar di sistem!',
        ]);

        // 2. Ambil semua data input
        $data = $request->except('cover'); // Ambil semua kecuali file cover

        // 3. Proses Upload Cover (Jika ada file yang diunggah)
        if ($request->hasFile('cover')) {
            // Simpan gambar ke folder storage/app/public/covers
            $path = $request->file('cover')->store('covers', 'public');
            $data['cover'] = $path; // Masukkan path gambar ke dalam array data yang akan disimpan
        }

        // 4. Simpan ke database
        Buku::create($data);

        // 5. Redirect ke halaman index dengan notifikasi
        return redirect()->route('admin.buku.index')
                         ->with('success', 'Data Koleksi Buku berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail satu buku spesifik (opsional)
     */
    public function show($id)
    {
        // Ambil data buku beserta semua relasinya
        $buku = Buku::with(['ddc', 'kategori', 'jenis', 'sumber'])->findOrFail($id);

        // Kembalikan ke halaman view detail buku
        return view('admin.buku.show', compact('buku'));
    }

    /**
     * Menampilkan form untuk mengedit data buku (Edit)
     */
    public function edit($id)
    {
        // Cari buku berdasarkan ID
        $buku = Buku::findOrFail($id);

        // Ambil data master untuk pilihan dropdown di form edit
        $ddcs = KlasifikasiDdc::all();
        $kategoris = KategoriBuku::all();
        $jenis = JenisBuku::all();
        $sumbers = SumberBuku::all();

        return view('admin.buku.edit', compact('buku', 'ddcs', 'kategoris', 'jenis', 'sumbers'));
    }

    /**
     * Menyimpan perubahan data buku ke database (Update)
     */
    public function update(Request $request, $id)
    {
        // Cari data buku yang akan diedit
        $buku = Buku::findOrFail($id);

        $kode = strtoupper(trim($request->kode_buku));
        if ($kode !== '' && !str_starts_with($kode, 'BK-')) {
            $request->merge(['kode_buku' => 'BK-' . $kode]);
        }

        // 1. Validasi Input (Pastikan kode_buku diabaikan validasi unique-nya untuk data ini sendiri)
        $request->validate([
            'kode_buku'    => 'required|unique:buku,kode_buku,'.$id,
            'judul'        => 'required|string|max:255',
            'pengarang'    => 'required|string|max:255',
            'penerbit'     => 'required|string|max:255',
            'tahun_terbit' => 'required|numeric|digits:4',
            'stok'         => 'required|numeric|min:0',
            'ddc_id'       => 'required',
            'kategori_id'  => 'required',
            'jenis_id'     => 'required',
            'sumber_id'    => 'required',
            'cover'        => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'rak'          => 'nullable|string|max:50',
            'sinopsis'     => 'nullable|string'
        ]);

        $data = $request->except('cover');

        // 2. Proses Upload Cover Baru (Jika User Mengganti Cover)
        if ($request->hasFile('cover')) {

            // Cek apakah buku sebelumnya punya cover, lalu hapus cover lama dari storage
            if ($buku->cover && Storage::disk('public')->exists($buku->cover)) {
                Storage::disk('public')->delete($buku->cover);
            }

            // Simpan cover yang baru
            $path = $request->file('cover')->store('covers', 'public');
            $data['cover'] = $path;
        }

        // 3. Update data ke database
        $buku->update($data);

        // 4. Redirect dengan pesan sukses
        return redirect()->route('admin.buku.index')
                         ->with('success', 'Data Buku berhasil diperbarui!');
    }

    /**
     * Menghapus data buku dari database (Delete)
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);

        // Cek dan Hapus file cover buku dari folder storage jika ada
        if ($buku->cover && Storage::disk('public')->exists($buku->cover)) {
            Storage::disk('public')->delete($buku->cover);
        }

        // Hapus data dari tabel
        $buku->delete();

        return redirect()->route('admin.buku.index')
                         ->with('success', 'Data Buku berhasil dihapus permanen!');
    }
}
