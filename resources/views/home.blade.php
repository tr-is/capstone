@extends('layouts.app')

@section('content')
    <section class="jobs-category-section" style="height: 100vh;">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Available jobs</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <ul class="jobslist row">
                                @foreach($jobs as $job)
                                <li class="col-md-4 col-sm-6">
                                    <div class="jobint">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <h4><a href="{{ route('job.detail.frontend',['slug' => $job->slug]) }}">{{$job->title}}</a></h4>
                                                <div class="company">{{ $job->admin ? $job->admin->name : '' }}</div>
                                                <div class="jobloc">
                                                    <label class="fulltime">$ {{ $job->salary_range}}</label>
                                                    <label><span>Job Match: {{ $job->match  }}</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </section>

@endsection
