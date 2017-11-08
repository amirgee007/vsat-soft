<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {

            $table->increments('document_id');
            $table->string('file_name');
            $table->string('file_upload_name');
            $table->string('type');
            $table->integer('added_by_user_id')->nullable();

//        doc_type(general,special)

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}



