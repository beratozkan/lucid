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
        Schema::create('user_clients', function (Blueprint $table) {
            $table->id();
            $table->string("firstName");$table->string("lastName");
            $table->string("email");$table->string("username");
            $table->string("password");$table->string("clientId");
            $table->string("phoneNumber");
            $table->string("adress");
            $table->integer("projects");
            $table->integer("tasks");
            $table->integer("chat");
            $table->integer("estimates");
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
        Schema::dropIfExists('user_clients');
    }
};
