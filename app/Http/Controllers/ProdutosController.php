<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function lista() {
        return view('produtos');
    }

    public function add() {
        return view('produtos-add');
    }
}
