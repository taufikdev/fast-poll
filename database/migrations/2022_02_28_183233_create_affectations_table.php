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
    public function up()
    {
        Schema::create('affectations', function (Blueprint $table) {
            $table->bigincrements('Id_Affect');
            
            $table->unsignedBigInteger('Id_Profil');
            $table->foreign('Id_Profil')->references('Id_Profil')->on('profils');
            $table->unsignedBigInteger('Id_Cours');
            $table->foreign('Id_Cours')->references('Id_Cours')->on('cours');
            $table->unsignedBigInteger('Id_Niveau');
            $table->foreign('Id_Niveau')->references('Id_Niveau')->on('niveaus');
            $table->integer('Price');
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
        Schema::dropIfExists('affectations');
    }
};
