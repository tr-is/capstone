@extends('layouts.app')

@section('content')
    <section class="jobs-category-section" style="height: 100%; background-color:#0ca2a0">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card" style="background-color:#f0f8ff">
                        <div class="card-header" style="color: darkblue;  text-align: center; font-weight: 700; font-size: xx-large;">Available jobs</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <ul class="jobslist col">
                                @foreach($jobs->reverse() as $job)
                                <li class="col-md-4 col-sm-6">
                                    <div class="jobint" style="width:330%">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <h4><a href="{{ route('job.detail.frontend',['slug' => $job->slug]) }}">{{$job->title}}</a></h4>
                                                <div class="company">{{ $job->admin ? $job->admin->name : '' }}</div>
                                                <div class="jobloc">
                                                    <label style="color: darkgray; font-size: 13px; display: inline-block;">$ {{ $job->salary_range}}</label>
                                                    <br>
                                                  </br>
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
