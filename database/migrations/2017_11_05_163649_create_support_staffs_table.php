<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupportStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_staffs', function (Blueprint $table) {
			$table->increments('support_staff_id');
            $table->string('staff_number');
            $table->string('cell_number');
            $table->string('first_name');
            $table->string('father_name');
            $table->string('middle_name');
            $table->string('mother_name');
            $table->string('last_name');
            $table->string('maiden_name');
            $table->string('local_street');
            $table->string('local_area');
            $table->string('local_city');
            $table->string('local_state');
            $table->string('local_zip_code');
            $table->string('local_country');
            $table->string('local_po_box');
            $table->string('local_official_tel');
            $table->string('local_home_tel');
            $table->string('permanent_street');
            $table->string('permanent_area');
            $table->string('permanent_city');
            $table->string('permanent_state');
            $table->string('permanent_zip_code');
            $table->string('permanent_country');
            $table->string('permanent_po_box');
            $table->string('contact_name');
            $table->string('emergency_number');
            $table->string('designation');
            $table->string('qualification');
            $table->string('gender');
            $table->string('age');
            $table->dateTime('date_of_birth');
            $table->string('marital_status');
            $table->string('present_nationality');
            $table->string('previous_nationality');
            $table->string('1st_language');
            $table->string('2nd_language');
            $table->string('passport_no');
            $table->string('passport_place_issued');
            $table->dateTime('passport_issue_date');
            $table->dateTime('passport_expiry_date');
            $table->string('country_id_no');
            $table->string('country_id_type');
            $table->dateTime('country_issue_date');
            $table->dateTime('country_expiry_date');
            $table->string('visa_no');
            $table->string('visa_type');
            $table->dateTime('visa_issued_date');
            $table->dateTime('visa_expiry_date');
            $table->string('visa_staff_photo');
            $table->string('visa_status');
            $table->integer('added_by');


            //pivot Table support_staff_user
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('support_staffs');
    }
}
