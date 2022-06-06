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
            $table->integer("employe_count");
            $table->integer("client_count");
            $table->integer("experience");
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
            $table->dropColumn('employe_count');
            $table->dropColumn("client_count");
            $table->dropColumn('experience');
        });
    }
};
