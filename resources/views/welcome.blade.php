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
            <h3>We will ensure to find the right path for your career <span>Start your journey today.</span></h3>
            <form>
                <div class="searchbar row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-5">
                         <input type="text"
                           name="query"
                           class="form-control"
                           placeholder="Search"
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
      <!--step 1-->
      <li class="col-md-4 col-sm-4">
        <div class="iconcircle"><i class="fa fa-user" aria-hidden="true"></i></div>
        <h4>Create An Account</h4>
        <p>Please Create an account to Proceed.</p>
      </li>
      <!--step 1 end-->

      <!--step 2-->
      <li class="col-md-4 col-sm-4">
        <div class="iconcircle"><i class="fa fa-black-tie" aria-hidden="true"></i></div>
        <h4>Search Desired Job</h4>
        <p>Once you have created an account. Now you may start to find the desired job your after.</p>
      </li>
      <!--step 2 end-->

      <!--step 3-->
      <li class="col-md-4 col-sm-4">
        <div class="iconcircle"><i class="fa fa-file-text" aria-hidden="true"></i></div>
        <h4>Send Your Resume</h4>
        <p>It only takes a few seconds, send your resumes now to get the job in line.</p>
      </li>
      <!--step 3 end-->
    </ul>
  </div>
</div>
<!-- How it Works Ends -->

<!-- Latest Jobs start -->
<div class="section greybg">
  <div class="container">
    <!-- title start -->
    <div class="titleTop">
      <h3>Latest <span>Jobs</span></h3>
    </div>
    <!-- title end -->

    <ul class="jobslist row">
      <!--Job 1-->
      @foreach($jobs as $job)
      <li class="col-md-4 col-sm-6">

        <div class="jobint">

          <div class="row">
                <div class="col-md-12 col-sm-12">
                  <h4><a href="{{ route('job.detail.frontend',['slug' => $job->slug]) }}">{{ $job->title }}</a></h4>
                  <!-- <div class="company">{{$job -> created_by}}</div> -->
                  <div class="jobloc"><label class="fulltime">$ {{ $job -> salary_range}}</label>   <span>{{ $job -> job_location}}</span></div>
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


<script type="application/javascript">
</script>

@endsection
