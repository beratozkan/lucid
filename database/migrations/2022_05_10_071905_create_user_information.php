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
        Schema::create('user_information', function (Blueprint $table) {
            $table->id();
            $table->Integer("userId");
            $table->string("name");
            $table->string("surname");
            $table->string("gender")->nullable();
            $table->date("birthdate")->nullable();

           $table->string("adress1")->nullable();
           $table->string("adress2")->nullable();
           $table->string("city")->nullable();
           $table->string("country")->nullable();
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
