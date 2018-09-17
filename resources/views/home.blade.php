@extends('layouts.app')

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
                            <!--
                               <ul class="list-group">
                                    @foreach($jobs as $job)
                                        <li class="list-group-item">
                                            <a href="{{ route('job.detail.frontend',['slug' => $job->slug]) }}">
                                                {{ $job->title }}
                                            </a>
                                        </li>

                                    @endforeach
                                </ul>
                            @endif
                          -->
                          <ul class="jobslist row">
                            <!--Job 1-->
                            @foreach($jobs->reverse() as $job)
                            <li class="col-md-4 col-sm-6">

                              <div class="jobint">


                                <div class="row">
                                      <div class="col-md-12 col-sm-12">
                                        <h4><a href="{{ route('job.detail.frontend',['slug' => $job->slug]) }}">{{ $job->title }}</a></h4>
                                        <div class="company">{{ $job->admin ? $job->admin->name : '' }}</div>
                                        <div class="jobloc"><label class="fulltime">$ {{ $job->salary_range}}</label>   <span>{{ $job->job_location}}</span></div>
                                      </div>

                                </div>

                              </div>

                            </li>
                            @endforeach
                            <!--Job end-->
                          </ul>
                              @endif
                          </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
