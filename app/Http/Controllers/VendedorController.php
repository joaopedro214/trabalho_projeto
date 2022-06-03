<?php

namespace App\Http\Controllers;

use App\Models\Vendedor;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    public function lista() {
        $lista = Vendedor::all();
        return view('vendedores', ['lista' => $lista]);
    }

    public function add() {
        return view('vendedores-form', ['Vendedor' => new Vendedor()]);
    }

    public function edit($id) {
        $vendedor = Vendedor::find($id);
        return view('vendedores-form', ['vendedor' => $vendedor]);
    }

    public function save(Request $request, $id = null) {
        $salvou = false;
        if (empty($id)) {
            // Se não recebeu um id, então deve criar um novo registro
            $salvou = Vendedor::create($request->all());
        } else {
            // Caso contrário, deverá atualizar o registro do id obtido
            $salvou = Vendedor::where('id', $id)->update($request->except('_token', '_method'));
        }
        if ($salvou) {
            return $this->lista();
        }
        return view('vendedores-form', ['erro' => true]);
    }

    public function delete($id) {
        $excluiu = Vendedor::where('id', $id)->delete();
        if ($excluiu) {
            return $this->lista();
        }
        return view('vendedores', ['erro' => true]);
    }
}
