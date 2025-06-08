@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile_edit.css') }}">
@endsection

@section('content')
<div class="profile">
    <div class="profile_header">
        <h1 class="profile_header-logo">プロフィール設定</h1>
    </div>
    <form class="form" action="/mypage/post_profile" method="post">
        @csrf
        <div class="form_frame">
            <div class="form_group">
                <div class="form_group-img">
                    <img id="preview" class="form_group-image_preview">
                    <input class="form_group-image_input" type="file" name="image" accept="image/png, image/jpeg" onchange="previewFile(this);">
                </div>
                <div class="form_error">
                    <!-- エラー -->
                </div>
            </div>
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

<script>
  function previewFile(hoge){
    var fileData = new FileReader();
    fileData.onload = (function() {
      document.getElementById('preview').src = fileData.result;
    });
    fileData.readAsDataURL(hoge.files[0]);
  }
  </script>
@endsection