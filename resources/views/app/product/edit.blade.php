@extends('layouts.app')

@section('content')
    <h3>Editar product</h3>
    @include('form._form_errors')
    {{ Form::model($product,['route' => ['products.update',$product->id], 'method' => 'PUT' ]) }}
        @include('app.product._form')
        <button type="submit" class="btn btn-primary">Salvar</button>
    {{ Form::close() }}
@endsection