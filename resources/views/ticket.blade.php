@extends('layouts.base3')
@section('content')

<link rel="stylesheet" href="{{ url('css/ticket.css') }}">

<div class="headlineHeader">
    <h1 class="headline"><span class="headline_string">全国の電子チケット一覧</span></h1>
    <p class="c-lead">お得な入浴券をゲットしよう！</p>
</div>


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

<!-- 新着銭湯の表示-->

<div class="topSentou">
    <div class="topSentou_wrap">
        <div class="topSentou_box">
            <a href="{{ route('sentos') }}">
                <!-- 新着銭湯(1)-->
                <div class="topSentou_wrap_img">
                    <img src="https://img.sauna-ikitai.com/sauna/11064_20210410_121359_DB3RkywNQH_medium.jpg"
                        width=240 height=170 alt="Smart Stay SHIZUKU 品川大井町 写真">
                    <a href="https://sauna-ikitai.com/saunas/11064"></a>
                </div>
                <div class="topSentou_info">
                    <a href="https://sauna-ikitai.com/saunas/11064">
                    <h3 class="topSentou_title">Smart Stay SHIZUKU 品川大井町</h3>
                    <address class="sentou_Item_name_one">スパ＆ボディマッサージ60分セット</address>
                    <div class="topSentou_info_box">
                        <div class="topSentou_sub_box_one">
                            <address class="sentou_Item_name_two">東京都品川区西大井3-4-5</address>
                        </div>
                        <div class="topSentou_sub_box_two">
                        <ul class="topSentou_mini_box">
                            <li class="ticket_number">1枚</li>
                            <li class="ticket_price">450円</li>
                            <li class="ticket_tax">税込</li>
                        </ul>
                        </div>
                    </div>
                    </a>
                </div>
            </a>
        </div>
        <div class="topSentou_box">
            <a href="{{ route('sentos') }}">
                <!-- 新着銭湯(1)-->
                <div class="topSentou_wrap_img">
                    <img src="https://img.sauna-ikitai.com/sauna/11064_20210410_121359_DB3RkywNQH_medium.jpg"
                        width=240 height=170 alt="Smart Stay SHIZUKU 品川大井町 写真">
                    <a href="https://sauna-ikitai.com/saunas/11064"></a>
                </div>
                <div class="topSentou_info">
                    <h3 class="topSentou_title">Smart Stay SHIZUKU 品川大井町</h3>
                    <address class="sentou_Item_name_one">スパ＆ボディマッサージ60分セット</address>
                    <div class="topSentou_info_box">
                        <div class="topSentou_sub_box_one">
                            <address class="sentou_Item_name_two">東京都品川区西大井3-4-5</address>
                        </div>
                        <div class="topSentou_sub_box_two">
                        <ul class="topSentou_mini_box">
                            <ul class="topSentou_mini_box">
                                <li class="ticket_number">1枚</li>
                                <li class="ticket_price">450円</li>
                                <li class="ticket_tax">税込</li>
                            </ul>
                        </ul>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="topSentou_box">
            <a href="{{ route('sentos') }}">
                <!-- 新着銭湯(1)-->
                <div class="topSentou_wrap_img">
                    <img src="https://img.sauna-ikitai.com/sauna/11064_20210410_121359_DB3RkywNQH_medium.jpg"
                        width=240 height=170 alt="Smart Stay SHIZUKU 品川大井町 写真">
                    <a href="https://sauna-ikitai.com/saunas/11064"></a>
                </div>
                <div class="topSentou_info">
                    <h3 class="topSentou_title">Smart Stay SHIZUKU 品川大井町</h3>
                    <address class="sentou_Item_name_one">スパ＆ボディマッサージ60分セット</address>
                    <div class="topSentou_info_box">
                        <div class="topSentou_sub_box_one">
                            <address class="sentou_Item_name_two">東京都品川区西大井3-4-5</address>
                        </div>
                        <div class="topSentou_sub_box_two">
                        <ul class="topSentou_mini_box">
                            <ul class="topSentou_mini_box">
                                <li class="ticket_number">1枚</li>
                                <li class="ticket_price">450円</li>
                                <li class="ticket_tax">税込</li>
                            </ul>
                        </ul>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="topSentou_box">
            <a href="{{ route('sentos') }}">
                <!-- 新着銭湯(1)-->
                <div class="topSentou_wrap_img">
                    <img src="https://img.sauna-ikitai.com/sauna/11064_20210410_121359_DB3RkywNQH_medium.jpg"
                        width=240 height=170 alt="Smart Stay SHIZUKU 品川大井町 写真">
                    <a href="https://sauna-ikitai.com/saunas/11064"></a>
                </div>
                <div class="topSentou_info">
                    <h3 class="topSentou_title">Smart Stay SHIZUKU 品川大井町</h3>
                    <address class="sentou_Item_name_one">スパ＆ボディマッサージ60分セット</address>
                    <div class="topSentou_info_box">
                        <div class="topSentou_sub_box_one">
                            <address class="sentou_Item_name_two">東京都品川区西大井3-4-5</address>
                        </div>
                        <div class="topSentou_sub_box_two">
                        <ul class="topSentou_mini_box">
                            <ul class="topSentou_mini_box">
                                <li class="ticket_number">1枚</li>
                                <li class="ticket_price">450円</li>
                                <li class="ticket_tax">税込</li>
                            </ul>
                        </ul>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="topSentou_box">
            <a href="{{ route('sentos') }}">
                <!-- 新着銭湯(1)-->
                <div class="topSentou_wrap_img">
                    <img src="https://img.sauna-ikitai.com/sauna/11064_20210410_121359_DB3RkywNQH_medium.jpg"
                        width=240 height=170 alt="Smart Stay SHIZUKU 品川大井町 写真">
                    <a href="https://sauna-ikitai.com/saunas/11064"></a>
                </div>
                <div class="topSentou_info">
                    <h3 class="topSentou_title">Smart Stay SHIZUKU 品川大井町</h3>
                    <address class="sentou_Item_name_one">スパ＆ボディマッサージ60分セット</address>
                    <div class="topSentou_info_box">
                        <div class="topSentou_sub_box_one">
                            <address class="sentou_Item_name_two">東京都品川区西大井3-4-5</address>
                        </div>
                        <div class="topSentou_sub_box_two">
                        <ul class="topSentou_mini_box">
                            <ul class="topSentou_mini_box">
                                <li class="ticket_number">1枚</li>
                                <li class="ticket_price">450円</li>
                                <li class="ticket_tax">税込</li>
                            </ul>
                        </ul>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="topSentou_box">
            <a href="{{ route('sentos') }}">
                <!-- 新着銭湯(1)-->
                <div class="topSentou_wrap_img">
                    <img src="https://img.sauna-ikitai.com/sauna/11064_20210410_121359_DB3RkywNQH_medium.jpg"
                        width=240 height=170 alt="Smart Stay SHIZUKU 品川大井町 写真">
                    <a href="https://sauna-ikitai.com/saunas/11064"></a>
                </div>
                <div class="topSentou_info">
                    <h3 class="topSentou_title">Smart Stay SHIZUKU 品川大井町</h3>
                    <address class="sentou_Item_name_one">スパ＆ボディマッサージ60分セット</address>
                    <div class="topSentou_info_box">
                        <div class="topSentou_sub_box_one">
                            <address class="sentou_Item_name_two">東京都品川区西大井3-4-5</address>
                        </div>
                        <div class="topSentou_sub_box_two">
                        <ul class="topSentou_mini_box">
                            <ul class="topSentou_mini_box">
                                <li class="ticket_number">1枚</li>
                                <li class="ticket_price">450円</li>
                                <li class="ticket_tax">税込</li>
                            </ul>
                        </ul>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="topSentou_box">
            <a href="{{ route('sentos') }}">
                <!-- 新着銭湯(1)-->
                <div class="topSentou_wrap_img">
                    <img src="https://img.sauna-ikitai.com/sauna/11064_20210410_121359_DB3RkywNQH_medium.jpg"
                        width=240 height=170 alt="Smart Stay SHIZUKU 品川大井町 写真">
                    <a href="https://sauna-ikitai.com/saunas/11064"></a>
                </div>
                <div class="topSentou_info">
                    <h3 class="topSentou_title">Smart Stay SHIZUKU 品川大井町</h3>
                    <address class="sentou_Item_name_one">スパ＆ボディマッサージ60分セット</address>
                    <div class="topSentou_info_box">
                        <div class="topSentou_sub_box_one">
                            <address class="sentou_Item_name_two">東京都品川区西大井3-4-5</address>
                        </div>
                        <div class="topSentou_sub_box_two">
                        <ul class="topSentou_mini_box">
                            <ul class="topSentou_mini_box">
                                <li class="ticket_number">1枚</li>
                                <li class="ticket_price">450円</li>
                                <li class="ticket_tax">税込</li>
                            </ul>
                        </ul>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="topSentou_box">
            <a href="{{ route('sentos') }}">
                <!-- 新着銭湯(1)-->
                <div class="topSentou_wrap_img">
                    <img src="https://img.sauna-ikitai.com/sauna/11064_20210410_121359_DB3RkywNQH_medium.jpg"
                        width=240 height=170 alt="Smart Stay SHIZUKU 品川大井町 写真">
                    <a href="https://sauna-ikitai.com/saunas/11064"></a>
                </div>
                <div class="topSentou_info">
                    <h3 class="topSentou_title">Smart Stay SHIZUKU 品川大井町</h3>
                    <address class="sentou_Item_name_one">スパ＆ボディマッサージ60分セット</address>
                    <div class="topSentou_info_box">
                        <div class="topSentou_sub_box_one">
                            <address class="sentou_Item_name_two">東京都品川区西大井3-4-5</address>
                        </div>
                        <div class="topSentou_sub_box_two">
                        <ul class="topSentou_mini_box">
                            <ul class="topSentou_mini_box">
                                <li class="ticket_number">1枚</li>
                                <li class="ticket_price">450円</li>
                                <li class="ticket_tax">税込</li>
                            </ul>
                        </ul>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="topSentou_box">
            <a href="{{ route('sentos') }}">
                <!-- 新着銭湯(1)-->
                <div class="topSentou_wrap_img">
                    <img src="https://img.sauna-ikitai.com/sauna/11064_20210410_121359_DB3RkywNQH_medium.jpg"
                        width=240 height=170 alt="Smart Stay SHIZUKU 品川大井町 写真">
                    <a href="https://sauna-ikitai.com/saunas/11064"></a>
                </div>
                <div class="topSentou_info">
                    <h3 class="topSentou_title">Smart Stay SHIZUKU 品川大井町</h3>
                    <address class="sentou_Item_name_one">スパ＆ボディマッサージ60分セット</address>
                    <div class="topSentou_info_box">
                        <div class="topSentou_sub_box_one">
                            <address class="sentou_Item_name_two">東京都品川区西大井3-4-5</address>
                        </div>
                        <div class="topSentou_sub_box_two">
                        <ul class="topSentou_mini_box">
                            <ul class="topSentou_mini_box">
                                <li class="ticket_number">1枚</li>
                                <li class="ticket_price">450円</li>
                                <li class="ticket_tax">税込</li>
                            </ul>
                        </ul>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="topSentou_box">
            <a href="{{ route('sentos') }}">
                <!-- 新着銭湯(1)-->
                <div class="topSentou_wrap_img">
                    <img src="https://img.sauna-ikitai.com/sauna/11064_20210410_121359_DB3RkywNQH_medium.jpg"
                        width=240 height=170 alt="Smart Stay SHIZUKU 品川大井町 写真">
                    <a href="https://sauna-ikitai.com/saunas/11064"></a>
                </div>
                <div class="topSentou_info">
                    <h3 class="topSentou_title">Smart Stay SHIZUKU 品川大井町</h3>
                    <address class="sentou_Item_name_one">スパ＆ボディマッサージ60分セット</address>
                    <div class="topSentou_info_box">
                        <div class="topSentou_sub_box_one">
                            <address class="sentou_Item_name_two">東京都品川区西大井3-4-5</address>
                        </div>
                        <div class="topSentou_sub_box_two">
                        <ul class="topSentou_mini_box">
                            <ul class="topSentou_mini_box">
                                <li class="ticket_number">1枚</li>
                                <li class="ticket_price">450円</li>
                                <li class="ticket_tax">税込</li>
                            </ul>
                        </ul>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="topSentou_box">
            <a href="{{ route('sentos') }}">
                <!-- 新着銭湯(1)-->
                <div class="topSentou_wrap_img">
                    <img src="https://img.sauna-ikitai.com/sauna/11064_20210410_121359_DB3RkywNQH_medium.jpg"
                        width=240 height=170 alt="Smart Stay SHIZUKU 品川大井町 写真">
                    <a href="https://sauna-ikitai.com/saunas/11064"></a>
                </div>
                <div class="topSentou_info">
                    <h3 class="topSentou_title">Smart Stay SHIZUKU 品川大井町</h3>
                    <address class="sentou_Item_name_one">スパ＆ボディマッサージ60分セット</address>
                    <div class="topSentou_info_box">
                        <div class="topSentou_sub_box_one">
                            <address class="sentou_Item_name_two">東京都品川区西大井3-4-5</address>
                        </div>
                        <div class="topSentou_sub_box_two">
                        <ul class="topSentou_mini_box">
                            <ul class="topSentou_mini_box">
                                <li class="ticket_number">1枚</li>
                                <li class="ticket_price">450円</li>
                                <li class="ticket_tax">税込</li>
                            </ul>
                        </ul>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="topSentou_box">
            <a href="{{ route('sentos') }}">
                <!-- 新着銭湯(1)-->
                <div class="topSentou_wrap_img">
                    <img src="https://img.sauna-ikitai.com/sauna/11064_20210410_121359_DB3RkywNQH_medium.jpg"
                        width=240 height=170 alt="Smart Stay SHIZUKU 品川大井町 写真">
                    <a href="https://sauna-ikitai.com/saunas/11064"></a>
                </div>
                <div class="topSentou_info">
                    <h3 class="topSentou_title">Smart Stay SHIZUKU 品川大井町</h3>
                    <address class="sentou_Item_name_one">スパ＆ボディマッサージ60分セット</address>
                    <div class="topSentou_info_box">
                        <div class="topSentou_sub_box_one">
                            <address class="sentou_Item_name_two">東京都品川区西大井3-4-5</address>
                        </div>
                        <div class="topSentou_sub_box_two">
                        <ul class="topSentou_mini_box">
                            <ul class="topSentou_mini_box">
                                <li class="ticket_number">1枚</li>
                                <li class="ticket_price">450円</li>
                                <li class="ticket_tax">税込</li>
                            </ul>
                        </ul>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- 新着銭湯の表示-->


@endsection
