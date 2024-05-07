@extends('layouts.master')

@section('title')
    Dashboard | Funda of Web IT
@endsection

@section('content')
    <div class="row mt-5">
        <a href="/home/category/add" class="btn btn-secondary mb-3" style="
  background-color: #199319;
  color: white;
  padding: 10px 20px;
  text-decoration: none;
  border-radius: 5px;
  font-size: 16px;
  margin-bottom: 1rem;
">Add category</a>
        <div class="col-12">
            <h2> All category</h2>
        </div>
        <div class="col-12">
            <table class="table table-reponsive">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->slug }}</td>
                            <td>
                               <img src="{{ asset($item->image)}}" style="width: 100px;" height="70px"; alt="Img"/>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="/role-edit/{{ $item->id }}" class="btn btn-sucess">Edit</a>

                                    <form action="{{ route('category.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
