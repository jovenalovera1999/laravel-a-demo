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
            <a href="#" class="btn btn-primary col-sm-3 float-end">Add Gender</a>
            <div class="table-responsive mt-5">
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th>Gender</th>
                            <th>Date Created</th>
                            <th>Date Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Male Sample</td>
                            <td>03/08/2024</td>
                            <td>03/08/2024</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection