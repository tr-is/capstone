@extends('layouts.app')

    <!-- Styles -->
@section('styles')
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
    </style>
@endsection

@section('content')
<!-- search job starts -->
    <div class="searchwrap">
        <div class="container">
            <h3>We will ensure to find the right path to your career.<span>Start yours today.</span></h3>
            <form>
                <div class="searchbar row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-5">
                         <input type="text"
                           name="query"
                           class="form-control"
                           placeholder="Search text"
                           value="{{ request('query') }}"
                           aria-label="Recipient's username"
                           aria-describedby="basic-addon2">
                    </div>
                    <div class="col-md-2">
                      <button class="btn btn-outline-secondary" type="submit">Search Job</button>

                    </div>
                </div>
            </form>
        </div>
    </div>

<!-- search jobs ends-->

<!-- How it Works start -->
<div class="section howitwrap">
  <div class="container">
    <!-- title start -->
    <div class="titleTop">
      <h3>How It <span>Works?</span></h3>
    </div>
    <!-- title end -->
    <ul class="howlist row">
          <!-- circle icons are shown through the steps-->
      <!--step 1-->
      <li class="col-md-4 col-sm-4">
        <div class="iconcircle"><i class="fa fa-user" aria-hidden="true"></i></div>
        <h4>Create An Account</h4>
        <p>Please create an account to proceed. </p>
      </li>
      <!--step 1 end-->

      <!--step 2-->
      <li class="col-md-4 col-sm-4">
        <div class="iconcircle"><i class="fa fa-black-tie" aria-hidden="true"></i></div>
        <h4>Search Desired Job</h4>
        <p>Now you may start to find the desired job your after.</p>
      </li>
      <!--step 2 end-->

      <!--step 3-->
      <li class="col-md-4 col-sm-4">
        <div class="iconcircle"><i class="fa fa-file-text" aria-hidden="true"></i></div>
        <h4>Send Your Resume</h4>
        <p>Send your resume now to get the job in line.</p>
      </li>
      <!--step 3 end-->
    </ul>
  </div>
</div>
<!-- How it Works Ends -->

<!-- Latest Jobs are listed down -->
<div class="section greybg">
  <div class="container">
    <!-- title start -->
    <div class="titleTop">
      <h3>Latest <span>Jobs</span></h3>
    </div>
    <!-- title end -->

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
  </div>
</div>
<!-- Latest Jobs ends -->
<!-- Top Employers start -->
<div class="section greybg">
  <div class="container">
    <!-- title start -->
    <div class="titleTop">
      <h3>Top <span>Employers</span></h3>
    </div>
    <!-- title end -->

    <ul class="employerList">
      <!--employer-->
      <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="#"><img src="{{ asset('bundles/images/emplogo1.jpg') }}" alt="Company Name"></a></li>
      <!--employer-->
      <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="#"><img src="{{ asset('bundles/images/emplogo2.jpg') }}" alt="Company Name"></a></li>
      <!--employer-->
      <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="#"><img src="{{ asset('bundles/images/emplogo3.jpg') }}" alt="Company Name"></a></li>
      <!--employer-->
      <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="#"><img src="{{ asset('bundles/images/emplogo4.jpg') }}" alt="Company Name"></a></li>
      <!--employer-->
      <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="#"><img src="{{ asset('bundles/images/emplogo5.jpg') }}" alt="Company Name"></a></li>
      <!--employer-->
      <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="#"><img src="{{ asset('bundles/images/emplogo7.jpg') }}" alt="Company Name"></a></li>

      <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="#"><img src="{{ asset('bundles/images/emplogo8.jpg') }}" alt="Company Name"></a></li>

      <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="#"><img src="{{ asset('bundles/images/emplogo9.jpg') }}" alt="Company Name"></a></li>

      <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="#"><img src="{{ asset('bundles/images/emplogo10.jpg') }}" alt="Company Name"></a></li>
  <!--employer---
      <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="#"><img src="{{ asset('bundles/images/emplogo11.jpg') }}" alt="Company Name"></a></li>

      <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="#"><img src="{{ asset('bundles/images/emplogo12.jpg') }}" alt="Company Name"></a></li>

      <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="#"><img src="{{ asset('bundles/images/emplogo13.jpg') }}" alt="Company Name"></a></li>

      <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="#"><img src="{{ asset('bundles/images/emplogo14.jpg') }}" alt="Company Name"></a></li>

      <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="#"><img src="{{ asset('bundles/images/emplogo15.jpg') }}" alt="Company Name"></a></li>
      employer-->


    </ul>
  </div>
</div>
<!-- Top Employers ends -->

<script type="application/javascript">
</script>

@endsection
