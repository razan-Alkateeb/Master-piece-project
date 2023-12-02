<?php

namespace Database\Seeders;

use App\Models\Subscriber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subscriber::create([
            'subscriber_start' => '2023-10-09',
            'subscriber_end' => '2023-11-09',
            'subscriber_number_visits' => 20,
            'subscriber_user_id' => 1,
            'subscriber_subscription_id' => 1,
        ]);
        Subscriber::create([
            'subscriber_start' => '2023-10-09',
            'subscriber_end' => '2023-01-09',
            'subscriber_number_visits' => 60,
            'subscriber_user_id' => 2,
            'subscriber_subscription_id' => 5,
        ]);
        Subscriber::create([
            'subscriber_start' => '2023-10-09',
            'subscriber_end' => '2023-04-09',
            'subscriber_number_visits' => 120,
            'subscriber_user_id' => 3,
            'subscriber_subscription_id' => 9,
        ]);
    }
}

// date('subscriber_start');
// date('subscriber_end');
// bigInteger('subscriber_number_visits');
// bigInteger('subscriber_user_id')->unsigned();
// bigInteger('subscriber_subscription_id')->unsigned();
