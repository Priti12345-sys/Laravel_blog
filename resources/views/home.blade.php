@extends('layouts.master')

@section('title')
Dashboard | of Web IT
@endsection

@section('content')

<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .statistic {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #eee;
            padding-top: 10px;
        }
        .statistic span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h2 class="card-title">Blog Analytics</h2>
            <div class="statistic">
                <span>Total Views:</span>
                <span>1,234</span>
            </div>
            <div class="statistic">
                <span>Likes:</span>
                <span>567</span>
            </div>
            <div class="statistic">
                <span>Comments:</span>
                <span>89</span>
            </div>
            <div class="statistic">
                <span>Shares:</span>
                <span>345</span>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection