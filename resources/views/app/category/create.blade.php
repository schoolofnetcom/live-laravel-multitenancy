@extends('layouts.app')

@section('content')
    <h3>Nova categoria</h3>
    @include('form._form_errors')
    {{ Form::open(['route' => 'categories.store']) }}
        @include('app.category._form')
        <button type="submit" class="btn btn-primary">Criar</button>
    {{ Form::close() }}
@endsection