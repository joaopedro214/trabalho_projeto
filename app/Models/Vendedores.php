<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedores extends Model
{
    protected $table = 'vendedor';

    protected $fillable = [
        'nome',
        'telefone'
        
    ];
}
