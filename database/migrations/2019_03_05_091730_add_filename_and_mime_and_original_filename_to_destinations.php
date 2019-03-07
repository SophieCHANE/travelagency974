<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFilenameAndMimeAndOriginalFilenameToDestinations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()            
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('destinate');
            $table->string('title');
            $table->integer('price');
            $table->date('date_departure');
            $table->date('date_return');
            $table->string('description');
            $table->integer('percentage_discount');
            $table->date('date_start_discount');
            $table->date('date_end_discount');
            $table->integer('number_available');
            $table->integer('number_reserved');            
            $table->string('filename')->nullable();
            $table->string('mime')->nullable();
            $table->string('original_filename')->nullable();
            $table->string('filename_un')->nullable();
            $table->string('mime_un')->nullable();
            $table->string('original_filename_un')->nullable();
            $table->string('filename_deux')->nullable();
            $table->string('mime_deux')->nullable();
            $table->string('original_filename_deux')->nullable();
            $table->integer('user_id');
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
        Schema::dropIfExists('destinations');
    }
}
