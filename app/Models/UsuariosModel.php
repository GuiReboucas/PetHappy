<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuariosModel extends Model
{
    use HasFactory;

    protected $table='usuarios';

    protected $fillaable=[
        'image',
        'nome',
        'cpf',
        'email',
        'senha',
        'telefone',
        'endereco',
        'bairro',
        'cidade',
        'estado',
        'cep',
        'numerocasa',
        'observacao',
        'doacao'
        
        

    ];
}
