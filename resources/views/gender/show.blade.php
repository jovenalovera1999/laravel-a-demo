<!-- Main HTML -->
@extends('layout.main')

<!-- Tab title -->
<title>Show Gender | Demo App</title>

<!-- Sidebar --->
@include('include.sidebar')

<!-- HTML content -->
@section('content')

<!-- Card -->
<div class="card col-sm-6 mt-3 mx-auto">
    <div class="card-body">
        <h5 class="card-title">Show Gender</h5>
        <!-- Form POST method -->
        <form action="#" method="post">
            <!-- Gender field -->
            <div class="mb-3">
                <label for="gender">Gender</label>
                <input type="text" class="form-control" id="gender" name="gender" value="{{ $gender->gender }}" readonly />
            </div>
            <a href="/genders" class="btn btn-secondary col-sm-3 float-end me-1">Back</a>
        </form>
    </div>
</div>

@endsection