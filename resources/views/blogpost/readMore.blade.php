@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>{{ $blogPost->title }}</h1>
                <p>{{ $blogPost->content }}</p>
            </div>
            <div class="col-md-4">
                <!-- Sidebar or other content -->
            </div>
        </div>

        <hr>

        <h2>Comments</h2>

        @if ($blogPost->comments)
            @foreach($blogPost->comments as $comment)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comment->user->name }}</h5>
                        <p class="card-text">{{ $comment->content }}</p>
                    </div>
                </div>
            @endforeach
        @else
            <p>No comments yet.</p>
        @endif

        <!-- Add comment form here -->
        <form action="{{ route('comment.store') }}" method="POST">
            @csrf
            <input type="hidden" name="blog_post_id" value="{{ $blogPost->id }}">
            <div class="form-group">
                <label for="content">Add a comment:</label>
                <textarea class="form-control" id="content" name="content" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
