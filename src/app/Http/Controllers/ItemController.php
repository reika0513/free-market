<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Myitem;
use App\Models\Item;
use App\Models\Profile;
use App\Http\Requests\ExhibitionRequest;

class ItemController extends Controller
{
    public function index(){
        $items = Item::all();
        return view('index', compact('items'));
    }

    public function getDetail($item_id){
        $item = Item::find($item_id);
        return view('detail', compact('item'));
    }
    
    public function postDetail($item_id){
        $item = Item::find($item_id);
        return view('purchase', compact('item'));

    }

    public function mypage(){
        $myitems = Myitem::all();
        $profiles = Profile::where('id')->first();
        return view('profile', compact('myitems', 'profiles'));
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

    public function getProfile(Request $request){
        $profiles=Profile::all();
        return view('profile_edit', compact('profiles'));
    }

    public function postProfile(Request $request){
        $profiles = $request -> all();
        $profile = Profile::create($profiles);
        return redirect('/');
    }

}
