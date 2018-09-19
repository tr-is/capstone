@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="col-md-12" style="margin: 11px 10px 10px 10px;">
        
            <table class="table table-bordered table-condensed table-striped table-hover">
                <thead>
                <tr>
                    <th>List of job applied</th>
                </tr>
                </thead>
                <ul class="list-group">
                @foreach($jobs as $job)
                <tbody>
                   <td>
                        <li class="list-group-item">
                            <a href="{{ route('job.detail.frontend',['slug' => $job->slug]) }}">{{ $job->title }}</a>
                        </li>     
                    </td>
                </tbody>
                </ul>
                @endforeach

            </table>
              
    </div>
    </div>

@endsection
