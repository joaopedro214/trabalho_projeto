<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'laravelorm';
    

    protected $fillable = [
        'nome',
        'cpf',
        'UF',
        'cidade',
        'bairro',
        'cep',
        'rua',
        'endereco',
        'telefone'
    ];

    
}
