<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {

            $table->integer('premium')->default(0);

        });

        Schema::table('blogs', function (Blueprint $table) {

            $table->String('image')->default("NULL");

        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropColumn('premium');
        });

        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
}
