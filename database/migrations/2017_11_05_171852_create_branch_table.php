<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
			$table->increments('branch_id');
            $table->integer('id_number');
            $table->string('name');
            $table->string('street');
            $table->string('area');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('country');
            $table->string('po_box');
            $table->string('office_tel');
            $table->string('fax_no');
            $table->string('email');
            $table->string('website');
            $table->string('working_days');
            $table->string('working_times');
            $table->string('branch_logo');
            $table->string('status');

            $table->integer('added_by');
            $table->enum('is_active', ['0', '1'])->default('1');

            //pivot tables branch_user
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
        Schema::dropIfExists('branches');
    }
}
