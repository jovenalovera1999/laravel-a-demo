<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function() {
    return view('user.index');
});

Route::get('/user/create', function() {
    return view('user.create');
});

Route::get('/user/edit', function() {
    return view('user.edit');
});

Route::get('/user/delete', function() {
    return view('user.delete');
});

