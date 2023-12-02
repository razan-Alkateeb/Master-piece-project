<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // one month
        Subscription::create([
            'subscription_time_id' => 1,
            'subscription_type_id' => 1,
            'subscription_visits' => 20,
            'subscription_price' => 100,
        ]);
        Subscription::create([
            'subscription_time_id' => 1,
            'subscription_type_id' => 2,
            'subscription_visits' => 20,
            'subscription_price' => 50,
        ]);
        Subscription::create([
            'subscription_time_id' => 1,
            'subscription_type_id' => 3,
            'subscription_visits' => 20,
            'subscription_price' => 30,
        ]);


        // three month
        Subscription::create([
            'subscription_time_id' => 2,
            'subscription_type_id' => 1,
            'subscription_visits' => 60,
            'subscription_price' => 200,
        ]);
        Subscription::create([
            'subscription_time_id' => 2,
            'subscription_type_id' => 2,
            'subscription_visits' => 60,
            'subscription_price' => 100,
        ]);
        Subscription::create([
            'subscription_time_id' => 2,
            'subscription_type_id' => 3,
            'subscription_visits' => 60,
            'subscription_price' => 50,
        ]);

        // six month
        Subscription::create([
            'subscription_time_id' => 3,
            'subscription_type_id' => 1,
            'subscription_visits' => 120,
            'subscription_price' => 400,
        ]);
        Subscription::create([
            'subscription_time_id' => 3,
            'subscription_type_id' => 2,
            'subscription_visits' => 120,
            'subscription_price' => 200,
        ]);
        Subscription::create([
            'subscription_time_id' => 3,
            'subscription_type_id' => 3,
            'subscription_visits' => 120,
            'subscription_price' => 100,
        ]);


    }
}


// bigInteger('subscription_visits');
// bigInteger('subscription_price');
// bigInteger('subscription_type_id')->unsigned();
// bigInteger('subscription_time_id')->unsigned();

