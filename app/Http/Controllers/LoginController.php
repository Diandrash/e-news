<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        
        return view("auth.login", [
            'title' => 'Login Page'
        ]);
    }
    public function register()
    {

        return view("auth.register", [
            'title' => 'Register Page'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|min:3|max:255|unique:users',
            'password' => 'required|min:3|max:255',
            'is_admin' => 'required',
        ]);

        User::create($validatedData);

        Alert::success('Success', 'Please Login');
        return redirect()->intended(('/login'));
    }

    public function auth(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|min:3|max:255',
            'password' => 'required|min:3|max:255',
        ]);

        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();

            if (auth()->user()->is_admin == 1) {
                Alert::success('Success', 'Welcome to E-News');
                return redirect()->intended(('/admin'));
            }
            Alert::success('Success', 'Welcome to E-News');
            return redirect()->intended('/home')->with('login', 'login');

        }

        Alert::error('Error','Email or Password Incorrect');
        return back();
    }

    public function logout(Request $request)
    {
        $request->session()->regenerateToken();
        $request->session()->invalidate();

        Alert::success('Success', 'Logout Success');
        return redirect()->intended(('/home'));
    }
}
