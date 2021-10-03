@extends('layouts/base3')
@section('content')

    <link rel="stylesheet" href="{{ url('css/sentos.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script>
        $(function() {
            $('.js-modal-open').on('click', function() {
                $("body").addClass("no_scroll");
                $('.js-modal').fadeIn();
                return false;
            });
            $('.js-modal-close').on('click', function() {
                $("body").removeClass("no_scroll");
                $('.js-modal').fadeOut();
                return false;
            });
        });
    </script>

    <script>
        $(function() {
            $('#myfile').change(function(e) {
                //ファイルオブジェクトを取得する
                var file = e.target.files[0];
                var reader = new FileReader();

                //画像でない場合は処理終了
                if (file.type.indexOf("image") < 0) {
                    alert("画像ファイルを指定してください。");
                    return false;
                }

                //アップロードした画像を設定する
                reader.onload = (function(file) {
                    return function(e) {
                        $("#img1").attr("src", e.target.result);
                        $("#img1").attr("title", file.name);
                    };
                })(file);
                reader.readAsDataURL(file);

            });
        });
    </script>

    <div class="l-containers">
        <div class="l-content">
            <article class="sentoDetail">
                {{-- コンテンツヘッダー --}}
                <div class="sentoDetail_wrap">
                    <div class="sentoDetailHeader_main">
                        <div class="sentoDetailHeader_middle">
                            <p class="sentoDetailHeader_one">利用対象：
                                @if($sento->target_of_use === 'mens_only')
                                男性
                                @elseif($sento->target_of_use === 'womans_only')
                                女性
                                @elseif($sento->target_of_use === 'mens_and_womans_use')
                                男女
                                @endif
                            </p>
                            <p class="sentoDetailHeader_two">男湯・女湯の入替え：
                                @if($sento->change_spring === 0)
                                無し
                                @else
                                有り
                                @endif
                            </p>
                            {{-- 登録者情報その他 --}}
                            <div class="sentoDetailMeta">
                                <div class="sentoDetailMeta_register">登録者：<a
                                        href="https://sauna-ikitai.com/saunners/106">セント男子</a>
                                </div>

                                <div class="sentoDetailMeta_button"><a
                                        href="https://sauna-ikitai.com/saunas/98/edit">情報修正</a>
                                </div>
                            </div>
                            {{-- 登録者情報その他 --}}
                        </div>
                        <h1 class="sentoDetailHeader_name">{{ $sento->name }}</h1>
                        <p class="sentoDetailHeader_area">
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
                            {{ $sento->address1 }}
                        </p>
                    </div>

                    <div class="share_mobileBlock">
                        <a class="share_twitter" href=""><span>ツイートする</span></a>
                        <a class="share_facebook" href=""><span>シェアする</span></a>
                        <a class="share_line" href=""><span>Lineで送る</span></a>
                    </div>



                    <div class="sentoDetailHeader_action">
                        <div class="like_count_wrap" data-sauna-id="98" data-action="ikitai">
                            <input type="hidden" name="_token" value="tkoUJOisvXL08SjfrA5Gix1AZahxIjmxqhOAZf8V">
                            {{-- <a class="___class_+?19___" href="">
                                <div class="like_Counter"><span>いいね！</span>2301</div>
                            </a> --}}
                        </div>

                        <div>
                            <div class="action_text">
                                {{-- <a class="js-modal-open" href=""><span>投稿</span></a> --}}
                            @auth
                            <a class="js-modal-open" href=""><span>投稿</span></a>
                            @else
                            <a href="{{ route('login') }}"><span>投稿</span></a>
                            @if (Route::has('register'))
                            @endif
                            @endauth
                           </div>
                        </div>
                    </div>
                </div>
                {{-- コンテンツヘッダー --}}

                {{-- コンテンツナビメニュー --}}

                {{-- <nav class="localNav">
                    <div class="localNav_arrow"></div>
                    <div class="localNav_content">
                        <ul class="localNav_links">
                            <li class="localNav_link_basic_active">
                                <a href="https://sauna-ikitai.com/saunas/98">
                                    <h2 class="localNav_link_title"><span>施設情報</span></h2>
                                </a>
                            </li>
                            <li class="p-localNav_link p-localNav_link--activity">
                                <a href="https://sauna-ikitai.com/saunas/98/posts"><span>サ活<span
                                            class="p-localNav_count">1163</span></span></a>
                            </li>
                            <li class="p-localNav_link p-localNav_link--gourmet is-comingsoon">
                                <a href="#"><span>サウナ飯<span class="p-localNav_brackets">(</span>開発中<span
                                            class="p-localNav_brackets">)</span></span></a>
                            </li>
                            <li class="p-localNav_link p-localNav_link--ranking is-comingsoon">
                                <a href="#"><span>ランキング<span class="p-localNav_brackets">(</span>開発中<span
                                            class="p-localNav_brackets">)</span></span></span></a>
                            </li>
                        </ul>
                    </div>
                </nav> --}}

                {{-- コンテンツナビメニュー --}}

                {{-- セ活投稿モーダルウィンドウ --}}
                <div class="modal_window">
                    <div class="modal js-modal">
                        <div class="modal__bg js-modal-close"></div>
                        <div class="modal__content">
                            <div class="modal_form_box">
                                <div class="modal_form_head_menu">
                                    {{-- <h3 class="modal_form_head_title">ここに施設名入ります</h3> --}}
                                    <a class="js-modal-close" href="">閉じる</a>
                                </div>
                                <form method="POST" action="{{ route('sekastu_users_store') }}"
                                    accept-charset="UTF-8" class="c-form js-saunaRegisterForm"
                                    enctype="multipart/form-data">

                                    @csrf

                                    <div class="modal_form_sub_box">
                                        <strong>訪問施設名</strong>
                                        <div>
                                            <div class="modal_form_visit_name">
                                                <input id="visit_name" name="visit_name" type="text" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_form_sub_box">
                                        <strong>訪問日</strong>
                                        <div>
                                            <div class="modal_form_visit_date">
                                                <input id="visit_date" name="visit_date" type="date" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_form_sub_box">
                                        <strong>セ活コメント</strong>
                                        <div>
                                            <div class="modal_form_sekatsu_comment">
                                                <input id="sekatsu_comment" name="sekatsu_comment" type="textara" cols="150"
                                                    rows="50">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_form_sub_box">
                                        <strong>訪問日の浴槽の温度</strong>
                                        <div class="bathroom_info_box_in_box">
                                            <div class="modal_form_temprature">
                                                <span>男湯</span>
                                                <input class="modal_form_men_temprature" placeholder="42"
                                                    name="visit_temperature_men" type="number" value="">
                                                <span>度</span>
                                                <span class="modal_form_woman_temprature_left">女湯</span>
                                                <input class="modal_form_woman_temprature" placeholder="45"
                                                    name="visit_temperature_woman" type="number" value="">
                                                <span>度</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_form_sub_box">
                                        <strong>画像</strong>
                                        <div class="modal_form_sub_box_in_img_box">
                                            <div class="modal_form_action_img">
                                                <input type="file" id="myfile" name="file"><br>
                                                <img id="img1" style="width:100px;height:100px;" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_form_submit">
                                        <input type="submit" value="投稿する">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--modal__inner-->
                    </div>
                    <!--modal-->
                </div>

                {{-- セ活投稿モーダルウィンドウ --}}


                {{-- 詳細情報 --}}

                <!-- 詳細情報メイン -->
                <div class="sentoDetailBody">



                    <!-- メイン情報 -->
                    <div class="sentoDetailMain">
                        {{-- <nav class="c-tab_action">
                            <ul class="c-tab_buttons">

                                <li class="c-tab_button"><a class="is-active js-tabTrigger" data-target="men">男湯
                                    </a></li>

                                <li class="c-tab_button"><a class="js-tabTrigger" data-target="woman">女湯
                                    </a></li>


                            </ul>
                        </nav> --}}

                        <!-- .c-tab_contents -->
                        <div class="c-tab_contents">

                            <!-- .p-saunaDetailGallery -->
                            <div class="sentoDetailGallery">
                                <h2 class="headline"><span class="headline_string">写真ギャラリー</span></h2>
                                <h3 class="headline"><img src="{{ asset('../img/squere.png') }}" alt="" width="20"
                                        height="20" class="squere"><span class="headline_string_sub">投稿画像</span>
                                </h3>

                                <div class="sentoDetailGallery_content">
                                    <div class="sentoDetailGalleryImage" data-modal-type="gallery" data-index="0"
                                        data-image="https://img.sauna-ikitai.com/sauna/98_20171125_002646_oF4zsPL5mI_large.jpg"
                                        data-caption="">
                                        <div class="sentoDetailGalleryImage_image">
                                            <img src="https://img.sauna-ikitai.com/sauna/98_20171125_002646_oF4zsPL5mI_large.jpg"
                                                alt="吹上温泉保養センター 白銀荘 写真ギャラリー0" decoding="async">
                                        </div>
                                        <div class="sentoDetailGalleryImage_caption"></div>
                                    </div>
                                    <div class="sentoDetailGalleryImage" data-modal-type="gallery" data-index="1"
                                        data-image="https://img.sauna-ikitai.com/sauna/98_20200113_154725_xpwILBvhXT_large.jpg"
                                        data-caption="">
                                        <div class="sentoDetailGalleryImage_image">
                                            <img src="https://img.sauna-ikitai.com/sauna/98_20200113_154725_xpwILBvhXT_large.jpg"
                                                alt="吹上温泉保養センター 白銀荘 写真ギャラリー1" decoding="async">
                                        </div>
                                        <div class="sentoDetailGalleryImage_caption"></div>
                                    </div>
                                    <div class="sentoDetailGalleryImage" data-modal-type="gallery" data-index="2"
                                        data-image="https://img.sauna-ikitai.com/sauna/98_20180116_132804_rpR55ruB9N_large.jpg"
                                        data-caption="">
                                        <div class="sentoDetailGalleryImage_image">
                                            <img src="https://img.sauna-ikitai.com/sauna/98_20180116_132804_rpR55ruB9N_large.jpg"
                                                alt="吹上温泉保養センター 白銀荘 写真ギャラリー2" decoding="async">
                                        </div>
                                        <div class="sentoDetailGalleryImage_caption"></div>
                                    </div>
                                    <div class="sentoDetailGalleryImage" data-modal-type="gallery" data-index="3"
                                        data-image="https://img.sauna-ikitai.com/sauna/98_20180116_132808_r5TU8LGDWQ_large.jpg"
                                        data-caption="">
                                        <div class="sentoDetailGalleryImage_image">
                                            <img src="https://img.sauna-ikitai.com/sauna/98_20180116_132808_r5TU8LGDWQ_large.jpg"
                                                alt="吹上温泉保養センター 白銀荘 写真ギャラリー3" decoding="async">
                                        </div>
                                        <div class="sentoDetailGalleryImage_caption"></div>
                                    </div>
                                    <div class="sentoDetailGalleryImage" data-modal-type="gallery" data-index="4"
                                        data-image="https://img.sauna-ikitai.com/sauna/98_20200113_154726_WnuMH63mEZ_large.jpg"
                                        data-caption="">
                                        <div class="sentoDetailGalleryImage_image">
                                            <img src="https://img.sauna-ikitai.com/sauna/98_20200113_154726_WnuMH63mEZ_large.jpg"
                                                alt="吹上温泉保養センター 白銀荘 写真ギャラリー4" decoding="async">
                                        </div>
                                        <div class="sentoDetailGalleryImage_caption"></div>
                                    </div>
                                    <div class="sentoDetailGalleryImage" data-modal-type="gallery" data-index="5"
                                        data-image="https://img.sauna-ikitai.com/sauna/98_20191222_160948_L6XCGItikm_large.jpg"
                                        data-caption="">
                                        <div class="sentoDetailGalleryImage_image">
                                            <img src="https://img.sauna-ikitai.com/sauna/98_20191222_160948_L6XCGItikm_large.jpg"
                                                alt="吹上温泉保養センター 白銀荘 写真ギャラリー5" decoding="async">
                                        </div>
                                        <div class="sentoDetailGalleryImage_caption"></div>
                                    </div>
                                    <div class="sentoDetailGalleryImage" data-modal-type="gallery" data-index="6"
                                        data-image="https://img.sauna-ikitai.com/sauna/98_20200113_154727_kB1SJtdMSp_large.jpg"
                                        data-caption="">
                                        <div class="sentoDetailGalleryImage_image">
                                            <img src="https://img.sauna-ikitai.com/sauna/98_20200113_154727_kB1SJtdMSp_large.jpg"
                                                alt="吹上温泉保養センター 白銀荘 写真ギャラリー6" decoding="async">
                                        </div>
                                        <div class="sentoDetailGalleryImage_caption"></div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.p-saunaDetailGallery -->

                            <!-- .c-tab_content -->
                            <div class="c-tab_content_men">
                                <!-- .p-saunaSpec -->
                                <div class="sentoSpec_men">
                                    <div class="sentoSpec_main">
                                        <!-- .p-saunaSpec_saunaMizuburo -->
                                        <div class="sentoSpec_bathroom">
                                            <div class="sentoSpecItem">
                                                <p class="sentoSpecItem_title_men">男湯</p>
                                                <p class="sentoSpecItem_people"><span>収容人数:<strong>{{ $sento->men_capacity }}</strong>人</span></p>
                                                <p class="sentoSpecItem_number"><span>泉質:<strong>
                                                @if($sento->spring_quality === '01')
                                                特に無し
                                                @elseif($sento->spring_quality === '02')
                                                単純温泉
                                                @elseif($sento->spring_quality === '03')
                                                二酸化炭素泉
                                                @elseif($sento->spring_quality === '04')
                                                炭酸水素塩泉
                                                @elseif($sento->spring_quality === '05')
                                                塩化物泉
                                                @elseif($sento->spring_quality === '06')
                                                硫酸塩泉
                                                @elseif($sento->spring_quality === '07')
                                                含鉄泉
                                                @elseif($sento->spring_quality === '08')
                                                硫黄泉
                                                @elseif($sento->spring_quality === '09')
                                                酸性泉
                                                @elseif($sento->spring_quality === '10')
                                                放射能泉
                                                @endif
                                                </strong></span></p>
                                                <p class="sentoSpecItem_number"><span>メイン浴槽の温度:<strong>{{ $sento->men_temperature }}</strong>度</span></p>
                                                <p class="sentoSpecItem_number"><span>飲泉:<strong>
                                                @if($sento->drink_spring_yes === 1)
                                                有り
                                                @else
                                                無し
                                                @endif
                                                </strong></span></p>
                                            </div>
                                        </div>
                                        <!-- .p-saunaSpec_saunaMizuburo -->
                                    </div>

                                    <table class="sentoSpecTable">
                                        <tbody class="sentoSpecTable_tbody">
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">脱衣場</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_notavailable_bold.svg" alt="">
                                                        @if($sento->undressing_space === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">洗面台</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_notavailable_bold.svg" alt="">
                                                        @if($sento->face_wash_stand === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">洗体スペース</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_notavailable_bold.svg" alt="">
                                                        @if($sento->body_wash_space === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">シャワーエリア</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_notavailable_bold.svg" alt="">
                                                        @if($sento->shower_area === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">ジェットバス</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_notavailable_bold.svg" alt="">
                                                        @if($sento->jet_bath === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">高濃度炭酸泉</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_notavailable_bold.svg" alt="">
                                                        @if($sento->carbonate_bath === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">寝湯</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->sleeping_bath === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">うたせ湯</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->utase_hot_water === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">ドライサウナ</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->dry_sauna === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">ミストサウナ</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->mist_sauna === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">スチームサウナ</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->steam_sauna === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">塩サウナ</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->salt_sauna === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">水風呂</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->water_bath === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">薬湯風呂</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->medicine_bath === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">電気風呂</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->electric_bath === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">浴室内TV</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->tv_in_the_bath === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">露天風呂</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->open_air_bath === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">浴室内休憩スペース</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->relax_space === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">岩盤浴</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->bedrock_bath === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">パウダールーム</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->powder_room === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">アカスリ</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->akasuri === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">家族風呂</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->family_bath === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">貸切風呂</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->private_bath === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.p-saunaSpec -->
                            </div>
                            <div class="c-tab_content_woman">
                                <!-- .p-saunaSpec -->
                                <div class="sentoSpec_woman">
                                    <div class="sentoSpec_main">
                                        <!-- .p-saunaSpec_saunaMizuburo -->
                                        <div class="sentoSpec_bathroom">
                                            <div class="sentoSpecItem">
                                                <p class="sentoSpecItem_title_woman">女湯</p>
                                                <p class="sentoSpecItem_people"><span>収容人数:<strong>{{ $sento->woman_capacity }}</strong>人</span></p>
                                                <p class="sentoSpecItem_number"><span>泉質:<strong>
                                                    @if($sento->spring_quality === '01')
                                                    特に無し
                                                    @elseif($sento->spring_quality === '02')
                                                    単純温泉
                                                    @elseif($sento->spring_quality === '03')
                                                    二酸化炭素泉
                                                    @elseif($sento->spring_quality === '04')
                                                    炭酸水素塩泉
                                                    @elseif($sento->spring_quality === '05')
                                                    塩化物泉
                                                    @elseif($sento->spring_quality === '06')
                                                    硫酸塩泉
                                                    @elseif($sento->spring_quality === '07')
                                                    含鉄泉
                                                    @elseif($sento->spring_quality === '08')
                                                    硫黄泉
                                                    @elseif($sento->spring_quality === '09')
                                                    酸性泉
                                                    @elseif($sento->spring_quality === '10')
                                                    放射能泉
                                                    @endif
                                                </strong></span></p>
                                                <p class="sentoSpecItem_number"><span>メイン浴槽の温度:<strong>{{ $sento->woman_temperature }}</strong>度</span></p>
                                                <p class="sentoSpecItem_number"><span>飲泉:<strong>
                                                    @if($sento->drink_spring_yes === 1)
                                                        有り
                                                        @else
                                                        無し
                                                    @endif
                                                </strong></span></p>
                                            </div>
                                        </div>
                                        <!-- .p-saunaSpec_saunaMizuburo -->
                                    </div>

                                    <table class="sentoSpecTable">
                                        <tbody class="sentoSpecTable_tbody">
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">脱衣場</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_notavailable_bold.svg" alt="">
                                                        @if($sento->undressing_space === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">洗面台</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_notavailable_bold.svg" alt="">
                                                        @if($sento->face_wash_stand === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">洗体スペース</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_notavailable_bold.svg" alt="">
                                                        @if($sento->body_wash_space === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">シャワーエリア</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_notavailable_bold.svg" alt="">
                                                        @if($sento->shower_area === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">ジェットバス</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_notavailable_bold.svg" alt="">
                                                        @if($sento->jet_bath === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">高濃度炭酸泉</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_notavailable_bold.svg" alt="">
                                                        @if($sento->carbonate_bath === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">寝湯</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->sleeping_bath === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">うたせ湯</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->utase_hot_water === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">ドライサウナ</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->dry_sauna === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">ミストサウナ</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->mist_sauna === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">スチームサウナ</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->steam_sauna === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">塩サウナ</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->salt_sauna === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">水風呂</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->water_bath === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">薬湯風呂</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->medicine_bath === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">電気風呂</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->electric_bath === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">浴室内TV</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->tv_in_the_bath === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">露天風呂</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->open_air_bath === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">浴室内休憩スペース</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->relax_space === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">岩盤浴</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->bedrock_bath === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">パウダールーム</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->powder_room === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">アカスリ</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->akasuri === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">家族風呂</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->family_bath === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="sentoSpecTable_th">
                                                    <div class="saunaSpecTable_name">貸切風呂</div>
                                                </th>
                                                <td class="sentoSpecTable_mark">
                                                    <div><img src="/assets/img/global/icon_available_bold.svg" alt="">
                                                        @if($sento->private_bath === 1)
                                                        有り
                                                        @else
                                                        無し
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.p-saunaSpec -->
                            </div>
                            <!-- /.c-tab_content -->
                        </div>
                    </div>
                    <!-- /.c-tab -->

                    <!-- .p-saunaSpecDetail -->
                    <div class="sentoSpecDetail">

                        <h3 class="headline"><img src="{{ asset('../img/squere.png') }}" alt="" width="20"
                                height="20" class="squere"><span class="headline_string_sub">その他設備</span>
                        </h3>

                        <ul class="sentoSpecList">
                            <li class="sentoSpecList_list">
                                <span class="sentoSpecList_key">休憩所(広間タイプ)</span>
                                <span class="sentoSpecList_value">
                                    @if($sento->relax_space_wide === 1)
                                    ◯
                                    @else
                                    -
                                    @endif
                                </span>
                            </li>
                            <li class="sentoSpecList_list">
                                <span class="sentoSpecList_key">休憩所(個室タイプ)</span>
                                <span class="sentoSpecList_value">
                                    @if($sento->relax_space_small === 1)
                                    ◯
                                    @else
                                    -
                                    @endif
                                </span>
                            </li>
                            <li class="sentoSpecList_list">
                                <span class="sentoSpecList_key">仮眠コーナー</span>
                                <span class="sentoSpecList_value">
                                    @if($sento->sleeping_space === 1)
                                    ◯
                                    @else
                                    -
                                    @endif
                                </span>
                            </li>
                            <li class="sentoSpecList_list">
                                <span class="sentoSpecList_key">無料Wi-Fi</span>
                                <span class="sentoSpecList_value">
                                    @if($sento->free_wifi === 1)
                                    ◯
                                    @else
                                    -
                                    @endif
                                </span>
                            </li>
                            <li class="sentoSpecList_list">
                                <span class="sentoSpecList_key">無料電源</span>
                                <span class="sentoSpecList_value">
                                    @if($sento->electric_source === 1)
                                    ◯
                                    @else
                                    -
                                    @endif
                                </span>
                            </li>
                            <li class="sentoSpecList_list">
                                <span class="sentoSpecList_key">漫画閲覧スペース</span>
                                <span class="sentoSpecList_value">
                                    @if($sento->manga_space === 1)
                                    ◯
                                    @else
                                    -
                                    @endif
                                </span>
                            </li>
                            <li class="sentoSpecList_list">
                                <span class="sentoSpecList_key">作業スペース</span>
                                <span class="sentoSpecList_value">
                                    @if($sento->working_space === 1)
                                    ◯
                                    @else
                                    -
                                    @endif
                                </span>
                            </li>
                            <li class="sentoSpecList_list">
                                <span class="sentoSpecList_key">レストラン</span>
                                <span class="sentoSpecList_value">
                                    @if($sento->food_space === 1)
                                    ◯
                                    @else
                                    -
                                    @endif
                                </span>
                            </li>
                            <li class="sentoSpecList_list">
                                <span class="sentoSpecList_key">ボディケアエステ</span>
                                <span class="sentoSpecList_value">
                                    @if($sento->body_massage_service === 1)
                                    ◯
                                    @else
                                    -
                                    @endif
                                </span>
                            </li>
                            <li class="sentoSpecList_list">
                                <span class="sentoSpecList_key">マッサージチェア</span>
                                <span class="sentoSpecList_value">
                                    @if($sento->massage_chair === 1)
                                    ◯
                                    @else
                                    -
                                    @endif
                                </span>
                            </li>
                            <li class="sentoSpecList_list">
                                <span class="sentoSpecList_key">売店</span>
                                <span class="sentoSpecList_value">
                                    @if($sento->shopping_area === 1)
                                    ◯
                                    @else
                                    -
                                    @endif
                                </span>
                            </li>
                            <li class="sentoSpecList_list">
                                <span class="sentoSpecList_key">ゲームコーナー</span>
                                <span class="sentoSpecList_value">
                                    @if($sento->game_corner === 1)
                                    ◯
                                    @else
                                    -
                                    @endif
                                </span>
                            </li>
                            <li class="sentoSpecList_list">
                                <span class="sentoSpecList_key">喫煙ルーム</span>
                                <span class="sentoSpecList_value">
                                    @if($sento->smoking_area === 1)
                                    ◯
                                    @else
                                    -
                                    @endif
                                </span>
                            </li>
                            <li class="sentoSpecList_list">
                                <span class="sentoSpecList_key">美容室</span>
                                <span class="sentoSpecList_value">
                                    @if($sento->beauty_salon === 1)
                                    ◯
                                    @else
                                    -
                                    @endif
                                </span>
                            </li>
                            <li class="sentoSpecList_list">
                                <span class="sentoSpecList_key">多目的トイレ</span>
                                <span class="sentoSpecList_value">
                                    @if($sento->multipurpose_toilet === 1)
                                    ◯
                                    @else
                                    -
                                    @endif
                                </span>
                            </li>
                            <li class="sentoSpecList_list">
                                <span class="sentoSpecList_key">自動販売機</span>
                                <span class="sentoSpecList_value">
                                    @if($sento->vending_machine === 1)
                                    ◯
                                    @else
                                    -
                                    @endif
                                </span>
                            </li>
                            <li class="sentoSpecList_list">
                                <span class="sentoSpecList_key">足湯</span>
                                <span class="sentoSpecList_value">
                                    @if($sento->foot_spring === 1)
                                    ◯
                                    @else
                                    -
                                    @endif
                                </span>
                            </li>
                        </ul>


                        <h3 class="headline"><img src="{{ asset('../img/squere.png') }}" alt="" width="20"
                                height="20" class="squere"><span class="headline_string_sub">設備・ルール</span></h3>

                        <ul class="sentoSpecList">
                            <li class="sentoSpecList_list">
                                <span class="sentoSpecList_key">タトゥー</span>
                                <span class="sentoSpecList_value">
                                    @if($sento->allow_tattoo === 1)
                                    ◯
                                    @else
                                    -
                                    @endif
                                </span>
                            </li>
                            <li class="sentoSpecList_list">
                                <span class="sentoSpecList_key">異性入浴(小学生)</span>
                                <span class="sentoSpecList_value">
                                    @if($sento->heterosexual_bathing === 1)
                                    ◯
                                    @else
                                    -
                                    @endif
                                </span>
                            </li>
                            <li class="sentoSpecList_list">
                                <span class="sentoSpecList_key">水着の着用義務</span>
                                <span class="sentoSpecList_value">
                                    @if($sento->duty_swimsuit === 1)
                                    ◯
                                    @else
                                    -
                                    @endif
                                </span>
                            </li>
                            <ul>


                                <h3 class="headline"><img src="{{ asset('../img/squere.png') }}" alt="" width="20"
                                        height="20" class="squere"><span
                                        class="headline_string_sub">無料アメニティ</span>
                                </h3>

                                <ul class="sentoSpecList">
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">シャンプー</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->free_shampoo === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">コンディショナー</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->free_conditioner === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">ボディーソープ</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->free_bodysoap === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">洗顔ソープ</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->free_facesoap === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">カミソリ</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->free_razor === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">シェーバー</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->free_shaver === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">シェービングクリーム</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->free_shaving_creamt === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">歯ブラシ</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->free_toothbrush === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">バスタオル</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->free_bathtowel === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">ハンドタオル</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->free_handtowel === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">ドライヤー</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->free_dryer === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">サウナセット</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->free_sauna_set === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">化粧水</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->free_toner === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">乳液</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->free_milky_lotion === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">メイク落とし</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->free_makeup_remover === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">綿棒</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->free_cotton_swab === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">トニック</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->free_tonic === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">ローション</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->free_lotion === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">石鹸</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->free_nomal_soap === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                </ul>


                                <h3 class="headline"><img src="{{ asset('../img/squere.png') }}" alt="" width="20"
                                        height="20" class="squere"><span
                                        class="headline_string_sub">有料アメニティ</span>
                                </h3>

                                <ul class="sentoSpecList">
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">シャンプー</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->paid_shampoo === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">コンディショナー</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->paid_conditioner === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">ボディーソープ</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->paid_bodysoap === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">洗顔ソープ</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->paid_facesoap === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">カミソリ</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->paid_razor === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">シェーバー</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->paid_shaver === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">シェービングクリーム</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->paid_shaving_cream === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">歯ブラシ</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->paid_toothbrush === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">バスタオル</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->paid_bathtowel === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">ハンドタオル</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->paid_handtowel === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">ドライヤー</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->paid_dryer === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">サウナセット</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->paid_sauna_set === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">化粧水</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->paid_toner === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">乳液</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->paid_milky_lotion === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">メイク落とし</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->paid_makeup_remover === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">綿棒</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->paid_cotton_swab === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">トニック</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->paid_tonic === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">ローション</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->paid_lotion === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                    <li class="sentoSpecList_list">
                                        <span class="sentoSpecList_key">石鹸</span>
                                        <span class="sentoSpecList_value">
                                            @if($sento->paid_nomal_soap === 1)
                                            ◯
                                            @else
                                            -
                                            @endif
                                        </span>
                                    </li>
                                </ul>

                                <div class="sentoSpecDetailItem">
                                    <h3 class="headline"><img src="{{ asset('../img/squere.png') }}" alt=""
                                            width="20" height="20" class="squere"><span
                                            class="headline_string_sub">施設補足情報</span></h3>
                                    <p class="sentoSpecDetail_note">{{ $sento->supplement }}</p>
                                </div>

                                <div class="sentoSpecDetailItem">
                                    <h3 class="headline"><img src="{{ asset('../img/squere.png') }}" alt=""
                                            width="20" height="20" class="squere"><span
                                            class="headline_string_sub">休業・時間短縮などの営業情報</span></h3>
                                    <p class="sentoSpecDetail_note">{{ $sento->closed_info }}</p>

                                </div>


                    </div>
                    <!-- /.p-saunaSpecDetail -->


                    <!-- .p-saunaDetailShop -->
                    <div class="sentoDetailShop">
                        <h2 class="headline"><span class="headline_string">基本情報</span></h2>

                        <div class="sentoDetailShop_content">

                            <div class="sentoDetailShop_image">
                                <img src="https://img.sauna-ikitai.com/sauna/98_20171125_002646_oF4zsPL5mI_large.jpg"
                                    width="400" height="300" alt="吹上温泉保養センター 白銀荘 写真" decoding="async">


                                <div class="sentoDetailShop_map">
                                    <h3 class="headline"><img src="{{ asset('../img/squere.png') }}" alt=""
                                            width="20" height="20" class="squere"><span
                                            class="headline_string_sub">GoogleMap</span></h3>
                                    <div id="map" class="p-saunaDetailShop_googlemap" data-lat="43.431429"
                                        data-lng="142.641584">
                                        <iframe width="400" height="300" frameborder="0" style="border:0"
                                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDxQAjhd8FhDLe5nIZI0GyaSmiAs1O-6SA&amp;q=place_id:ChIJjz4p0_Y0c18R1DC-NdSRyvQ&attribution_source=サウナイキタイ"
                                            allowfullscreen> </iframe>
                                    </div>
                                    <a href="https://www.google.com/maps/search/?api=1&query=43.431429,142.641584&query_place_id=ChIJjz4p0_Y0c18R1DC-NdSRyvQ"
                                        target="_blank">googlemapでみる</a>
                                </div>
                            </div>

                            <div class="sentoDetailShop_info">
                                <table class="c-table">
                                    <tbody>
                                        <tr>
                                            <th class="c-table_th">施設名</th>
                                            <td class="c-table_td">
                                                {{ $sento->name }}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="c-table_th">施設タイプ</th>
                                            <td class="c-table_td">
                                                @if($sento->type_code === '01')
                                                    温浴施設（スーパー銭湯)
                                                    @elseif($sento->type_code === '02')
                                                    銭湯（公衆浴場）
                                                    @elseif($sento->type_code === '03')
                                                    ホテル・旅館
                                                    @elseif($sento->type_code === '04')
                                                    ゴルフ場
                                                    @elseif($sento->type_code === '05')
                                                    スポーツジム
                                                    @elseif($sento->type_code === '06')
                                                    キャンプ場
                                                    @elseif($sento->type_code === '07')
                                                    ラブホテル
                                                    @elseif($sento->type_code === '08')
                                                    その他
                                                    @endif
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="c-table_th">郵便番号</th>
                                            <td class="c-table_td">
                                                {{ $sento->postal_code }}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="c-table_th">住所</th>
                                            <td class="c-table_td">
                                                {{ $sento->address1 }}{{ $sento->address2 }}{{ $sento->address3 }}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="c-table_th">アクセス</th>
                                            <td class="c-table_td">
                                                {{ $sento->access }}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="c-table_th">駐車場情報</th>
                                            <td class="c-table_td">
                                                {{ $sento->parking_info }}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="c-table_th">TEL</th>
                                            <td class="c-table_td">
                                                {{ $sento->telephone }}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="c-table_th">施設のHP</th>
                                            <td class="c-table_td">
                                                <a href="{{ $sento->web_home_page }}"
                                                    target="_blank">{{ $sento->web_home_page }}</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="c-table_th">定休日</th>
                                            <td class="c-table_td">
                                                {{ $sento->regular_holiday }}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="c-table_th">営業時間</th>
                                            <td class="c-table_td">
                                                {{ $sento->business_hours }}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="c-table_th">利用料金(大人)</th>
                                            <td class="c-table_td">
                                                {{ $sento->adult_fee }}円
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="c-table_th">利用料金(子供)</th>
                                            <td class="c-table_td">
                                                {{ $sento->child_fee }}円
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="c-table_th">クレジットカード<br>決済</th>
                                            <td class="c-table_td">
                                                @if($sento->credit_card_use_yes === 1)
                                                有り
                                                @else
                                                無し
                                                @endif
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="c-table_th">ペイペイ決済</th>
                                            <td class="c-table_td">
                                                @if($sento->paypay_use_yes === 1)
                                                有り
                                                @else
                                                無し
                                                @endif
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="c-table_th">24時間営業</th>
                                            <td class="c-table_td">
                                                @if($sento->open_all_night_yes === 1)
                                                有り
                                                @else
                                                無し
                                                @endif
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="c-table_th">宿泊施設</th>
                                            <td class="c-table_td">
                                                @if($sento->stay_yes === 1)
                                                有り
                                                @else
                                                無し
                                                @endif
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.p-saunaDetailShop -->

                    <!-- セ活エリア -->
                    <div class="sentoDetailSekatsu">
                        <h2 class="headline"><span class="headline_string">セ活</span></h2>

                        <!-- セ活登録エリア -->



                        <!-- セ活登録エリア -->

                        <div class="sentoDetailSekatsu_content">
                            <!-- セ活表示エリア -->
                            <div class="sekatsu_main">
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

                                    <div class="postCardAction">
                                        <div class="postCardAction_item is-like" data-action="like"
                                            data-sakatsu-id="1193052">
                                            <span class="likeCount">0 いいね</span>
                                        </div>
                                        {{-- <div class="postCardAction_item is-comment"><a
                                                href="https://sauna-ikitai.com/saunners/39861/posts/1193052?anchor=giftonttu">
                                                <span class="commentCount">0 コメント</span></a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="sekatsu_main">
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

                                    <div class="postCardAction">
                                        <div class="postCardAction_item is-like" data-action="like"
                                            data-sakatsu-id="1193052">
                                            <span class="likeCount">0 いいね</span>
                                        </div>
                                        {{-- <div class="postCardAction_item is-comment"><a
                                                href="https://sauna-ikitai.com/saunners/39861/posts/1193052?anchor=giftonttu">
                                                <span class="commentCount">0 コメント</span></a>
                                        </div> --}}
                                    </div>
                                </div>

                            </div>
                            <div class="sekatsu_main">
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

                                    <div class="postCardAction">
                                        <div class="postCardAction_item is-like" data-action="like"
                                            data-sakatsu-id="1193052">
                                            <span class="likeCount">0 いいね</span>
                                        </div>
                                        {{-- <div class="postCardAction_item is-comment"><a
                                                href="https://sauna-ikitai.com/saunners/39861/posts/1193052?anchor=giftonttu">
                                                <span class="commentCount">0 コメント</span></a>
                                        </div> --}}
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- セ活表示エリア -->
                    </div>
                    <!-- セ活エリア -->



                </div>
                <!-- /.p-saunaDetailBody -->
            </article>
        </div>
    </div>

    <!-- WANTEDバナー-->
    <div class="wanted_banner">
        <a href="https://sauna-ikitai.com/saunas/11064"><img src="{{ asset('img/wanted.png') }}" width=1200 height=420
                alt="Smart Stay SHIZUKU 品川大井町 写真">
        </a>
    </div>
    <!-- WANTEDバナー-->

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

@endsection
