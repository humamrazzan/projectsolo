<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'penyewa_id',
        'jumlah_bayar',
        'tanggal_bayar',
    ];

    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class);
    }
}
