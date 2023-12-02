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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('review_text');
            $table->date('review_date');
            $table->bigInteger('review_rate');
            $table->bigInteger('review_gym_id')->unsigned();
            $table->bigInteger('review_subsecriber_id')->unsigned();
            $table->timestamps();


            $table->foreign('review_gym_id')->references('id')->on('gyms');
            $table->foreign('review_subsecriber_id')->references('id')->on('subscribers');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};
