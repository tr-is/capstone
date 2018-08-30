@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbrotron">
            <table class="table table-striped table-condensed table-hover table-striped">
                <tr>
                    <td>Title</td>
                    <td>{{ $job->title }}</td>
                </tr>
                <tr>
                    <td>Preferred Gender</td>
                    <td>{{ $job->preferred_gender }}</td>
                </tr>
                <tr>
                    <td>Salary</td>
                    <td>{{ $job->salary }}</td>
                </tr>
                <tr>
                    <td>Salary Negotiable</td>
                    <td>{{ $job->salary_negotiable ? 'Yes' : 'No' }}</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>{!! $job->description !!}</td>
                </tr>
                <tr>
                    <td>Specification</td>
                    <td>{!! $job->specification !!}</td>
                </tr>
                <tr>
                    <td>Education Description</td>
                    <td>{!! $job->education_description !!}</td>
                </tr>
                <tr>
                    <td>Deadline</td>
                    <td>{{ $job->deadline }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
