<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pasiens')->insert([
            [
                'nama_pasien' => 'Andi',
                'alamat' => 'Jl. Merdeka No. 5',
                'no_telpon' => '081234567890',
                'rumah_sakit_id' => 1, // RS Umum Jakarta
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pasien' => 'Budi',
                'alamat' => 'Jl. Diponegoro No. 7',
                'no_telpon' => '081298765432',
                'rumah_sakit_id' => 2, // RS Umum Bandung
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
