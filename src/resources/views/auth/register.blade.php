@extends('layouts.app_auth')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endsection

@section('content')
<div class="register">
    <div class="register_header">
        <h1 class="register_header-logo">会員登録</h1>
    </div>
    <form class="form" action="">
        @csrf
        <div class="form_frame">
            <div class="form_group">
                <p class="form_title">ユーザー名</p>
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
                <p class="form_title">メールアドレス</p>
                <div class="form_group-content">
                    <div class="form_group-text">
                        <input class="form_group-text_input" name="email" type="text">
                    </div>
                    <div class="form_error">
                        <!-- エラー -->
                    </div>
                </div>
            </div>
            <div class="form_group">
                <p class="form_title">パスワード</p>
                <div class="form_group-content">
                    <div class="form_group-text">
                        <input class="form_group-text_input" name="password" type="text">
                    </div>
                    <div class="form_error">
                        <!-- エラー -->
                    </div>
                </div>
            </div>
            <div class="form_group">
                <p class="form_title">確認用パスワード</p>
                <div class="form_group-content">
                    <div class="form_group-text">
                        <input class="form_group-text_input" name="confirm_password" type="text">
                    </div>
                    <div class="form_error">
                        <!-- エラー -->
                    </div>
                </div>
            </div>
        </div>
        <div class="form_button">
            <button class="form_button-submit" type="submit">登録する</button>
        </div>
    </form>
    <div class="login">
        <a class="login_button" href="">ログインはこちら</a>
    </div>
</div>
@endsection
