<!-- resources/views/blogpost/add.blade.php -->

@extends('layouts.master')

@section('title', 'Add Blog Post')

@section('content')
    <div class="container">
        <h1>Add Blog Post</h1>

        <form action="{{ route('blogpost.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="subtitle">Subtitle</label>
                <input type="text" id="subtitle" name="subtitle" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="image">Image URL</label>
                <input type="text" id="image" name="image" class="form-control" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" class="form-control" rows="6" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
