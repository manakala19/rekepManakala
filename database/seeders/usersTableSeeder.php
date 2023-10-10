<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Irham Rizqan Zakiy',
            'jurusan'=>'Rekayasa Perangkat Lunak',
            'tempat_prakerin'=>'Bappeda',
            'email'=>'irham@gmail.com',
            'level'=>'admin',
            'password'=>Hash::make('123')
        ]);
        DB::table('users')->insert([
            'name'=>'Rizqan Fajar',
            'jurusan'=>'Rekayasa Perangkat Lunak',
            'tempat_prakerin'=>'Bappeda',
            'email'=>'rizqan@gmail.com',
            'level'=>'admin',
            'password'=>Hash::make('123')
        ]);
        DB::table('users')->insert([
            'name'=>'Muhammad Fathan Kandias',
            'jurusan'=>'Rekayasa Perangkat Lunak',
            'tempat_prakerin'=>'DPRD',
            'email'=>'fathan@gmail.com',
            'level'=>'user',
            'password'=>Hash::make('123')
        ]);
    }
}
