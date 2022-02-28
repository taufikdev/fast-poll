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
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('Id_resevration');
            $table->unsignedBigInteger('Id_Affect');
            $table->foreign('Id_Affect')->references('Id_Affect')->on('affectations');
            $table->unsignedBigInteger('Id_Student');
            $table->foreign('Id_Student')->references('Id_Profil')->on('profils');
            $table->date('Date_Time');
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
        Schema::dropIfExists('reservations');
    }
};
