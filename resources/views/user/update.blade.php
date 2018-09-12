@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Profile Update') }}</div>

                    <div class="card-body">
                        <form method="POST" aria-label="{{ __('Update') }}">
                            @csrf

                            @include("partials.form.input-text",[
                                'name' => 'name',
                                'label' => 'Name',
                                'model' => $user
                            ])

                            @include("partials.form.input-text",[
                                'name' => 'address',
                                'label' => 'Address',
                                'model' => $user
                            ])

                            @include("partials.form.input-text",[
                                'name' => 'mobile_number',
                                'label' => 'Mobile Number',
                                'model' => $user
                            ])


                            @include("partials.form.input-select",[
                                'name' => 'gender',
                                'label' => 'Gender',
                                'model' => $user,
                                'options' => [
                                    'Male' => 'Male',
                                    'Female' => 'Female',
                                    'Other' => 'Other'
                                ]
                            ])

                            @include("partials.form.input-select",[
                                'name' => 'education',
                                'label' => 'Education',
                                'model' => $user,
                                'options' => [
                                    'Diploma' => 'Diploma',
                                    'Under-Grad' => 'Under-Grad',
                                    'Graduate' => 'Graduate',
                                    'Phd' => 'Phd'
                                ]
                            ])

                            @include("partials.form.input-text",[
                                'name' => 'expected_salary',
                                'label' => 'Expected Salary',
                                'model' => $user
                            ])

                            @include("partials.form.input-text",[
                                'name' => 'skills',
                                'label' => 'Job Skills',
                                'model' => $user
                            ])

                            <div class="form-group row">
                                <label for="experience" class="col-md-4 col-form-label text-md-right">{{ __('Experience') }}</label>

                                <div class="col-md-3">
                                    <input id="experience" type="text"
                                           class="form-control{{ $errors->has('experience') ? ' is-invalid' : '' }}"
                                           name="experience"
                                           placeholder="Years of expereince"
                                           value="{{ old('experience') ? old('experience') : $user->experience }}" required autofocus>

                                    @if ($errors->has('experience'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('experience') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-3">
                                    <input id="field_of_experience" type="text"
                                           class="form-control{{ $errors->has('field_of_experience') ? ' is-invalid' : '' }}"
                                           name="field_of_experience"
                                           placeholder="Field of experience"
                                           value="{{ old('field_of_experience') ? old('field_of_experience') : $user->field_of_experience }}" required autofocus>

                                    @if ($errors->has('field_of_experience'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('field_of_experience') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            @include("partials.form.input-text",[
                                'name' => 'preferred_distance_to_work',
                                'label' => 'Distance to work',
                                'model' => $user
                            ])

                            @include("partials.form.input-text",[
                                'name' => 'preferred_location',
                                'label' => 'Prefered Location',
                                'model' => $user
                            ])

                            @include("partials.form.input-text",[
                                'name' => 'email',
                                'label' => 'E-Mail Address',
                                'model' => $user,
                                'attrs' => ['required' => true]
                            ])

                            @include("partials.form.input-text",[
                                'name' => 'password',
                                'label' => 'Password',
                            ])

                            @include("partials.form.input-text",[
                                'name' => 'password_confirmation',
                                'label' => 'Confirm Password',
                            ])

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
