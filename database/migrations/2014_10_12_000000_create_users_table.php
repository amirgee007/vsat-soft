<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();;
            $table->string('user_name')->nullable();;
            $table->string('email')->unique();
            $table->string('password');
            $table->string('cell_num')->nullable();
            $table->string('phone_num')->nullable();
            $table->string('country')->nullable();;
            $table->dateTime('date_of_birth')->nullable();;
            $table->string('profession')->nullable();;
            $table->string('profile_pic')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
