@extends('layouts.base3')
@section('content')

    <link rel="stylesheet" href="{{ url('css/sekatsu.css') }}">

    <div class="headlineHeader">
        <h1 class="headline"><span class="headline_string">全国の銭湯のセ活</span></h1>
        <p class="c-lead">サウナに行った記録や口コミを残してみよう。</p>
    </div>

    <!-- セ活使い方 -->

    <div class="sekatsuUse">
        <h3 class="sekatsuUs-title">セ活の使い方</h3>
        <div class="sekatsuUse_border">
            <p class="sekatsuUse-detail">
                セ活は銭湯に行った記録や口コミ・感想を残すことができる機能です。自分だけの日々のセント記録や、初めて行った施設の感動をぶつけたレポートから常連さんの細かすぎる定点観測まで、日本中からさまざまなセ活が投稿されています。セントを検索、施設ページを開いて「投稿」ボタンからセ活を登録してみよう！
            </p>
            <span class="sekatsuUse-span">\　統計情報もチェックできる　/</span>
            <img src="{{ asset('img/data.png') }}" width="1100" height="180" alt="" decoding="async">
        </div>
    </div>

    <!-- セ活の使い方 -->

    <!-- 表示情報の切り替えボタン -->
    <div class="search_mode_change">
        <div class="filterArea">
            <p class="filterItem_name">地域</p>
            <div class="filterItem_content">
                <span class="filterItem_result">選択する</span>
            </div>
        </div>

        <div class="filterConditions">
            <p class="filterItem_name">条件</p>
            <div class="filterItem_content">
                <span class="filterItem_result">選択する</span>
            </div>
        </div>

        <div class="filterItem-keyword">
            <p class="filterItem_name">キーワード</p>
            <div class="filterItem_content">
                <input placeholder="施設名、エリアなど" name="keyword" type="text" value="">
            </div>
        </div>
        <div class="filterItem-search">
            <button type="submit"><span>検索</span></button>
        </div>
    </div>


    <!-- 表示情報の切り替えボタン -->

    <!-- セ活エリア -->

    <!-- セ活表示エリア -->

    <div class="sekatsu_main">
        @forelse ($sekatsu_users as $sekatsu_user)
        <div class="sekatsu_box">
            <div class="sekatsu_prof">
                <!-- セ活メイン(1) -->
                <div class="postCard_icon">
                    <a href="">
                        <img src="{{ asset('img/prof.png') }}" width="65" height="65" alt="">
                    </a>
                </div>
                <div class="postCardUser_content">
                    <p class="postCardUser_name">
                        <a href="https://sauna-ikitai.com/saunners/39861">Princess Of Zelda</a>
                    </p>
                    <div class="postCardUser_info">
                        <p class="postCardUser_date">{{ $sekatsu_user->visit_date }}</p>
                        <p class="postCardUser_counter">14回目の訪問</p>
                    </div>
                </div>
            </div>
            <div class="postCard_body">
                <strong class="postCard_facility"><a href="">{{ $sekatsu_user->visit_name }}</a>
                    <p class="postCard_address">[ 福岡県 ] </p>
                </strong>
                <p class="postCard_text">
                    {{ $sekatsu_user->sekatsu_comment }}
                </p>

                {{-- <div class="postCard_image_box">
             <div class="postCard_image">
            <img src="https://img.sauna-ikitai.com/sauna/2215_20210723_113320_QRE948ddc0_medium.jpg" alt="">
             </div>
             <div class="postCard_image">
            <img src="https://img.sauna-ikitai.com/sauna/2215_20210723_113344_JbBJlg49Av_medium.jpg" alt="">
             </div>
            </div> --}}

                <div class="postCardAction">
                    <div class="postCardAction_item is-like" data-action="like" data-sakatsu-id="1193052">
                        <span class="likeCount">0 いいね</span>
                    </div>
                    {{-- <div class="postCardAction_item is-comment"><a
                        href="https://sauna-ikitai.com/saunners/39861/posts/1193052?anchor=giftonttu">
                        <span class="commentCount">0 コメント</span></a>
                </div> --}}
                </div>
            </div>
        </div>
        @empty
        <div>No sekatsu yet!</div>
        @endforelse
        <div class="pagenation">{{ $sekatsu_users->onEachSide(3)->links() }}</div>
    </div>

    <!-- セ活 -->


@endsection
