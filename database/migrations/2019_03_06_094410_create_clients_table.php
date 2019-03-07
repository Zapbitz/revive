<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('client_id')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('age');
            $table->string('gender');
            $table->string('occupation');
            $table->string('martial_status');
            $table->boolean('isVisited')->default(0);
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
        Schema::dropIfExists('clients');
    }
}
