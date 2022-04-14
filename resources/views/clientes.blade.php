@extends('layouts.layout' , ['title' => 'Clientes'])

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Clientes</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <a href="/clientes-add">
                <button type="button" class="btn btn-block btn-outline-primary mb-3">Novo</button>
            </a>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Ações</th>
                        <th>Codigo</th>
                        <th>Nome</th>
                        <th>CPF/CNPJ</th>
                        <th>CEP</th>
                        <th>Cidade</th>
                        <th>Bairro</th>
                        <th>Rua</th>
                        <th>Numero</th>
                        <th>Complemento</th>
                        <th>Fone Residencial</th>
                        <th>Fone Celular</th>
                        <th>E-mail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>Patrickones</td>
                        <td>025.252.252.54/02211444544</td>
                        <td>95960000</td>
                        <td>Encantado</td>
                        <td>Centro</td>
                        <td>Ernesto Gregoire</td>
                        <td>40</td>
                        <td>Casa </td>
                        <td>3751-1703</td>
                        <td>8888888888888888888</td>
                        <td>patrola@hotmail.com</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>Patrickones</td>
                        <td>025.252.252.54/02211444544</td>
                        <td>95960000</td>
                        <td>Encantado</td>
                        <td>Centro</td>
                        <td>Ernesto Gregoire</td>
                        <td>40</td>
                        <td>Casa </td>
                        <td>3751-1703</td>
                        <td>8888888888888888888</td>
                        <td>patrola@hotmail.com</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>Patrickones</td>
                        <td>025.252.252.54/02211444544</td>
                        <td>95960000</td>
                        <td>Encantado</td>
                        <td>Centro</td>
                        <td>Ernesto Gregoire</td>
                        <td>40</td>
                        <td>Casa </td>
                        <td>3751-1703</td>
                        <td>8888888888888888888</td>
                        <td>patrola@hotmail.com</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>Patrickones</td>
                        <td>025.252.252.54/02211444544</td>
                        <td>95960000</td>
                        <td>Encantado</td>
                        <td>Centro</td>
                        <td>Ernesto Gregoire</td>
                        <td>40</td>
                        <td>Casa </td>
                        <td>3751-1703</td>
                        <td>8888888888888888888</td>
                        <td>patrola@hotmail.com</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>Patrickones</td>
                        <td>025.252.252.54/02211444544</td>
                        <td>95960000</td>
                        <td>Encantado</td>
                        <td>Centro</td>
                        <td>Ernesto Gregoire</td>
                        <td>40</td>
                        <td>Casa </td>
                        <td>3751-1703</td>
                        <td>8888888888888888888</td>
                        <td>patrola@hotmail.com</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>Patrickones</td>
                        <td>025.252.252.54/02211444544</td>
                        <td>95960000</td>
                        <td>Encantado</td>
                        <td>Centro</td>
                        <td>Ernesto Gregoire</td>
                        <td>40</td>
                        <td>Casa </td>
                        <td>3751-1703</td>
                        <td>8888888888888888888</td>
                        <td>patrola@hotmail.com</td>
                    </tr>



            </table>
        </div>
        <!-- /.card-body -->
    </div>

@stop