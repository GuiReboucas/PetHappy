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

            $table->string('image');
            $table->string('razaoSocial');
            $table->string('email');
            $table->string('cnpj');
            $table->string('senha');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cep');
            $table->string('cidade');
            $table->string('numeroResidencia');
            

            $table->unsignedBigInteger('animais_id');
           
            $table->foreign('animais_id')->references('id')->on('animais');
            

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
