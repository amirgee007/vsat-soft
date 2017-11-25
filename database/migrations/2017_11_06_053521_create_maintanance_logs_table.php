<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaintananceLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance_logs', function (Blueprint $table) {
            $table->increments('maintenance_log_id');
            $table->string('job_number');
            $table->date('repair_start_date');
            $table->date('repair_finish_date');
            $table->integer('site_id');
            $table->integer('country_id');
            $table->integer('city_id');
            $table->string('client_symptom_detail');
            $table->string('eng_symptom_detail1');
            $table->string('eng_solution_detail1');
            $table->string('eng_symptom_detail2');
            $table->string('eng_solution_detail2');
            $table->string('eng_symptom_detail3');
            $table->string('eng_solution_detail3');
            $table->string('repair_mode');
            $table->text('engineer_comments');
            $table->string('status');
            $table->integer('added_by');
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
        Schema::dropIfExists('maintenance_logs');
    }
}
