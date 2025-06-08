<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;


class ProfileController extends Controller
{
    public function mypage(){
        $profiles = Profile::all();
        return view('profile', compact('profiles'));
    }

    public function create(){
        return view('profile_edit');
    }

    public function postProfile(Request $request){
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

    public function getProfile($user_id){
        $profile = Profile::find($request->id);
        return view('profile_edit', compact('profile')); 
    }




}
