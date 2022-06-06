<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbrigosModel extends Model
{
    use HasFactory;

    protected $table='abrigos';

    protected $fillaable=[
        'image',
        'razaoSocial',
        'email',
        'cnpj',
        'senha',
        'telefone',
        'endereco',
        'bairro',
        'cep',
        'cidade',
        'numeroResidencia'
        

    ];
}
