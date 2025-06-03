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
        @foreach ($items as $item)
        <div class="items">
            <a class="items_link" href="/item/{{$item->id}}">
            <img class="items_image" src="{{ asset($item->image) }}" alt="画像なし">
            <p class="items_name">{{$item->name}}</p>
            </a>
        </div>
        @endforeach
    </div>
@endsection
