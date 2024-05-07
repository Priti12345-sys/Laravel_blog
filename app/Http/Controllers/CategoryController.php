<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('category.index', compact("category"));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp|max:2048',
        ]);
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/category/';
            $file->move($path, $filename);
        }
    
        Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'image' => $path . $filename ?? null,
        ]);
    
        return redirect()->route('category')->with('message', 'Category added');
    }
    public function edit(Request $request, $id)
    {
        $item = Category::findOrFail($id);
        $item->update($request->all());
        return view('category.edit', compact('item'));
    }

    public function update(Request $request, int $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|max:255|string',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp',
        ]);

        $role = Category::findOrFail($id);
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/category/';
            $file->move($path, $filename);
            if(File::exists($role->image)){
                File::delete($role->image);
            
            }
        }

        
        $role->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'image' => $path.$filename,
        ]);
        return redirect()->route('category.edit', $role->id)->with('success', 'Role updated successfully');
    }
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        if ($category) {
            $category->delete();
            return redirect()->route('category')->with('success', 'Category deleted successfully');
        } else {
            return redirect()->route('category')->with('error', 'Not found');
        }
    }
}
