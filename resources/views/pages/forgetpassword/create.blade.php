@extends('pages.layouts.app_home')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/frontend_dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@stop
@section('contents')
<div uk-height-viewport="expand: true" class="uk-flex uk-flex-middle">
    <div class="uk-width-1-3@m uk-width-1-2@s m-auto">
        <div class="uk-card-default p-5 rounded">
            <div class="mb-4 uk-text-center">
                <h3 class="mb-0"> Thay đổi mật khẩu</h3>
            </div>
            <form action="{{ route('post.resetcodepassword',$reset_code) }}" method="POST" class="uk-child-width-1-1 uk-grid-small" uk-grid>
                @csrf
                <div>
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Email đăng ký</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="icon-feather-mail"></i>
                            </span>
                            <input disabled  class="uk-input" type="email" value="{{ old('user_re', $user_re->email ?? '') }}">
                            <input name="re_email" class="uk-input" type="hidden" value="{{ old('user_re', $user_re->email ?? '') }}">
                        </div>

                    </div>
                </div>
                <div>
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Tên đăng ký</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="icon-feather-user"></i>
                            </span>
                            <input disabled name="re_name" id="re_name" class="uk-input" type="text" value="{{ old('user_re', $user_re->name ?? '') }}">
                        </div>

                    </div>
                </div>
                <div class="uk-child-width-1-1">
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Nhập mật khẩu mới</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="icon-feather-lock"></i>
                            </span>
                            <input name="re_password" id="re_password" class="uk-input" type="password" placeholder="********">
                        </div>
                        @if($errors->first('re_password'))
                        <span class="text-danger">{{ $errors->first('re_password') }}</span>
                        @endif
                    </div>
                </div>

                <div>
                    <div class="mt-4 uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-expand@s">
                            <p> Dont have account <a href="#">Sign up</a></p>
                        </div>
                        <div class="uk-width-auto@s">
                            <input type="submit" class="btn btn-default" value="Đổi mật khẩu"></input>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@stop

@section('scripts')
<script>
    (function(window, document, undefined) {
        'use strict';
        if (!('localStorage' in window)) return;
        var nightMode = localStorage.getItem('gmtNightMode');
        if (nightMode) {
            document.documentElement.className += ' night-mode';
        }
    })(window, document);


    (function(window, document, undefined) {

        'use strict';

        // Feature test
        if (!('localStorage' in window)) return;

        // Get our newly insert toggle
        var nightMode = document.querySelector('#night-mode');
        if (!nightMode) return;

        // When clicked, toggle night mode on or off
        nightMode.addEventListener('click', function(event) {
            event.preventDefault();
            document.documentElement.classList.toggle('night-mode');
            if (document.documentElement.classList.contains('night-mode')) {
                localStorage.setItem('gmtNightMode', true);
                return;
            }
            localStorage.removeItem('gmtNightMode');
        }, false);

    })(window, document);
</script>
<script src="{{ asset('js/frontend_dashboard.js') }}"></script>
<script src="{{ asset('js/home.js') }}"></script>
@stop