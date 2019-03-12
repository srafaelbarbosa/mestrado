<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz', function (Blueprint $table) {
            $table->increments('id');
            $table->string('software');
            $table->integer('question1');
            $table->integer('question2');
            $table->integer('question3');
            $table->integer('question4');
            $table->integer('question5');
            $table->integer('question6');
            $table->integer('question7');
            $table->integer('question8');
            $table->integer('question9');
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
        Schema::dropIfExists('quiz');
    }
}
