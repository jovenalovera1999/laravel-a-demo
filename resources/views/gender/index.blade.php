<!-- Main HTML -->
@extends('layout.main')

<!-- Tab title -->
<title>List of Genders | Demo App</title>

<!-- Sidebar -->
@include('include.sidebar')

<!-- HTML content -->
@section('content')

<div class="col-sm-8 mx-auto">
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">List of Genders</h5>
            <div class="table-responsive">
                <table class="table mt-3">
                    @include('include.messages')
                    <thead>
                        <tr>
                            <th>Gender</th>
                            <th>Date Created</th>
                            <th>Date Updated</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($genders as $gender)
                            <tr>
                                <td>{{ $gender->gender }}</td>
                                <td>{{ date_format($gender->created_at, 'm/d/Y h:i A') }}</td>
                                <td>{{ date_format($gender->updated_at, 'm/d/Y h:i A') }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="/gender/view/{{ $gender->gender_id }}" class="btn btn-primary">View</a>
                                        <a href="/gender/edit/{{ $gender->gender_id }}" class="btn btn-warning">Edit</a>
                                        <a href="/gender/delete/{{ $gender->gender_id }}" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection