<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function mypage(){
        $myitems = Myitem::all();
        $profiles = Profile::where('id')->first();
        return view('profile', compact('myitems', 'profiles'));
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
