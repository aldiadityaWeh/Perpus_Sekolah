<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\KlasifikasiDdc;
use App\Models\KategoriBuku;
use App\Models\JenisBuku;
use App\Models\SumberBuku;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // Menggunakan with() agar query database efisien (Eager Loading)
        $data_buku = Buku::with(['ddc', 'kategori', 'jenis', 'sumber'])->get();
        return view('admin.buku.index', compact('data_buku'));
    }

    public function create()
    {
        // Mengirim data master untuk pilihan dropdown
        $ddcs = KlasifikasiDdc::all();
        $kategoris = KategoriBuku::all();
        $jenis = JenisBuku::all();
        $sumbers = SumberBuku::all();
        return view('admin.buku.create', compact('ddcs', 'kategoris', 'jenis', 'sumbers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_buku' => 'required|unique:buku,kode_buku',
            'judul' => 'required',
            'ddc_id' => 'required',
            'kategori_id' => 'required',
            'jenis_id' => 'required',
            'sumber_id' => 'required',
        ]);

        Buku::create($request->all());

        return redirect('/admin/buku')->with('success', 'Data Buku berhasil ditambahkan!');
    }
}
