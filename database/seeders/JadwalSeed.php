<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("jadwal")->insert([
            'siswa_id' => SiswaSeeder::class,
            'nama_hari'=>'Senin',
            'matkul'=>'Kalkulus',
            'created_at'=>date('Y-m-d H:i:s'),
        ]);

    }
}
