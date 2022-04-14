@extends('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cadastro produtos</h3>
        </div>
        
        <div class="card-body">


            <form>
                <div class="mb-3">
                    <label>Codigo</label>
                    <input type="name" class="form-control" id="id" disabled="true">
                </div>
                <div class="mb-3">
                    <label>Descrição</label>
                    <input type="text" class="form-control" id="descricao">
                </div>
                <div class="mb-3">
                    <label>Código interno</label>
                    <input type="text" class="form-control" id="codigointerno">
                </div>
                <div class="mb-3">
                    <label>Categoria</label>
                    <input type="text" class="form-control" id="categoria">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ativo</label>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="/produtos">
                <button type="button" class="btn btn-default">Voltar</button>
                </a>
            </form>
        </div>
    </div>


@stop