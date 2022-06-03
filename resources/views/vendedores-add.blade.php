@extends('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Vendedores</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if (isset($erro))
                <div class="alert alert-danger" role="alert">
                    Ocorreram problemas ao tentar salvar o registro!
                </div>
            @endif

            <form action="/vendedores-save/{{$vendedor->id}}" method="post">
                @csrf
                <div class="mb-3">
                    <label>ID</label>
                    <input type="text" class="form-control" id="id" name="id" disabled="true" value="{{$vendedor->id}}">
                </div>
                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{$vendedor->nome}}">
                </div>
                    <label>Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" value="{{$vendedor->telefone}}">
                </div>
                
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="/vendedores">
                  <button type="button" class="btn btn-default">Voltar</button>
                </a>
            </form>
        </div>
    </div>
@stop