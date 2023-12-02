<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Coupon;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
            'coupon_code' => 'couponG',
            'coupon_discount_percentage' => 20,
            'coupon_expire_date' => '2023-12-30',
            'coupon_subscription_id' => 1,
        ]);
        Coupon::create([
            'coupon_code' => 'couponS',
            'coupon_discount_percentage' => 20,
            'coupon_expire_date' => '2023-12-30',
            'coupon_subscription_id' => 4,
        ]);
    }
}

// string('coupon_code');
// bigInteger('coupon_discount_percentage');
// date('coupon_expire_date');
// bigInteger('coupon_subscription_id')->unsigned();
