<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $table = 'Produtos';


    protected $fillable = [
        'nome',
        'estoque',
        'marca',
        'categoria_id',
        'forn_id'
    ];


    public function Categoria()
    {
        return $this->belongsTo(CategoriasModel::class, 'categorias_id' );
    }

    public function Fornecedor()
    {
        return $this->belongsTo(FornecedoresModel::class, 'forn_id' );
    }
}
