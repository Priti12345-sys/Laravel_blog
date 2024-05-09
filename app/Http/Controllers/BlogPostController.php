<?php

namespace App\Http\Controllers;
use App\Models\BlogPost;

use Illuminate\Http\Request;

class BlogPostController extends Controller
{

    public function index()
    {
        $blogposts = BlogPost::all();
        return view('blogpost.index', compact('blogposts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'image_url' => 'nullable|string|max:255',
            'content' => 'required|string'
        ]);

        BlogPost::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image_url' => $request->image_url,
            'content' => $request->content
        ]);

        return redirect()->route('blogpost')->with('success', 'Blog post is created');
    }

    public function add(){
        return view('blogpost.add');
    }
}