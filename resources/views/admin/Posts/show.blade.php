@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Title: {{ $post->title }}</h1>

        @if($post->category) 
            <h3>Category: {{ $post->category->name }}</h3>
        @endif

        

        <div class="mb3">{{ $post->content }}</div>

        <div class="mb-5">
            <a class="btn btn-warning"
            href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
        </div>

        <div>{{ $post->content }}</div>
    </div>
@endsection