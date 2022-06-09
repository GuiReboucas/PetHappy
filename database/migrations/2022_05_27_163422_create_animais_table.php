<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animais', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('image');
            $table->string('nome');
            $table->string('especie');
            $table->string('raca');
            $table->date('nascimento');
            $table->string('sexo');
            $table->integer('peso');
            $table->string('dadosSaude');
            $table->string('observacao');
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animais');
    }
}
