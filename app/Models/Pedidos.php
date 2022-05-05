<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;

    protected $table = 'Pedidos';

    protected $fillable = [
        'valor',
        'data',
        'forma_pagamento',
        'cliente_id',
        'vendedor_id',
        'status_ped_id'
    ];

    public function Clientes()
    {
        return $this->belongsTo(ClientesModel::class, 'cliente_id');
    }

    public function Vendedor()
    {
        return $this->belongsTo(VendedorModel::class, 'vendedor_id');
    }

    public function Status_ped()
    {
        return $this->belongsTo(Status_pedModel::class, 'status_ped_id');
    }

}
