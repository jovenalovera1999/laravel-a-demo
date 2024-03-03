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
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Birth Date</th>
                        <th>Date Created</th>
                        <th>Date Updated</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Juan</td>
                        <td>Santos</td>
                        <td>Dela Cruz</td>
                        <td>43</td>
                        <td>05/23/1983</td>
                        <td>03/03/2024</td>
                        <td>03/03/2024</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection