@extends('layouts.app')

@section('content')
<div class="container">
    <div class="intro">
        <h1>Thoughts, stories, and ideas.</h1>
        <p>Discover the latest insights and share your own.</p>
    </div>

    @if($posts->isEmpty())
        <p class="text-center">No blog posts available. <a href="{{ route('posts.create') }}" class="text-light">Create one now!</a></p>
    @else
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form method="POST" action="{{ route('posts.destroy', $post->id) }}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-4 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    @endif

    <div class="text-center mt-4">
        <a href="{{ route('posts.create') }}" class="btn btn-success">Create New Post</a>
    </div>
</div>
@endsection
