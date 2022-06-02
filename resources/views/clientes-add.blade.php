@extends('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cadastro</h3>
        </div>
        
        <div class="card-body">
            @if (isset($erro))
                <div class="alert alert-danger" role="alert">
                    Ocorreram problemas ao tentar salvar o registro!
                </div>
            @endif
            <form action="/clientes-save/{{$clientes->id}}" method="post">
                @csrf
                <div class="mb-3">
                    <label>Codigo</label>
                    <input type="name" class="form-control" id="id" disabled="true">
                </div>
                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" class="form-control" id="Name">
                </div>
                <div class="mb-3">
                    <label>CPF/CNPJ</label>
                    <input type="text" class="form-control" id="cpf/cnpj">
                </div>
                <div class="mb-3">
                    <label>CEP</label>
                    <input type="text" class="form-control" id="cep">
                </div>
                <div class="mb-3">
                  <label>Cidade</label>
                  <input type="text" class="form-control" id="cidade">
              </div>
              <div class="mb-3">
                <label>Bairro</label>
                <input type="text" class="form-control" id="bairro">
            </div>
            <div class="mb-3">
                <label>Rua</label>
                <input type="text" class="form-control" id="rua">
            </div>
            <div class="mb-3">
                <label>Numero</label>
                <input type="text" class="form-control" id="numero">
            </div>
            <div class="mb-3">
                <label>Complemento</label>
                <input type="text" class="form-control" id="complemento">
            </div>
            <div class="mb-3">
                <label>Fone Residencial</label>
                <input type="text" class="form-control" id="foneresidencial">
            </div>
            <div class="mb-3">
                <label>Fone Celular</label>
                <input type="text" class="form-control" id="fonecelular">
            </div>
              <div class="mb-3">
                <label>E-mail</label>
                <input type="text" class="form-control" id="email">
            </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ativo</label>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="/clientes">
                <button type="button" class="btn btn-default">Voltar</button>
                </a>
            </form>
        </div>
    </div>


@stop