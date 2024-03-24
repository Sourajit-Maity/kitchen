<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('recipe_name');
            $table->string('recipe_description');
            $table->foreignId('recipe_category_id')->nullable()->references('id')->on('recipe_categories')->onDelete('cascade');
            $table->text('recipe_video_path')->nullable();
            $table->foreignId('added_by_id')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->boolean('active')->default(false); 
            $table->timestamps();
            $table->softDeletes();
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
