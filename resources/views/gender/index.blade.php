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
            <a href="/gender/create" class="btn btn-primary col-sm-3 float-end">Add Gender</a>
            <div class="table-responsive mt-5">
                <table class="table mt-5">
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
                                <td>{{ $gender->created_at }}</td>
                                <td>{{ $gender->updated_at }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="/gender/view/{{ $gender->gender_id }}" class="btn btn-primary">View</a>
                                        <a href="/gender/edit/{{ $gender->gender_id }}" class="btn btn-warning">Edit</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
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