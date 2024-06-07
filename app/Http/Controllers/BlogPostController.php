<?php

namespace App\Http\Controllers;
use App\Models\BlogPost;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;


class BlogPostController extends Controller
{

    public function index()
    {
        $blogposts = BlogPost::all();
        return view('blogpost.index', compact('blogposts'));
    }



    public function add()
{
    return view('blogpost.add');
}


    public function create()
    {
        return view('blogpost.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'image_url' => 'nullable|string|max:255',
            'content' => 'required|string'
        ]);

        if($request->hasFile('image')){
            $imagepath = $request->file('image')->store('image');
            $imageUrl = asset('storage/' .$imagepath);
        }
        else{
            $imageUrl = null;
        }

        BlogPost::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image_url' => $request->image_url,
            'content' => $request->content
        ]);
        
        return redirect()->route('blogpost.index')->with('success', 'Blog post created successfully');
    }

    public function showAll()
    {
        $blogposts = BlogPost::all();
        return view('blogs.index', compact('blogposts'));
    }

    public function destroy($id)
    {
        $blogpost = BlogPost::findOrFail($id);
        $blogpost->delete();
        return redirect()->route('blogpost.index')->with('success', 'Blog post deleted successfully');
    }
    public function toggleVisibility(Request $request, $id)
    {
        $blogPost = BlogPost::find($id);
        if ($blogPost) {
            $blogPost->is_public = !$blogPost->is_public;
            $blogPost->save();
        }
    
        return redirect()->route('blogpost.index')->with('status', 'Blog post visibility toggled successfully!');
    }
    



    // public function ratePost(Request $request){
    //     $validated = $request->validate([
    //         'post_id' => 'required|exists:blog_posts,id',
    //         'score' => 'required|integer|min:1|max:5'
    //     ]);

    //     $post = Blogpost::find($validated['post_id']);
    //     $post->ratings()->create([
    //         'user_id' => auth()->id(),
    //         'score'=> $validated['score'],
    //     ]);
    //     return response()->json(['success' => true]);
    // }
}