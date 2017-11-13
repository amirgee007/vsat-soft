<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
			$table->increments('client_id');
            $table->string('client_number');
            $table->string('org_name');
            $table->string('street');
            $table->string('area');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('country');
            $table->string('po_box');
            $table->string('official_tel');
            $table->string('fax_no');
            $table->string('email');
            $table->string('website');
            $table->string('working_days');
            $table->string('working_times');
            $table->string('tech_1st_name');
            $table->string('tech_1st_position');
            $table->string('tech_1st_cell');
            $table->string('tech_1st_email');
            $table->string('tech_2nd_name');
            $table->string('tech_2nd_position');
            $table->string('tech_2nd_cell');
            $table->string('tech_2nd_email');
            $table->string('logist_1st_name');
            $table->string('logist_1st_position');
            $table->string('logist_1st_cell');
            $table->string('logist_1st_email');
            $table->string('logist_2nd_name');
            $table->string('logist_2nd_position');
            $table->string('logist_2nd_cell');
            $table->string('logist_2nd_email');
            $table->string('finance_1st_name');
            $table->string('finance_1st_position');
            $table->string('finance_1st_cell');
            $table->string('finance_1st_email');
            $table->string('finance_2nd_name');
            $table->string('finance_2nd_position');
            $table->string('finance_2nd_cell');
            $table->string('finance_2nd_email');
            $table->string('management_1st_name');
            $table->string('management_1st_position');
            $table->string('management_1st_cell');
            $table->string('management_1st_email');
            $table->string('management_2nd_name');
            $table->string('management_2nd_position');
            $table->string('management_2nd_cell');
            $table->string('management_2nd_email');
            $table->string('escalation_name');
            $table->string('escalation_position');
            $table->string('escalation_cell');
            $table->string('escalation_email');
            $table->string('escalation_comments');
            $table->string('confirm_by_name');
            $table->string('confirm_by_designation');
            $table->string('confirm_by_signature');
            $table->string('confirm_by_status');
            $table->string('client_logo');
            $table->integer('added_by');
            //pivotTable client_user
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
        Schema::dropIfExists('clients');
    }
}
