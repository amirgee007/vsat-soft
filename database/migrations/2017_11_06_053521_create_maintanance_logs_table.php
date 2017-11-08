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
            $table->integer('branch_id');
            $table->integer('user_id');
            $table->integer('site_id');
            $table->integer('part_id');
            $table->integer('job_number')->index();
            $table->dateTime('repair_start_date');
            $table->dateTime('repair_finish_date');
            $table->string('site_name');
            $table->string('country');
            $table->string('city');
            $table->string('client_symptom_detail');
            $table->string('eng_symptom_detail1');
            $table->string('eng_solution_detail1');
            $table->string('eng_symptom_detail2');
            $table->string('eng_solution_detail2');
            $table->string('eng_symptom_detail3');
            $table->string('eng_solution_detail3');
            $table->string('repair_mode');
            $table->string('engineer_comment');
            $table->string('status');
            $table->integer('added_by_user_id')->nullable();
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
