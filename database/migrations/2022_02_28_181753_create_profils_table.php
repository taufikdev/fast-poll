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
        Schema::create('profils', function (Blueprint $table) {
            $table->bigIncrements('Id_Profil');
            $table->unsignedBigInteger('Id_Acc');
            $table->foreign('Id_Acc')->references('Id_Acc')->on('accounts');
            $table->unsignedBigInteger('Id_Add');
            $table->foreign('Id_Add')->references('Id_Add')->on('address');
            $table->string('Description');
            $table->string('Experience');
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
        Schema::dropIfExists('profils');
    }
};
