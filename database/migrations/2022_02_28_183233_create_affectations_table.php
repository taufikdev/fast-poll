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
            $table->bigincrements('id_affect');           
            $table->unsignedBigInteger('id_profil');
            $table->foreign('id_profil')->references('id_profil')->on('profils');
            $table->unsignedBigInteger('id_cour');
            $table->foreign('id_cour')->references('id_cour')->on('cours');
            $table->unsignedBigInteger('id_niveau');
            $table->foreign('id_niveau')->references('id_niveau')->on('niveaus');
            $table->integer('price');
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
