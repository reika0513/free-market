<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Myitem;
use App\Models\Item;
use App\Models\Profile;
use App\Models\Comment;
use App\Http\Requests\ExhibitionRequest;
use App\Http\Requests\AddressRequest;
use App\Http\Requests\CommentRequest;


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
        $profiles = Profile::all();
        return view('purchase', compact('item', 'profiles'));

    }

    public function comment(CommentRequest $request){
        $profile = new Comment;
        $profile->user_id = $request->user()->id;
        $profile->comment = $request->comment;
        $profile->save();
        return view('detail');
    }

    public function add(){
        return view('sell');
    }

    public function sell(ExhibitionRequest $request)
    {
        $myitems = $request->all();
        $myitem = Myitem::create($myitems);
        return redirect('/mypage');
    }

    public function mypage(){
        $myitems = Myitem::all();
        $profiles = Profile::all();
        return view('profile', compact('myitems', 'profiles'));
    }



    public function create(){
        return view('profile_create');
    }

    public function address(){
        return view('address');
    }

    public function postProfile(AddressRequest $request){
        $profile = new Profile;
        $profile->user_id = $request->user()->id;
        $profile->name = $request->name;
        $profile->image = $request->image;
        $profile->address = $request->address;
        $profile->post = $request->post;
        $profile->building = $request->building;
        $profile->save();
        return redirect('/');
    }

    public function getProfile(){
        $profiles = Profile::all();
        return view('profile_edit', compact('profiles')); 
    }

}
