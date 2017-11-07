<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActiveCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('active_cities', function (Blueprint $table) {
//			$table->increments('id');
//            $table->string('city_name');
//			$table->integer('active_city_id');
//            $table->timestamps();
//			});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
//        Schema::dropIfExists('active_cities');
    }
}
