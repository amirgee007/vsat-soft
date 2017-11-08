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
			$table->integer('part_id');
            $table->integer('part_code');
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
            $table->integer('cost_price');
            $table->integer('selling_price');
            $table->integer('supplier_id');
            $table->integer('vendor_id');
            $table->integer('site_id');
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
        Schema::dropIfExists('assets');
    }
}
