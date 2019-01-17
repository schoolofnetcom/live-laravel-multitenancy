@component('form._form_group',['field' => 'name'])
    {{ Form::label('name','Nome') }}
    {{ Form::text('name',null,['class' => 'form-control'.($errors->has('name')?' is-invalid':'')]) }}
@endcomponent