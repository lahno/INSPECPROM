<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table types_gallery
        Schema::create('types_gallery', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('display_name');
            $table->timestamps();
        });

        // Create table gallery
        Schema::create('gallery', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name_ua');
            $table->string('name_en');
            $table->string('image');
            $table->string('image_mid');
            $table->string('image_small');
            $table->enum('view', ['yes', 'no'])->default('yes');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types_gallery')
                ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('gallery');
        Schema::drop('types_gallery');
    }
}
