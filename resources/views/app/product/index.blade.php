@extends('layouts.app')

@section('content')
    <h3>Listagem de produtos</h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <td>
                <a class="btn btn-primary" href="{{ route('products.create') }}">Criar novo</a>
            </td>
        </tr>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->category->name }}</td>
                <td>
                    <a href="{{route('products.edit',['product' => $product->id])}}">Editar</a> |
                    <a href="{{route('products.show',['product' => $product->id])}}">Ver</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection