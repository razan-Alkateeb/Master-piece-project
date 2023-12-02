<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\TypeSeeder;
use Database\Seeders\TimeSeeder;
use Database\Seeders\GymSeeder;
use Database\Seeders\SubscriptionSeeder;
use Database\Seeders\SubscriberSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $this->call([
            UserSeeder::class,
            AdminSeeder::class,
            TypeSeeder::class,
            TimeSeeder::class,
            GymSeeder::class,
            SubscriptionSeeder::class,
            SubscriberSeeder::class,
            CouponSeeder::class,
        ]);

    }
}




