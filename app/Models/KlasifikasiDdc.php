<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KlasifikasiDdc extends Model
{
    use HasFactory;

    protected $table = 'klasifikasi_ddc';
    protected $guarded = ['id'];

    public function buku()
    {
        return $this->hasMany(Buku::class, 'ddc_id');
    }
}
