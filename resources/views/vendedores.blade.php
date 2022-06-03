@extends('layouts.layout', ['title' => 'Vendedores'])

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Vendedores</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if (isset($erro))
                <div class="alert alert-danger" role="alert">
                    Ocorreram problemas ao tentar excluir o registro!
                </div>
            @endif

            @if (isset($salvou))
                <div class="alert alert-success" role="alert">
                    Registro salvo com sucesso!
                </div>
            @endif

            <a href="/vendedor-add">
                <button type="button" class="btn btn-block btn-outline-primary mb-3">Nova</button>
            </a>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Ações</th>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                    
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista as $vendedor)
                        <tr>
                            <td>
                                <a class="btn btn-primary" href="/vendedores-edit/{{$vendedor->id}}">Editar</a>
                                <a class="btn btn-danger" href="/vendedores-delete/{{$vendedor->id}}">Excluir</a>
                            </td>
                            <td>{{$vendedor->id}}</td>
                            <td>{{$vendedor->nome}}</td>
                            <td>{{$vendedor->telefone}}</td>
                
                        </tr>
                    @endforeach
                </tbody>
                    
            </table>
        </div>
        <!-- /.card-body -->
    </div>

@stop
