<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //["Sid","EpisodeSrc"];

    public function up()
    {
        Schema::create('series_episode_models', function (Blueprint $table) {
            $table->id();
            $table->foreignId("Sid");
            $table->longText("EpisodeSrc");
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
        Schema::dropIfExists('series_episode_models');
    }
};
