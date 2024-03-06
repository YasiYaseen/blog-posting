<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\BlogPost;

class LoginController extends Controller
{
    //
    public function index()
    {

        return view("login");
    }
    public function blogs()
    {
        $blogPosts = BlogPost::all();

        return view("welcome",compact('blogPosts'));
    }
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {

            return redirect()->route('blogs');
        }


        return redirect()->route('login')->with('error', 'Invalid credentials');
    }
}
