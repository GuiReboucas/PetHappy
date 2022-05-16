<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbrigoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abrigo', function (Blueprint $table) {
            $table->id();
            $table->string('razaoSocial');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('cnpj');
            $table->integer('telefone');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->integer('cep');
            $table->integer('numeroAbrigo');

            $table->rememberToken();
            $table->timestamps();


            $table->unsignedBigInteger('animais_ID');
            
            $table->foreign('animais_ID')->references('id')->on('animais');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abrigo');
    }
}
