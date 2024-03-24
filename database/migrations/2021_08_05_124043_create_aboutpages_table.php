<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutpagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutpages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pages_id')->nullable()->constrained();
            $table->string('banner_heading')->nullable();
            $table->string('banner_sub_heading')->nullable();
            $table->text('banner_content')->nullable();
            $table->string('banner_image')->nullable();
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
        Schema::dropIfExists('aboutpages');
    }
}
