<!-- Main HTML -->
@extends('layout.main')

<!-- Tab title -->
<title>Create Gender | Demo App</title>

<!-- Sidebar --->
@include('include.sidebar')

<!-- HTML content -->
@section('content')

<!-- Card -->
<div class="card col-sm-6 mt-3 mx-auto">
    <div class="card-body">
        <h5 class="card-title">Create Gender</h5>
        <!-- Form POST method -->
        <form action="#" method="post">
            <!-- CSRF -->
            @csrf
            <!-- Gender field -->
            <div class="mb-3">
                <label for="gender">Gender</label>
                <input type="text" class="form-control" id="gender" name="gender">
            </div>
            <!-- Save button -->
            <button type="submit" class="btn btn-success col-sm-3 float-end">Save User</button>
        </form>
    </div>
</div>

@endsection