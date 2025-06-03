@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
@endsection

@section('content')
<div class="purchase">
    <div class="purchase_frame">
        <form class="purchase_form" action="/purchase/post/{{$item->id}}" method="post">
            @csrf
            <div class="purchase_left">
                <div class="purchase_left-top">
                    <img class="purchase_image" src="{{ asset($item->image) }}" alt="商品画像">
                    <div class="purchase_title">
                        <h1 class="purchase_name">{{$item->name}}</h1>
                        <p class="purchase_title_price">
                            <span class="title_price-label">￥</span>
                            <span class="title_price">{{$item->price}}</span>
                        </p>
                    </div>
                </div>
                <div class="purchase_left-middle">
                    <h2 class="pay_title">支払い方法</h2>
                    <select class="pay_select" name="pay">
                        <option hidden>選択してください</option>
                        <option class="pay_select-option" name="pay">
                        <label for="select" value="A">コンビニ払い</label></option>
                        <option class="pay_select-option" name="pay">
                        <label for="select" value="B">カード払い</label></option>
                    </select>
                </div>
                <div class="purchase_left-bottom">
                    <div class="address">
                    <h2 class="address_title">配送先</h2>
                    <a href="/purchase/address/{{$item->id}}"></a>
                    </div>
                    <p class="address_post">
                        <span>〒</span>
                        <span>XXX-YYYY</span>
                    </p>
                    <p class="address_content">ここには住所と建物が入ります</p>
                </div>
            </div>

            <div class="purchase_right">
                <div class="purchase_right-content">
                    <div class="purchase_price">
                        <p class="purchase_price-title">商品代金</p>
                        <p class="purchase_price">
                            <span class="purchase_price-label">￥</span>
                            <span class="purchase_price">{{$item->price}}</span>
                        </p>
                    </div>
                    <div class="purchase_price">
                        <p class="purchase_pay-title">支払い方法</p>
                        <p class="purchase_pay">コンビニ払い</p>
                    </div>
                </div>
                <button class="form_button-submit" type="submit">購入する</button>
            </div>
        </form>
    </div>
</div>
@endsection
