@extends('layouts.master')

@section('title')
    Blog Posts | Funda of Web IT
@endsection

@section('content')
    <br><br><br>
 
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Blog Post
                        <a href="{{ route('blogpost.add') }}" class="btn btn-secondary mb-3 float-right" style="background-color: #199319;">Add</a>
                        <button id="toggle-visibility" class="btn btn-secondary mb-3 float-right" style="background-color: #199319;">Toggle Visibility</button>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row" id="blog-posts">
                        @foreach ($blogposts as $item)
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('storage/' . $item->image_url) }}" alt="Blog post image" style="width: 100%; height: 200px; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->title }}</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">{{ $item->subtitle }}</h6>
                                        <p class="card-text">{{ \Illuminate\Support\Str::limit($item->content, 100) }}</p>
                                        <div class="d-flex justify-content-between">
                                            <a href="{{ route('blogpost.edit', $item->id) }}">Edit</a>
                                            <a href="#" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id }}').submit();">Delete</a>

                                            <form id="delete-form-{{ $item->id }}" action="{{ route('blogpost.destroy', $item->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#toggle-visibility').click(function() {
            $('#blog-posts').toggle();
        });

        $('.star-rating').raty({
            score: 3, // default score, you can replace it with actual rating if available
            click: function(score, evt) {
                alert('Rating: ' + score);
                // Here you can send the rating to your server via AJAX
            }
        });
    });
</script>
@endsection
