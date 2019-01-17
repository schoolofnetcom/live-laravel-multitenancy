<div class="form-group">
    {{ $slot }}
    @include('form._help_block',['field' => $field])
</div>