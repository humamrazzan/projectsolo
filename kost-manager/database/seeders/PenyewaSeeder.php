<?php

namespace Database\Seeders;

use App\Models\Penyewa;
use Illuminate\Database\Seeder;
use App\Models\Kamar;

class PenyewaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kamar = Kamar::where('nomor_kamar', 'B1')->first();

        if ($kamar) {
            Penyewa::create([
                'nama' => 'John Doe',
                'nama_panggilan' => 'John',
                'tanggal_lahir' => '1995-05-10',
                'status_perkawinan' => 'belum kawin',
                'pekerjaan' => 'Mahasiswa',
                'no_hp' => '081234567890',
                'tanggal_sewa' => now()->subMonths(2),
                'status' => 'aktif',
                'kamar_id' => $kamar->id,
            ]);
        }
    }
}
