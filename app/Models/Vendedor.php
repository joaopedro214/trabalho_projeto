<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = 'laravelorm';

    protected $fillable = [
        'nome',
        'telefone'
        
    ];
}
