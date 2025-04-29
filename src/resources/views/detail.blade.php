@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="detail">
    <div class="detail_frame">
        <div class="detail_left">
            <img class="detail_image" src="" alt="商品画像">
        </div>
        <div class="detail_right">
            <div class="detail_purchase_form">
                <form class="purchase_form" action="">
                    @csrf
                    <div class="purchase_head">
                        <div class="head_title">
                            <h1 class="head_title_name">商品名がここに入る</h1>
                            <p class="head_title_brand-name">ブランド名</p>
                        </div>
                        <div class="head_content"></div>
                        <p class="head_content_price">
                            <span>￥47,000</span>
                            <span>(税込)</span></p>
                        <p class="star">星1</p>
                        <p class="comment">コメント2</p>
                    </div>
                    <div class="form_button">
                        <button class="form_button-submit" type="submit">購入手続きへ</button>
                    </div>
                    <div class="purchase_content">
                        <h3 class="content_title">商品説明</h3>
                        <div class="content_body">
                            <p class="content_body-inner">
                                <span>カラー：グレー</span>
                                <span>新品</span>
                                <span>商品の状態は両行です。傷もありません。</span>
                                <span>購入後、即発送いたします。</span>
                            </p>
                        </div>
                    </div>
                    <div class="purchase_categories">
                        <h3 class="categories_title">商品情報</h3>
                        <div class="categories_body">
                            <div class="categories_body-category">
                                <p class="content_title">カテゴリー</p>
                                <p class="content_detail">洋服、メンズ</p>
                            </div>
                            <div class="categories_body-quality">
                                <p class="content_title">商品の状態</p>
                                <p class="content_detail">良好</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="detail_comment_form">
                <form class="comment_form" action="">
                    @csrf
                    <h2 class="comment_header">コメント(1)</h2>
                    <div class="comment_add">
                        <div class="comment_user">
                            <img class="comment_user-image" src="" alt="">
                            <p class="comment_user-name">admin</p>
                        </div>
                        <div class="comment_add_content">
                            <input class="comment_add_content-input" name="content" type="text" placeholder="こちらにコメントが入ります。">
                        </div>
                    </div>
                    <div class="comment_input">
                        <h3 class="comment_title">商品へコメント</h3>
                        <div class="comment_content">
                            <div class="comment_content_textarea">
                                <textarea class="comment_content_textarea-input" name="content" id="" cols="50" rows="5"></textarea>
                            </div>
                            <div class="form_error">
                                <!-- エラー -->
                            </div>
                        </div>
                    </div>
                    <div class="form_button">
                        <button class="form_button-submit" type="submit">コメントを送信する</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
