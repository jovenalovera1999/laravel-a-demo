<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index() {
        $users = User::orderBy('first_name', 'asc');

        if(request()->has('search')) {
            $searchTerm = request()->get('search');

            if($searchTerm) {
                $users = $users->where(function($query) use ($searchTerm) {
                    $query->where('users.first_name', 'like', "%$searchTerm%")
                        ->orWhere('users.middle_name', 'like', "%$searchTerm%")
                        ->orWhere('users.last_name', 'like', "%$searchTerm%");
                });
            }
        }

        $users = $users->paginate(10)
            ->appends(['search' => request()->get('search')]);

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
            'username' => ['required', Rule::unique('users')->ignore($user)],
            'user_image' => ['nullable', 'mimes:jpeg,png,bmp,biff', 'max:4096']
        ], [
            'gender_id.required' => 'The gender field is required.'
        ]);

        if($request->hasFile('user_image')) {
            $filenameWithExtension = $request->file('user_image');

            $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);

            $extension = $request->file('user_image')->getClientOriginalExtension();

            $filenameToStore = $filename . '_' . time() . '.' . $extension;

            $request->file('user_image')->storeAs('public/img/user', $filenameToStore);

            $validated['user_image'] = $filenameToStore;
        }

        // return dd($request);

        $user->update($validated);

        return redirect('/users')->with('message_success', 'User successfully updated.');
    }

    public function delete($id) {
        $user = User::join('genders', 'users.gender_id', '=', 'genders.gender_id')
            ->find($id);

        return view('user.delete', compact('user'));
    }

    public function destroy(Request $request, User $user) {
        if($user->user_image && Storage::exists('public/img/user/' . $user->user_image)) {
            Storage::delete('public/img/user/' . $user->user_image);
        }

        $user->delete($request);
        return redirect('/users')->with('message_success', 'User successfully deleted.');
    }

    public function login() {
        return view('login.login');
    }

    public function processLogin(Request $request) {
        $validated = $request->validate([
            'username' => ['required', 'max:12'],
            'password' => ['required', 'max:15']
        ]);

        $user = User::where('username', $validated['username'])
            ->first();

        if($user && Hash::check($validated['password'], $user->password) && auth()->attempt($validated)) {
            auth()->login($user);
            $request->session()->regenerate();
            return redirect('/users');
        }
    }

    public function processLogout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function anotherProcessLogout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
