<!-- Main HTML -->
@extends('layout.main')

<!-- HTML content -->
@section('content')

<!-- Tab title -->
<title>Delete User | Demo App</title>

<!-- Sidebar -->
@include('include.sidebar')

<!-- Card -->
<div class="card mt-3">
    <div class="card-body">
        <h5 class="card-title">Delete User</h5>
        @if ($user->middle_name)
            <p class="card-text">Are you sure do you want to delete this user named "{{ $user->first_name . ' ' . $user->middle_name[0] . '. ' . $user->last_name . ' ' . $user->suffix_name }}"?</p>
            
        @else
            <p class="card-text">Are you sure do you want to delete this user named "{{ $user->first_name . ' ' . $user->last_name . ' ' . $user->suffix_name }}"?</p>
        @endif
        <!-- Buttons -->
        <!-- Form for delete button -->
        <form action="/user/destroy/{{ $user->user_id }}" method="post">
            <!-- DELETE method and CSRF -->
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger col-sm-3 float-end">YES</button>
        </form>
        <a href="/users" class="btn btn-secondary col-sm-3 float-end me-1">No</a>
    </div>
</div>
    
@endsection