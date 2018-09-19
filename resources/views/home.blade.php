@extends('layouts.app')
@section('styles')
@section('content')
    <section class="jobs-category-section" style="height: 1200px;background-color: rgb(0, 139, 139);">
        <div style="position: relative;display: block;padding: 1rem;margin-bottom: -2;
        border: 2px solid rgb(27, 197, 197);background-color: aliceblue;left: auto;width: 960px;
        margin-right: auto;margin-left: auto;max-width: 960px; height: 1200px">

            <div style="-webkit-box-pack: center !important;justify-content: center !important;position: relative;display: block;padding: 1rem; width: 954px;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;">
                <div class="col-md-8">
                    <div >
                      <!--card */-->
    <!-- jobs that are available shown for users -->
                        <div style="
    width: 1000px; font-size: x-large; text-align: center; color: rgb(15, 95, 175); font-weight: 900;">Available jobs</div>

                        <div style="width: 1100px; padding: 1.25rem; flex: 1 1 auto;">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
    <!-- for each job the title of the job shown in the front page when user logs in -->
                            @if($jobs)

                               <ul style="display: flex;-webkit-box-orient: vertical;-webkit-box-direction: normal;flex-direction: column;
                               padding-left: 10px;margin-bottom: 0px;background-color: aliceblue;-webkit-margin-before: 1em;-webkit-margin-after: 1em;-webkit-margin-start: 0px;-webkit-margin-end: 0px;-webkit-padding-start: 40px;display: list-item;text-align: -webkit-match-parent;
                               padding-right: 30px;padding-bottom: 20px;padding-top: 20px; width: 850px;">

                                    @foreach($jobs as $job)

                                        <li style="padding: 1rem;margin-bottom: -2px;border: 2px solid rgb(27, 197, 197);
                                        background-color: aliceblue;font-size:large;font-weight: 400; ">
<!---->             <div style="font-size: x-large">

                                            <a  href="{{ route('job.detail.frontend',['slug' => $job->slug])}}">
                                                {{ $job->title }}   
                                            </a> </div>
                                            <br>
                                              <div class="jobloc"style="color:grey"><label style="color:grey">$ {{ $job->salary_range}}</label> <br>  <span> {{ $job->job_location}} </span></div>
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
