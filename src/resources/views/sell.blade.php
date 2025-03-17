@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('content')
<div class="sell">
    <div class="sell_header">
        <h1 class="sell_header-logo">商品の出品</h1>
    </div>
    <form class="form" action="">
        @csrf
        <div class="form_frame">
            <div class="form_frame-first">
                <div class="from_group">
                    <p class="form_title">商品画像</p>
                </div>
                <div class="form_group-content">
                    <div class="form_group-image">
                       <input class="form_group-image_input" type="file" name="image" accept="image/png, image/jpeg" value="">
                    </div>
                    <div class="form_error">
                       <!-- エラー -->
                    </div>
                </div>
            </div>

            <div class="form_frame-second">
                <h2 class="form_frame_header">商品の詳細</h2>
                <div class="form_group">
                    <p class="form_title">カテゴリー</p>
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
                    <p class="form_title">商品の状態</p>
                    <div class="form_group-content">
                        <div class="form_group-text">
                            <select class="form_group-text_categories" name="categories">
                                <option value="">選択してください</option>
                                <option value="">
                                <label for="select" value="A">良好</label></option>
                                <option value="">
                                <label for="select" value="B">目立った傷や汚れなし</label></option>
                                <option value="">
                                <label for="select" value="C">やや傷や汚れあり</label></option>
                                <option value="">
                                <label for="select" value="D">状態が悪い</label></option>
                            </select>
                        </div>
                        <div class="form_error">
                            <!-- エラー -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="form_frame-second">
                <h2 class="form_frame_header">商品名と説明</h2>
                <div class="form_group">
                    <p class="form_title">商品名</p>
                    <div class="form_group-content">
                        <div class="form_group-text">
                            <input class="form_group-text_input" name="name" type="text">
                        </div>
                        <div class="form_error">
                            <!-- エラー -->
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <p class="form_title">ブランド名</p>
                    <div class="form_group-content">
                        <div class="form_group-text">
                            <input class="form_group-text_input" name="brand_name" type="text">
                        </div>
                        <div class="form_error">
                            <!-- エラー -->
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <p class="form_title">商品の説明</p>
                    <div class="form_group-content">
                        <div class="form_group-textarea">
                            <textarea class="form_group-textarea_input" name="content" id=""></textarea>
                        </div>
                        <div class="form_error">
                            <!-- エラー -->
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <p class="form_title">商品価格</p>
                    <div class="form_group-content">
                        <div class="form_group-text">
                            <span>￥</span>
                            <input class="form_group-text_input" name="price" type="text">
                        </div>
                        <div class="form_error">
                            <!-- エラー -->
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
