<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セントイキタイ</title>
    <link rel="stylesheet" href="{{ url('css/destyle.css') }}">
    <link rel="stylesheet" href="{{ url('css/base.css') }}">
</head>

<body>
    <!-- ヘッダー -->
    <header>
        <div class="top_bar">
            <div class="menu-left">
                <nav>
                    <ul class="menu-left-bar">
                        <li class="menu-left-box"><a class="menu-left-text" href="{{ route('top') }}">TOP</a></li>
                        <li class="menu-left-box"><a class="menu-left-text" href="about.php">セントイキタイとは？</a></li>
                        <li class="menu-left-box"><a class="menu-left-text" href="{{ route('sekatsu_user_index') }}">セ活一覧</a></li>
                        <li class="menu-left-box"><a class="menu-left-text" href="{{ route('sento.index') }}">施設一覧</a></li>
                        <li class="menu-left-box"><a class="menu-left-text" href="http://localhost/wp_magazin/">マガジン</a></li>
                        @if (Route::has('login'))
                        @auth
                        {{-- <a href="{{ url('/dashboard') }}">Dashboard</a> --}}
                        <li class="menu-left-box"><a class="menu-left-text" href="{{ route('sento.create') }}">施設登録</a></li>
                        @else
                        <li class="menu-left-box"><a class="menu-left-text" href="{{ route('login') }}">施設登録</a></li>
                        @endauth
                        @endif
                        {{-- <li class="menu-left-box"><a class="menu-left-text" href="{{ route('login') }}">施設登録</a></li> --}}
                        <li class="menu-left-box"><a class="menu-left-text" href="{{ route('ticket') }}">電子チケット</a></li>
                    </ul>
                </nav>
            </div>
            @if (Route::has('login'))
                <div class="menu-right">
                    <ul class="menu-right-bar">
                    @auth
                        {{-- <a href="{{ url('/dashboard') }}">Dashboard</a> --}}
                        <li class="menu-right-box">
                            <a class="menu-right-text" href="{{ route('sento_users') }}">
                                <span>マイページ</span>
                            </a>
                        </li>
                        <div class="menu-right-box-register">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('ログアウト') }}
                                </x-dropdown-link>
                            </form>
                        </div>
                    @else
                        <li class="menu-right-box">
                        <a href="{{ route('login') }}">ログイン</a>
                        </li>

                        <li class="menu-right-box-register">
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">新規登録</a>
                        @endif
                        </li>
                    @endauth
                    </ul>
                </div>
            @endif
        </div>
    </header>
    <!-- ヘッダー -->
    @yield('content')
</body>

</html>

