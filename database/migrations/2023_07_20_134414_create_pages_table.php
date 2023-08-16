<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('top_title');
            $table->string('top_title_ar');
            $table->longText('top_description');
            $table->longText('top_description_ar');
            $table->string('down_title');
            $table->string('down_title_ar');
            $table->text('down_description');
            $table->text('down_description_ar');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                ->on('categories')->references('id')
                ->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('pages');
    }
}
