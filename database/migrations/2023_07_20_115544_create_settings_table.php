<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('logo');
            $table->text('banner');
            $table->string('title');
            $table->string('title_ar');
            $table->string('address');
            $table->string('address_ar');
            $table->string('phone');
            $table->string('email');
            $table->text('work_hours');
            $table->longText('map');
            $table->json('social_links');
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
        Schema::dropIfExists('settings');
    }
}
