<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactpagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactpages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pages_id')->nullable()->constrained();
            $table->string('contact_heading')->nullable();
            $table->string('contact_sub_heading')->nullable();
            $table->text('address')->nullable();
            $table->string('contact_page_image')->nullable();
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
        Schema::dropIfExists('contactpages');
    }
}
