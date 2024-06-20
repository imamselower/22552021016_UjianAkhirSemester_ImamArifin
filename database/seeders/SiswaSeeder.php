<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('siswa')->insert([
            'nama'=>'Ari',
            'nomor_induk'=>'1000',
            'alamat'=>'PangkalanBun',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
