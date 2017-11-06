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
        Schema::create('installation_log', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number');
            $table->datetime('install_start_date');
            $table->datetime('install_finish_date');
            $table->string('site_name');
            $table->string('country');
            $table->string('city');
            $table->string('engineer_comments');
            $table->integer('related_branches');
            $table->integer('related_staff');
            $table->integer('assets');
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
