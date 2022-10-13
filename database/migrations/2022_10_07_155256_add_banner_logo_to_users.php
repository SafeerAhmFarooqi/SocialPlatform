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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('shopbanner_id');
            $table->unsignedBigInteger('shoplogo_id');
            $table->string('logo')->nullable();
            $table->string('banner')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('users', 'shopbanner_id'))
        {
            Schema::table('users', function (Blueprint $table)
            {
                $table->dropColumn('shopbanner_id');
            });
        }
        if (Schema::hasColumn('users', 'shoplogo_id'))
        {
            Schema::table('users', function (Blueprint $table)
            {
                $table->dropColumn('shoplogo_id');
            });
        }
        if (Schema::hasColumn('users', 'logo'))
        {
            Schema::table('users', function (Blueprint $table)
            {
                $table->dropColumn('logo');
            });
        }
        if (Schema::hasColumn('users', 'banner'))
        {
            Schema::table('users', function (Blueprint $table)
            {
                $table->dropColumn('banner');
            });
        }
    }
};
