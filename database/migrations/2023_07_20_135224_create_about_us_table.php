<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->json('images');
            $table->string('top_title');
            $table->string('top_title_ar');
            $table->longText('top_description');
            $table->longText('top_description_ar');
            $table->string('down_title');
            $table->string('down_title_ar');
            $table->longText('down_description');
            $table->longText('down_description_ar');
            $table->unsignedBigInteger('year');
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
        Schema::dropIfExists('about_us');
    }
}
