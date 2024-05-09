@extends('layouts.master')

@section('title')
    About us | Funda of Web IT
@endsection

@section('content')
    <br><br><br>
 
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Blog Post
                    <a href="/blogpost/add" class="btn btn-secondary mb-3 float-right" style="background-color: #199319;">Add</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-primary">
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Sub-title</th>
                                    <th>Content</th>
                                    <th>Image</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogposts as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->subtitle }}</td>
                                        <td>{{ $item->content }}</td>
                                        <td>
                                            <img src="{{ asset($item->image) }}" style="width: 100px; height: 70px;" alt="image">
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-success">Edit</a>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
