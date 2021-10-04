<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セントイキタイ</title>
    <link rel="stylesheet" href="{{ url('css/destyle.css') }}">
    <link rel="stylesheet" href="{{ url('css/login.css') }}">
</head>

<body>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="login">
        <div class="login_content">
            <h1 class="login_logo"><a href="/"><img src="{{ url('img/セントイキタイロゴ.png') }}" width=180 height=140 alt="サウナイキタイ ログイン"></a></h1>

            <div class="tab" data-current="login">
                <nav class="tab_action">
                    <ul class="tab_buttons">
                        {{-- <li class="tab_button_login"><a href="https://sauna-ikitai.com" class="is-active js-tabTrigger"
                                data-target="login">ログイン</a></li> --}}
                        <li class="tab_button_top"><a href="{{ route('top') }}" class="js-tabTrigger"
                                data-target="register">トップに戻る</a></li>
                    </ul>
                </nav>

                <!-- .c-tab_contents -->
                <div class="tab_contents">
                    <div class="tab_content" data-tab="login">
                        {{-- <div class="login_type_sns">
                            <h2 class="headline"><span class="headline_string">SNSアカウントでログイン</span></h2>
                            <div class="loginSns">
                                <div class="button_line">
                                    <a href="/auth/line"><span>LINE</span></a>
                                </div>
                                <div class="loginSns_sub">
                                    <div class="button_twitter">
                                        <a href="/auth/twitter"><span>twitter</span></a>
                                    </div>
                                    <div class="button_facebook">
                                        <a href="/auth/facebook"><span>facebook</span></a>
                                    </div>
                                </div>
                            </div>
                            <p class="loginSns_description">
                                SNSアカウントが連携していない状態で、各外部サービスでログインを行うと新規登録扱いになります。アカウントを新規作成する場合は、<a
                                    href="/terms/">利用規約</a>に同意するものとします。</p>
                        </div> --}}

                        <div class="login_type_mail">
                            <h2 class="headline"><span class="headline_string">登録メールアドレスでログイン</span></h2>
                            <!-- uq-loginForm -->
                            <div id="email" class="loginForm">
                                <form method="POST" action="{{ route('login') }}" accept-charset="UTF-8"
                                    class="form">
                                    @csrf

                                    <dl class="loginForm_set">
                                        {{-- <dt class="loginForm_key">メールアドレス</dt> --}}
                                        <dd class="loginForm_value">
                                            {{-- <div class="formText">
                                                <input placeholder="例：mail@saunaikitai.com" name="login_email"
                                                    type="email" value="">
                                            </div> --}}
                                            <div class="formText">
                                                <x-label for="email" class="loginForm_key" :value="__('Email')" />

                                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                            </div>
                                        </dd>
                                        {{-- <dt class="loginForm_key">パスワード</dt> --}}
                                        <dd class="loginForm_value">
                                            {{-- <div class="formText">
                                                <input name="login_password" type="password" value="">
                                            </div> --}}
                                            <div class="formText">
                                                <x-label for="password" class="loginForm_key" :value="__('Password')" />

                                                <x-input id="password" class="block mt-1 w-full"
                                                                type="password"
                                                                name="password"
                                                                required autocomplete="current-password" />
                                            </div>
                                        </dd>
                                        <dd class="loginForm_value">
                                            <div class="block mt-4">
                                                <label for="remember_me" class="inline-flex items-center">
                                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                                </label>
                                            </div>
                                        </dd>
                                    </dl>

                                    <div class="form_button">
                                        {{-- <div class="button_submit">
                                            <button type="submit" name="button"><span>ログインする</span></button>
                                        </div> --}}
                                        <x-button class="button_submit">
                                            {{ __('Log in') }}
                                        </x-button>

                                    </div>
                                    <div class="loginForm_reset">
                                        @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                        </a>
                                        @endif
                                    </div>
                                </form>
                            </div>
                            <!-- uq-loginForm -->
                        </div>

                        <div class="login_type">
                            <div class="button_blackBorder">
                                <a class="js-tabTrigger" href="{{ route('registry') }}" data-target="register"
                                    data-scroll="top"><span>アカウント新規登録</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
