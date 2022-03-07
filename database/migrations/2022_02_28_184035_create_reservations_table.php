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
            $table->bigIncrements('id_resevration');
            $table->unsignedBigInteger('id_affect');
            $table->foreign('id_affect')->references('id_affect')->on('affectations');
            $table->unsignedBigInteger('id_student');
            $table->foreign('id_student')->references('id_acc')->on('accounts');
            $table->date('date_time');
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
