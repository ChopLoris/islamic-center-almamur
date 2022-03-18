<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function postLogin(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('username', 'password');
        if(Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                                ->withSuccess('Signed In');
        }

        return redirect('administrator')->withSuccess('Login details are not valid');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return redirect('administrator');
    }
}
