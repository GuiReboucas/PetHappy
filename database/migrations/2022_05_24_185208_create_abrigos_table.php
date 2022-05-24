<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbrigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abrigos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('logo');
            $table->string('nome');
            $table->string('historia');
            $table->string('colaborador');
            $table->string('funcao');
            $table->string('localizacao');
            $table->string('hora_func');
            $table->string('evento1');
            $table->string('img_evento1');
            $table->string('evento2');
            $table->string('img_evento2');
            $table->string('evento3');
            $table->string('img_evento3');
            $table->string('pix');
            $table->string('banco');
            $table->string('agencia');
            $table->string('conta');
            $table->string('cnpj');
            $table->string('local');
            $table->string('endereco');
            $table->string('animais_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abrigos');
    }
}
