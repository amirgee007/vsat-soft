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
            $table->string('job_number');

            $table->date('install_start_date');
            $table->date('install_finish_date');
            $table->integer('site_id');
            $table->integer('country_id');
            $table->integer('city_id');
            $table->string('engineer_comments');
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
        Schema::dropIfExists('installation_logs');
    }
}
