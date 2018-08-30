@extends('layouts.app')

@section('styles')
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
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
    <div class="container">
        <div class="search-block">
            <form>
                <div class="input-group mb-3 col-6 offset-3">
                    <input type="text"
                           name="query"
                           class="form-control"
                           placeholder="Search text"
                           value="{{ request('query') }}"
                           aria-label="Recipient's username"
                           aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <hr>
        <div class="jobs-list-block">
            <div class="mb-3 col-6 offset-3">
                <div class="card">
                    <div class="card-header text-center">Job List</div>
                    <ul class="list-group list-group-flush">
                        @foreach($jobs as $job)
                            <li class="list-group-item">
                                <span class="float-left">{{ $job->title }}</span>
                                <span class="float-right">
                                    <a href="{{ route('job.detail.frontend',['slug' => $job->slug]) }}">View</a>
                                </span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
