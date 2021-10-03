@extends('layouts.base3')
@section('content')

    <link rel="stylesheet" href="{{ url('css/search.css') }}">

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

    <!-- 施設一覧の表示-->

    <div class="topSentou">
        <div class="headlineHeader">
            <div>
                <h2><span class="headline_string">セント検索結果一覧</span></h2>
            </div>
            <div class="narabi">
                <p>並び順</p>
            </div>
            <div class="kensakukekka">
                <p>検索結果1145件</p>
            </div>
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
                        <h3 class="topSentou_title">{{ $sento->name }}《
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
                            》
                        </h3>
                        <address class="sentou_Item_address">{{ $sento->address1 }}&nbsp;{{ $sento->address2 }}&nbsp;{{ $sento->address3 }}&nbsp;</address>
                        <div class="sex">
                            <div class="man">
                                <ul class="Top_sento_datail">
                                    <p>男</p>
                                    <li>
                                        <span class="p-saunaItemSpec_icon"><img src="/assets/img/global/circle_sauna.svg" alt="温"></span>
                                        <span class="p-saunaItemSpec_value">{{ $sento->men_temperature }}℃</span>
                                    </li>
                                    <li>
                                        <span class="p-saunaItemSpec_icon"><img src="/assets/img/global/circle_mizuburo.svg" alt="水"></span>
                                        <span class="p-saunaItemSpec_value"><img src="/assets/img/global/icon_notavailable.svg" alt=""></span>
                                        <span>
                                            @if($sento->water_bath === 1)
                                            有
                                            @else
                                            無
                                            @endif
                                        </span>
                                    </li>
                                    <li>
                                        <span class="p-saunaItemSpec_icon"><img src="/assets/img/global/circle_gaikiyoku.svg" alt="露"></span>
                                        <span class="p-saunaItemSpec_value"><img src="/assets/img/global/icon_notavailable.svg" alt=""></span>
                                        <span>
                                            @if($sento->open_air_bath === 1)
                                            有
                                            @else
                                            無
                                            @endif
                                        </span>
                                    </li>
                                    <li>
                                        <span class="p-saunaItemSpec_icon"><img src="/assets/img/global/circle_loyly.svg" alt="サ"></span>
                                        <span class="p-saunaItemSpec_value"><img src="/assets/img/global/icon_notavailable.svg" alt=""></span>
                                        <span>
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
                                        <span class="p-saunaItemSpec_icon"><img src="/assets/img/global/circle_mizuburo.svg" alt="水"></span>
                                        <span class="p-saunaItemSpec_value"><img src="/assets/img/global/icon_notavailable.svg" alt=""></span>
                                        <span>
                                            @if($sento->water_bath === 1)
                                            有
                                            @else
                                            無
                                            @endif
                                        </span>
                                    </li>
                                    <li>
                                        <span class="p-saunaItemSpec_icon"><img src="/assets/img/global/circle_gaikiyoku.svg" alt="露"></span>
                                        <span class="p-saunaItemSpec_value"><img src="/assets/img/global/icon_notavailable.svg" alt=""></span>
                                        <span>
                                            @if($sento->open_air_bath === 1)
                                            有
                                            @else
                                            無
                                            @endif
                                        </span>
                                    </li>
                                    <li>
                                        <span class="p-saunaItemSpec_icon"><img src="/assets/img/global/circle_loyly.svg" alt="サ"></span>
                                        <span class="p-saunaItemSpec_value"><img src="/assets/img/global/icon_notavailable.svg" alt=""></span>
                                        <span>
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
                <div>No sentos yet!</div>
            @endforelse
        </div>
    </div>
    <!-- 施設一覧の表示-->

@endsection
