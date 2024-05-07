@extends('layouts.master')

@section('title', 'Edit Category')

@section('content')
    <h1>Edit Category</h1>
    <!-- Back Button -->
    <a href="{{ route('category') }}" class="btn btn-secondary mb-3" style="
  background-color: #199319;
  color: white;
  padding: 10px 20px;
  text-decoration: none;
  border-radius: 5px;
  font-size: 16px;
  margin-bottom: 1rem;
">Back</a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('category.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $item->name) }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $item->slug) }}">
            @error('slug')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control" accept="image/*" required>
    </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    <!-- Delete Form -->
    <form action="{{ route('category.destroy', $item->id) }}" method="POST" class="mt-3" onsubmit="return confirm('Are you sure you want to delete this category?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
