@extends('layouts.app')
@section('styles')
@section('content')
    <section class="jobs-category-section" style="height: 100vh;">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
    <!-- jobs that are available shown for users -->
                        <div class="card-header">Available jobs</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
    <!-- for each job the title of the job shown in the front page when user logs in -->
                            @if($jobs)

                               <ul class="list-group">
                                    @foreach($jobs as $job)
                                        <li class="list-group-item">
                                            <a href="{{ route('job.detail.frontend',['slug' => $job->slug]) }}">
                                                {{ $job->title }}
                                            </a>
                                              <div class="jobloc"><label class="fulltime">$ {{ $job->salary_range}}</label>   <span>{{ $job->job_location}}</span></div>
                                        </li>

                                    @endforeach
                                </ul>
                            @endif


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
