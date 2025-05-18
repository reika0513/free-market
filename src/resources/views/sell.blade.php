@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('content')
<div class="sell">
    <div class="sell_header">
        <h1 class="sell_header-logo">商品の出品</h1>
    </div>
    <form class="form" action="/sell" method="post" enctype='multipart/form-data'>
        @csrf
        <div class="form_frame">
            <div class="form_frame-first">
                <div class="from_group">
                    <h3 class="form_title">商品画像</h3>
                    <div class="form_group-content">
                        <div class="form_group-image">
                            <input class="form_group-image_input" type="file" name="image" accept="image/png, image/jpeg">
                        </div>
                        <div class="form_error">
                           @error('image')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="form_frame-second">
                <h2 class="form_frame_header">商品の詳細</h2>
                <div class="form_group">
                    <h3 class="form_title">カテゴリー</h3>
                    <div class="form_group-content">
                        <div class="form_group-text">
                        <!-- カテゴリーボタン -->
                        </div>
                        <div class="form_error">
                            <!-- エラー -->
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <h3 class="form_title">商品の状態</h3>
                    <div class="form_group-content">
                        <div class="form_group-text">
                            <select class="form_group-text_categories" name="quality">
                                <option hidden>選択してください</お>
                                <option class="categories_option" name="quality">
                                <label for="select" value="A">良好</label></option>
                                <option class="categories_option" name="quality">
                                <label for="select" value="B">目立った傷や汚れなし</label></option>
                                <option class="categories_option" name="quality">
                                <label for="select" value="C">やや傷や汚れあり</label></option>
                                <option class="categories_option" name="quality">
                                <label for="select" value="D">状態が悪い</label></option>
                            </select>
                        </div>
                        <div class="form_error">
                            @error('quality')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="form_frame-second">
                <h2 class="form_frame_header">商品名と説明</h2>
                <div class="form_group">
                    <h3 class="form_title">商品名</h3>
                    <div class="form_group-content">
                        <div class="form_group-text">
                            <input class="form_group-text_input" name="name" type="text">
                        </div>
                        <div class="form_error">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <h3 class="form_title">ブランド名</h3>
                    <div class="form_group-content">
                        <div class="form_group-text">
                            <input class="form_group-text_input" name="brand_name" type="text">
                        </div>
                        <div class="form_error">
                            @error('brand_name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <h3 class="form_title">商品の説明</h3>
                    <div class="form_group-content">
                        <div class="form_group-textarea">
                            <textarea class="form_group-textarea_input" name="content" id="" cols="95" rows="8"></textarea>
                        </div>
                        <div class="form_error">
                            @error('content')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <h3 class="form_title">商品価格</h3>
                    <div class="form_group-content">
                        <div class="form_group-text">
                            <span class="price_span">￥</span>
                            <input class="form_group-text_input-price" name="price" type="text">
                        </div>
                        <div class="form_error">
                            @error('price')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form_button">
            <button class="form_button-submit" type="submit">出品する</button>
        </div>
    </form>
</div>
@endsection
