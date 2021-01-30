<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->text('text');
          $table->boolean('value');
          // $table->unsignedBigInteger('level_id');
          $table->unsignedBigInteger('category_id');
          // $table->foreign('level_id')->references('id')->on('levels');
          $table->foreign('category_id')->references('id')->on('category');
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
        Schema::dropIfExists('questions');
    }
}
