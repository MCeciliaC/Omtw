<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levels', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('success')->nullable();
          $table->integer('time');
          $table->integer('score')->nullable();
          // $table->unsignedBigInteger('game_id')->nullable();
          // $table->foreign('game_id')->references('id')->on('game');
          // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('levels');
    }
}
