@extends('layouts.master')
@section('content')
<div class="container">
    <h3 class="mb-3 mt-3">Blog Posts</h3>
    @if(session()->has('status'))
        <p>{{session()->get('status')}}</p>
    @endif
    <div class="row">
        @foreach ($blogPosts as $post)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->description}}</p>
                    <a href="{{route('edit.post', encrypt($post->id))}}" class="btn btn-primary">Edit</a>
                    <a href="{{route('delete.post', encrypt($post->id))}}" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="mt-4">
        {{$blogPosts->links()}}
    </div>
</div>
{{session()->get('user_name')}}
@endsection
