<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
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

    protected $table = 'animal';
    public $timestamps = false;
}
