<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nama_panggilan',
        'tanggal_lahir',
        'status_perkawinan',
        'pekerjaan',
        'no_hp',
        'tanggal_sewa',
        'status',
        'kamar_id',
    ];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }

    public function pembayarans()
    {
        return $this->hasMany(Pembayaran::class);
    }
}
