<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function index()
    {

        return view("login");
    }
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/dashboard');
        }

        // Authentication failed
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }
}
