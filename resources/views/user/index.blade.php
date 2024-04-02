<!-- Main HTML -->
@extends('layout.main')

<!-- Tab title -->
<title>List of Users | Demo App</title>

<!-- Sidebar --->
@include('include.sidebar')

@section('content')
    
<!-- Card -->
<div class="card mt-3">
    <div class="card-body">
        <h5 class="card-title">List of Users</h5>
        <!-- Responsive and hover table -->
        <div class="table-responsive">
            <table class="table table-hover">
                @include('include.messages')
                {{ $users->links() }}
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Birth Date</th>
                        <th>Date Created</th>
                        <th>Date Updated</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->middle_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ date('m/d/Y', strtotime($user->birth_date)) }}</td>
                            <td>{{ date('m/d/Y h:i A', strtotime($user->created_at)) }}</td>
                            <td>{{ date('m/d/Y h:i A', strtotime($user->updated_at)) }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="/user/show/{{ $user->user_id }}" class="btn btn-outline-primary">View</a>
                                    <a href="/user/edit/{{ $user->user_id }}" class="btn btn-outline-warning">Edit</a>
                                    <a href="/user/delete/{{ $user->user_id }}" class="btn btn-outline-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection