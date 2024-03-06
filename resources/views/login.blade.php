@extends('layouts.master')

@section('content')
    <div class="container login-container">
        <div class="card">
            <h2>Login</h2>
            <form>
                <input type="text" id="username" name="username" placeholder="Username" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <a class="button" href="{{route('blogs')}}">Login</a>
            </form>
        </div>
    </div>
@endsection
