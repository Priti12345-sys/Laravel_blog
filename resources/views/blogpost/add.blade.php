<!-- resources/views/blogpost/add.blade.php -->

@extends('layouts.master')

@section('title', 'Add Blog Post')

@section('content')
    <div class="container"> <br><br>
        <h1>Add Blog Post</h1>

        <form action="{{ route('blogpost.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="subtitle">Subtitle</label>
                <input type="text" id="subtitle" name="subtitle" class="form-control" required>
            </div>
            <div class="mb-3">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control" accept="image/*" required>
            </div>
            
            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" class="form-control" rows="6" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
