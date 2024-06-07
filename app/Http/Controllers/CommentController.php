<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:blog_posts,id',
            'comment' => 'required|string|max:255'
        ]);

        Comment::create([
            'post_id' => $request->post_id,
            'comment' => $request->comment,
            'user_id' => auth()->id() // assuming you have user authentication
        ]);

        return response()->json(['success' => true]);
    }
}
