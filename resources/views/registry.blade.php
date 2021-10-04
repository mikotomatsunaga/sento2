<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セントイキタイ</title>
    <link rel="stylesheet" href="{{ url('css/destyle.css') }}">
    <link rel="stylesheet" href="{{ url('css/registry.css') }}">
</head>

<body>
    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="register">
        <div class="register_content">
            <h1 class="register_logo"><a href="/"><img src="{{ url('img/セントイキタイロゴ.png') }}" width=180 height=140 alt="サウナイキタイ ログイン"></a></h1>

            <div class="tab" data-current="register">


                <!-- .c-tab_contents -->
                <div class="tab_contents">
                    <div class="tab_content" data-tab="login">

                        <div class="register_type_mail">
                            {{-- <h2 class="headline"><span class="headline_string">メールアドレスで登録</span></h2> --}}
                            <!-- uq-loginForm -->
                            <div id="email" class="registerForm">
                                <form method="POST" action="{{ route('register') }}" accept-charset="UTF-8"
                                    class="form">
                                    @csrf

                                    <dl class="registerForm_set">
                                        {{-- <dt class="registerForm_key">ユーザーネーム</dt> --}}
                                        <dd class="registerForm_value">
                                            <div class="formText">
                                                <x-label for="name" :value="__('Name')" />

                                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                            </div>
                                        </dd>
                                        {{-- <dt class="registerForm_key">メールアドレス</dt> --}}
                                        <dd class="registerForm_value">
                                            {{-- <div class="formText">
                                                <input placeholder="例：mail@sentoikitai.com" name="register_email"
                                                    type="email" value="">
                                            </div> --}}
                                            <div class="formText">
                                                <x-label for="email" :value="__('Email')" />

                                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                            </div>
                                        </dd>
                                        {{-- <dt class="registerForm_key">パスワード</dt> --}}
                                        <dd class="registerForm_value">
                                            {{-- <div class="formText">
                                                <input name="register_password" type="password" value="">
                                            </div> --}}
                                            <div class="formText">
                                                <x-label for="password" :value="__('Password')" />

                                                <x-input id="password" class="block mt-1 w-full"
                                                                type="password"
                                                                name="password"
                                                                required autocomplete="new-password" />
                                            </div>
                                        </dd>
                                        {{-- <dt class="registerForm_key">パスワード(確認)</dt> --}}
                                        <dd class="registerForm_value">
                                            {{-- <div class="formText">
                                                <input name="register_password" type="password" value="">
                                            </div> --}}
                                            <div class="formText">
                                                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                                <x-input id="password_confirmation" class="block mt-1 w-full"
                                                                type="password"
                                                                name="password_confirmation" required />
                                            </div>
                                        </dd>
                                        <dd class="registerForm_value">
                                            <div class="flex items-center justify-end mt-4">
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                                    {{ __('Already registered?') }}
                                                </a>

                                                <div class="login_type">
                                                <x-button class="buck_button">
                                                    {{ __('Register') }}
                                                </x-button>
                                                </div>
                                            </div>
                                        </dd>
                                    </dl>

                                </form>
                            </div>
                            <!-- uq-loginForm -->
                        </div>

                        {{-- <div class="login_type">
                            <div class="button_blackBorder">
                                <a class="js-tabTrigger" href="" data-target="register"
                                    data-scroll="top"><span>アカウント新規登録</span></a>
                            </div>
                        </div>
                        <div class="login_type">
                            <div class="buck_button">
                                <a class="js-tabTrigger" href="{{ route('top') }}" data-target="register"
                                    data-scroll="top"><span>トップに戻る</span></a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
