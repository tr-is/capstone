@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('User Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="name"
                                           value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text"
                                           class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                           name="address"
                                           value="{{ old('address') }}" required autofocus>

                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mobile_number" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>

                                <div class="col-md-6">
                                    <input id="mobile_number" type="text"
                                           class="form-control{{ $errors->has('mobile_number') ? ' is-invalid' : '' }}"
                                           name="mobile_number"
                                           value="{{ old('mobile_number') }}" required autofocus>

                                    @if ($errors->has('mobile_number'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobile_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                <div class="col-md-6">
                                    <select id="gender" type="text"
                                            class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}"
                                            name="gender">
                                        <option value="male" @if(old('gender') == 'male') selected @endif>Male</option>
                                        <option value="female" @if(old('gender') == 'female') selected @endif>Female</option>
                                        <option value="other" @if(old('gender') == 'other') selected @endif>Other</option>
                                    </select>

                                    @if ($errors->has('gender'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">Education</label>

                                <div class="col-md-6">
                                    <select id="gender" type="text"
                                            class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}"
                                            name="gender">
                                        <option value="male" @if(old('gender') == 'male') selected @endif>Diploma</option>
                                        <option value="male" @if(old('gender') == 'male') selected @endif>Under-Grad</option>
                                        <option value="female" @if(old('gender') == 'female') selected @endif>Graduate</option>
                                        <option value="other" @if(old('gender') == 'other') selected @endif>Phd</option>
                                    </select>

                                    @if ($errors->has('gender'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="categories" class="col-md-4 col-form-label text-md-right">Expected Salary</label>

                                <div class="col-md-6">
                                    <input id="categories" type="text"
                                           class="form-control{{ $errors->has('categories') ? ' is-invalid' : '' }}"
                                           name="categories"
                                           placeholder="$"
                                           value="{{ old('categories') }}" required autofocus>

                                    @if ($errors->has('categories'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('categories') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="categories" class="col-md-4 col-form-label text-md-right">{{ __('Job Skills') }}</label>

                                <div class="col-md-6">
                                    <input id="categories" type="text"
                                           class="form-control{{ $errors->has('categories') ? ' is-invalid' : '' }}"
                                           name="categories"
                                           placeholder="Eg: web developer, java developer, android"
                                           value="{{ old('categories') }}" required autofocus>

                                    @if ($errors->has('categories'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('categories') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="categories" class="col-md-4 col-form-label text-md-right">{{ __('Experience') }}</label>
    
                                <div class="col-md-3">
                                    <input id="categories" type="text"
                                           class="form-control{{ $errors->has('categories') ? ' is-invalid' : '' }}"
                                           name="categories"
                                           placeholder="Years of expereince"
                                           value="{{ old('categories') }}" required autofocus>

                                    @if ($errors->has('categories'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('categories') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-3">
                                    <input id="categories" type="text"
                                           class="form-control{{ $errors->has('categories') ? ' is-invalid' : '' }}"
                                           name="categories"
                                           placeholder="Field of experience"
                                           value="{{ old('categories') }}" required autofocus>

                                    @if ($errors->has('categories'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('categories') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="categories" class="col-md-4 col-form-label text-md-right">{{ __('Distance from home') }}</label>

                                <div class="col-md-6">
                                    <input id="categories" type="text"
                                           class="form-control{{ $errors->has('categories') ? ' is-invalid' : '' }}"
                                           name="categories"
                                           placeholder="Example: 5km from house."
                                           value="{{ old('categories') }}" required autofocus>

                                    @if ($errors->has('categories'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('categories') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
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
