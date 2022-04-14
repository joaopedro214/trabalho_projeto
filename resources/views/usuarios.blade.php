@extends('layouts.layout' , ['title' => 'Usuarios'])

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de usuarios</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <a href="/usuarios-add">
                <button type="button" class="btn btn-block btn-outline-primary mb-3">Novo usuario</button>
            </a>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Ações</th>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Data criação</th>
                        <th>Data ultima alteração</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>Patrickones</td>
                        <td>teste@hotmail.com</td>
                        <td>30/02/2001 10:25</td>
                        <td>30/02/2001 10:25</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>2</td>
                        <td>Patrickones</td>
                        <td>teste@hotmail.com</td>
                        <td>30/02/2001 10:25</td>
                        <td>30/02/2001 10:25</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>3</td>
                        <td>Patrickones</td>
                        <td>teste@hotmail.com</td>
                        <td>30/02/2001 10:25</td>
                        <td>30/02/2001 10:25</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>4</td>
                        <td>Patrickones</td>
                        <td>teste@hotmail.com</td>
                        <td>30/02/2001 10:25</td>
                        <td>30/02/2001 10:25</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>5</td>
                        <td>Patrickones</td>
                        <td>teste@hotmail.com</td>
                        <td>30/02/2001 10:25</td>
                        <td>30/02/2001 10:25</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>6</td>
                        <td>Patrickones</td>
                        <td>teste@hotmail.com</td>
                        <td>30/02/2001 10:25</td>
                        <td>30/02/2001 10:25</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>7</td>
                        <td>Patrickones</td>
                        <td>teste@hotmail.com</td>
                        <td>30/02/2001 10:25</td>
                        <td>30/02/2001 10:25</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>8</td>
                        <td>Patrickones</td>
                        <td>teste@hotmail.com</td>
                        <td>30/02/2001 10:25</td>
                        <td>30/02/2001 10:25</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>9</td>
                        <td>Patrickones</td>
                        <td>teste@hotmail.com</td>
                        <td>30/02/2001 10:25</td>
                        <td>30/02/2001 10:25</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>10</td>
                        <td>Patrickones</td>
                        <td>teste@hotmail.com</td>
                        <td>30/02/2001 10:25</td>
                        <td>30/02/2001 10:25</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>11</td>
                        <td>Patrickones</td>
                        <td>teste@hotmail.com</td>
                        <td>30/02/2001 10:25</td>
                        <td>30/02/2001 10:25</td>
                    </tr>

            </table>
        </div>
        <!-- /.card-body -->
    </div>

@stop
