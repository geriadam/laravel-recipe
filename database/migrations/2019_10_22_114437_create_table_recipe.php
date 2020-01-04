<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRecipe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->string('title');
            $table->string('slug');
            $table->enum('difficulty', ['easy', 'medium', 'hard'])->default('easy');
            $table->string('prepare_time');
            $table->string('cooking_time');
            $table->integer('serves');
            $table->integer('calories')->nullable();
            $table->text('description')->nullable();
            $table->text('directions');
            $table->text('ingredients');
            $table->enum('status', ['active', 'deactive'])->default('active');
            $table->string('video_link')->nullable();
            $table->text('image')->nullable();
            $table->text('image_gallery')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
