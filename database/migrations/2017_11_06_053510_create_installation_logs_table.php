<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstallationLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installation_logs', function (Blueprint $table) {
            $table->increments('installation_log_id');
            $table->integer('branch_id');
            $table->integer('user_id');
            $table->integer('site_id');
            $table->integer('part_id');
            $table->string('job_number');
            $table->datetime('install_start_date');
            $table->datetime('install_finish_date');
            $table->string('site_name');
            $table->string('country');
            $table->string('city');
            $table->string('engineer_comments');
            $table->integer('added_by');

//pivot tables 3
//            $table->integer('assets');
//            $table->integer('related_branches');
//            $table->integer('related_staffs');

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
        Schema::dropIfExists('installation_logs');
    }
}
