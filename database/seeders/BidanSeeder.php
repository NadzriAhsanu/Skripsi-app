<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BidanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bidans')->insert([
            'bidan_name' => 'Bidan1',
            'bidan_email' => 'bidan@gmail.com',
            'bidan_phone' => '08123456789',
            'photo' => '',
            'role' => 'bidan',
            'address' => 'tarikolot',
            'bidan_password' => Hash::make('123456789'),
            'sip' => '123456789',
            'id_ihs' => '987654321',
            'nik' => '289147598',
            'birth_date' => '1999-12-30',
        ]);

    }
}
