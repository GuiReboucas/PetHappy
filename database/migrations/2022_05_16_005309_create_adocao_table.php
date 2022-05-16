<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdocaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adocao', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->string('observacao');

            $table->rememberToken();
            $table->timestamps();


            $table->unsignedBigInteger('animais_ID');
            $table->unsignedBigInteger('abrigo_ID');
            $table->unsignedBigInteger('usuarios_ID');
            
            $table->foreign('animais_ID')->references('id')->on('animais');
            $table->foreign('abrigo_ID')->references('id')->on('abrigo');
            $table->foreign('usuarios_ID')->references('id')->on('usuarios');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adocao');
    }
}
