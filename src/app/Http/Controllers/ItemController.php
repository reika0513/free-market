<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Myitem;

class ItemController extends Controller
{
    public function index(){
        return view('index');
    }

    public function mypage(){
        $myitems = Myitem::all();
        return view('profile', compact('myitems'));
    }

    public function add(){
        return view('sell');
    }

    public function sell(Request $request)
    {
        $myitems = $request->only('image','name','brand_name','quality','content','price');
        Myitem::create($myitems);;
        return redirect('/mypage');
    }

    public function edit(){
        return view('profile_edit');
    }
}
