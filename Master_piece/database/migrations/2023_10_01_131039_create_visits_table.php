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
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->string('visit_code');
            $table->date('visit_date');
            $table->boolean('is_visited');
            $table->bigInteger('visit_gym_id')->unsigned();
            $table->bigInteger('visit_subscriber_id')->unsigned();
            $table->timestamps();

            $table->foreign('visit_gym_id')->references('id')->on('gyms');
            $table->foreign('visit_subscriber_id')->references('id')->on('subscribers');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visits');
    }
};
