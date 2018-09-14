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

                            @if($jobs)
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

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
