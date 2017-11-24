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
            $table->enum('type', ['general,special']);
            $table->integer('added_by');
            $table->timestamps();

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



