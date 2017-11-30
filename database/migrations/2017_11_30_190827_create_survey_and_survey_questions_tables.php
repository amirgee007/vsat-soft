<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyAndSurveyQuestionsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->increments('survey_id');
            $table->string('name');
            $table->string('type');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('survey_questions', function (Blueprint $table) {
            $table->increments('question_id');
            $table->integer('survey_id');
            $table->string('question_name');
            $table->string('option_1');
            $table->string('option_2');
            $table->string('option_3');
            $table->string('option_4');
            $table->string('correct_answer');
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
        Schema::dropIfExists('surveys');
        Schema::dropIfExists('survey_questions');
    }
}
