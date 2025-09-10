<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RumahSakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rumah_sakits')->insert([
            [
                'nama_rumah_sakit' => 'RS Umum Jakarta',
                'alamat' => 'Jl. Sudirman No. 1, Jakarta',
                'email' => 'rsjakarta@mail.com',
                'telepon' => '0211234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_rumah_sakit' => 'RS Umum Bandung',
                'alamat' => 'Jl. Asia Afrika No. 10, Bandung',
                'email' => 'rsbandung@mail.com',
                'telepon' => '0229876543',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
