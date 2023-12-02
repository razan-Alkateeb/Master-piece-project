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
        Schema::create('admins', function (Blueprint $table) {
                $table->id();
                $table->string('admin_name');
                $table->string('admin_email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('admin_password');
                $table->string('admin_phone')->default('0');
                $table->mediumText('admin_image')->default('http://127.0.0.1:8000/images/default_profile.png');
                $table->rememberToken();
                $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
};
