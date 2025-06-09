<?php

namespace Database\Seeders;

use App\Models\Pembayaran;
use App\Models\Penyewa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penyewa = Penyewa::where('nama', 'John Doe')->first();

        if ($penyewa && $penyewa->kamar) {
            $harga_kamar = $penyewa->kamar->harga;

            for ($i = 0; $i < 3; $i++) {
                Pembayaran::create([
                    'penyewa_id' => $penyewa->id,
                    'jumlah_bayar' => $harga_kamar,
                    'tanggal_bayar' => now()->subMonths($i),
                ]);
            }
        }
    }
}
