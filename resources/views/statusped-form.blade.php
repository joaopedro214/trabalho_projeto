@extends('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Status-ped</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if (isset($erro))
                <div class="alert alert-danger" role="alert">
                    Ocorreram problemas ao tentar salvar o registro!
                </div>
            @endif

            <form action="/statusped-save/{{$statusped->id}}" method="post">
                @csrf
                <div class="mb-3">
                    <label>ID</label>
                    <input type="text" class="form-control" id="id" name="id" disabled="true" value="{{$statusped->id}}">
                </div>
                <div class="mb-3">
                    <label>Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" value="{{$statusped->descricao}}">
                </div>
           
                
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="/statusped">
                  <button type="button" class="btn btn-default">Voltar</button>
                </a>
            </form>
        </div>
    </div>
@stop