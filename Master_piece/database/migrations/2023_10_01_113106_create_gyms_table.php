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
        Schema::create('gyms', function (Blueprint $table) {
            $table->id();
            $table->string('gym_name');
            $table->longText('gym_description');
            $table->time('gym_workingHoursFrom');
            $table->time('gym_workingHoursTo');
            $table->mediumText('gym_image');
            $table->string('gym_address');
            $table->string('gym_phone');
            $table->string('gym_facebook')->nullable();
            $table->string('gym_instagram')->nullable();
            $table->string('gym_email')->nullable();
            $table->bigInteger('gym_owner_id')->unsigned();
            $table->bigInteger('gym_type_id')->unsigned();
            $table->timestamps();

            $table->foreign('gym_owner_id')->references('id')->on('users');
            $table->foreign('gym_type_id')->references('id')->on('types');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gyms');

    }
};
