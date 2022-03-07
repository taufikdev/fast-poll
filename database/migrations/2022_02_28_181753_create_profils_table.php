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
            $table->bigIncrements('id_profil');
            $table->unsignedBigInteger('id_acc');
            $table->foreign('id_acc')->references('id_acc')->on('accounts');
            $table->unsignedBigInteger('id_add');
            $table->foreign('id_add')->references('id_add')->on('address');
            $table->string('description');
            $table->string('experience');
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
