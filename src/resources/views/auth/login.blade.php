@extends('layouts.app_auth')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('content')
<div class="login">
    <div class="login_header">
        <h1 class="login_header-logo">ログイン</h1>
    </div>
    <form class="form" action="/login" method="post">
        @csrf
        <div class="form_frame">
            <div class="form_group">
                <p class="form_title">メールアドレス</p>
                <div class="form_group-content">
                    <div class="form_group-text">
                        <input class="form_group-text_input" name="email" type="email" value="{{ old('email')}}">
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
        </div>
        <div class="form_button">
            <button class="form_button-submit" type="submit">ログインする</button>
        </div>
    </form>
    <div class="login">
        <a class="login_button" href="/register">会員登録はこちら</a>
    </div>
</div>
@endsection