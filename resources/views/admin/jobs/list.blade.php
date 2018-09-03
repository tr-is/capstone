@extends('layouts.admin')

@section('content')

    <div class="col-md-12">
        @if(count($jobs) > 0)
            <table class="table table-bordered table-condensed table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>DeadLine</th>
                    <th>Preferred Gender</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($jobs as $job)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $job->title }}</td>
                        <td>{{ $job->type }}</td>
                        <td>{{ $job->deadline }}</td>
                        <td>{{ $job->preferred_gender }}</td>
                        <td>
                        <a href="{{ route('admin.job.match',['job' => $job->id]) }}" class="btn btn-xs btn-info">
                                Match Job
                            </a>
                            <a href="{{ route('admin.job.update',['id' => $job->id]) }}" class="btn btn-xs btn-primary">Edit</a>
                            <a href="{{ route('admin.job.delete', ['id' => $job->id]) }}"
                               class="btn btn-xs btn-danger delete-item">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-info">No jobs available</div>
        @endif
    </div>

@endsection
