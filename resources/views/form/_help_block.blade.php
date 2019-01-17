@if($errors->has($field))
    <span class="invalid-feedback">{{$errors->first($field)}}</span>
@endif