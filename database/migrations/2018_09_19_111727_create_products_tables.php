<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table categories
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name_ua');
            $table->string('name_en');
            $table->string('image')->nullable();
            $table->string('desc')->nullable();
            $table->string('desc_ua')->nullable();
            $table->string('desc_en')->nullable();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->enum('type', ['product', 'post', 'page', 'other'])->default('other');
            $table->timestamps();
        });

        // Create table products
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name_ua');
            $table->string('name_en');
            $table->string('image')->nullable();
            $table->text('text');
            $table->text('text_ua');
            $table->text('text_en');
            $table->enum('view', ['yes', 'no'])->default('yes');
            $table->integer('categories_id')->unsigned();
            $table->foreign('categories_id')->references('id')->on('categories')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        // Create table posts
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name_ua');
            $table->string('name_en');
            $table->string('image')->nullable();
            $table->text('short_desc')->nullable();
            $table->text('short_desc_ua')->nullable();
            $table->text('short_desc_en')->nullable();
            $table->text('text');
            $table->text('text_ua');
            $table->text('text_en');
            $table->enum('view', ['yes', 'no'])->default('yes');
            $table->integer('categories_id')->unsigned();
            $table->foreign('categories_id')->references('id')->on('categories')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

        // Create table pages
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name_ua');
            $table->string('name_en');
            $table->string('image')->nullable();
            $table->text('short_desc')->nullable();
            $table->text('short_desc_ua')->nullable();
            $table->text('short_desc_en')->nullable();
            $table->text('text');
            $table->text('text_ua');
            $table->text('text_en');
            $table->enum('view', ['yes', 'no'])->default('yes');
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
        Schema::drop('posts');
        Schema::drop('products');
        Schema::drop('categories');
        Schema::drop('pages');
    }
}
