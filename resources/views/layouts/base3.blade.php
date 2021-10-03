<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セントイキタイ</title>
    <link rel="stylesheet" href="{{ url('css/destyle.css') }}">
    <link rel="stylesheet" href="{{ url('css/base3.css') }}">
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
                        <div class="menu-right-box">
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

                        <li class="menu-right-box">
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
    <!-- フッター検索 -->

    <div class="footer_content">
        <div class="footerSearch">
            <div class="footerSearch_area_wrapper">
                <h2 class="footerSearch_area_title">都道府県から銭湯を探す</h2>
                <div class="footerSearch_areaname_wrap">
                    <div class="footerSearch_pref">
                        <ul>
                            <li>
                                <a href="/hokkaido-tohoku">北海道・東北</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/hokkaido">北海道の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/aomori">青森県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/iwate">岩手県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/miyagi">宮城県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/akita">秋田県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/yamagata">山形県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/fukushima">福島県の銭湯</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footerSearch_areaname">
                    <div class="footerSearch_pref">
                        <ul>
                            <li>
                                <a href="/kanto">関東</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/ibaraki">茨城県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/tochigi">栃木県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/gunma">群馬県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/saitama">埼玉県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/chiba">千葉県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/tokyo">東京都の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/kanagawa">神奈川県の銭湯</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footerSearch_area">
                    <div class="footerSearch_pref">
                        <ul>
                            <li>
                                <a href="/hokuriku_kousin">北陸・甲信越</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/niigata">新潟県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/toyama">富山県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/ishikawa">石川県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/fukui">福井県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/yamanashi">山梨県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/nagano">長野県の銭湯</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footerSearch_area">
                    <div class="footerSearch_pref">
                        <ul>
                            <li>
                                <a href="/tokai">東海</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/gifu">岐阜県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/shizuoka">静岡県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/aichi">愛知県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/mie">三重県の銭湯</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footerSearch_area">
                    <div class="footerSearch_pref">
                        <ul>
                            <li>
                                <a href="/kinki">近畿</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/shiga">滋賀県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/kyoto">京都府の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/osaka">大阪府の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/hyogo">兵庫県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/nara">奈良県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/wakayama">和歌山県の銭湯</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footerSearch_area">
                    <div class="footerSearch_pref">
                        <ul>
                            <li>
                                <a href="/chugoku">中国・四国</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/tottori">鳥取県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/shimane">島根県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/okayama">岡山県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/hiroshima">広島県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/yamaguchi">山口県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/tokushima">徳島県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/kagawa">香川県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/ehime">愛媛県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/kochi">高知県の銭湯</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footerSearch_area">
                    <div class="footerSearch_pref">
                        <ul>
                            <li>
                                <a href="/kyusyu_okinawa">九州・沖縄</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/fukuoka">福岡県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/saga">佐賀県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/nagasaki">長崎県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/kumamoto">熊本県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/oita">大分県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/miyazaki">宮崎県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/kagoshima">鹿児島県の銭湯</a>
                            </li>
                            <li class="footerSearch_pref_text">
                                <a href="/okinawa">沖縄県の銭湯</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footerSearch_conditions">
                <h2 class="footerSearch_area_title">特徴からセントを探す</h2>
                <ul>
                    <li><a href="/has_loyly">ジェットバス</a></li>
                    <li class="footerSearch_pref_text"><a href="/can_self_loyly">高濃度炭酸泉</a></li>
                    <li class="footerSearch_pref_text"><a href="/has_autoloyly">寝湯</a></li>
                    <li class="footerSearch_pref_text"><a href="/sento">打たせ湯</a></li>
                    <li class="footerSearch_pref_text"><a href="/bona">ドライサウナ</a></li>
                    <li class="footerSearch_pref_text"><a href="/not_has_tv">ミストサウナ</a></li>
                    <li class="footerSearch_pref_text"><a href="/is_vibra">塩サウナ</a></li>
                    <li class="footerSearch_pref_text"><a href="/allow_tattoo">薬湯風呂</a></li>
                    <li class="footerSearch_pref_text"><a href="/has_capsule">電気風呂</a></li>
                    <li class="footerSearch_pref_text"><a href="/has_working_space">貸切風呂</a></li>
                    <li class="footerSearch_pref_text"><a href="/has_permanent_tent_sauna">岩盤浴</a></li>
                    <li class="footerSearch_pref_text"><a href="/has_sauna_lodge">スチームサウナ</a></li>
                    <li class="footerSearch_pref_text"><a href="/has_lake">家族風呂</a></li>
                    <li class="footerSearch_pref_text"><a href="/has_private_sauna">水風呂</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- フッター検索 -->

    @include('parts.footer')











</body>

</html>
