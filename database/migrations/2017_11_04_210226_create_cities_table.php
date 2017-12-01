<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
			$table->increments('city_id');
            $table->string('city_name');
			$table->integer('country_id');
            $table->string('nationality');
            $table->string('lati')->nullable();
			$table->string('longi')->nullable();
            $table->boolean('is_active')->default(0);
            $table->dateTime('updated_at');
			});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
