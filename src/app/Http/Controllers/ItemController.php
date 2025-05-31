<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Myitem;
use App\Models\Item;
use App\Http\Requests\ExhibitionRequest;

class ItemController extends Controller
{
    public function index(){
        $items = Item::all();
        return view('index', compact('items'));
    }

    public function mypage(){
        $myitems = Myitem::all();
        return view('profile', compact('myitems'));
    }

    public function add(){
        return view('sell');
    }

    public function sell(ExhibitionRequest $request)
    {
        $myitems = $request->only('image', 'name','brand_name','quality','content','price');
        $myitem = Myitem::create($myitems);
        $image_path = $request->file('image')->store('public/avatar/');
        var_dump($image_path);
        $myitem->image = basename($image_path);
        return redirect('/mypage');
    }

    public function edit(){
        return view('profile_edit');
    }

    public function getDetail(){
        $myitems = Myitem::all()->find($myitem->id);
        return view('detail', compact('myitems'));
    }
    

    public function profile(){
        return view('profile');
    }

}
