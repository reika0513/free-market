@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="profile">
    <div class="profile_head">
        <div class="profile_user">
            <img src="" alt="画像なし">
            <h1 class="profile_user-name">ユーザー名</h1>
        </div>
            <a class="profile_link" href="">プロフィールを編集</a>
    </div>
    <div class="main_header">
        <a class="header_recommend" href="/">出品した商品</a>
        <a class="header_list" href="">購入した商品</a>
    </div>
    <div class="main_items">
        <!-- foreach() -->
        <a class="items_link" href="">
            <div class="items">
                <img class="items_image" src="" alt="画像なし"><!-- src=image value -->
                <p class="items_name">商品名<!-- name value --></p>
                <p class="item_id" type="hidden"><!-- id value --></p>
            </div>
        </a>
        <!-- endforeach -->
    </div>
</div>
@endsection