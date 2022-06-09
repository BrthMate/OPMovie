<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre_models', function (Blueprint $table) {
            $table->id();
            $table->string("Genre");
            $table->timestamps();
        });

        $genreList = ["Akció","Komédia","Dráma","Fantasy","Horror","Western","Krimi","Dokumentum","Animációs"];
        
        for ($i = 0; $i < sizeof($genreList); $i++) {
            DB::table('Genre_models')->insert(
                array(
                    'Genre' => $genreList[$i],
                )
            );
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genre_models');
    }
};
