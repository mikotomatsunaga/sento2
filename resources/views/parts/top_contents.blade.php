<!-- 検索 -->
<div class="search">
    <h1 class="main_message">あなたにぴったりの施設がきっと見つかる銭湯検索サイト</h1>
    <h2 class="main_title">セント<br>イキタイ</h2>
    <p class="main_subtitle">sento ikitai</p>
    <form class="main_search" action="">
        <div class="Search_border">
            <div>
                <ul class="top_search">
                    <li class="prefectures_search">
                        <a class="js-modalTrigger" data-modal-type="filterArea">都道府県から探す</span></a>
                    </li>
                    <li class="feature_search">
                        <a class="js-modalTrigger" data-modal-type="filterConditions">特徴から探す</a>
                    </li>
                </ul>
            </div>


            <div class="Search_keyword_border">
                <div class="Search_keyword">
                    <input class="c-formText" type="text" name="keyword" value="" placeholder="施設名・エリア・キーワード">
                    <button class="c-form-submit" type="submit">検 索</button>
                </div>
            </div>
        </div>
</div>
</form>
</div>
<!-- 検索 -->
</div>
<!-- メイン背景 -->
<!-- セ活 -->

<!-- メイン -->
<div class="main">
    <!-- キャンペーン -->
    <div class="campaign">
        <p class="campaign-text">キャンペーン情報バナー</p>
    </div>
    <!-- キャンペーン -->
    <!-- セ活 -->
    <!-- セ活使い方 -->
    <div class="headlineHeader">
        <h2><span class="headline_string">新着セ活</span></h2>
        <p class="headline_lead">セントに行った記録や口コミを残してみよう。</p>
    </div>

    <div class="sekatsuUse">
        <h3 class="sekatsuUs-title">セ活の使い方</h3>
        <div class="sekatsuUse_border">
            <p class="sekatsuUse-detail">
                セ活は銭湯に行った記録や口コミ・感想を残すことができる機能です。自分だけの日々のセント記録や、初めて行った施設の感動をぶつけたレポートから常連さんの細かすぎる定点観測まで、日本中からさまざまなセ活が投稿されています。セントを検索、施設ページを開いて「投稿」ボタンからセ活を登録してみよう！
            </p>
            <span class="sekatsuUse-span">\　統計情報もチェックできる　/</span>
            <img src="{{ asset('img/data.png') }}" width="1100" height="230" alt="" decoding="async">
        </div>
    </div>
    <!-- セ活使い方 -->

    <!-- セ活表示エリア -->

    <div class="sekatsu_main">
        @forelse ($sekatsu_user as $sekatsu_user)
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
                    <p class="postCard_text">{{ $sekatsu_user->sekatsu_comment }}</p>

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
            @empty
                <li>No sekatsu yet!</li>
        @endforelse

    </div>

    <div class="to_next_page_wrap">
        <a class="to_next_page" href=""><span>もっとセ活を読む</span></a>
    </div>

</div>
</div>

<!-- セ活 -->

<!-- PickUp! -->
<div class="topPickupBanner">
    <div class="headlineHeader">
        <h2 class="c-headline c-headline--lv1"><span class="headline_string">PickUp!</span></h2>
        <p class="headline_lead">イベントや取り組みのご紹介。</p>
    </div>

    <div class="topPickupBanner_content">

        <div class="topPickupBanner_item">
            <a href="/walk-to-sauna">
                <img src="{{ asset('img/バナー１.png') }}" width=354px height=500px alt="あなたの街にも！ 歩いて銭湯！">
            </a>
        </div>

        <div class="topPickupBanner_item">
            <a href="https://sauna-ikitai.stores.jp/items/60ab24308899be0a1820cd77" target="_blank">
                <img src="{{ asset('img/バナー２.png') }}" width=354px height=500px alt="ここでしか買えない！限定入浴券を発売中！">
            </a>
        </div>

        <div class="topPickupBanner_item">
            <a href="https://t.co/BZfWE6oRIv" target="_blank">
                <img src="{{ asset('img/バナー３.png') }}" width=354px height=500px alt="入浴心得ポスター無料配布中">
            </a>
        </div>

    </div>
</div>
<!-- PickUp! -->

<!-- 電子チケット -->
<div class="toplottery">
    <div class="headlineHeader">
        <h2 class="c-headline c-headline--lv1"><span class="headline_string">電子チケット</span></h2>
        <p class="headline_lead">ここでしか買えない、お得な電子チケット(入浴券)を特別価格にてご提供！</p>
    </div>
    <div class="goodsList">
        <div class="goodsList_content" data-class="p-goodsCard">
            <!-- 電子チケット1 -->
            <div class="goodsCard" data-prefecture="shizuoka">
                <a href="https://sauna-ikitai.com/tonttu/items/818">
                    <div class="goodsCard_image">
                        <div class="goodsCard_tag">福岡県</div>
                        <img src="{{ asset('img/チケット1.jpeg') }}" width="230" height="180">
                    </div>
                    <div class="goodsCard_content">
                        <strong class="goodsCardTitle">
                            <span class="goodsCardTitle_name">博多極楽の湯</span>
                        </strong>

                        <div class="goodsCard_body">
                            <div class="goodsCardPrice">
                                <span class="goodsCardTitle_item">入浴券</span>
                                <div class="goodsCard_detail_item">５枚綴</div>
                            </div>

                            <div class="goodsCardPrice_count">
                                <p><span>2,980</span>円</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="goodsList_content" data-class="p-goodsCard">
            <!-- 電子チケット2 -->
            <div class="goodsCard" data-prefecture="shizuoka">
                <a href="https://sauna-ikitai.com/tonttu/items/818">
                    <div class="goodsCard_image">
                        <div class="goodsCard_tag">福岡県</div>
                        <img src="{{ asset('img/チケット1.jpeg') }}" width="230" height="180">
                    </div>
                    <div class="goodsCard_content">
                        <strong class="goodsCardTitle">
                            <span class="goodsCardTitle_name">博多極楽の湯</span>
                        </strong>

                        <div class="goodsCard_body">
                            <div class="goodsCardPrice">
                                <span class="goodsCardTitle_item">入浴券</span>
                                <div class="goodsCard_detail_item">５枚綴</div>
                            </div>

                            <div class="goodsCardPrice_count">
                                <p><span>2,980</span>円</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="goodsList_content" data-class="p-goodsCard">
            <!-- 電子チケット3 -->
            <div class="goodsCard" data-prefecture="shizuoka">
                <a href="https://sauna-ikitai.com/tonttu/items/818">
                    <div class="goodsCard_image">
                        <div class="goodsCard_tag">福岡県</div>
                        <img src="{{ asset('img/チケット1.jpeg') }}" width="230" height="180">
                    </div>
                    <div class="goodsCard_content">
                        <strong class="goodsCardTitle">
                            <span class="goodsCardTitle_name">博多極楽の湯</span>
                        </strong>

                        <div class="goodsCard_body">
                            <div class="goodsCardPrice">
                                <span class="goodsCardTitle_item">入浴券</span>
                                <div class="goodsCard_detail_item">５枚綴</div>
                            </div>

                            <div class="goodsCardPrice_count">
                                <p><span>2,980</span>円</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="to_next_page_wrap">
        <a class="to_next_page" href=""><span>電子チケットをもっと見る</span></a>
    </div>
</div>

<!-- 電子チケット -->

<!-- 新着銭湯の表示-->

<div class="topSentou">
    <div class="headlineHeader">
        <h2><span class="headline_string">新着セント</span></h2>
        <p class="headline_lead">みんなで作る銭湯データベース。情報は誰でも登録することができます。</p>
    </div>
    <div class="topSentou_wrap">
        @forelse ($sento as $sento)
        <div class="topSentou_box">
            <a href="{{ route('sento.show', $sento) }}">
                <!-- 新着銭湯(1)-->
                <div class="topSentou_wrap_img">
                    <img src="https://img.sauna-ikitai.com/sauna/11064_20210410_121359_DB3RkywNQH_medium.jpg" width=270
                        height=200 alt="Smart Stay SHIZUKU 品川大井町 写真">
                    <a href="https://sauna-ikitai.com/saunas/11064"></a>
                </div>
                <div class="topSentou_info">
                    <h3 class="topSentou_title">{{ $sento->name }}</h3>
                    <address class="sentou_Item_address">
                        @if($sento->prefecture_code === '01')
                            北海道
                            @elseif($sento->prefecture_code === '02')
                            青森県
                            @elseif($sento->prefecture_code === '03')
                            岩手県
                            @elseif($sento->prefecture_code === '04')
                            宮城県
                            @elseif($sento->prefecture_code === '05')
                            秋田県
                            @elseif($sento->prefecture_code === '06')
                            山形県
                            @elseif($sento->prefecture_code === '07')
                            福島県
                            @elseif($sento->prefecture_code === '08')
                            茨城県
                            @elseif($sento->prefecture_code === '09')
                            栃木県
                            @elseif($sento->prefecture_code === '10')
                            群馬県
                            @elseif($sento->prefecture_code === '11')
                            埼玉県
                            @elseif($sento->prefecture_code === '12')
                            千葉県
                            @elseif($sento->prefecture_code === '13')
                            東京都
                            @elseif($sento->prefecture_code === '14')
                            神奈川県
                            @elseif($sento->prefecture_code === '15')
                            新潟県
                            @elseif($sento->prefecture_code === '16')
                            富山県
                            @elseif($sento->prefecture_code === '17')
                            石川県
                            @elseif($sento->prefecture_code === '18')
                            福井県
                            @elseif($sento->prefecture_code === '19')
                            山梨県
                            @elseif($sento->prefecture_code === '20')
                            長野県
                            @elseif($sento->prefecture_code === '21')
                            岐阜県
                            @elseif($sento->prefecture_code === '22')
                            静岡県
                            @elseif($sento->prefecture_code === '23')
                            愛知県
                            @elseif($sento->prefecture_code === '24')
                            三重県
                            @elseif($sento->prefecture_code === '25')
                            滋賀県
                            @elseif($sento->prefecture_code === '26')
                            京都府
                            @elseif($sento->prefecture_code === '27')
                            大阪府
                            @elseif($sento->prefecture_code === '28')
                            兵庫県
                            @elseif($sento->prefecture_code === '29')
                            奈良県
                            @elseif($sento->prefecture_code === '30')
                            和歌山県
                            @elseif($sento->prefecture_code === '31')
                            鳥取県
                            @elseif($sento->prefecture_code === '32')
                            島根県
                            @elseif($sento->prefecture_code === '33')
                            岡山県
                            @elseif($sento->prefecture_code === '34')
                            広島県
                            @elseif($sento->prefecture_code === '35')
                            山口県
                            @elseif($sento->prefecture_code === '36')
                            徳島県
                            @elseif($sento->prefecture_code === '37')
                            香川県
                            @elseif($sento->prefecture_code === '38')
                            愛媛県
                            @elseif($sento->prefecture_code === '39')
                            高知県
                            @elseif($sento->prefecture_code === '40')
                            福岡県
                            @elseif($sento->prefecture_code === '41')
                            佐賀県
                            @elseif($sento->prefecture_code === '42')
                            長崎県
                            @elseif($sento->prefecture_code === '43')
                            熊本県
                            @elseif($sento->prefecture_code === '44')
                            大分県
                            @elseif($sento->prefecture_code === '45')
                            宮崎県
                            @elseif($sento->prefecture_code === '46')
                            鹿児島県
                            @elseif($sento->prefecture_code === '47')
                            沖縄県
                        @endif
                        &nbsp;{{ $sento->address1 }}&nbsp;{{ $sento->address2 }}&nbsp;{{ $sento->address3 }}</address>
                    <div class="sex">
                        <div class="man">
                            <ul class="Top_sento_datail">
                                <p>男</p>
                                <li>
                                    <span class="p-saunaItemSpec_icon"><img src="/assets/img/global/circle_sauna.svg"
                                            alt="温"></span>
                                    <span class="p-saunaItemSpec_value">{{ $sento->men_temperature }}℃</span>
                                </li>
                                <li>
                                    <span class="p-saunaItemSpec_icon"><img
                                            src="/assets/img/global/circle_mizuburo.svg" alt="水"></span>
                                    <span class="p-saunaItemSpec_value"><img
                                            src="/assets/img/global/icon_notavailable.svg" alt=""><span>
                                    @if($sento->water_bath === 1)
                                            有
                                            @else
                                            無
                                            @endif
                                    </span>
                                </li>
                                <li>
                                    <span class="p-saunaItemSpec_icon"><img
                                            src="/assets/img/global/circle_gaikiyoku.svg" alt="露"></span>
                                    <span class="p-saunaItemSpec_value"><img
                                            src="/assets/img/global/icon_notavailable.svg" alt=""><span>
                                    @if($sento->open_air_bath === 1)
                                            有
                                            @else
                                            無
                                            @endif
                                    </span>
                                </li>
                                <li>
                                    <span class="p-saunaItemSpec_icon"><img src="/assets/img/global/circle_loyly.svg"
                                            alt="サ"></span>
                                    <span class="p-saunaItemSpec_value"><img
                                            src="/assets/img/global/icon_notavailable.svg" alt=""><span>
                                    @if($sento->dry_sauna === 1)
                                            有
                                            @else
                                            無
                                            @endif
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="woman">
                            <ul class="Top_sento_datail">
                                <p>女</p>
                                <li>
                                    <span class="p-saunaItemSpec_icon"><img src="/assets/img/global/circle_sauna.svg"
                                            alt="温"></span>
                                    <span class="p-saunaItemSpec_value">{{ $sento->woman_temperature }}℃</span>
                                </li>
                                <li>
                                    <span class="p-saunaItemSpec_icon"><img
                                            src="/assets/img/global/circle_mizuburo.svg" alt="水"></span>
                                    <span class="p-saunaItemSpec_value"><img
                                            src="/assets/img/global/icon_notavailable.svg" alt=""></span><span>
                                        @if($sento->water_bath === 1)
                                        有
                                        @else
                                        無
                                        @endif
                                    </span>
                                </li>
                                <li>
                                    <span class="p-saunaItemSpec_icon"><img
                                            src="/assets/img/global/circle_gaikiyoku.svg" alt="露"></span>
                                    <span class="p-saunaItemSpec_value"><img
                                            src="/assets/img/global/icon_notavailable.svg" alt=""></span><span>
                                        @if($sento->open_air_bath === 1)
                                        有
                                        @else
                                        無
                                        @endif
                                    </span>
                                </li>
                                <li>
                                    <span class="p-saunaItemSpec_icon"><img src="/assets/img/global/circle_loyly.svg"
                                            alt="サ"></span>
                                    <span class="p-saunaItemSpec_value"><img
                                            src="/assets/img/global/icon_notavailable.svg" alt=""></span><span>
                                        @if($sento->dry_sauna === 1)
                                        有
                                        @else
                                        無
                                        @endif
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <ul class="Top_sento_datail">
                            <li>入浴料：{{ $sento->adult_fee }}円〜</li>
                            <li>定休日：{{ $sento->regular_holiday }}</li>
                        </ul>
                        <ul class="data_like_count">
                            <li>いいね！<span>483</span></li>
                            <li>セ活<span>1273</span></li>
                        </ul>
                    </div>
                </div>
            </a>
        </div>
        @empty
            <li>No sento yet!</li>
        @endforelse
    </div>
</div>
<div class="to_next_page_wrap">
    <a class="to_next_page" href="{{ route('sento.index') }}"><span>新着セントをもっと見る</span></a>
</div>
</div>
<!-- 新着銭湯の表示-->
<!-- WANTEDバナー-->
<div class="wanted_banner">
    <a href="https://sauna-ikitai.com/saunas/11064"><img src="{{ asset('img/wanted.png') }}" width=1200 height=420
            alt="Smart Stay SHIZUKU 品川大井町 写真">
    </a>
</div>
<!-- WANTEDバナー-->
<!-- マガジン -->
<div class="headlineHeader">
    <h2 class="c-headline c-headline--lv1"><span class="headline_string">マガジン</span></h2>
    <p class="headline_lead">セントに関する情報を発信するセント専門ウェブマガジン。</p>
</div>
<div class="topMagazine">
    <div class="topMagazine_wraper">
        <div class="topMagazine_content">
            <!-- コンテンツ１ -->
            <div class="Magazine" data-prefecture="">
                <a href="https://sauna-ikitai.com/tonttu/items/818">
                    <div class="Magazine_image">
                        <img src="{{ asset('img/チケット1.jpeg') }}" width="300" height="200">
                    </div>
                    <div class="Magazine_content">
                        <strong class="MagazineTitle">
                            <span class="MagazineTitle_name">火口のすぐそば！大分の秘湯◯◯
                                に行って話を聞いて来ました！</span>
                        </strong>

                        <div class="Magazine_upload_date">
                            <div class="Magazine_upload_day">
                                <p><span>2021.10.01</span></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="topMagazine_content">
            <!-- コンテンツ2 -->
            <div class="Magazine" data-prefecture="">
                <a href="https://sauna-ikitai.com/tonttu/items/818">
                    <div class="Magazine_image">
                        <img src="{{ asset('img/チケット1.jpeg') }}" width="300" height="200">
                    </div>
                    <div class="Magazine_content">
                        <strong class="MagazineTitle">
                            <span class="MagazineTitle_name">火口のすぐそば！大分の秘湯◯◯
                                に行って話を聞いて来ました！</span>
                        </strong>

                        <div class="Magazine_upload_date">
                            <div class="Magazine_upload_day">
                                <p><span>2021.10.01</span></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="topMagazine_content">
            <!-- コンテンツ3 -->
            <div class="Magazine" data-prefecture="">
                <a href="https://sauna-ikitai.com/tonttu/items/818">
                    <div class="Magazine_image">
                        <img src="{{ asset('img/チケット1.jpeg') }}" width="300" height="200">
                    </div>
                    <div class="Magazine_content">
                        <strong class="MagazineTitle">
                            <span class="MagazineTitle_name">火口のすぐそば！大分の秘湯◯◯
                                に行って話を聞いて来ました！</span>
                        </strong>

                        <div class="Magazine_upload_date">
                            <div class="Magazine_upload_day">
                                <p><span>2021.10.01</span></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="to_next_page_wrap">
        <a class="to_next_page" href=""><span>マガジンをもっと見る</span></a>
    </div>
</div>
<!-- マガジン -->
<!-- セントニュース -->
<div class="topNews">
    <div class="headlineHeader">
        <h2 class="c-headline c-headline--lv1"><span class="headline_string">セントニュース</span></h2>
        <p class="headline_lead">セント業界の最新情報をお届けします。<a href="https://twitter.com/sauna_ikitai"
                target="_blank">Twitter</a>でも情報発信中。</a></p>
    </div>
    <div class="News_wraper">
        <div class="news">
            <ul class="news_content">
                <li class="news_list">
                    <div><span class="news_date"> 2021.03.15 </span></div>
                    <div>
                        <p class="news_body"><a href="http://www.switch-store.net/smp/item/CO0073.html"
                                target="_blank"> 『Toyote No.73 自然と遊ぶ、セントのある暮らし』3/15 発売</a></p>
                    </div>
                </li>
                <li class="news_list">
                    <div><span class="news_date"> 2021.02.26 </span></div>
                    <div>
                        <p class="news_body"><a href="https://sauna-ikitai.com/saunas/10717" target="_blank">
                                阿蘇新緑の湯 福岡南店オープン</a></p>
                    </div>
                </li>
                <li class="news_list">
                    <div><span class="news_date"> 2021.02.08 </span></div>
                    <div>
                        <p class="news_body"><a href="https://www.wowow.co.jp/detail/172679" target="_blank">
                                『セント酒２』日本放送 3/7放送分　再放送決定！ </a></p>
                    </div>
                </li>
                <li class="news_list">
                    <div><span class="news_date"> 2021.01.27 </span></div>
                    <div>
                        <p class="news_body"><a href="https://www.amazon.co.jp/gp/product/4866071907"
                                target="_blank"> 『銭湯の歩き方』道重久彌　3/15 発売 </a></p>
                    </div>
                </li>
                <li class="news_list">
                    <div><span class="news_date"> 2021.01.26 </span></div>
                    <div>
                        <p class="news_body"><a href="https://prtimes.jp/main/html/rd/p/000001248.000006568.html"
                                target="_blank"> 『セントと私、それから』ミーシャ・ウララカヤン著　3/15 発売 </a></p>
                    </div>
                </li>
                <li class="news_list">
                    <div><span class="news_date"> 2021.01.24 </span></div>
                    <div>
                        <p class="news_body"><a href="https://www.tv-tokyo.co.jp/sa_una37/" target="_blank">
                                『森の隠れ家、７月号　銭湯特集』3/15 発売</a></p>
                    </div>
                </li>
                <li class="news_list">
                    <div><span class="news_date"> 2021.01.21 </span></div>
                    <div>
                        <p class="news_body"><a href="https://kc.kodansha.co.jp/product?item=0000347929"
                                target="_blank"> 『タブレット持ってセントへ行こう！』原田湯助著　3/15 発売 </a></p>
                    </div>
                </li>
                <li class="news_list">
                    <div><span class="news_date"> 2020.12.26 </span></div>
                    <div>
                        <p class="news_body"><a href="https://saunology.hatenablog.com/entry/2020/12/26/120310"
                                target="_blank"> 『スマホ持ってセントへ行こう！』原田湯助著　3/15 発売 </a></p>
                    </div>
                </li>
                <li class="news_list">
                    <div><span class="news_date"> 2020.12.16 </span></div>
                    <div>
                        <p class="news_body"><a
                                href="https://www.amazon.co.jp/%E5%A5%B3%E6%80%A7%E3%81%AE%E3%81%9F%E3%82%81%E3%81%AE%E3%82%B5%E3%82%A6%E3%83%8A%E3%83%BB%E3%83%8F%E3%83%B3%E3%83%89%E3%83%96%E3%83%83%E3%82%AF-%E3%82%B5%E3%82%A6%E3%83%8A%E5%A5%B3%E5%AD%90%E3%81%AE%E4%B8%96%E7%95%8C-ele-king-books-%E3%82%B5%E3%82%A6%E3%83%8A%E5%A5%B3%E5%AD%90/dp/4909483756/ref=sr_1_21?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&amp;dchild=1&amp;keywords=%E3%82%B5%E3%82%A6%E3%83%8A&amp;qid=1612041186&amp;rnid=2321267051&amp;s=books&amp;sr=1-21"
                                target="_blank"> 『PC持ってセントへ行こう！』原田湯助著　3/15 発売 </a></p>
                    </div>
                </li>
                <li class="news_list">
                    <div><span class="news_date"> 2020.12.02 </span></div>
                    <div>
                        <p class="news_body"><a
                                href="https://www.amazon.co.jp/%E3%82%B5%E3%82%A6%E3%83%8A%E3%82%92%E6%84%9B%E3%81%A7%E3%81%9F%E3%81%84-DVD-BOX-%E3%83%92%E3%83%A3%E3%83%80%E3%82%A4%E3%83%B3/dp/B08HRDRDP6"
                                target="_blank"> 『Android持ってセントへ行こう！』原田湯助著　3/15 発売 </a></p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- セントニュース -->
<!-- 横2つバナー -->
<div class="double_banner">
    <div class="double_banner_left">
        <a href="https://sauna-ikitai.com/saunas/11064"><img src="{{ asset('img/ダブルバナー右.png') }}" width=530
                height=300 alt="Smart Stay SHIZUKU 品川大井町 写真">
        </a>
    </div>
    <div class="double_banner_right">
        <a href="https://sauna-ikitai.com/saunas/11064"><img src="{{ asset('img/ダブルバナー左.png') }}" width=530
                height=300 alt="Smart Stay SHIZUKU 品川大井町 写真">
        </a>
    </div>
</div>
<!-- 横2つバナー -->
<!-- ３連バナー -->
<div class="triple_banner">
    <a href="https://sauna-ikitai.com/saunas/11064"><img src="{{ asset('img/関連リンク.png') }}" width=1200 height=150
            alt="Smart Stay SHIZUKU 品川大井町 写真">
    </a>
</div>
<div class="triple_banner">
    <a href="https://sauna-ikitai.com/saunas/11064"><img src="{{ asset('img/公式STORE.png') }}" width=1200 height=150
            alt="Smart Stay SHIZUKU 品川大井町 写真">
    </a>
</div>
<div class="triple_banner">
    <a href="https://sauna-ikitai.com/saunas/11064"><img src="{{ asset('img/セントウで町おこし.png') }}" width=1200
            height=500 alt="Smart Stay SHIZUKU 品川大井町 写真">
    </a>
</div>
<!-- ３連バナー -->



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
</div>
<!-- メイン-->

<footer>
    <!-- サイトマップ -->

    <div class="Sitemap">
        <div class="footerSitemap_content">
            <div class="footerSitemap_main">
                <div class="footerSitemapItems">
                    <div class="footerSitemapItem">
                        <h3>銭湯を探す</h3>
                        <ul>
                            <li><a href="/search"><span>-銭湯検索</span></a></li>
                            <li><a href="/walk-to-sauna#map"><span>-地図から検索</span></a></li>
                            <li><a href="/posts"><span>-セ活検索</span></a></li>
                            <li><a href="/saunas/new"><span>-施設登録</span></a></li>
                        </ul>
                    </div>
                    <div class="footerSitemapItem">
                        <h3>セ活</h3>
                        <ul>
                            <li><a href="/posts"><span>-セ活一覧</span></a></li>
                        </ul>
                    </div>
                    <div class="footerSitemapItem">
                        <h3>電子チケット</h3>
                        <ul>
                            <li><a href="/items"><span>-電子チケット検索</span></a></li>
                            <li><a href="/items/how-to"><span>-電子チケットの使い方</span></a></li>
                        </ul>
                    </div>
                    <div class="footerSitemapItem">
                        <h3>読みもの</h3>
                        <ul>
                            <li><a href="/magazine/"><span>-マガジン「街の灯火」</span></a></li>
                            <li><a href="/magazine/"><span>-マガジン「入浴という文化」</span></a></li>
                            <li><a href="/advent-calendar/2020"><span>-セントウ豆知識ハンドブック</span></a></li>
                            <li><a href="/advent-calendar/2020"><span>-ペンキ絵ギャラリー</span></a></li>

                        </ul>
                    </div>

                    <div class="footerSitemapItem">
                        <h3>グッズ</h3>
                        <ul>
                            <li><a href="https://sauna-ikitai.stores.jp/" target="_blank"><span>-公式オンラインストア</span></a>
                            </li>
                            <li><a href="https://sauna-market.stores.jp/" target="_blank"><span>-銭湯マーケット</span></a>
                            </li>
                        </ul>
                    </div>


                    <div class="footerSitemapItem">
                        <h3>イベント</h3>
                        <ul>
                            <li><a href="/ionwater"><span>-スポンサー協賛イベント１</span></a></li>
                            <li><a href="/special/sagasauna/"><span>-スポンサー協賛イベント１</span></a></li>
                            <li><a href="/sauna-support/"><span>-スポンサー協賛イベント１</span></a></li>
                            <li><a href="/walk-to-sauna/"><span>-歩いてセントウ</span></a></li>
                            <li><a href="/support-company/"><span>-セントウ応援企業募集</span></a></li>
                        </ul>
                    </div>
                    <div class="footerSitemapItem">
                        <h3>サイトについて</h3>
                        <ul>
                            <li><a href="/about"><span>-セントウイキタイとは</span></a></li>
                            <li><a href="https://nlab.itmedia.co.jp/nl/articles/1901/13/news003.html"
                                    target="_blank"><span>-セントウにかける思い</span></a></li>
                            <!-- <li class="l-footerSitemapItem_link"><a href="/link">サウナ関連リンク</a></li> -->
                        </ul>
                    </div>

                    <div class="footerSitemapItem">
                        <h3>温浴施設の方々へ</h3>
                        <ul>
                            <li><a href="#"><span>-Let,s銭湯で町おこし</span></a></li>
                            <li><a href="https://forms.gle/aSUrjgrDqQgrpa9b6"
                                    target="_blank"><span>-ポスター掲載店募集</span></a></li>
                            <li><a href="#"><span>-電子チケット参加店&協賛事業者様を募集中！</span></a></li>
                        </ul>
                    </div>

                    <div class="footerSitemapItem">
                        <h3>お問い合わせ</h3>
                        <ul>
                            <li><a href="/contact"><span>-お問い合わせフォーム</span></a></li>
                            <li><a href="/feedback"><span>-ご意見箱</span></a></li>
                            <li><a href="https://tayori.com/faq/2bda82f7fc4dff3fbf1d303fea4778cde7ccc106"
                                    target="_blank"><span>-よくある質問</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- サイトマップ -->




    <!-- フッター -->
    <div class="foot">
        <div class="footerSns">
            <div class="footerSns_detail">
                <ul>
                    <p>セント<br>イキタイ<br></p>
                    <li><a href="">公式SNS</p>
                    </li>
                    <li><a href="https://twitter.com/sauna_ikitai" target="_blank"></a>ツイッター</li>
                    <li><a href="https://www.instagram.com/sauna_ikitai/" target="_blank"></a>インスタ</li>
                    <li><a href="https://www.facebook.com/sauna.ikitai/" target="_blank"></a>フェイスブック</li>
                </ul>
            </div>
        </div>
        <nav class="footerNav">
            <ul>
                <li><a href="/browser">推奨環境</a></li>
                <li><a href="/tokushoho">特定商取引法に基づく表示</a></li>
                <li><a href="/terms">利用規約</a></li>
                <li><a href="/privacy">プライバシーポリシー</a></li>
            </ul>
            <small>&copy SENTO IKITAI</small>
        </nav>
    </div>


    <!-- フッター -->
</footer>
