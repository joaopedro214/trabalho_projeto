<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->float('valor')->nullable(true);
            $table->date('data');
            $table->string('forma_pagamento', 255);
            $table->foreignId('cliente_id')->constrained('cliente');
            $table->foreignId('vendedor_id')->constrained('vendedor');
            $table->foreignId('status_ped_id')->constrained('pedido');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
