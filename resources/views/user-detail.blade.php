@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbrotron">
            <table class="table table-striped table-condensed table-hover table-striped">
                <tr>
                    <td>Name</td>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>{{ $user->address }}</td>
                </tr>
                <tr>
                    <td>Mobile Number</td>
                    <td>{{ $user->mobile_number }}</td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>{{ $user->gender }}</td>
                </tr>
                <tr>
                    <td>Categories</td>
                    <td>{{ $user->categories }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
