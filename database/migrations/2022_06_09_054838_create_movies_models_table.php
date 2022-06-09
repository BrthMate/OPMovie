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

     //['Title',"Views","Src","GenreID","Banner","Duration","AgeLimit","Resolution","Desc","Appearance",];   
    public function up()
    {
        Schema::create('movies_models', function (Blueprint $table) {
            $table->id();
            $table->string("Title");
            $table->longText("Banner");
            $table->double("Views");
            $table->longText("Src");
            $table->foreignId("GenreID");
            $table->string("AgeLimit");
            $table->string("Duration");
            $table->string("Resolution");
            $table->longText("Desc");
            $table->date("Appearance");
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
        Schema::dropIfExists('movies_models');
    }
};
