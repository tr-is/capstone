<div class="form-group row @if ($errors->has($name)) has-error @endif">
    <label for="{{ $name }}"
           class="col-md-2 col-form-label text-md-right">{{ __("{$label}") }}</label>
    <div class="col-md-10">
        <textarea id="{{ $name }}"
                  type="text"
                  class="form-control text-editor {{ $errors->has($name) ? ' is-invalid' : '' }}"
                  name="{{ $name }}"
                  rows="10"
                  required>@if($model && old($name) == ''){{ $model->$name }}@else{{ old($name) }}@endif</textarea>

        @if ($errors->has($name))
            <span class="text-danger" role="alert">
                <strong>{{ $errors->first($name) }}</strong>
            </span>
        @endif
    </div>
</div>