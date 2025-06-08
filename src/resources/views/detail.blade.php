@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="detail">
    <div class="detail_frame">
        <div class="detail_left">
            <img class="detail_image" src="{{ asset($item->image) }}" alt="商品画像">
        </div>
        <div class="detail_right">
            <div class="detail_purchase_form">
                <form class="purchase_form" action="/purchase/{{$item->id}}" method="post">
                    @csrf
                    <div class="purchase_head">
                        <div class="head_title">
                            <h1 class="head_title_name">{{$item->name}}</h1>
                            <p class="head_title_brand-name">{{$item->brand_name}}</p>
                        </div>
                        <div class="head_content"></div>
                        <p class="head_content_price">
                            <span class="price_label">￥</span>
                            <span>{{$item->price}}</span>
                            <span class="price_label">(税込)</span>
                        </p>
                        <div class="icon">
                            <div class="icon_star">
                                <img class="icon_image" src="" alt="">
                                <p class="star">星1</p>
                            </div>
                            <div class="icon_star">
                                <img class="icon_image" src="" alt="">
                                <p class="comment">コメント2</p>
                            </div>
                        </div>
                    </div>
                    <div class="form_button">
                        <button class="form_button-submit" type="submit">購入手続きへ</button>
                    </div>
                    <div class="purchase_content">
                        <h3 class="content_title">商品説明</h3>
                        <div class="content_body">
                            <p class="content_body-inner">{{$item->content}}</p>
                        </div>
                    </div>
                    <div class="purchase_categories">
                        <h3 class="content_title">商品の情報</h3>
                        <div class="categories_body">
                            <div class="categories_body-category">
                                <p class="categories_title">カテゴリー</p>
                                <p class="content_detail-category">{{$item->category}}</p>
                            </div>
                            <div class="categories_body-quality">
                                <p class="quality_title">商品の状態</p>
                                <p class="content_detail">{{$item->quality}}</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="detail_comment_form">
                <form class="comment_form" action="">
                    @csrf
                    <h3 class="comment_header">コメント(1)</h3>
                    <div class="comment_add">
                        <div class="comment_user">
                            <img class="comment_user-image" src="" alt="">
                            <p class="comment_user-name">admin</p>
                        </div>
                        <div class="comment_add_content">
                            <p class="comment_add_content-input">こちらにコメントが入ります。</p>
                        </div>
                    </div>
                    <div class="comment_input">
                        <h4 class="comment_title">商品へコメント</h4>
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
