<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoachTech Free-market</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                COACHTECH
            </a>
            <form class="header_search" action="/products/search" method="POST">
            @csrf
                <input class="search_logo" onchange="this.form.submit()" type="text" placeholder="なにをお探しですか？">
            </form>
            <div class="header_button">
                @auth
                <form class="logout_form" action="/logout" method="post">
                @csrf
                    <button class="button_logout" href="">ログアウト</button>
                </form>
                @endauth
                @guest
                <a class="button_login" href="http://localhost/login">ログイン</a>
                @endguest
                <a class="button_mypage" href="http://localhost/mypage">マイページ</a>
                <a class="button_sell" href="http://localhost/add">出品</a>
            </div>
            
        </div>
    </header>
    
  <main>
    @yield('content')
  </main>
</body>
</html>