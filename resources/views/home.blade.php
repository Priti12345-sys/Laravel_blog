@extends('layouts.master')

@section('title')
Dashboard | of Web IT
@endsection

@section('content')

<div class="row">
    <div class = "col-md-12">
        <div class = "card">
            <div class = "card-header">
            <h4 class = "card-title"> Simple Table</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class= "table-primary">
                            <th>Name</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Salary</th>
                        </thead>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Dakota Rice</td>
                            <td>Dakota Rice</td>
                            <td>Dakota Rice</td>
                            <td>Dakota Rice</td>
                        </tr>
                    </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection