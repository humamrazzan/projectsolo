<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kamars')->insert([
            [
                'nomor_kamar' => 'A1',
                'harga' => 500000,
                'status' => 'kosong',
                'keterangan' => 'Kipas Angin, Kamar Mandi Luar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nomor_kamar' => 'A2',
                'harga' => 500000,
                'status' => 'kosong',
                'keterangan' => 'Kipas Angin, Kamar Mandi Luar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nomor_kamar' => 'B1',
                'harga' => 800000,
                'status' => 'terisi',
                'keterangan' => 'AC, Kamar Mandi Dalam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nomor_kamar' => 'B2',
                'harga' => 800000,
                'status' => 'kosong',
                'keterangan' => 'AC, Kamar Mandi Dalam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nomor_kamar' => 'C1',
                'harga' => 1200000,
                'status' => 'kosong',
                'keterangan' => 'AC, Kamar Mandi Dalam, TV, Kulkas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
