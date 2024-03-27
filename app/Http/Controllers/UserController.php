<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function show($id) {
        $user = User::join('genders as g', 'g.gender_id', '=', 'users.gender_id')
            ->find($id);
        return view('user.show', compact('user'));
    }

    public function create() {
        $genders = Gender::all();
        return view('user.create', compact('genders'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'first_name' => ['required', 'max:55'],
            'middle_name' => ['nullable', 'max:55'],
            'last_name' => ['required', 'max:55'],
            'suffix_name' => ['nullable', 'max:55'],
            'birth_date' => ['required', 'date'],
            'gender_id' => ['required'],
            'address' => ['required', 'max:55'],
            'contact_number' => ['required', 'max:55'],
            'email_address' => ['nullable', 'max:55'],
            'username' => ['required', Rule::unique('users', 'username')],
            'password' => ['required', 'confirmed'],
            'password_confirmation' => ['required']
        ], [
            'gender_id.required' => 'The gender field is required.'
        ]);

        User::create($validated);

        return redirect('/users')->with('message_success', 'User successfully added.');
    }

    public function edit($id) {
        $genders = Gender::all();

        $user = User::join('genders', 'users.gender_id', '=', 'genders.gender_id')
            ->find($id);

        return view('user.edit', compact('genders', 'user'));
    }

    public function update(Request $request, User $user) {
        $validated = $request->validate([
            'first_name' => ['required', 'max:55'],
            'middle_name' => ['nullable', 'max:55'],
            'last_name' => ['required', 'max:55'],
            'suffix_name' => ['nullable', 'max:55'],
            'birth_date' => ['required', 'date'],
            'gender_id' => ['required'],
            'address' => ['required', 'max:55'],
            'contact_number' => ['required', 'max:55'],
            'email_address' => ['nullable', 'max:55'],
            'username' => ['required', Rule::unique('users')->ignore($user)]
        ], [
            'gender_id.required' => 'The gender field is required.'
        ]);

        $user->update($validated);

        return redirect('/users')->with('message_success', 'User successfully updated.');
    }

    public function delete($id) {
        $user = User::join('genders', 'users.gender_id', '=', 'genders.gender_id')
            ->find($id);

        return view('user.delete', compact('user'));
    }

    public function destroy(Request $request, User $user) {
        $user->delete($request);
        return redirect('/users')->with('message_success', 'User successfully deleted.');
    }
}
