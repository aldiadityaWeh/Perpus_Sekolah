<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;
use App\Models\KategoriBuku;
use App\Models\JenisBuku;
use App\Models\SumberBuku;
use App\Models\KlasifikasiDdc;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 1. BUAT DATA KELAS
        $kelasList = [
            'Kelas 1 A', 'Kelas 1 B', 'Kelas 2 A', 'Kelas 3 A',
            'Kelas 4 A', 'Kelas 5 A', 'Kelas 6 A', 'Kelas 6 B', 'Guru / Staff'
        ];
        foreach ($kelasList as $kelas) {
            Kelas::create(['nama_kelas' => $kelas]);
        }

        // 2. BUAT DATA KATEGORI BUKU
        $kategoriList = ['Buku Teks Umum', 'Buku Pelajaran Pokok', 'Referensi (Kamus/Ensiklopedia)'];
        foreach ($kategoriList as $kategori) {
            KategoriBuku::create(['nama_kategori' => $kategori]);
        }

        // 3. BUAT DATA JENIS BUKU
        JenisBuku::create(['kode_jenis' => 'A1', 'nama_jenis' => 'Buku Fiksi']);
        JenisBuku::create(['kode_jenis' => 'A2', 'nama_jenis' => 'Buku Non-Fiksi']);

        // 4. BUAT DATA SUMBER BUKU
        SumberBuku::create(['kode_sumber' => 'BOS', 'nama_sumber' => 'Dana BOS Pusat']);
        SumberBuku::create(['kode_sumber' => 'HBH', 'nama_sumber' => 'Hibah Pemerintah Daerah']);
        SumberBuku::create(['kode_sumber' => 'SBM', 'nama_sumber' => 'Sumbangan Mandiri/Alumni']);

        // 5. BUAT KLASIFIKASI DDC
        $ddcList = [
            ['kode' => '000', 'kategori' => 'Karya Umum', 'warna' => '#64748b'],
            ['kode' => '100', 'kategori' => 'Filsafat & Psikologi', 'warna' => '#a855f7'],
            ['kode' => '200', 'kategori' => 'Agama', 'warna' => '#22c55e'],
            ['kode' => '300', 'kategori' => 'Ilmu Sosial', 'warna' => '#f59e0b'],
            ['kode' => '400', 'kategori' => 'Bahasa', 'warna' => '#ec4899'],
            ['kode' => '500', 'kategori' => 'Sains & Matematika', 'warna' => '#3b82f6'],
            ['kode' => '600', 'kategori' => 'Teknologi', 'warna' => '#ef4444'],
            ['kode' => '700', 'kategori' => 'Kesenian & Rekreasi', 'warna' => '#8b5cf6'],
            ['kode' => '800', 'kategori' => 'Sastra & Fiksi', 'warna' => '#f97316'],
            ['kode' => '900', 'kategori' => 'Sejarah & Geografi', 'warna' => '#14b8a6'],
        ];

        foreach ($ddcList as $ddc) {
            KlasifikasiDdc::create([
                'kode_ddc' => $ddc['kode'],
                'kategori' => $ddc['kategori'],
                'warna_label' => $ddc['warna']
            ]);
        }
    }
}
