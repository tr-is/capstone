@extends('layouts.app')

@section('content')

    <div class="col-md-12">
        
            <table class="table table-bordered table-condensed table-striped table-hover">
                <thead>
                <tr>
                    <th>List of job applied</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($jobs as $job)

                   <td>
                    <h4><a href="{{ route('job.detail.frontend',['slug' => $job->slug]) }}">{{ $job->title }}</a></h4></td>
                @endforeach
                </tbody>
            </table>
              
        
    </div>

@endsection
