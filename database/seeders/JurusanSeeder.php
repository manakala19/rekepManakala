<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jurusan')->insert([
            'id' => '1',
            'nama_jurusan' => 'Rekayasa Perangkat Lunak',
        ]);
        DB::table('jurusan')->insert([
            'id' => '2',
            'nama_jurusan' => 'Multimedia',
        ]);
    }
}
