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
            <div class="header_search">
                <input class="search_logo" type="text" placeholder="なにをお探しですか？">
            </div>
            <div class="header_button">
                <a class="button_logout" href="">ログアウト</a>
                <a class="button_mypage" href="">マイページ</a>
                <a class="button_sell" href="">出品</a>
            </div>
        </div>
    </header>
    
  <main>
    @yield('content')
  </main>
</body>
</html>