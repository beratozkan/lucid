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
        Schema::table('user_information', function (Blueprint $table) {
            $table->string('email')->default("@gmail.com")->after('country');
            $table->string('twitter')->default("0");
            $table->string('facebook')->default("0");
            $table->string('github')->default("0");
            $table->string('phoneNumber')->default("0");




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_information');

    }
};
