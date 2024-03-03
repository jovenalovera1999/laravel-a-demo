<!-- Main HTML -->
@extends('layout.main')

<!-- Tab title -->
<title>Create User | Demo App</title>

<!-- Sidebar --->
@include('include.sidebar')

<!-- HTML content -->
@section('content')

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
                    <input type="text" class="form-control" id="first_name" name="first_name">
                </div>
                <!-- Middle name field -->
                <div class="mb-3 col-sm-3">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" class="form-control" id="middle_name" name="middle_name">
                </div>
                <!-- Last name field -->
                <div class="mb-3 col-sm-3">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name">
                </div>
                <!-- Suffix name field -->
                <div class="mb-3 col-sm-3">
                    <label for="suffix_name">Suffix Name</label>
                    <input type="text" class="form-control" id="suffix_name" name="suffix_name">
                </div>
            </div>
            <!-- Second row -->
            <div class="row">
                <!-- Birth date field -->
                <div class="mb-3 col-sm-2">
                    <label for="birth_date">Birth Date</label>
                    <input type="date" class="form-control" id="birth_date" name="birth_date">
                </div>
                <!-- Gender field -->
                <div class="mb-3 col-sm-2">
                    <label for="gender_id">Gender</label>
                    <select class="form-select" id="gender_id" name="gender_id">
                        <option selected>N/A</option>
                        <option value="">Male</option>
                        <option value="">Female</option>
                        <option value="">Others</option>
                    </select>
                </div>
                <!-- Address field -->
                <div class="mb-3 col-sm-5">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>
            </div>
            <!-- Third row -->
            <div class="row">
                <!-- Contact number field -->
                <div class="mb-3 col-sm-3">
                    <label for="contact_number">Contact Number</label>
                    <input type="text" class="form-control" id="contact_number" name="contact_number">
                </div>
                <!-- Email address field -->
                <div class="mb-3 col-sm-4">
                    <label for="email_address">Email Address</label>
                    <input type="text" class="form-control" id="email_address" name="email_address">
                </div>
            </div>
            <!-- Fourth row -->
            <div class="row">
                <!-- Username field -->
                <div class="mb-3 col-sm-4">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <!-- Password field -->
                <div class="mb-3 col-sm-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <!-- Confirm password field -->
                <div class="mb-3 col-sm-4">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                </div>
            </div>
            <!-- Save button -->
            <button type="submit" class="btn btn-success col-sm-3 float-end">Save User</button>
        </form>
    </div>
</div>

@endsection