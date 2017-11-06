<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_number');
            $table->string('name');
            $table->string('org_name');
            $table->string('site_map_presentation');
            $table->string('schematic_presentation_of_ins_area');
            $table->string('street');
            $table->string('area');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('country');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('1st_level_tech_name');
            $table->string('1st_level_tech_cell');
            $table->string('1st_level_tech_email');
            $table->string('2nd_level_proj_coordinator_name');
            $table->string('2nd_level_proj_coordinator_cell');
            $table->string('2nd_level_proj_coordinator_email');
            $table->string('3rd_level_proj_manager_name');
            $table->string('3rd_level_proj_manager_cell');
            $table->string('3rd_level_proj_manager_email');
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
        Schema::dropIfExists('sites');
    }
}
