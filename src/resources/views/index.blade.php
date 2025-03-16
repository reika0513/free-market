@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="main_header">
        <a class="header_recommend" href="/">おすすめ</a>
        <a class="header_list" href="">マイリスト</a>
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
@endsection
