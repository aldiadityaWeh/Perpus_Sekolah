<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $guarded = ['id'];

    public function ddc()
    {
        return $this->belongsTo(KlasifikasiDdc::class, 'ddc_id');
    }

    public function kategori()
    {
        return $this->belongsTo(KategoriBuku::class, 'kategori_id');
    }

    public function jenis()
    {
        return $this->belongsTo(JenisBuku::class, 'jenis_id');
    }

    public function sumber()
    {
        return $this->belongsTo(SumberBuku::class, 'sumber_id');
    }
}
