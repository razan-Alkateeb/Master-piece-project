<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('coupon_code');
            $table->bigInteger('coupon_discount_percentage');
            $table->date('coupon_expire_date');
            $table->bigInteger('coupon_subscription_id')->unsigned();
            $table->timestamps();
             $table->foreign('coupon_subscription_id')->references('id')->on('subscriptions');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
};
