<div class="form-group row @if ($errors->has($name)) has-error @endif">
    <label for="{{ $name }}"
           class="col-md-4 col-form-label text-md-right">{{ __("{$label}") }}</label>
    <div class="col-md-6">
        <div class="input-group date">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input type="text" id="{{ $name }}"
                   class="form-control {{ $errors->has($name) ? ' is-invalid' : '' }} datepicker"
                   name="{{ $name }}"
                   value="@if($model && old($name) == ''){{ $model->$name }}@else{{ old($name) }}@endif"
                   required>
        </div>
    </div>
</div>