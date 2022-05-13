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
        Schema::create('UserMessages', function (Blueprint $table) {
            $table->integer('from');
            $table->integer('to');
            $table->string('content')->default(" ");
            $table->date('time');
            $table->integer('readed')->default("0");




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('UserMessages', function (Blueprint $table) {
            Schema::dropIfExists('UserMessages');
        });
    }
};
