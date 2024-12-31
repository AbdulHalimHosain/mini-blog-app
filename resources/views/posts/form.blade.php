@extends('layouts.app')

@section('content')
<div class="container">
    <div class="intro">
        <h1>{{ isset($post) ? 'Edit Post' : 'Create Post' }}</h1>
    </div>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" class="shadow-lg p-4 bg-light rounded">
        @csrf
        @if (isset($post))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $post->title ?? '') }}" required maxlength="50">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea id="content" name="content" class="form-control" rows="5" required>{{ old('content', $post->content ?? '') }}</textarea>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">{{ isset($post) ? 'Update' : 'Save' }}</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
@endsection
