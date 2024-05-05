<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category= Category::all();
        return view('category.index', compact("category"));
    }

    public function create(){
        return view('category.create');
    }

    public function store(Request $request){
        $slug = $request->name;
        $category= Category::create([
            'name'=> $request->name,
            'slug'=> $slug
        ]);

        return redirect()->route('category')->with('message','category added');
        }

}
