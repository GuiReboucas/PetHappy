<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abrigo extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'nome',
        'historia',
        'colaborador',
        'funcao',
        'localizacao',
        'hora_func',
        'evento1',
        'img_evento1',
        'evento2',
        'img_evento2',
        'evento3',
        'img_evento3',
        'pix',
        'banco',
        'agencia',
        'conta',
        'cnpj',
        'local',
        'endereco',
        'animais_id',
    ];
}
