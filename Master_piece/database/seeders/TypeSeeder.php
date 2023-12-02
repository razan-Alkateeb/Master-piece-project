<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'type_name' => 'Gold',
            'feature_1' => 'Unlimited Access',
            'feature_2' => 'Exclusive Facilities',
            'feature_3' => 'Nutritional Guidance',
            'feature_4' => 'Modern Amenities',
        ]);
        Type::create([
            'type_name' => 'Server',
            'feature_1' => 'Nutritional Guidance',
            'feature_2' => 'Equipment Management',
            'feature_3' => 'Modern Amenities',
            'feature_4' => 'Class and Schedule',
        ]);
        Type::create([
            'type_name' => 'Bronze',
            'feature_1' => 'Cardio Theater',
            'feature_2' => 'Modern Amenities',
            'feature_3' => 'Group Exercise Classes',
            'feature_4' => 'Locker Rooms and Showers',
        ]);
    }
}

// ('type_name')->unique();
