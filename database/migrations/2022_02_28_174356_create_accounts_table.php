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
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('Id_Acc');    
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('Phon');
            $table->binary('photo');
            $table->string('Mail')->unique();
            $table->string('password');
            $table->enum('Type', ['Admin', 'Prof']);
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
        Schema::dropIfExists('accounts');
    }
};
