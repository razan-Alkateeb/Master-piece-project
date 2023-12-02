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
        Schema::create('subscribers', function (Blueprint $table) {
            $table->id();
            $table->date('subscriber_start');
            $table->date('subscriber_end');
            $table->bigInteger('subscriber_number_visits');
            $table->bigInteger('subscriber_user_id')->unsigned();
            $table->bigInteger('subscriber_subscription_id')->unsigned();
            $table->timestamps();


            $table->foreign('subscriber_user_id')->references('id')->on('users');
            $table->foreign('subscriber_subscription_id')->references('id')->on('subscriptions');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscribers');
    }
};
