<!-- Main HTML -->
@extends('layout.main')

<!-- HTML content -->
@section('content')

<!-- Tab title -->
<title>Edit User | Demo App</title>

<!-- Sidebar --->
@include('include.sidebar')

<!-- Card -->
<div class="card mt-3">
    <div class="card-body">
        <h5 class="card-title">Edit User</h5>
        <!-- Form POST method -->
        <form action="/user/update/{{ $user->user_id }}" method="post" enctype="multipart/form-data">
            <!-- PUT method and CSRF -->
            @method('PUT')
            @csrf
            <!-- First row -->
            <div class="row">
                <!-- First name field -->
                <div class="mb-3 col-sm-3">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', $user->first_name) }}" />
                    @error('first_name') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
                <!-- Middle name field -->
                <div class="mb-3 col-sm-3">
                    <label for="middle_name">Middle Name</label>
                    <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{ old('middle_name', $user->middle_name) }}" />
                    @error('middle_name') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
                <!-- Last name field -->
                <div class="mb-3 col-sm-3">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', $user->last_name) }}" />
                    @error('last_name') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
                <!-- Suffix name field -->
                <div class="mb-3 col-sm-3">
                    <label for="suffix_name">Suffix Name</label>
                    <input type="text" class="form-control" id="suffix_name" name="suffix_name" value="{{ old('suffix_name', $user->suffix_name) }}" />
                    @error('suffix_name') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            <!-- Second row -->
            <div class="row">
                <!-- Birth date field -->
                <div class="mb-3 col-sm-2">
                    <label for="birth_date">Birth Date</label>
                    <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ old('birth_date', $user->birth_date) }}" />
                    @error('birth_date') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
                <!-- Gender field -->
                <div class="mb-3 col-sm-2">
                    <label for="gender_id">Gender</label>
                    <select class="form-select" id="gender_id" name="gender_id">
                        <option value="">N/A</option>
                        <option value="{{ $user->gender_id }}" selected hidden>{{ $user->gender }}</option>
                        @foreach ($genders as $gender)
                            <option value="{{ $gender->gender_id }}">{{ $gender->gender }}</option>
                            @if (old('gender_id') == $gender->gender_id)
                                <option value="{{ $gender->gender_id }}" selected hidden>{{ $gender->gender }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('gender_id') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
                <!-- Address field -->
                <div class="mb-3 col-sm-5">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $user->address) }}" />
                    @error('address') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            <!-- Third row -->
            <div class="row">
                <!-- Contact number field -->
                <div class="mb-3 col-sm-3">
                    <label for="contact_number">Contact Number</label>
                    <input type="text" class="form-control" id="contact_number" name="contact_number" value="{{ old('contact_number', $user->contact_number) }}" />
                    @error('contact_number') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
                <!-- Email address field -->
                <div class="mb-3 col-sm-4">
                    <label for="email_address">Email Address</label>
                    <input type="text" class="form-control" id="email_address" name="email_address" value="{{ old('email_address', $user->email_address) }}" />
                    @error('email_address') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            <!-- Fourth row -->
            <div class="row">
                <!-- Username field -->
                <div class="mb-3 col-sm-4">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ old('username', $user->username) }}">
                    @error('username') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
                <div class="mb-3 col-sm-4">
                    <label for="user_image">User Image</label>
                    <input type="file" class="form-control" id="user_image" name="user_image" />
                    @error('user_image') <p class="text-danger">{{ $message }}</p> @enderror
                </div>
            </div>
            <!-- Update button -->
            <button type="submit" class="btn btn-success col-sm-3 float-end">Update User</button>
        </form>
    </div>
</div>

@endsection