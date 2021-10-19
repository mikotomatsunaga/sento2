@extends('layouts.base_two')
@section('content')

<link rel="stylesheet" href="{{ url('css/mypage_edit.css') }}">

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

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

    <div class="l-page" >
        <div class="l-containers">
            <form method="POST" action="{{ route('sento_users_store') }}" accept-charset="UTF-8" class="c-form"
                enctype="multipart/form-data">
                @csrf
                <div class="l-content">
                    <div class="mypageForm">
                        <div class="mypageForm_contents">
                            <div style="text-align: right;">
                                <a class="backpage" href="{{ route('sento_users') }}">マイページに戻る</a>
                            </div>
                            <div class="mypageForm_image">
                                <div class="formImageItem" data-current="">
                                    {{-- <div class="formImageItem_preview">
                                        <img src="{{ url('img/ebizo.jpg') }}"
                                            width="90" height="90" alt="">
                                    </div> --}}
                                    {{-- <div class="modal_form_action_img">
                                        <input accept="image/jpeg,image/png" class="fileInput" name="image" type="file" id="myfile"><br>
                                    </div> --}}
                                    <div class="formImageItem_preview">
                                        <img src="{{ url('img/ebizo.jpg') }}" id="img1" width="110" height="110" alt=""/>
                                        <input type="file" name="file" id="myfile"><br>
                                    </div>

                                    <div class="formImageItem_button">
                                        <div class="c-button">
                                            <a class="fileSelect"><span>アイコン変更</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mypageForm_content">
                                <div class="mypageHeader_body">
                                    <table class="formTable">
                                        <tbody>
                                            <tr colspan="2">
                                                <th class="formTable_th">セントネーム<span class="open">公開</span></th>
                                                <td class="formTable_td">
                                                    <div class="formText_user">
                                                        <input placeholder="市川海老蔵" maxlength="20" name="sento_name"
                                                            type="text" value="{{ old('sento_name') }}">
                                                    </div>
                                                    @error('sento_name')
                                                    <div class="error">{{ $message }}</div>
                                                    @enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="formTable_th">性別<span class="close">非公開</span>
                                                </th>
                                                <td class="formTable_td">
                                                    <div class="formRadio_sex">
                                                        <input class="js-addFormItem" id="gender_male" name="gender"
                                                            type="radio" value="male">
                                                        <label for="gender_male" class="js-addFormItem">男性</label>
                                                    </div>
                                                    <div class="formRadio_sex">
                                                        <input class="js-addFormItem" id="gender_famale" name="gender"
                                                            type="radio" value="female">
                                                        <label for="gender_famale" class="js-addFormItem">女性</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="formTable_th">生年月日<span class="close">非公開</span>
                                                </th>
                                                <td class="formTable_td">
                                                    <div class="formSelect">
                                                        <select name="birth_year">
                                                            <option value="" selected="selected"></option>
                                                            <option value="1921">1921</option>
                                                            <option value="1922">1922</option>
                                                            <option value="1923">1923</option>
                                                            <option value="1924">1924</option>
                                                            <option value="1925">1925</option>
                                                            <option value="1926">1926</option>
                                                            <option value="1927">1927</option>
                                                            <option value="1928">1928</option>
                                                            <option value="1929">1929</option>
                                                            <option value="1930">1930</option>
                                                            <option value="1931">1931</option>
                                                            <option value="1932">1932</option>
                                                            <option value="1933">1933</option>
                                                            <option value="1934">1934</option>
                                                            <option value="1935">1935</option>
                                                            <option value="1936">1936</option>
                                                            <option value="1937">1937</option>
                                                            <option value="1938">1938</option>
                                                            <option value="1939">1939</option>
                                                            <option value="1940">1940</option>
                                                            <option value="1941">1941</option>
                                                            <option value="1942">1942</option>
                                                            <option value="1943">1943</option>
                                                            <option value="1944">1944</option>
                                                            <option value="1945">1945</option>
                                                            <option value="1946">1946</option>
                                                            <option value="1947">1947</option>
                                                            <option value="1948">1948</option>
                                                            <option value="1949">1949</option>
                                                            <option value="1950">1950</option>
                                                            <option value="1951">1951</option>
                                                            <option value="1952">1952</option>
                                                            <option value="1953">1953</option>
                                                            <option value="1954">1954</option>
                                                            <option value="1955">1955</option>
                                                            <option value="1956">1956</option>
                                                            <option value="1957">1957</option>
                                                            <option value="1958">1958</option>
                                                            <option value="1959">1959</option>
                                                            <option value="1960">1960</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1999">1999</option>
                                                            <option value="2000">2000</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2021">2021</option>
                                                        </select>
                                                    </div>
                                                    年

                                                    <div class="formSelect">
                                                        <select class="formSelect_wide" name="birth_month">
                                                            <option value="" selected="selected"></option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                    </div>
                                                    月

                                                    <div class="formSelect">
                                                        <select name="birth_day">
                                                            <option value="" selected="selected"></option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                        </select>
                                                    </div>
                                                    日
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="formTable_th">セント歴<span class="open">公開</span>
                                                </th>
                                                <td class="formTable_td">
                                                    <div class="formText_history">
                                                        <input placeholder="例：1" name="carrier_year" type="number" value="">
                                                    </div>
                                                    年　
                                                    <div class="formText_history">
                                                        <input placeholder="例：3" name="carrier_month" type="number"
                                                            value="">
                                                    </div>
                                                    ヶ月
                                                    <p class="form_helpText"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="formTable_th">ホームセント<span class="open">公開</span>
                                                </th>
                                                <td colspan="2" class="formTable_td">
                                                    <div class="formText_home_sento">
                                                        <input placeholder="博多の湯" maxlength="30" name="home_sento"
                                                            type="text" value="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="formTable_th">行きたいセント<span class="open">公開</span>
                                                </th>
                                                <td colspan="2" class="formTable_td">
                                                    <div class="formText_went_to">
                                                        <input placeholder="博多の湯" maxlength="30" name="went_to_go_sento"
                                                            type="text" value="">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="formTable_th">意気込み<span class="open">公開</span>
                                                </th>
                                                <td class="formTable_td">
                                                    <div class="formTextarea">
                                                        <textarea placeholder="例：はじめまして。セント歴は２年です。よろしくお願いします。" name="profile" cols="65"
                                                            rows="10"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            {{-- <tr>
                                                <th class="formTable_th">メールアドレス<span
                                                        class="c-formTable_thLabel c-formTable_thLabel--gray">非公開</span>
                                                </th>
                                                <td class="formTable_td">
                                                    <p class="home u-mb20">originalganku@gmail.com</p>
                                                    <p>メールアドレスの変更は<a href="https://sauna-ikitai.com/email/new">こちら</a>
                                                    </p>
                                                </td>
                                            </tr> --}}

                                            <!-- Twitterで登録した人のみに表示 -->
                                            <!-- Twitterで登録した人のみに表示 -->

                                            {{-- <tr>
                                                <th class="formTable_th">ホームページ<span
                                                        class="c-formTable_thLabel c-formTable_thLabel--blue">公開</span>
                                                </th>
                                                <td colspan="2" class="c-formTable_td">
                                                    <div class="c-formText">
                                                        <input placeholder="https://blog.sauna-ikitai.com" name="web_url"
                                                            type="text" value="">
                                                    </div>
                                                </td>
                                            </tr> --}}
                                            {{-- <tr>
                                                <th class="formTable_th">お気に入られ</th>
                                                <td class="formTable_td">
                                                    <div class="c-formRadio">
                                                        <input class="js-addFormItem" id="is_favorite_true"
                                                            checked="checked" name="not_allow_fav" type="radio" value="0">
                                                        <label for="is_favorite_true" class="js-addFormItem">許可する</label>
                                                    </div>
                                                    <div class="c-formRadio">
                                                        <input class="js-addFormItem" id="is_twitter_private_true"
                                                            name="is_twitter_private" type="radio" value="true">
                                                        <input class="js-addFormItem" id="is_favorite_false"
                                                            name="not_allow_fav" type="radio" value="1">
                                                        <label for="is_favorite_false" class="js-addFormItem">許可しない</label>
                                                    </div>
                                                    <p class="form_helpText">
                                                        ※「許可しない」に更新すると現在のお気に入られがすべて解除されます</p>
                                                </td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="c-form_button">
                                <div class="c-button-submit">

                                    <input type="submit" value="登録する"/>
                                </div>
                            </div>

                            {{-- <div class="c-form_button">
                                <div class="c-button-submit">
                                    <a href="https://sauna-ikitai.com/saunners/me/resign"><span>退会はこちら</span></a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
