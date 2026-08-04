<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    protected $guarded = ['id'];

    // Relasi ke tabel Anggota
    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'anggota_id');
    }

    // Relasi ke tabel Detail Peminjaman (Item Buku)
    public function detail()
    {
        return $this->hasMany(DetailPeminjaman::class, 'peminjaman_id');
    }
}
