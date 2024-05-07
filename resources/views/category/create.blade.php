@extends('layouts.master')

@section('title')
Dashboard | Funda of Web IT
@endsection

@section('content')

<div class="row mt-5">
    <!-- <a href="/home/category/add">Add category</a> -->
    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control" accept="image/*" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
</div>
@endsection

@section('scripts')
@endsection     