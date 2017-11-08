<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
			$table->increments('supplier_id');
            $table->string('name');
            $table->string('country');
            $table->string('city');
            $table->string('street');
            $table->string('po_box');
            $table->string('email');
            $table->string('contact_number');
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
        Schema::dropIfExists('suppliers');
    }
}
