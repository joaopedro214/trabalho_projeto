@extends('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Fornecedor</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if (isset($erro))
                <div class="alert alert-danger" role="alert">
                    Ocorreram problemas ao tentar salvar o registro!
                </div>
            @endif

            <form action="/fornecedores-save/{{$fornecedor->id}}" method="post">
                @csrf
                <div class="mb-3">
                    <label>ID</label>
                    <input type="text" class="form-control" id="id" name="id" disabled="true" value="{{$fornecedor->id}}">
                </div>
                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{$fornecedor->nome}}">
                </div>
                <div class="mb-3">
                    <label>CNPJ</label>
                    <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{$fornecedor->cnpj}}">
                </div>
                <div class="mb-3">
                    <label>Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" value="{{$fornecedor->telefone}}">
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{$fornecedor->email}}">
                </div>
                
                
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="/fornecedores">
                  <button type="button" class="btn btn-default">Voltar</button>
                </a>
            </form>
        </div>
    </div>
@stop