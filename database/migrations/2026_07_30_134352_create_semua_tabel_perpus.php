<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration (Membuat tabel)
     */
    public function up()
    {
        // ==========================================
        // 1. KELOMPOK MASTER DATA (Dibuat paling awal karena tidak punya Foreign Key)
        // ==========================================
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelas'); // Contoh: Kelas 1 A
            $table->timestamps();
        });

        Schema::create('kategori_buku', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kategori'); // Contoh: Buku Pelajaran Pokok
            $table->timestamps();
        });

        Schema::create('jenis_buku', function (Blueprint $table) {
            $table->id();
            $table->string('kode_jenis');
            $table->string('nama_jenis'); // Contoh: Fiksi / Non-Fiksi
            $table->timestamps();
        });

        Schema::create('klasifikasi_ddc', function (Blueprint $table) {
            $table->id();
            $table->string('kode_ddc')->unique(); // Contoh: 200
            $table->string('kategori'); // Contoh: Agama
            $table->string('warna_label', 7); // Contoh: #22c55e (Warna Hijau)
            $table->timestamps();
        });

        Schema::create('sumber_buku', function (Blueprint $table) {
            $table->id();
            $table->string('kode_sumber');
            $table->string('nama_sumber'); // Contoh: Dana BOS
            $table->timestamps();
        });

        // ==========================================
        // 2. KELOMPOK DATA UTAMA (Buku & Anggota)
        // ==========================================
        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->string('nisn')->unique();
            $table->string('nama');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->foreignId('kelas_id')->constrained('kelas')->onDelete('cascade');
            $table->string('foto')->nullable();
            $table->timestamps();
        });

        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('kode_buku')->unique();
            $table->string('judul');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->year('tahun_terbit');
            $table->integer('stok')->default(0);
            $table->string('rak')->nullable();

            // Relasi ke Master Data
            $table->foreignId('ddc_id')->constrained('klasifikasi_ddc');
            $table->foreignId('kategori_id')->constrained('kategori_buku');
            $table->foreignId('jenis_id')->constrained('jenis_buku');
            $table->foreignId('sumber_id')->constrained('sumber_buku');

            $table->string('cover')->nullable();
            $table->timestamps();
        });

        // ==========================================
        // 3. KELOMPOK TRANSAKSI (Peminjaman, Denda, Pengunjung)
        // ==========================================
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anggota_id')->constrained('anggota')->onDelete('cascade');
            $table->date('tgl_pinjam');
            $table->date('tgl_batas_kembali'); // Tambahan untuk fitur hitung denda otomatis
            $table->date('tgl_dikembalikan_aktual')->nullable(); // Diisi saat buku dikembalikan
            $table->enum('status', ['dipinjam', 'dikembalikan', 'menunggu_verifikasi'])->default('dipinjam');
            $table->timestamps();
        });

        Schema::create('detail_peminjaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('peminjaman_id')->constrained('peminjaman')->onDelete('cascade');
            $table->foreignId('buku_id')->constrained('buku')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('kas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('peminjaman_id')->constrained('peminjaman')->onDelete('cascade');
            $table->integer('jumlah_denda');
            $table->enum('status_bayar', ['belum', 'lunas'])->default('belum'); // Lunas atau belum
            $table->timestamps();
        });

        Schema::create('pengunjung', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anggota_id')->constrained('anggota')->onDelete('cascade');
            $table->dateTime('waktu_kunjungan');
            $table->timestamps();
        });
    }

    /**
     * Batalkan migration (Menghapus tabel) - Harus urutan terbalik
     */
    public function down()
    {
        Schema::dropIfExists('pengunjung');
        Schema::dropIfExists('kas');
        Schema::dropIfExists('detail_peminjaman');
        Schema::dropIfExists('peminjaman');
        Schema::dropIfExists('buku');
        Schema::dropIfExists('anggota');
        Schema::dropIfExists('sumber_buku');
        Schema::dropIfExists('klasifikasi_ddc');
        Schema::dropIfExists('jenis_buku');
        Schema::dropIfExists('kategori_buku');
        Schema::dropIfExists('kelas');
    }
};
