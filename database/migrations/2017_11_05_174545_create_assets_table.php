<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
			$table->increments('asset_id');
			$table->integer('asset_code');
            $table->string('serial_number');
            $table->string('bar_code_img');
            $table->string('asset_name');
            $table->string('description');
            $table->date('purchase_date');
            $table->string('asset_part_type');
            $table->float('cost_price');
            $table->float('selling_price');
            $table->string('warranty_status1');
            $table->string('warranty_status2');
            $table->boolean('extended_warranty');
            $table->date('extended_warranty_date');
            $table->string('supplier_name');
            $table->string('supplier_email');
            $table->string('supplier_cell');
            $table->string('vendor_name');
            $table->string('vendor_email');
            $table->string('vendor_cell');
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
        Schema::dropIfExists('assets');
    }
}
