<?php

namespace App\Http\Controllers;

use App\Models\Abouts;
use App\Models\Category;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index()
    {
        $abouts = Abouts::all();
        return view('abouts.index', compact('abouts'));
    }

    public function store(Request $request){
        $request->validate([
            'title'=> 'required|string|max:255',
            'sub-title'=> 'required|string|max:255',
            'description'=> 'required|string|max:255'
        ]);

        
    }
}
