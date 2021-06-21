@extends('layouts.main')
@section('content')
    <div class="container">
        <h1 class="mb-5">
            EDIT:
            <a href="{{ route('posts.show', $post->id)}}">{{ $post->title }}</a>
        </h1>

        <div class="row">
            <div class="col-md-8 offset-md-2"> 
                <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="title" class="control-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>
                <div class="mb-3">
                    <label for="description" class="control-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="6"></textarea>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection