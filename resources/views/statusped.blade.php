@extends('layouts.layout', ['title' => 'StatusPed'])

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Status do pedido</h3>
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

            <a href="/statusped-add">
                <button type="button" class="btn btn-block btn-outline-primary mb-3">Nova</button>
            </a>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Ações</th>
                        <th>ID</th>
                        <th>Descrição</th>
                    
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista as $statusped)
                        <tr>
                            <td>
                                <a class="btn btn-primary" href="/statusped-edit/{{$statusped->id}}">Editar</a>
                                <a class="btn btn-danger" href="/statusped-delete/{{$statusped->id}}">Excluir</a>
                            </td>
                            <td>{{$statusped->id}}</td>
                            <td>{{$statusped->descricao}}</td>
                        
                
                        </tr>
                    @endforeach
                </tbody>
                    
            </table>
        </div>
        <!-- /.card-body -->
    </div>

@stop
