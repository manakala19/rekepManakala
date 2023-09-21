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
            'name'=>'irham',
            'jurusan_id'=>'1',
            'email'=>'irham@gmail.com',
            'level'=>'admin',
            'password'=>Hash::make('123')
        ]);
        DB::table('users')->insert([
            'name'=>'rizqan',
            'jurusan_id'=>'2',
            'email'=>'rizqan@gmail.com',
            'level'=>'user',
            'password'=>Hash::make('123')
        ]);
    }
}
