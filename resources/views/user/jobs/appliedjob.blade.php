@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="col-md-12">
        
            <table class="table table-bordered table-condensed table-striped table-hover">
                <thead>
                <tr>
                    <th>List of job applied</th>
                </tr>
                </thead>
                @foreach($jobs as $job)
                <tbody>
                   <td>
                        <a href="{{ route('job.detail.frontend',['slug' => $job->slug]) }}">{{ $job->title }}</a>
                    </td>
                </tbody>
                @endforeach
            </table>
              
    </div>
    </div>

@endsection
