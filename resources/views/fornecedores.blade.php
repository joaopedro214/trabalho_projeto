@extends('layouts.layout', ['title' => 'Fornecedores'])

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Fornecedores</h3>
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

            <a href="/fornecedores-add">
                <button type="button" class="btn btn-block btn-outline-primary mb-3">Nova</button>
            </a>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Ações</th>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Cnpj</th>
                        <th>Telefone</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista as $fornecedor)
                        <tr>
                            <td>
                                <a class="btn btn-primary" href="/fornecedores-edit/{{$fornecedor->id}}">Editar</a>
                                <a class="btn btn-danger" href="/fornecedores-delete/{{$fornecedor->id}}">Excluir</a>
                            </td>
                            <td>{{$fornecedor->id}}</td>
                            <td>{{$fornecedor->nome}}</td>
                            <td>{{$fornecedor->cnpj}}</td>
                            <td>{{$fornecedor->telefone}}</td>
                            <td>{{$fornecedor->email}}</td>
                
                        </tr>
                    @endforeach
                </tbody>
                    
            </table>
        </div>
        <!-- /.card-body -->
    </div>

@stop
