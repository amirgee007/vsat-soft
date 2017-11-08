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
        Schema::create('sites', function (Blueprint $table) {
            $table->increments('site_id');
            $table->integer('id_number');
            $table->string('name');
            $table->string('org_name');
            $table->string('site_map_presentation');
            $table->string('presentation_of_ins_area');
            $table->string('street');
            $table->string('area');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('country');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('tech_name');
            $table->string('tech_cell');
            $table->string('tech_email');
            $table->string('proj_coordinator_name');
            $table->string('proj_coordinator_cell');
            $table->string('proj_coordinator_email');
            $table->string('proj_manager_name');
            $table->string('proj_manager_cell');
            $table->string('proj_manager_email');
            $table->string('working_days');
            $table->string('working_hours');
            $table->boolean('is_access_normal');
            $table->boolean('is_access_during_week');
            $table->text('identification_for_access');
            $table->string('required_access_time_');
            $table->string('access_validity_period');
            $table->boolean('have_direct_los');
            $table->string('cable_length');
            $table->string('cables_used');
            $table->string('antenna_location');
            $table->boolean('is_strong_enough');
            $table->string('antenna_mount_loc');
            $table->boolean('is_electrical_grounding');
            $table->boolean('is_lightening_protection');
            $table->string('method_of_transporting');
            $table->text('comments');
            $table->string('antenna_size');
            $table->string('pole_size');
            $table->string('pole_outside_diameter');
            $table->string('status');
            $table->integer('added_by_user_id');
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
