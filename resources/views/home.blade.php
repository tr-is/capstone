@extends('layouts.app')
@section('styles')
@section('content')
    <section class="jobs-category-section" style="height: 100vh; background-color:#008b8b;">
        <div style="position:relative; display:block; padding:1rem 1rem; margin-bottom:-2px;     border: 2px solid rgb(27, 197, 197);
    background-color: aliceblue;">

            <div style="-webkit-box-pack: center!important; justify-content: center!important;    position: relative;
    display: block;
    padding: 1rem 1rem;
    margin-bottom: -2px;background-color: #f0f8ff;">
                <div class="col-md-8">
                    <div >
                      <!--card */-->
    <!-- jobs that are available shown for users -->
                        <div style="
    width: 1100px;font-size: x-large;
    text-align: center;
    color: #0f5faf;
    font-weight: 900;">Available jobs</div>

                        <div style="width: 1100px;padding-left: 10px;padding-right: 30px;    flex: 1 1 auto;
    padding: 1.25rem;">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
    <!-- for each job the title of the job shown in the front page when user logs in -->
                            @if($jobs)

                               <ul style="display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;background-color: aliceblue;">
                                    @foreach($jobs as $job)

                                        <li style="padding: 1rem 1rem;
    margin-bottom: -2px;    border: 2px solid rgb(27, 197, 197);
    background-color: aliceblue;">
<!---->
                                            <a href="{{ route('job.detail.frontend',['slug' => $job->slug])}}">
                                                {{ $job->title }}
                                            </a>
                                            <br>
                                              <div class="jobloc"><label>$ {{ $job->salary_range}}</label> <br>  <span> {{ $job->job_location}} </span></div>

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
