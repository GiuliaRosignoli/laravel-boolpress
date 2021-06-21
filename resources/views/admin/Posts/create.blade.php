@extends('layouts.app')
@section('content')

    <div class="container">
        <h1 class="mb-5">Write a new post</h1>

        <div class="row">
            <div class="col-md-8 offset-md-2">

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.posts.store') }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" >
                        @error('title')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" id="content"  rows="6" class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                        @error('content')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Write a new post</button>

                </form>
            </div>
        </div>
    </div>
    
@endsection