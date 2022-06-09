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
            $table->timestamps();

            $table->date('data');
            $table->string('obsercacoes');

            $table->unsignedBigInteger('animais_id');
            $table->unsignedBigInteger('abrigos_id');
            $table->unsignedBigInteger('usuarios_id');
           
            $table->foreign('animais_id')->references('id')->on('animais');
            $table->foreign('abrigos_id')->references('id')->on('abrigos');
            $table->foreign('usuarios_id')->references('id')->on('usuarios');

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
