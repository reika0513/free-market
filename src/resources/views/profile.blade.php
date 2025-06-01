@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="profile">
    <div class="profile_head">
        <div class="profile_user">
            <img src="" alt="画像なし">
            <h1 class="profile_user-name"></h1>
        </div>
            <a class="profile_link" href="http://localhost/mypage/get_profile">プロフィールを編集</a>
    </div>
    <div class="main_header">
        <a class="header_recommend" href="/mypage">出品した商品</a>
        <a class="header_list" href="">購入した商品</a>
    </div>
    <div class="main_items">
        @foreach ($myitems as $myitem)
        <div class="items">
            <img class="items_image" src="{{ asset($myitem->image) }}" alt="画像なし">
            <p class="items_name">{{$myitem->name}}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection