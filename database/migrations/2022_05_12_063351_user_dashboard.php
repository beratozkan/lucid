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
        Schema::create('UserDashboard', function (Blueprint $table) {
            $table->id();
            $table->Integer("userId")->nullable();
            $table->integer("visitors")->nullable();
            $table->integer("visits")->nullable();
            $table->integer("chats")->nullable();
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
        Schema::dropIfExists('UserDashboard');
    }
};
