@extends('layouts.app')

@section('content')
    <h3>Editar categoria</h3>
    @include('form._form_errors')
    {{ Form::model($category,['route' => ['categories.update',$category->id], 'method' => 'PUT' ]) }}
        @include('app.category._form')
        <button type="submit" class="btn btn-primary">Salvar</button>
    {{ Form::close() }}
@endsection