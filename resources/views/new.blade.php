@extends('layouts.base')
@section('content')

    <link rel="stylesheet" href="{{ url('css/new.css') }}">
    {{-- <link rel="stylesheet" href="{{ url('css/destyle.css') }}"> --}}

    <!-- 施設登録の説明文 -->

    <div class="l-content">
        <div class="l-content-wrap">
            <h1><span>施設を登録</span></h1>
            <p>
                セント施設登録の協力をお願いします。<br>
                入力項目が多数あるので、不明な箇所は未入力のままでも登録できます。<br>
                一度施設を登録した後はセントイキタイのユーザーなら誰でも情報を編集することができます。<br>
                既に同じ施設が登録されている場合は後から登録したページは削除されますのでご注意ください。<br>
            </p>
        </div>
    </div>

    {{-- <div class="l-content menu">
        <ul class="c-formSteps">
            <li class="c-formSteps_step_active"><span class="c-formSteps_number">01</span>施設情報入力</li>
            <li class="c-formSteps_step"><span class="c-formSteps_number">02</span>施設画像登録</li>
            <li class="c-formSteps_step"><span class="c-formSteps_number">03</span>登録完了</li>
        </ul>
    </div> --}}

    <!-- 施設情報の説明文 -->
    <!-- 施設基本情報 -->

    <form method="post" action="{{ route('sento.store') }}">
        @csrf

        <h3><span>基本情報</span></h3>
        <div class="l-content">
            <div class="basic_info">
                <p>いつも施設情報を登録していただきありがとうございます。</p>
                <p>施設登録後は誰でも編集できるようになります。<br>
                    すでに登録済みの可能性もありますので検索していただき、重複している場合は<br>
                    登録済み施設の編集にて情報更新いただきますよう、ご協力のほどよろしくお願い致します。<br>
                </p>
            </div>
            <table class="basic_table">
                <tbody>
                    <tr class="basic_table_underline">
                        <th class="basic_table_title">施設名</th>
                        <th>
                            <div class="facility_name">
                                <input id="name" placeholder="例：博多の湯" name="name" type="text" value="">
                            </div>
                        </th>
                    </tr>

                    <tr class="basic_table_underline">
                        <th class="basic_table_title">施設タイプ</th>
                        <td>
                            <div class="facility_type">
                                <select name="type_code">
                                    <option value="01">温浴施設（スーパー銭湯・サウナ・スパ施設）</option>
                                    <option value="02">銭湯（公衆浴場）</option>
                                    <option value="03">ホテル・旅館</option>
                                    <option value="04">ゴルフ場</option>
                                    <option value="05">スポーツジム</option>
                                    <option value="06">キャンプ場</option>
                                    <option value="07">ラブホテル</option>
                                    <option value="08">その他</option>
                                </select>
                            </div>
                        </td>
                    </tr>

                    <tr class="basic_table_underline">
                        <th class="basic_table_title">都道府県</th>
                        <td>
                            <div class="prefecture">
                                <select name="prefecture_code">
                                    <option value="01">北海道</option>
                                    <option value="02">青森県</option>
                                    <option value="03">岩手県</option>
                                    <option value="04">宮城県</option>
                                    <option value="05">秋田県</option>
                                    <option value="06">山形県</option>
                                    <option value="07">福島県</option>
                                    <option value="08">茨城県</option>
                                    <option value="09">栃木県</option>
                                    <option value="10">群馬県</option>
                                    <option value="11">埼玉県</option>
                                    <option value="12">千葉県</option>
                                    <option value="13">東京都</option>
                                    <option value="14">神奈川県</option>
                                    <option value="15">新潟県</option>
                                    <option value="16">富山県</option>
                                    <option value="17">石川県</option>
                                    <option value="18">福井県</option>
                                    <option value="19">山梨県</option>
                                    <option value="20">長野県</option>
                                    <option value="21">岐阜県</option>
                                    <option value="22">静岡県</option>
                                    <option value="23">愛知県</option>
                                    <option value="24">三重県</option>
                                    <option value="25">滋賀県</option>
                                    <option value="26">京都府</option>
                                    <option value="27">大阪府</option>
                                    <option value="28">兵庫県</option>
                                    <option value="29">奈良県</option>
                                    <option value="30">和歌山県</option>
                                    <option value="31">鳥取県</option>
                                    <option value="32">島根県</option>
                                    <option value="33">岡山県</option>
                                    <option value="34">広島県</option>
                                    <option value="35">山口県</option>
                                    <option value="36">徳島県</option>
                                    <option value="37">香川県</option>
                                    <option value="38">愛媛県</option>
                                    <option value="39">高知県</option>
                                    <option value="40">福岡県</option>
                                    <option value="41">佐賀県</option>
                                    <option value="42">長崎県</option>
                                    <option value="43">熊本県</option>
                                    <option value="44">大分県</option>
                                    <option value="45">宮崎県</option>
                                    <option value="46">鹿児島県</option>
                                    <option value="47">沖縄県</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr class="basic_table_underline">
                        <th class="basic_table_title">郵便番号</th>
                        <th>
                            <div class="postal_code">
                                <input id="postal_code" maxlength="8" placeholder="例：549-1123" name="postal_code"
                                    type="text" value="">
                            </div>
                        </th>
                    </tr>
                    <tr class="basic_table_underline">
                        <th class="basic_table_title">住所1</th>
                        <th>
                            <div class="address1">
                                <input id="address1" placeholder="市区 例：渋谷区" name="address1" type="text" value="">
                            </div>
                        </th>
                    </tr>
                    <tr class="basic_table_underline">
                        <th class="basic_table_title">住所2</th>
                        <th>
                            <div class="address2">
                                <input id="address2" placeholder="町村番地 例：笹塚1-58-6" name="address2" type="text" value="">
                            </div>
                        </th>
                    </tr>
                    <tr class="basic_table_underline">
                        <th class="basic_table_title">住所3</th>
                        <th>
                            <div class="address3">
                                <input id="address3" placeholder="ビル名 例：ときわビル10階" name="address3" type="text" value="">
                            </div>
                        </th>
                    </tr>
                    <tr class="basic_table_underline">
                        <th class="basic_table_title">アクセス</th>
                        <th>
                            <div class="access">
                                <textarea id="access" placeholder="〇〇駅から徒歩〇〇分 〇〇ICから車で〇〇分など" name="access" cols="50"
                                    rows="10"></textarea>
                            </div>
                        </th>
                    </tr>
                    <tr class="basic_table_underline">
                        <th class="basic_table_title">駐車場情報</th>
                        <th>
                            <div class="parking_info">
                                <input id="parking_info" placeholder="駐車可 〇〇台など" name="parking_info" type="text" value="">
                            </div>
                        </th>
                    </tr>
                    <tr class="basic_table_underline">
                        <th class="basic_table_title">TEL</th>
                        <th>
                            <div class="telephone">
                                <input id="telephone" placeholder="000-0000-0000" name="telephone" type="text" value="">
                            </div>
                        </th>
                    </tr>
                    <tr class="basic_table_underline">
                        <th class="basic_table_title">施設のHP</th>
                        <th>
                            <div class="web_home_page_wrap">
                                <input id="web_home_page" placeholder="https://sento-ikou.com/" name="web_home_page"
                                    type="text" value="">
                            </div>
                        </th>
                    </tr>
                    <tr class="basic_table_underline">
                        <th class="basic_table_title">定休日</th>
                        <th>
                            <div class="regular_holiday">
                                <textarea id="regular_holiday" name="regular_holiday" placeholder="(例)火曜・木曜は定休" cols="50"
                                    rows="10"></textarea>
                            </div>
                        </th>
                    </tr>
                    <tr class="basic_table_underline">
                        <th class="basic_table_title">営業時間</th>
                        <th>
                            <div class="business_hours">
                                <textarea id="business_hours" name="business_hours" placeholder="(例)9:00〜22:00まで" cols="50"
                                    rows="10"></textarea>
                            </div>
                        </th>
                    </tr>
                    <tr class="basic_table_underline">
                        <th class="basic_table_title">利用料金</th>
                        <th>
                            <div class="usefee">
                                <span>大人料金</span>
                                <input class="adult_fee" placeholder="1000" name="adult_fee" type="number" value="">
                                <span>円</span>
                                <span class="childfee_left">子供料金</span>
                                <input class="child_fee" placeholder="1000" name="child_fee" type="number" value="">
                                <span>円</span>
                            </div>
                        </th>
                    </tr>
                    <tr class="basic_table_underline">
                        <th class="basic_table_title">クレジットカード決済</th>
                        <td class="top_switchArea_wrap">
                            <div class="top_switchArea">
                                <input id="credit_card_use_yes" name="credit_card_use_yes" type="checkbox" value="1">
                                <label for="credit_card_use_yes"><span></span></label>
                                <div id="swImg"></div>
                            </div>
                        </td>
                    </tr>

                    <tr class="basic_table_underline">
                        <th class="basic_table_title">ペイペイ決済</th>
                        <td class="top_switchArea_wrap">
                            <div class="top_switchArea">
                                <input id="paypay_use_yes" name="paypay_use_yes" type="checkbox" value="1">
                                <label for="paypay_use_yes"><span></span></label>
                                <div id="swImg"></div>
                            </div>
                        </td>
                    </tr>

                    <tr class="basic_table_underline">
                        <th class="basic_table_title">24時間利用</th>
                        <td class="top_switchArea_wrap">
                            <div class="top_switchArea">
                                <input id="open_all_night_yes" name="open_all_night_yes" type="checkbox" value="1">
                                <label for="open_all_night_yes"><span></span></label>
                                <div id="swImg"></div>
                            </div>
                        </td>
                    </tr>

                    <tr class="basic_table_underline">
                        <th class="basic_table_title">施設内で宿泊</th>
                        <td class="top_switchArea_wrap">
                            <div class="top_switchArea">
                                <input id="stay_yes" name="stay_yes" type="checkbox" value="1">
                                <label for="stay_yes"><span></span></label>
                                <div id="swImg"></div>
                            </div>
                        </td>
                    </tr>

                    <tr class="basic_table_underline">
                        <th class="basic_table_title">利用対象</th>
                        <td>
                            <div class="facility_type">
                                <select name="target_of_use">
                                    <option value="mens_only">男湯のみ</option>
                                    <option value="womans_only">女湯のみ</option>
                                    <option value="mens_and_womans_use">男女</option>
                                </select>
                            </div>
                        </td>
                    </tr>

                    <tr class="basic_table_underline">
                        <th class="basic_table_title">男湯・女湯入れ替え</th>
                        <td class="up_switchArea_wrap">
                            <div class="up_switchArea">
                                <input id="change_spring" name="change_spring" type="checkbox" value="1">
                                <label for="change_spring"><span></span></label>
                                <div id="swImg"></div>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- /.l-content -->
        <!-- 施設基本情報 -->

        <!-- 浴室内にある設備 -->

        <h3><span>入浴エリア内設備</span></h3>
        <div class="l-content">
            <div class="bathroom_info">

                <div class="bathroom_info_box">
                    <strong>浴室の収容人数</strong>
                    <div class="bathroom_info_box_in_box">
                        <div class="capacity">
                            <span>男湯</span>
                            <input class="men_capacity" placeholder="10" name="men_capacity" type="number" value="">
                            <span>人</span>
                            <span class="woman_capacity_left">女湯</span>
                            <input class="woman_capacity" placeholder="10" name="woman_capacity" type="number" value="">
                            <span>人</span>
                        </div>
                    </div>
                </div>

                <div class="bathroom_info_box">
                    <strong>泉質</strong>
                    <div class="bathroom_info_box_in_box">
                        <div class="spring_quality">
                            <select name="spring_quality">
                                <option value="01">特に無し</option>
                                <option value="02">単純温泉</option>
                                <option value="03">二酸化炭素泉</option>
                                <option value="04">炭酸水素塩泉</option>
                                <option value="05">塩化物泉</option>
                                <option value="06">硫酸塩泉</option>
                                <option value="07">含鉄泉</option>
                                <option value="08">硫黄泉</option>
                                <option value="09">酸性泉</option>
                                <option value="10">放射能泉</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="bathroom_info_box">
                    <strong>メイン浴槽の温度</strong>
                    <div class="bathroom_info_box_in_box">
                        <div class="temperature">
                            <span>男湯</span>
                            <input class="men_temperature" placeholder="45" name="men_temperature" type="number" value="">
                            <span>度</span>
                            <span class="woman_temperature_left">女湯</span>
                            <input class="woman_temperature" placeholder="45" name="woman_temperature" type="number" value="">
                            <span>度</span>
                        </div>
                    </div>
                </div>

                <div class="bathroom_info_box">
                    <strong>飲泉</strong>
                    <div class="bathroom_info_box_in_box">
                        <div class="drink_spring">
                            <div class="up_switchArea">
                                <input id="drink_spring_yes" name="drink_spring_yes" type="checkbox" value="1">
                                <label for="drink_spring_yes"><span></span></label>
                                <div id="swImg"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bathroom_info_box_two">

                    <div class="bathroom_box_in_box_two">
                    <strong>脱衣場</strong>
                    <div class="switchArea">
                        <input id="undressing_space" name="undressing_space" type="checkbox" value="1">
                        <label for="undressing_space"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                    </div>



                    <div class="bathroom_box_in_box_two">
                        <strong>洗面台</strong>
                        <div class="switchArea">
                            <input id="face_wash_stand" name="face_wash_stand" type="checkbox" value="1">
                            <label for="face_wash_stand"><span></span></label>
                            <div id="swImg"></div>
                        </div>
                    </div>

                    <div class="bathroom_box_in_box_two">
                        <strong>洗体スペース</strong>
                        <div class="switchArea">
                            <input id="body_wash_space" name="body_wash_space" type="checkbox" value="1">
                            <label for="body_wash_space"><span></span></label>
                            <div id="swImg"></div>
                        </div>
                    </div>

                    <div class="bathroom_box_in_box_two">
                        <strong>シャワーエリア</strong>
                            <div class="switchArea">
                                <input id="shower_area" name="shower_area" type="checkbox" value="1">
                                <label for="shower_area"><span></span></label>
                                <div id="swImg"></div>
                            </div>
                    </div>
                    <div class="bathroom_box_in_box_two">
                        <strong>ジェットバス</strong>
                        <div class="switchArea">
                            <input id="jet_bath" name="jet_bath" type="checkbox" value="1">
                            <label for="jet_bath"><span></span></label>
                            <div id="swImg"></div>
                        </div>
                    </div>

                    <div class="bathroom_box_in_box_two">
                        <strong>高濃度炭酸泉</strong>
                        <div class="switchArea">
                            <input id="carbonate_bath" name="carbonate_bath" type="checkbox" value="1">
                            <label for="carbonate_bath"><span></span></label>
                            <div id="swImg"></div>
                        </div>
                    </div>

                    <div class="bathroom_box_in_box_two">
                        <strong>寝湯</strong>
                        <div class="switchArea">
                            <input id="sleeping_bath" name="sleeping_bath" type="checkbox" value="1">
                            <label for="sleeping_bath"><span></span></label>
                            <div id="swImg"></div>
                        </div>
                    </div>

                    <div class="bathroom_box_in_box_two">
                        <strong>うたせ湯</strong>
                        <div class="switchArea">
                            <input id="utase_hot_water" name="utase_hot_water" type="checkbox" value="1">
                            <label for="utase_hot_water"><span></span></label>
                            <div id="swImg"></div>
                        </div>
                    </div>

                    <div class="bathroom_box_in_box_two">
                        <strong>ドライサウナ</strong>
                        <div class="switchArea">
                            <input id="dry_sauna" name="dry_sauna" type="checkbox" value="1">
                            <label for="dry_sauna"><span></span></label>
                            <div id="swImg"></div>
                        </div>
                    </div>

                    <div class="bathroom_box_in_box_two">
                        <strong>ミストサウナ</strong>
                        <div class="switchArea">
                            <input id="mist_sauna" name="mist_sauna" type="checkbox" value="1">
                            <label for="mist_sauna"><span></span></label>
                            <div id="swImg"></div>
                        </div>
                    </div>

                    <div class="bathroom_box_in_box_two">
                        <strong>スチームサウナ</strong>
                        <div class="switchArea">
                            <input id="steam_sauna" name="steam_sauna" type="checkbox" value="1">
                            <label for="steam_sauna"><span></span></label>
                            <div id="swImg"></div>
                        </div>
                    </div>

                    <div class="bathroom_box_in_box_two">
                        <strong>塩サウナ</strong>
                        <div class="switchArea">
                            <input id="salt_sauna" name="salt_sauna" type="checkbox" value="1">
                            <label for="salt_sauna"><span></span></label>
                            <div id="swImg"></div>
                        </div>
                    </div>

                    <div class="bathroom_box_in_box_two">
                        <strong>水風呂</strong>
                        <div class="switchArea">
                            <input id="water_bath" name="water_bath" type="checkbox" value="1">
                            <label for="water_bath"><span></span></label>
                            <div id="swImg"></div>
                        </div>
                    </div>

                    <div class="bathroom_box_in_box_two">
                        <strong>薬湯風呂</strong>
                        <div class="switchArea">
                            <input id="medicine_bath" name="medicine_bath" type="checkbox" value="1">
                            <label for="medicine_bath"><span></span></label>
                            <div id="swImg"></div>
                        </div>
                    </div>

                    <div class="bathroom_box_in_box_two">
                        <strong>電気風呂</strong>
                        <div class="switchArea">
                            <input id="electric_bath" name="electric_bath" type="checkbox" value="1">
                            <label for="electric_bath"><span></span></label>
                            <div id="swImg"></div>
                        </div>
                    </div>

                    <div class="bathroom_box_in_box_two">
                        <strong>浴室内TV</strong>
                        <div class="switchArea">
                            <input id="tv_in_the_bath" name="tv_in_the_bath" type="checkbox" value="1">
                            <label for="tv_in_the_bath"><span></span></label>
                            <div id="swImg"></div>
                        </div>
                    </div>

                    <div class="bathroom_box_in_box_two">
                        <strong>露天風呂</strong>
                        <div class="switchArea">
                            <input id="open_air_bath" name="open_air_bath" type="checkbox" value="1">
                            <label for="open_air_bath"><span></span></label>
                            <div id="swImg"></div>
                        </div>
                    </div>

                    <div class="bathroom_box_in_box_two">
                        <strong>浴室内休憩スペース</strong>
                        <div class="switchArea">
                            <input id="relax_space" name="relax_space" type="checkbox" value="1">
                            <label for="relax_space"><span></span></label>
                            <div id="swImg"></div>
                        </div>
                    </div>

                    <div class="bathroom_box_in_box_two">
                        <strong>岩盤浴</strong>
                        <div class="switchArea">
                            <input id="bedrock_bath" name="bedrock_bath" type="checkbox" value="1">
                            <label for="bedrock_bath"><span></span></label>
                            <div id="swImg"></div>
                        </div>
                    </div>

                    <div class="bathroom_box_in_box_two">
                        <strong>パウダールーム</strong>
                        <div class="switchArea">
                            <input id="powder_room" name="powder_room" type="checkbox" value="1">
                            <label for="powder_room"><span></span></label>
                            <div id="swImg"></div>
                        </div>
                    </div>

                    <div class="bathroom_box_in_box_two">
                        <strong>アカスリ</strong>
                        <div class="switchArea">
                            <input id="akasuri" name="akasuri" type="checkbox" value="1">
                            <label for="akasuri"><span></span></label>
                            <div id="swImg"></div>
                        </div>
                    </div>

                    <div class="bathroom_box_in_box_two">
                        <strong>家族風呂</strong>
                        <div class="switchArea">
                            <input id="family_bath" name="family_bath" type="checkbox" value="1">
                            <label for="family_bath"><span></span></label>
                            <div id="swImg"></div>
                        </div>
                    </div>

                    <div class="bathroom_box_in_box_two">
                        <strong>貸切風呂</strong>
                        <div class="switchArea">
                            <input id="private_bath" name="private_bath" type="checkbox" value="1">
                            <label for="private_bath"><span></span></label>
                            <div id="swImg"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- /.l-content -->
        <!-- 浴室内にある設備 -->


        <!-- その他、施設情報など -->
        <h3><span>その他(入浴エリア外の施設情報など)</span></h3>
        <div class="l-content">
            <div class="facility">

                <div class="facility_box">
                    <strong>休憩所(広間タイプ)</strong>
                    <div class="switchArea">
                        <input id="relax_space_wide" name="relax_space_wide" type="checkbox" value="1">
                        <label for="relax_space_wide"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>

                <div class="facility_box">
                    <strong>休憩所(個室タイプ)</strong>
                    <div class="switchArea">
                        <input id="relax_space_small" name="relax_space_small" type="checkbox" value="1">
                        <label for="relax_space_small"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>

                <div class="facility_box">
                    <strong>仮眠コーナー</strong>

                    <div class="switchArea">
                        <input id="sleeping_space" name="sleeping_space" type="checkbox" value="1">
                        <label for="sleeping_space"><span></span></label>
                        <div id="swImg"></div>
                    </div>

                </div>

                <div class="facility_box">
                    <strong>無料Wi-Fi</strong>

                    <div class="switchArea">
                        <input id="free_wifi" name="free_wifi" type="checkbox" value="1">
                        <label for="free_wifi"><span></span></label>
                        <div id="swImg"></div>
                    </div>

                </div>

                <div class="facility_box">
                    <strong>無料電源</strong>

                    <div class="switchArea">
                        <input id="electric_source" name="electric_source" type="checkbox" value="1">
                        <label for="electric_source"><span></span></label>
                        <div id="swImg"></div>
                    </div>

                </div>

                <div class="facility_box">
                    <strong>漫画閲覧スペース</strong>

                    <div class="switchArea">
                        <input id="manga_space" name="manga_space" type="checkbox" value="1">
                        <label for="manga_space"><span></span></label>
                        <div id="swImg"></div>
                    </div>

                </div>


                <div class="facility_box">
                    <strong>作業スペース</strong>

                    <div class="switchArea">
                        <input id="working_space" name="working_space" type="checkbox" value="1">
                        <label for="working_space"><span></span></label>
                        <div id="swImg"></div>
                    </div>

                </div>

                <div class="facility_box">
                    <strong>レストラン</strong>

                    <div class="switchArea">
                        <input id="food_space" name="food_space" type="checkbox" value="1">
                        <label for="food_space"><span></span></label>
                        <div id="swImg"></div>
                    </div>

                </div>

                <div class="facility_box">
                    <strong>ボディケアエステ</strong>

                    <div class="switchArea">
                        <input id="body_massage_service" name="body_massage_service" type="checkbox" value="1">
                        <label for="body_massage_service"><span></span></label>
                        <div id="swImg"></div>
                    </div>

                </div>

                <div class="facility_box">
                    <strong>マッサージチェア</strong>

                    <div class="switchArea">
                        <input id="massage_chair" name="massage_chair" type="checkbox" value="1">
                        <label for="massage_chair"><span></span></label>
                        <div id="swImg"></div>
                    </div>

                </div>

                <div class="facility_box">
                    <strong>売店</strong>

                    <div class="switchArea">
                        <input id="shopping_area" name="shopping_area" type="checkbox" value="1">
                        <label for="shopping_area"><span></span></label>
                        <div id="swImg"></div>
                    </div>

                </div>

                <div class="facility_box">
                    <strong>ゲームコーナー</strong>

                    <div class="switchArea">
                        <input id="game_corner" name="game_corner" type="checkbox" value="1">
                        <label for="game_corner"><span></span></label>
                        <div id="swImg"></div>
                    </div>

                </div>

                <div class="facility_box">
                    <strong>喫煙ルーム</strong>

                    <div class="switchArea">
                        <input id="smoking_area" name="smoking_area" type="checkbox" value="1">
                        <label for="smoking_area"><span></span></label>
                        <div id="swImg"></div>
                    </div>

                </div>

                <div class="facility_box">
                    <strong>美容室</strong>

                    <div class="switchArea">
                        <input id="beauty_salon" name="beauty_salon" type="checkbox" value="1">
                        <label for="beauty_salon"><span></span></label>
                        <div id="swImg"></div>
                    </div>

                </div>

                <div class="facility_box">
                    <strong>多目的トイレ</strong>

                    <div class="switchArea">
                        <input id="multipurpose_toilet" name="multipurpose_toilet" type="checkbox" value="1">
                        <label for="multipurpose_toilet"><span></span></label>
                        <div id="swImg"></div>
                    </div>

                </div>

                <div class="facility_box">
                    <strong>自動販売機</strong>

                    <div class="switchArea">
                        <input id="vending_machine" name="vending_machine" type="checkbox" value="1">
                        <label for="vending_machine"><span></span></label>
                        <div id="swImg"></div>
                    </div>

                </div>
                <div class="facility_box">
                    <strong>足湯</strong>

                    <div class="switchArea">
                        <input id="foot_spring" name="foot_spring" type="checkbox" value="1">
                        <label for="foot_spring"><span></span></label>
                        <div id="swImg"></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.l-content -->
        <!-- その他、施設情報など -->

        <!-- ルール -->
        <h3><span>ルール</span></h3>
        <div class="l-content">
            <div class="rule">
                <div class="rule_box">
                    <strong>タトゥーOK</strong>

                    <div class="switchArea">
                        <input id="allow_tattoo" name="allow_tattoo" type="checkbox" value="1">
                        <label for="allow_tattoo"><span></span></label>
                        <div id="swImg"></div>
                    </div>

                </div>
                <div class="rule_box">
                    <strong>保護者同伴による<br>小学生までの異性入浴</strong>

                    <div class="switchArea">
                        <input id="heterosexual_bathing" name="heterosexual_bathing" type="checkbox" value="1">
                        <label for="heterosexual_bathing"><span></span></label>
                        <div id="swImg"></div>
                    </div>

                </div>
                <div class="rule_box">
                    <strong>水着の着用義務</strong>

                    <div class="switchArea">
                        <input id="duty_swimsuit" name="duty_swimsuit" type="checkbox" value="1">
                        <label for="duty_swimsuit"><span></span></label>
                        <div id="swImg"></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.l-content -->
        <!-- ルール -->


        <!-- アメニティ(無料) -->
        <h3><span>無料アメニティ</span></h3>
        <div class="l-content">
            <div class="amenity">
                <div class="amenity_box">
                    <strong>シャンプー</strong>
                    <div class="switchArea">
                        <input id="free_shampoo" name="free_shampoo" type="checkbox" value="1">
                        <label for="free_shampoo"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>コンディショナー</strong>
                    <div class="switchArea">
                        <input id="free_conditioner" name="free_conditioner" type="checkbox" value="1">
                        <label for="free_conditioner"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>ボディーソープ</strong>
                    <div class="switchArea">
                        <input id="free_bodysoap" name="free_bodysoap" type="checkbox" value="1">
                        <label for="free_bodysoap"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>洗顔ソープ</strong>
                    <div class="switchArea">
                        <input id="free_facesoap" name="free_facesoap" type="checkbox" value="1">
                        <label for="free_facesoap"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>カミソリ</strong>
                    <div class="switchArea">
                        <input id="free_razor" name="free_razor" type="checkbox" value="1">
                        <label for="free_razor"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>シェーバー</strong>
                    <div class="switchArea">
                        <input id="free_shaver" name="free_shaver" type="checkbox" value="1">
                        <label for="free_shaver"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>シェービングクリーム</strong>
                    <div class="switchArea">
                        <input id="free_shaving_cream" name="free_shaving_cream" type="checkbox" value="1">
                        <label for="free_shaving_cream"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>歯ブラシ</strong>
                    <div class="switchArea">
                        <input id="free_toothbrush" name="free_toothbrush" type="checkbox" value="1">
                        <label for="free_toothbrush"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>バスタオル</strong>
                    <div class="switchArea">
                        <input id="free_bathtowel" name="free_bathtowel" type="checkbox" value="1">
                        <label for="free_bathtowel"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>ハンドタオル</strong>
                    <div class="switchArea">
                        <input id="free_handtowel" name="free_handtowel" type="checkbox" value="1">
                        <label for="free_handtowel"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>ドライヤー</strong>
                    <div class="switchArea">
                        <input id="free_dryer" name="free_dryer" type="checkbox" value="1">
                        <label for="free_dryer"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>サウナセット</strong>
                    <div class="switchArea">
                        <input id="free_sauna_set" name="free_sauna_set" type="checkbox" value="1">
                        <label for="free_sauna_set"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>化粧水</strong>
                    <div class="switchArea">
                        <input id="free_toner" name="free_toner" type="checkbox" value="1">
                        <label for="free_toner"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>乳液</strong>
                    <div class="switchArea">
                        <input id="free_milky_lotion" name="free_milky_lotion" type="checkbox" value="1">
                        <label for="free_milky_lotion"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>メイク落とし</strong>
                    <div class="switchArea">
                        <input id="free_makeup_remover" name="free_makeup_remover" type="checkbox" value="1">
                        <label for="free_makeup_remover"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>綿棒</strong>
                    <div class="switchArea">
                        <input id="free_cotton_swab" name="free_cotton_swab" type="checkbox" value="1">
                        <label for="free_cotton_swab"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>トニック</strong>
                    <div class="switchArea">
                        <input id="free_tonic" name="free_tonic" type="checkbox" value="1">
                        <label for="free_tonic"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>ローション</strong>
                    <div class="switchArea">
                        <input id="free_lotion" name="free_lotion" type="checkbox" value="1">
                        <label for="free_lotion"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>石鹸</strong>
                    <div class="switchArea">
                        <input id="free_nomal_soap" name="free_nomal_soap" type="checkbox" value="1">
                        <label for="free_nomal_soap"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.l-content -->
        <!-- アメニティ(無料) -->

        <!-- アメニティ(有料) -->
        <h3><span>有料アメニティ</span></h3>
        <div class="l-content">
            <div class="amenity">
                <div class="amenity_box">
                    <strong>シャンプー</strong>
                    <div class="switchArea">
                        <input id="paid_shampoo" name="paid_shampoo" type="checkbox" value="1">
                        <label for="paid_shampoo"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>コンディショナー</strong>
                    <div class="switchArea">
                        <input id="paid_conditioner" name="paid_conditioner" type="checkbox" value="1">
                        <label for="paid_conditioner"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>ボディーソープ</strong>
                    <div class="switchArea">
                        <input id="paid_bodysoap" name="paid_bodysoap" type="checkbox" value="1">
                        <label for="paid_bodysoap"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>洗顔ソープ</strong>
                    <div class="switchArea">
                        <input id="paid_facesoap" name="paid_facesoap" type="checkbox" value="1">
                        <label for="paid_facesoap"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>カミソリ</strong>
                    <div class="switchArea">
                        <input id="paid_razor" name="paid_razor" type="checkbox" value="1">
                        <label for="paid_razor"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>シェーバー</strong>
                    <div class="switchArea">
                        <input id="paid_shaver" name="paid_shaver" type="checkbox" value="1">
                        <label for="paid_shaver"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>シェービングクリーム</strong>
                    <div class="switchArea">
                        <input id="paid_shaving_cream" name="paid_shaving_cream" type="checkbox" value="1">
                        <label for="paid_shaving_cream"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>歯ブラシ</strong>
                    <div class="switchArea">
                        <input id="paid_toothbrush" name="paid_toothbrush" type="checkbox" value="1">
                        <label for="paid_toothbrush"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>バスタオル</strong>
                    <div class="switchArea">
                        <input id="paid_bathtowel" name="paid_bathtowel" type="checkbox" value="1">
                        <label for="paid_bathtowel"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>ハンドタオル</strong>
                    <div class="switchArea">
                        <input id="paid_handtowel" name="paid_handtowel" type="checkbox" value="1">
                        <label for="paid_handtowel"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>ドライヤー</strong>
                    <div class="switchArea">
                        <input id="paid_dryer" name="paid_dryer" type="checkbox" value="1">
                        <label for="paid_dryer"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>サウナセット</strong>
                    <div class="switchArea">
                        <input id="paid_sauna_set" name="paid_sauna_set" type="checkbox" value="1">
                        <label for="paid_sauna_set"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>化粧水</strong>
                    <div class="switchArea">
                        <input id="paid_toner" name="paid_toner" type="checkbox" value="1">
                        <label for="paid_toner"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>乳液</strong>
                    <div class="switchArea">
                        <input id="paid_milky_lotion" name="paid_milky_lotion" type="checkbox" value="1">
                        <label for="paid_milky_lotion"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>メイク落とし</strong>
                    <div class="switchArea">
                        <input id="paid_makeup_remover" name="paid_makeup_remover" type="checkbox" value="1">
                        <label for="paid_makeup_remover"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>綿棒</strong>
                    <div class="switchArea">
                        <input id="paid_cotton_swab" name="paid_cotton_swab" type="checkbox" value="1">
                        <label for="paid_cotton_swab"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>トニック</strong>
                    <div class="switchArea">
                        <input id="paid_tonic" name="paid_tonic" type="checkbox" value="1">
                        <label for="paid_tonic"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>ローション</strong>
                    <div class="switchArea">
                        <input id="paid_lotion" name="paid_lotion" type="checkbox" value="1">
                        <label for="paid_lotion"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
                <div div class="amenity_box">
                    <strong>石鹸</strong>
                    <div class="switchArea">
                        <input id="paid_nomal_soap" name="paid_nomal_soap" type="checkbox" value="1">
                        <label for="paid_nomal_soap"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.l-content -->
        <!-- アメニティ(有料) -->


        <!-- 施設補足 -->
        <h3><span>施設補足</span></h3>
        <div class="l-content">
            <div class="facility_supplement">
                <table>
                    <tbody>
                        <tr>
                            <th class="basic_table_title">施設補足</th>
                            <td class="facility_supplement_box_wrap">
                                <p>※施設内のローカルルールや特徴のある設備などがあれば入力してください。</p>

                                <div class="facility_supplement_box">
                                    <textarea id="supplement" name="supplement"
                                        placeholder="例：施設内に自販機無し。施設入り口に自販機有りなど。その他、浴室には手首のリストバンドが必須など。" cols="100"
                                        rows="12"></textarea>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <h3><span>休業・短縮の営業情報</span></h3>
        <div class="l-content">
            <div class="closed_info">
                <table>
                    <tbody>
                        <tr>
                            <th class="basic_table_title">休業・短縮営業<br>情報テキスト</th>
                            <td class="closed_info_box_wrap">
                                <p>※休業・短縮の営業情報を入力してください。</p>

                                <div class="closed_info_box">
                                    <textarea id="closed_info" name="closed_info"
                                        placeholder="例：夏季(7月始め〜8月末まで)は営業時間が2時間短縮になる場合あり。" cols="100" rows="12"></textarea>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- /.l-content -->
        <!-- 施設補足 -->
        <!-- ボタン -->
        {{-- <div class="to_img_register_and_close">
            <a class="to_img_register" href="{{ route('new_img') }}"><span>画像登録に進む</span></a>
            <button class="to_img_register" onclick="location.href='{{ route('new_sento.store.img') }}'">画像登録に進む</button>
            <input class="submit" type="submit" onClick="var cnf=document.createElement('input');cnf.type='hidden';cnf.name='confirm';cnf.value='true';document.forms[0].appendChild(cnf);document.forms[0].SMPFORM.value='XXXXXXXXXXXXXXXX';return true;" name="SMPFORM_BACK" value="前ページへ戻る">
        </div> --}}
        <!-- ボタン -->

        <h3><span>画像登録</span></h3>
        <!-- .l-content -->
        <div class="l-content">
            <div class="picture_register">
                <p class="u-mb2em">画像は追加と差し替えのみ行うことができます。<br>特定画像の削除ご希望の方はお手数ですが、<a href="/contact"
                        target="_blank">お問い合わせフォーム</a>よりご連絡ください。</p>

                <p class="form_helpText">※画像最小サイズ：800 × 600</p>

                <div class="formImages">
                    <div class="formImageItem" data-index="0" data-current="">
                        <h4 class="formImageItem_headline">メイン画像</h4>


                        <div class="formImageItem_preview">
                            <img src="" alt="" />
                        </div>


                        <input accept="image/jpeg,image/png" class="fileInput" name="main_img" type="file">
                        <div class="formImageItem_button">
                            {{-- <div class="c-button c-button--black c-button--select">
                                <a class="fileSelect"><span>ファイルを選択</span></a>
                            </div> --}}

                            <div class="delete">
                                <a class="js-fileDelete"><span>削除</span></a>
                            </div>

                            <div class="formImageItem_caption">
                                <p>メイン画像のキャプション</p>
                                <div class="c-formText">
                                    <input placeholder="例：メインエントランス" name="main_img_caption" type="text" value="">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="formImageItem" data-index="1" data-current="">
                        <h4 class="formImageItem_headline">1</h4>


                        <div class="formImageItem_preview">
                            <img src="" alt="" />
                        </div>


                        <input accept="image/jpeg,image/png" class="fileInput" name="other_img1" type="file">
                        <div class="formImageItem_button">
                            {{-- <div class="c-button c-button--black c-button--select">
                                <a class="fileSelect"><span>ファイルを選択</span></a>
                            </div> --}}

                            <div class="delete">
                                <a class="js-fileDelete"><span>削除</span></a>
                            </div>

                            <div class="formImageItem_caption">
                                <p>キャプション</p>
                                <div class="c-formText">
                                    <input placeholder="例：大浴場" name="other_img1_caption" type="text" value="">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="formImageItem" data-index="2" data-current="">
                        <h4 class="formImageItem_headline">2</h4>


                        <div class="formImageItem_preview">
                            <img src="" alt="" />
                        </div>


                        <input accept="image/jpeg,image/png" class="fileInput" name="other_img2" type="file">
                        <div class="formImageItem_button">
                            {{-- <div class="c-button c-button--black c-button--select">
                                <a class="fileSelect"><span>ファイルを選択</span></a>
                            </div> --}}

                            <div class="delete">
                                <a class="js-fileDelete"><span>削除</span></a>
                            </div>

                            <div class="formImageItem_caption">
                                <p>キャプション</p>
                                <div class="c-formText">
                                    <input placeholder="例：内風呂" name="other_img2_caption" type="text" value="">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="formImageItem" data-index="3" data-current="">
                        <h4 class="formImageItem_headline">3</h4>


                        <div class="formImageItem_preview">
                            <img src="" alt="" />
                        </div>


                        <input accept="image/jpeg,image/png" class="fileInput" name="other_img3" type="file">
                        <div class="formImageItem_button">
                            {{-- <div class="c-button c-button--black c-button--select">
                                <a class="fileSelect"><span>ファイルを選択</span></a>
                            </div> --}}

                            <div class="delete">
                                <a class="js-fileDelete"><span>削除</span></a>
                            </div>

                            <div class="formImageItem_caption">
                                <p>キャプション</p>
                                <div class="c-formText">
                                    <input placeholder="例：洗面台" name="other_img3_caption" type="text" value="">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="formImageItem" data-index="4" data-current="">
                        <h4 class="formImageItem_headline">4</h4>


                        <div class="formImageItem_preview">
                            <img src="" alt="" />
                        </div>


                        <input accept="image/jpeg,image/png" class="fileInput" name="other_img4" type="file">
                        <div class="formImageItem_button">
                            {{-- <div class="c-button c-button--black c-button--select">
                                <a class="fileSelect"><span>ファイルを選択</span></a>
                            </div> --}}

                            <div class="delete">
                                <a class="js-fileDelete"><span>削除</span></a>
                            </div>

                            <div class="formImageItem_caption">
                                <p>キャプション</p>
                                <div class="c-formText">
                                    <input placeholder="例：洗い場" name="other_img4_caption" type="text" value="">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="formImageItem" data-index="5" data-current="">
                        <h4 class="formImageItem_headline">5</h4>


                        <div class="formImageItem_preview">
                            <img src="" alt="" />
                        </div>


                        <input accept="image/jpeg,image/png" class="fileInput" name="other_img5" type="file">
                        <div class="formImageItem_button">
                            {{-- <div class="c-button c-button--black c-button--select">
                                <a class="fileSelect"><span>ファイルを選択</span></a>
                            </div> --}}

                            <div class="delete">
                                <a class="js-fileDelete"><span>削除</span></a>
                            </div>

                            <div class="formImageItem_caption">
                                <p>キャプション</p>
                                <div class="c-formText">
                                    <input placeholder="例：露天風呂" name="other_img5_caption" type="text" value="">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="formImageItem" data-index="6" data-current="">
                        <h4 class="formImageItem_headline">6</h4>


                        <div class="formImageItem_preview">
                            <img src="" alt="" />
                        </div>


                        <input accept="image/jpeg,image/png" class="fileInput" name="other_img6" type="file">
                        <div class="formImageItem_button">
                            {{-- <div class="c-button c-button--black c-button--select">
                                <a class="fileSelect"><span>ファイルを選択</span></a>
                            </div> --}}

                            <div class="delete">
                                <a class="js-fileDelete"><span>削除</span></a>
                            </div>

                            <div class="formImageItem_caption">
                                <p>キャプション</p>
                                <div class="c-formText">
                                    <input placeholder="例：サウナ" name="other_img6_caption" type="text" value="">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.l-content -->

        <h3><span>閉店申請</span></h3>
        <div class="l-content">
            <div class="store_closed_signal_wrap">
                <div class="store_closed_signal_box">
                    <strong>この施設は営業していますか？</strong>
                    <div class="close_switchArea">
                        <input id="closed_signal" name="closed_signal" type="checkbox" value="1">
                        <label for="closed_signal"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="to_img_register_and_close">
            {{-- <a class="to_img_register" href="{{ route('done') }}"><span>登録を完了する</span></a> --}}
            <input class="to_img_register" type="submit" value="登録する"/>
        </div>



    </form>


@endsection
