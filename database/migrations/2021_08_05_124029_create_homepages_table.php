<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pages_id')->nullable()->constrained();
            $table->string('banner_heading')->nullable();
            $table->string('banner_sub_heading')->nullable();
            $table->text('banner_content')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('content1_heading')->nullable();
            $table->longText('content1_text')->nullable();
            $table->string('content1_image')->nullable();
            $table->string('content2_heading')->nullable();
            $table->longText('content2_text')->nullable();
            $table->string('content2_image')->nullable();
            $table->string('content3_heading')->nullable();
            $table->longText('content3_text')->nullable();
            $table->string('content3_image')->nullable();
            $table->string('content4_heading')->nullable();
            $table->longText('content4_text')->nullable();
            $table->string('content4_image')->nullable();
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
        Schema::dropIfExists('homepages');
    }
}
