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
			$table->increments('part_id');
            $table->int('part_code');
            $table->string('serial_number');
            $table->string('barcode');
            $table->string('part_name');
            $table->string('description');
            $table->datetime('purchase_date');
            $table->string('part_type');
            $table->string('warranty_status1');
            $table->string('warranty_status2');
            $table->boolean('extended_warranty');
            $table->datetime('extended_warranty_date');
            $table->int('cost_price');
            $table->int('selling_price');
            $table->int('supplier_id');
            $table->int('vendor_id');
            $table->int('site_id');
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
