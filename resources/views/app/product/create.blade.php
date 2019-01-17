@extends('layouts.app')

@section('content')
    <h3>Novo produto</h3>
    @include('form._form_errors')
    {{ Form::open(['route' => 'products.store']) }}
        @include('app.product._form')
        <button type="submit" class="btn btn-primary">Criar</button>
    {{ Form::close() }}
@endsection