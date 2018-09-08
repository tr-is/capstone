@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
@endsection

@section('content')
    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Jobs Create Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="@if(isset($model)) {{ route('admin.job.update',['id' => $model->id]) }} @else {{ route('admin.job.create') }} @endif">
                @csrf
                <div class="box-body">
                    <div class="col-md-6">
                        @include('partials.form.input-text',[
                            'label' => 'Title',
                            'name' => 'title',
                            'errors' => $errors,
                            'model' => isset($model) ? $model : null
                        ])
                    </div>
                    <div class="col-md-6">
                        @include('partials.form.input-text',[
                            'label' => 'Expereince Required',
                            'name' => 'experience',
                            'errors' => $errors,
                            'model' => isset($model) ? $model : null
                        ])
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                        @include('partials.form.input-text',[
                            'label' => 'Salary Range',
                            'name' => 'salary_range',
                            'errors' => $errors,
                            'model' => isset($model) ? $model : null
                        ])
                    </div>
                    <div class="col-md-6">
                        @include('partials.form.input-select',[
                            'label' => 'Salary Negotiable',
                            'name' => 'salary_negotiable',
                            'errors' => $errors,
                            'model' => isset($model) ? $model : null,
                            'options' => [
                                'Yes' => 1,
                                'No' => 0
                            ]
                        ])
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                        @include('partials.form.input-datepicker',[
                            'label' => 'Deadline',
                            'name' => 'deadline',
                            'errors' => $errors,
                            'model' => isset($model) ? $model : null
                        ])
                    </div>
                    <div class="col-md-6">
                        @include('partials.form.input-select',[
                            'label' => 'Preferred Gender',
                            'name' => 'preferred_gender',
                            'errors' => $errors,
                            'model' => isset($model) ? $model : null,
                            'options' => [
                                'Male' => 'male',
                                'Female' => 'female',
                                'Any' => 'any'
                            ]
                        ])
                    </div>
                    <!-- Two Extra Fields Start -->
                    <div class="col-md-6">
                        @include('partials.form.input-text',[
                            'label' => 'Skills',
                            'name' => 'skills_required',
                            'errors' => $errors,
                            'model' => isset($model) ? $model : null
                        ])
                    </div>
                    <div class="col-md-6">
                        @include('partials.form.input-text',[
                            'label' => 'Job Location',
                            'name' => 'job_location',
                            'errors' => $errors,
                            'model' => isset($model) ? $model : null
                        ])
                    </div>
                    <!-- Two Extra Fields End -->
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        @include('partials.form.input-text-editor',[
                            'label' => 'Specification',
                            'name' => 'specification',
                            'errors' => $errors,
                            'model' => isset($model) ? $model : null
                        ])
                    </div>
                    <div class="col-md-12">
                        @include('partials.form.input-text-editor',[
                            'label' => 'Education Level',
                            'name' => 'education_description',
                            'errors' => $errors,
                            'model' => isset($model) ? $model : null
                        ])
                    </div>
                    <div class="col-md-12">
                        @include('partials.form.input-text-editor',[
                            'label' => 'Job Description',
                            'name' => 'description',
                            'errors' => $errors,
                            'model' => isset($model) ? $model : null
                        ])
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    {{--<button type="reset" class="btn btn-default pull-right">Cancel</button>--}}
                    <button type="submit" class="btn btn-info pull-right">Create</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <script>
        $('.datepicker').datepicker({
            autoclose: true,
            format:'yyyy-mm-dd'
        })
        $('.text-editor').wysihtml5();
    </script>
@endsection
