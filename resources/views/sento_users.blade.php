@extends('layouts.base_two')
@section('content')

<link rel="stylesheet" href="{{ url('css/mypage.css') }}">

    <!-- マイページ -->
    <div class="mypage_wraper">
        <div class="prof_info_wrap">
            <div class="prof_info">
                <div class="regist_day">
                    <p>登録</p>
                </div>
                <h1 class="mypageHeaderUser_name">
                    <a href=""></a>
                </h1>
                <div class="sento_ticket">
                    <button>電子チケット</button>
                </div>

                <div class="prof_desc">
                    <ul>
                        <li class="mypageProfile_list">
                            <span class="mypageProfile_key">セント歴</span>
                            <span class="mypageProfile_value">{{ $sento_user->carrier_year }}年</span><span class="mypageProfile_value">{{ $sento_user->carrier_month }}ヶ月</span>
                        </li>
                        <li class="mypageProfile_list">
                            <span class="mypageProfile_key">ホームセント</span>
                            <span class="mypageProfile_value"></span>
                        </li>
                        <li class="mypageProfile_list">
                            <span class="mypageProfile_key">行きたいセント</span>
                            <span class="mypageProfile_value"></span>
                        </li>
                        <li class="mypageProfile_list">
                            <span class="mypageProfile_key">意気込み</span>
                            <span class="mypageProfile_value"></span>
                        </li>
                        <p class="prof_edit"><a href="{{ route('sento_users_create') }}">プロフィールを編集する</a></p>
                    </ul>
                </div>
            </div>
            <div class="prof_img">
                {{-- <a href="https://sauna-ikitai.com/saunners/68623"><img
                        src="https://img.sauna-ikitai.com/profile/68623_20210616_003307_mxXTLvHj23_large.jpg"
                        width="180" height="150"></a> --}}
                <a href="https://sauna-ikitai.com/saunners/68623"><img src="{{ asset('img/ebizo.jpg') }}" width="150"
                        height="150"></a>
            </div>
            <div class="sento_owners">
                <button>施設管理者ページはこちら</button>
            </div>
        </div>
    </div>
    <!-- マイページ -->
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
    <!-- セ活表示エリア -->
    <div class="sekatsu">
        <div class="sekatsu_main">
            <div class="sekatsu_prof">
                <!-- セ活の条件検索 -->


                <!-- セ活の条件検索 -->
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
                        <p class="postCardUser_date">2021.07.23</p>
                        <p class="postCardUser_counter">14回目の訪問</p>
                    </div>
                </div>
            </div>
            <div class="postCard_body">
                <strong class="postCard_facility"><a href="">博多の湯</a>
                    <p class="postCard_address">[ 福岡県 ] </p>
                </strong>
                <p class="postCard_text">
                    本日のセ活報告。
                    <br />
                    人少なめ、浴室は熱気ムンムン😄いつもの皆さんにご挨拶😊OZK氏の安定の仰ぎでゆっくり蒸されて炭酸泉でウトウト💤
                    <br />
                    最近は暑くて寝苦しいのでここきて朝からさっぱりできるのは幸せだ🥰
                    <br />
                    今日もありがとうございました。
                    <br />
                    写真は人気メニューの日替わり定食とカレー！
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
                    <div class="postCardAction_item is-comment"><a
                            href="https://sauna-ikitai.com/saunners/39861/posts/1193052?anchor=giftonttu">
                            <span class="commentCount">0 コメント</span></a>
                    </div>
                </div>

            </div>
            <div class="sekatsu_prof">
                <!-- セ活メイン(2) -->
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
                        <p class="postCardUser_date">2021.07.23</p>
                        <p class="postCardUser_counter">14回目の訪問</p>
                    </div>
                </div>
            </div>
            <div class="postCard_body">
                <strong class="postCard_facility"><a href="">博多の湯</a>
                    <p class="postCard_address">[ 福岡県 ] </p>
                </strong>
                <p class="postCard_text">
                    本日のセ活報告。
                    <br />
                    人少なめ、浴室は熱気ムンムン😄いつもの皆さんにご挨拶😊OZK氏の安定の仰ぎでゆっくり蒸されて炭酸泉でウトウト💤
                    <br />
                    最近は暑くて寝苦しいのでここきて朝からさっぱりできるのは幸せだ🥰
                    <br />
                    今日もありがとうございました。
                    <br />
                    写真は人気メニューの日替わり定食とカレー！
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
                    <div class="postCardAction_item is-comment"><a
                            href="https://sauna-ikitai.com/saunners/39861/posts/1193052?anchor=giftonttu">
                            <span class="commentCount">0 コメント</span></a>
                    </div>
                </div>

            </div>
            <div class="sekatsu_prof">
                <!-- セ活メイン(3) -->
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
                        <p class="postCardUser_date">2021.07.23</p>
                        <p class="postCardUser_counter">14回目の訪問</p>
                    </div>
                </div>
            </div>
            <div class="postCard_body">
                <strong class="postCard_facility"><a href="">博多の湯</a>
                    <p class="postCard_address">[ 福岡県 ] </p>
                </strong>
                <p class="postCard_text">
                    本日のセ活報告。
                    <br />
                    人少なめ、浴室は熱気ムンムン😄いつもの皆さんにご挨拶😊OZK氏の安定の仰ぎでゆっくり蒸されて炭酸泉でウトウト💤
                    <br />
                    最近は暑くて寝苦しいのでここきて朝からさっぱりできるのは幸せだ🥰
                    <br />
                    今日もありがとうございました。
                    <br />
                    写真は人気メニューの日替わり定食とカレー！
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
                    <div class="postCardAction_item is-comment"><a
                            href="https://sauna-ikitai.com/saunners/39861/posts/1193052?anchor=giftonttu">
                            <span class="commentCount">0 コメント</span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- セ活表示エリア -->
@endsection
