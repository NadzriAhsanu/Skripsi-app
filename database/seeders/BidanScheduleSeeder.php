<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BidanScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\BidanSchedule::create([
            'bidan_id' => 1,
            'day' => 'Senin',
            'time' => '07:00 - 14:00',
        ]);

        \App\Models\Bidan::all()->each(function($bidan){
            \App\Models\BidanSchedule::factory()->count(1)->create([
                'bidan_id' => $bidan->id
            ]);
        });
    }
}
