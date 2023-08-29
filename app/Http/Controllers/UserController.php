<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create()
    {
        return view('user.register');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate(([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('user', 'email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]));

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/dashboard');
    }

    public function login()
    {
        return view('user.login');
    }

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(auth()->attempt($formFields))
        {
            $request->session()->regenerate();

            return redirect('/dashboard');
        }

        return back()->withErrors(['email' => 'The Email or Password is incorrect.'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You were logged out.');
    }
}
