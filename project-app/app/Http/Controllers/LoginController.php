<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
    }

    public function formLogin()
    {
        return view('auth.loginPage');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors([
            'password' => trans('validation.attributes.password')
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
