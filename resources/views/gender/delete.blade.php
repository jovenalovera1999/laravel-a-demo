<!-- Main HTML -->
@extends('layout.main')

<!-- Tab title -->
<title>Delete Gender | Demo App</title>

<!-- Sidebar -->
@include('include.sidebar')

<!-- HTML content -->
@section('content')

<!-- Card -->
<div class="card mt-3">
    <div class="card-body">
        <h5 class="card-title">Delete Gender</h5>
        <p class="card-text">Are you sure do you want to delete this gender named "{{ $gender->gender }}"?</p>
        <!-- Buttons -->
        <!-- Form for delete button -->
        <form action="/gender/destroy/{{ $gender->gender_id }}" method="post">
            <!-- DELETE method and CSRF -->
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger col-sm-3 float-end">Yes</button>
        </form>
        <a href="/genders" class="btn btn-secondary col-sm-3 float-end me-1">No</a>
    </div>
</div>

@endsection