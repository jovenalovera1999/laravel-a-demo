<!-- Main HTML -->
@extends('layout.main')

<!-- HTML content -->
@section('content')

<!-- Tab title -->
<title>Create User | Demo App</title>

<!-- Sidebar --->
@include('include.sidebar')

<!-- Card -->
<div class="card mt-3">
    <div class="card-body">
        <h5 class="card-title">Create User</h5>
        <!-- Form POST method -->
        <form action="#" method="post">
            <!-- CSRF -->
            @csrf
            <!-- First row -->
            <div class="row">
                <!-- First name field -->
                <div class="mb-3 col-sm-3">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name"
                        value="{{ $user->first_name }}" readonly />
                </div>
                <!-- Middle name field -->
                <div class="mb-3 col-sm-3">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" class="form-control" id="middle_name" name="middle_name"
                        value="{{ $user->middle_name }}" readonly />
                </div>
                <!-- Last name field -->
                <div class="mb-3 col-sm-3">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name"
                        value="{{ $user->last_name }}" readonly />
                </div>
                <!-- Suffix name field -->
                <div class="mb-3 col-sm-3">
                    <label for="suffix_name">Suffix Name</label>
                    <input type="text" class="form-control" id="suffix_name" name="suffix_name"
                        value="{{ $user->suffix_name }}" readonly />
                </div>
            </div>
            <!-- Second row -->
            <div class="row">
                <!-- Birth date field -->
                <div class="mb-3 col-sm-2">
                    <label for="birth_date">Birth Date</label>
                    <input type="text" class="form-control" id="birth_date" name="birth_date"
                        value="{{ date('m/d/Y', strtotime($user->birth_date)) }}" readonly />
                </div>
                <!-- Gender field -->
                <div class="mb-3 col-sm-2">
                    <label for="gender_id">Gender</label>
                    <input type="text" class="form-control" id="gender_id" name="gender_id" value="{{ $user->gender }}" />
                </div>
                <!-- Address field -->
                <div class="mb-3 col-sm-5">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}" />
                </div>
            </div>
            <!-- Third row -->
            <div class="row">
                <!-- Contact number field -->
                <div class="mb-3 col-sm-3">
                    <label for="contact_number">Contact Number</label>
                    <input type="text" class="form-control" id="contact_number" name="contact_number"
                        value="{{ $user->contact_number }}" />
                </div>
                <!-- Email address field -->
                <div class="mb-3 col-sm-4">
                    <label for="email_address">Email Address</label>
                    <input type="text" class="form-control" id="email_address" name="email_address"
                        value="{{ $user->email_address }}" />
                </div>
            </div>
            <!-- Back button -->
            <a href="/users" class="btn btn-secondary col-sm-3 float-end">Back</a>
        </form>
    </div>
</div>

@endsection