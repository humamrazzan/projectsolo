<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kamar extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_kamar',
        'harga',
        'status',
        'keterangan',
    ];

    public function penyewas()
    {
        return $this->hasMany(Penyewa::class);
    }
}
