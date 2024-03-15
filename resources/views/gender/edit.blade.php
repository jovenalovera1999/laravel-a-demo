<!-- Main HTML -->
@extends('layout.main')

<!-- Tab title -->
<title>Edit Gender | Demo App</title>

<!-- Sidebar --->
@include('include.sidebar')

<!-- HTML content -->
@section('content')

<!-- Card -->
<div class="card col-sm-6 mt-3 mx-auto">
    <div class="card-body">
        <h5 class="card-title">Edit Gender</h5>
        <!-- Form POST method -->
        <form action="/gender/update/{{ $gender->gender_id }}" method="post">
            <!-- PUT method -->
            @method('PUT')
            <!-- CSRF -->
            @csrf
            <!-- Gender field -->
            <div class="mb-3">
                <label for="gender">Gender</label>
                <input type="text" class="form-control" id="gender" name="gender" value="{{ $gender->gender }}" />
                @error('gender') <p class="text-danger">{{ $message }}</p> @enderror
            </div>
            <!-- Save button -->
            <button type="submit" class="btn btn-success col-sm-3 float-end">Save Gender</button>
            <a href="/genders" class="btn btn-secondary col-sm-3 float-end me-1">Back</a>
        </form>
    </div>
</div>

@endsection