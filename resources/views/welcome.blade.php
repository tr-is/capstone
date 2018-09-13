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
            <h3>One million success stories. <span>Start yours today.</span></h3>
            <form>
                <div class="searchbar row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-5">
                        <input type="text" class="form-control" value="{{ request('query') }}" placeholder="Enter Skills or job title">
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="btn" value="Search Job">
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
      <div class="subtitle">Here You Can See</div>
      <h3>How It <span>Works?</span></h3>
    </div>
    <!-- title end -->
    <ul class="howlist row">
      <!--step 1-->
      <li class="col-md-4 col-sm-4">
        <div class="iconcircle"><i class="fa fa-user" aria-hidden="true"></i></div>
        <h4>Create An Account</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
      </li>
      <!--step 1 end--> 
      
      <!--step 2-->
      <li class="col-md-4 col-sm-4">
        <div class="iconcircle"><i class="fa fa-black-tie" aria-hidden="true"></i></div>
        <h4>Search Desired Job</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
      </li>
      <!--step 2 end--> 
      
      <!--step 3-->
      <li class="col-md-4 col-sm-4">
        <div class="iconcircle"><i class="fa fa-file-text" aria-hidden="true"></i></div>
        <h4>Send Your Resume</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
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
      <div class="subtitle">Here You Can See</div>
      <h3>Latest <span>Jobs</span></h3>
    </div>
    <!-- title end -->
    
    <ul class="jobslist row">
      <!--Job 1-->
      <li class="col-md-4 col-sm-6">
        <div class="jobint">
          <div class="row">
            @foreach($jobs as $job)
                <div class="col-md-9 col-sm-9">
                  <h4><a href="{{ route('job.detail.frontend',['slug' => $job->slug]) }}">{{ $job->title }}</a></h4>
                  <div class="company"><a href="##.">Datebase Management Company</a></div>
                  <div class="jobloc"><label class="fulltime">Full Time</label>  - <span>New York</span></div>
                </div>
            @endforeach    
          </div>
        </div>
      </li>
      <!--Job end--> 
    </ul>
   
  </div>
</div>
<!-- Latest Jobs ends --> 


<script type="application/javascript"> 
</script>

@endsection
