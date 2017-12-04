<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('ticket_id');
            $table->string('subject');
            $table->longText('description');
            $table->string('type');
            $table->string('priority');
            $table->enum('status', ['open','closed'])->default('open');
            $table->integer('site_id')->index()->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->timestamp('closed_at')->nullable();
            $table->integer('added_by');
            $table->timestamps();
        });


//        Schema::create('ticket_categories', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('name');
//            $table->string('color');
//        });


        Schema::create('ticket_comments', function (Blueprint $table) {
            $table->increments('comment_id');
            $table->text('content');
            $table->integer('user_id')->unsigned();
            $table->integer('ticket_id')->unsigned();
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
        Schema::dropIfExists('tickets');
//        Schema::dropIfExists('ticket_categories');
        Schema::dropIfExists('ticket_comments');
    }
}
