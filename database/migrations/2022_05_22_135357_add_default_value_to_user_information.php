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
            $table->string('surname')->default("0")->change();
            $table->string('twitter')->default("0")->change();
            $table->string('facebook')->default("0")->change();
            $table->string('github')->default("0")->change();
            $table->string('phoneNumber')->default("0")->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_information', function (Blueprint $table) {
            
        });
    }
};
