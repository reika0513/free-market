<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create(){
        $this->validate($request, Category::$rules);
        $categories = $request->all();
        Category::create($categories);
        return redirect('/');
    }
}
