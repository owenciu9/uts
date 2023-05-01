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
            'nama' => 'gog',
            'nomor_induk' => '1000',
            'alamat' => 'yes',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('siswa')->insert([
            'nama' => 'gogs',
            'nomor_induk' => '1001',
            'alamat' => 'yess',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('siswa')->insert([
            'nama' => 'gogt',
            'nomor_induk' => '1002',
            'alamat' => 'yest',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

    }
}
