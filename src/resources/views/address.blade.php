@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/address.css') }}">
@endsection

@section('content')
<div class="address">
    <div class="address_header">
        <h1 class="address_header-logo">住所の変更</h1>
    </div>
    <form class="form" action="/mypage/post_profile" method="post">
        @csrf
        <div class="form_frame"> 
            <div class="form_group">
                <p class="form_title">郵便番号</p>
                <div class="form_group-content">
                    <div class="form_group-text">
                        <input class="form_group-text_input" name="post" type="text">
                    </div>
                    <div class="form_error">
                        <!-- エラー -->
                    </div>
                </div>
            </div>
            <div class="form_group">
                <p class="form_title">住所</p>
                <div class="form_group-content">
                    <div class="form_group-text">
                        <input class="form_group-text_input" name="address" type="text">
                    </div>
                    <div class="form_error">
                        <!-- エラー -->
                    </div>
                </div>
            </div>
            <div class="form_group">
                <p class="form_title">建物名</p>
                <div class="form_group-content">
                    <div class="form_group-text">
                        <input class="form_group-text_input" name="building" type="text">
                    </div>
                    <div class="form_error">
                        <!-- エラー -->
                    </div>
                </div>
            </div>
        </div>
        <div class="form_button">
            <button class="form_button-submit" type="submit">更新する</button>
        </div>
    </form>
</div>
@endsection