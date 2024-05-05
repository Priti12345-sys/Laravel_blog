@extends('layouts.master')

@section('title')
Dashboard | Funda of Web IT
@endsection

@section('content')

<div class="row mt-5">
    <!-- <a href="/home/category/add">Add category</a> -->
    <form action="/category/add" method="POST">
        @csrf
        <input type="text" name="name" id="name" placeholder="name"/>
        <button type="submit" class="btn btn-primary">
            submit
        </button>
    </form>
</div>
@endsection

@section('scripts')
@endsection     