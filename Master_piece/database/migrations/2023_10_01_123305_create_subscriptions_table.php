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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('subscription_visits');
            $table->bigInteger('subscription_price');
            $table->bigInteger('subscription_type_id')->unsigned();
            $table->bigInteger('subscription_time_id')->unsigned();
            $table->timestamps();

            $table->foreign('subscription_type_id')->references('id')->on('types');
            $table->foreign('subscription_time_id')->references('id')->on('times');

        });






    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
};
