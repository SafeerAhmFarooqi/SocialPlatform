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
        Schema::create('use_vouchers', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('code')->unique();
            $table->string('image_path')->nullable();
            $table->string('discount')->nullable();
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->string('location')->nullable();
            $table->unsignedBigInteger('shop_category')->nullable();
            $table->unsignedBigInteger('sub_category')->nullable();
            $table->string('email')->nullable();
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('use_vouchers');
    }
};
