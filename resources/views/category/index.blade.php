@extends('layouts.master')

@section('title')
Dashboard | Funda of Web IT
@endsection

@section('content')

<div class="row mt-5">
    <a href="/home/category/add">Add category</a>
    <div class="col-12">
    <h2> All category</h2>
    </div>
    <div class="col-12">
        <table class="table table-reponsive" >
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ( $category as $item )
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->slug}}</td>
                <td>
                    <div class="d-flex">
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-secondary">Delete</button>
                    </div>
                </td>
            </tr>
    @endforeach
            </tbody>
        </table>

    </div>
</div>



@endsection
