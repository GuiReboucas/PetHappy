<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimaisModel extends Model
{
    use HasFactory;

    protected $table='animais';

    protected $fillaable=[
        'image',
        'nome',
        'especie',
        'raca',
        'nascimento',
        'sexo',
        'peso',
        'dadosSaude',
        'observacao'       

    ];
}
