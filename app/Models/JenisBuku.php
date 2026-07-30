<?php

namespace App\Models;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisBuku extends Model
{
    use HasFactory;

    protected $table = 'jenis_buku';
    protected $guarded = ['id'];

    public function buku()
    {
        return $this->hasMany(Buku::class, 'jenis_id');
    }
}
