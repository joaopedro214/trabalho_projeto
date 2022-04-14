@extends('layouts.layout')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cadastro usuarios</h3>
        </div>
        
        <div class="card-body">


            <form>
                <div class="mb-3">
                    <label>ID</label>
                    <input type="name" class="form-control" id="id" disabled="true">
                </div>
                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" class="form-control" id="Name">
                </div>
                <div class="mb-3">
                    <label>E-mail</label>
                    <input type="text" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label>Senha</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="mb-3">
                  <label>Confirmar senha</label>
                  <input type="password" class="form-control" id="password_confirm">
              </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ativo</label>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="/usuarios">
                <button type="button" class="btn btn-default">Voltar</button>
                </a>
            </form>
        </div>
    </div>


@stop
