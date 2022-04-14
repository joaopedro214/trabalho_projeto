@extends('layouts.layout' , ['title' => 'Produtos'])

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Produtos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <a href="/produtos-add">
                <button type="button" class="btn btn-block btn-outline-primary mb-3">Novo</button>
            </a>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Ações</th>
                        <th>Codigo</th>
                        <th>Descrição</th>
                        <th>Código interno</th>
                        <th>Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>radicional produto brasileiro à base de amendoim, a Paçoquita é líder nacional no seu segmento e conquista consumidores e clientes a cada dia. Graças ao seu diferenciado sabor e um rigoroso controle de qualidade e de matéria-prima, é um produto apreciado por consumidores de todas as idades há mais de 25 anos.</td>
                        <td>55585</td>
                        <td>Alimento</td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>radicional produto brasileiro à base de amendoim, a Paçoquita é líder nacional no seu segmento e conquista consumidores e clientes a cada dia. Graças ao seu diferenciado sabor e um rigoroso controle de qualidade e de matéria-prima, é um produto apreciado por consumidores de todas as idades há mais de 25 anos.</td>
                        <td>55585</td>
                        <td>Alimento</td>
                    </tr>


                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>radicional produto brasileiro à base de amendoim, a Paçoquita é líder nacional no seu segmento e conquista consumidores e clientes a cada dia. Graças ao seu diferenciado sabor e um rigoroso controle de qualidade e de matéria-prima, é um produto apreciado por consumidores de todas as idades há mais de 25 anos.</td>
                        <td>55585</td>
                        <td>Alimento</td>
                    </tr>


                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>radicional produto brasileiro à base de amendoim, a Paçoquita é líder nacional no seu segmento e conquista consumidores e clientes a cada dia. Graças ao seu diferenciado sabor e um rigoroso controle de qualidade e de matéria-prima, é um produto apreciado por consumidores de todas as idades há mais de 25 anos.</td>
                        <td>55585</td>
                        <td>Alimento</td>
                    </tr>


                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>radicional produto brasileiro à base de amendoim, a Paçoquita é líder nacional no seu segmento e conquista consumidores e clientes a cada dia. Graças ao seu diferenciado sabor e um rigoroso controle de qualidade e de matéria-prima, é um produto apreciado por consumidores de todas as idades há mais de 25 anos.</td>
                        <td>55585</td>
                        <td>Alimento</td>
                    </tr>



            </table>
        </div>
        <!-- /.card-body -->
    </div>

@stop