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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->string('shopname')->nullable();
            $table->unsignedBigInteger('shop_sub_category')->nullable();
            $table->unsignedBigInteger('shop_category')->nullable();
            $table->string('password');
            $table->string('pdf_password')->nullable();
            $table->timestamp('dob')->nullable();
            $table->string('residence')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('about')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('profile_pic_path')->nullable();
            $table->string('pdf_file_path')->nullable();
            $table->string('options')->nullable();
            $table->boolean('user_status')->default(1);
            $table->boolean('shop_status')->default(1);
            $table->string('location')->nullable();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
};
