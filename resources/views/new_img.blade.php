@extends('layouts.base')
@section('content')
<link rel="stylesheet" href="{{ url('css/new_img.css') }}">

    <!-- 施設登録の説明文 -->

    <div class="l-content">
        <div class="l-content-wrap">
            <h1><span>施設画像を登録</span></h1>
            <p>
                アップロードする写真はご自身で撮影した写真か、使用許可をいただいた写真のみでお願いします。<br>
                不適切な画像をアップロードした場合、運営判断で削除する場合がございます。
            </p>
        </div>
    </div>

    <div class="l-content menu">
        <ul class="c-formSteps">
            <li class="c-formSteps_step"><span class="c-formSteps_number">01</span>施設情報入力</li>
            <li class="c-formSteps_step_active"><span class="c-formSteps_number">02</span>施設画像登録</li>
            <li class="c-formSteps_step"><span class="c-formSteps_number">03</span>登録完了</li>
        </ul>
    </div>

    <!-- 施設情報の説明文 -->

    <form method="POST" action="{{ route('new_sento.store.img') }}" accept-charset="UTF-8"
        class="c-form js-saunaRegisterForm" enctype="multipart/form-data">
        @csrf

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

        <div class="to_img_register_and_close">
            <a class="to_img_register" href="{{ route('done') }}"><span>登録を完了する</span></a>
        </div>


    </form>

    @endsection
