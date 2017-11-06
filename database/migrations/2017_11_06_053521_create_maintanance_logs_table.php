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
            $table->increments('id');
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
            $table->string('assets_removed');
            $table->string('assets_added');
            $table->string('engineer_comment');
            $table->string('status');
            $table->string('related_branch_id');
            $table->string('related_staff_id');
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
