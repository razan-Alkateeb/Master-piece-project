<?php

namespace Database\Seeders;

use App\Models\Time;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Time::create([
            'time_name' => '1/month',
            'time_duration' => 30,
        ]);
        Time::create([
            'time_name' => '3/months',
            'time_duration' => 90,
        ]);
        Time::create([
            'time_name' => '6/months',
            'time_duration' => 180,
        ]);
    }
}

// string('time_name')->unique();
// bigInteger('time_duration')->unique();;
