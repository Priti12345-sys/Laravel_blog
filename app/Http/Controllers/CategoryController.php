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
    
        public function edit(Request $request, $id){
            $item = Category::findOrFail($id);
            $item->update($request->all());
            return view('category.edit', compact('item'));
        }

        public function update(Request $request, $id)
        {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
            ]);
        
            $role = Category::findOrFail($id);
            $role->update($validatedData);
        
            return redirect()->route('category.edit', $role->id)->with('success', 'Role updated successfully');
        }
        public function destroy($id)
{
    $category = Category::findOrFail($id);
    $category->delete();
    
    return redirect()->route('category.index')->with('success', 'Category deleted successfully');
}


}
