<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function register()
    {
        $categories = Category::all();
        return view('sell', compact('categories'));
    }
}
