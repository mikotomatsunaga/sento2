@extends('layouts.base')
@section('content')

    <link rel="stylesheet" href="{{ url('css/done.css') }}">

    <!-- 施設登録の説明文 -->

    <div class="l-content">
        <div class="thanksMessage_wrap">
            <h1><span>施設の登録が完了しました</span></h1>
            <div class="c-form">
                <p class="c-form_thanksMessage">
                    施設登録に協力いただきましてありがとうございます。<br>
                    登録した施設は公開後も編集することができます。<br>
                    施設のセッティングが変わった時は情報の更新をしていただけると助かります。
                </p>

                <div class="c-form_button">
                    <div class="c-button">
                        <a href="https://sauna-ikitai.com/saunas/11941"><span>登録したページをみる</span></a>
                    </div>
                    <div class="c-button">
                        <a href="https://sauna-ikitai.com/saunas/new"><span>続けて登録する</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 施設情報の説明文 -->

@endsection
