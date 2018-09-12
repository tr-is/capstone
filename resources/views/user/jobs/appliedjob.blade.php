@extends('layouts.app')

@section('content')

    <div class="col-md-12">
        
            <table class="table table-bordered table-condensed table-striped table-hover">
                <thead>
                <tr>
                    
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($jobs as $job)

                    <td>{{ $job->title }}</td>
                    <td>delete</td>    
                @endforeach
                </tbody>
            </table>
              
        
    </div>

@endsection
