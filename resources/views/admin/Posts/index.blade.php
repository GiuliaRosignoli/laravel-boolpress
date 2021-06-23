@extends('layouts.app')
@section('content')
    <div class="container">
        @if(session('deleted'))
            <div class="alert alert-success">
                <strong>{{ session('deleted')}}</strong>
                This message was deleted.
            </div>
        @endif

        <h1>ALL POSTS</h1>
        <a class="btn btn-primary mb-3" href="{{ route('admin.posts.create') }}">Write a new post</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id  }}</td>
                        <td>{{ $post->title }}</td>
                        <td>@if($post->category) {{ $post->category->name }} @endif</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('admin.posts.show', $post->id ) }}">SHOW</a>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('admin.posts.edit', $post->id ),  }}">EDIT</a>
                        </td>
                        <td>
                            <form class="delete-post-form" action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <input type="submit" value="DELETE" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Display Posts From Specific Category -->
        
        <h2>Posts From Specific Category </h2>
        @foreach ($categories as $category)
            <h3 class="mt-4">{{ $category->name }}</h3>
            @forelse ($category->posts as $post)
                <h4><a href="{{ route('admin.posts.show', $post->id) }}">{{ $post->title }}</a></h4>
            @empty
                There are no posts in this category. <a href="{{ route('admin.posts.create') }}">Do want to create a new one?</a>
            @endforelse
        @endforeach

    </div>   
@endsection