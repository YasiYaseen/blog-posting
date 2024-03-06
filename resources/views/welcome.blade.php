@extends('layouts.master')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between">
        <h3 class="mb-3 mt-3">Blog Posts</h3>
        <a href="{{ route('blogs') }}" class="btn btn-success my-3">New Post</a>
    </div>
    <div class="row">
        @foreach ($blogPosts as $post)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->description}}</p>
                    <p class="card-text"><strong>Author:</strong> {{$post->user->name}}</p>
                    <!-- You can display other user information like email, etc. -->
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="mt-4">
    </div>
</div>
{{session()->get('user_name')}}
@endsection
