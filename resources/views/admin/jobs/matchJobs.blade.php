@extends('layouts.admin')

@section('content')

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    Matching user for job :
                    <a href="{{ route('job.detail.frontend',['slug' => $job->slug]) }}">
                        {{ $job->title }}
                    </a>
                </h4>
            </div>
            <div class="panel-body">
                @if(count($results) > 0)
                    <table class="table table-bordered table-striped table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>User</th>
                            <th>Match %</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($results as $v)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $v['user'] ? $v['user']->name : ''}}</td>
                                <td>{{ $v['output'] }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-info">No data available.</div>
                @endif
            </div>
        </div>
    </div>

@endsection
