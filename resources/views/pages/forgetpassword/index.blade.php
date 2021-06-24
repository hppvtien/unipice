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
                <h3 class="mb-0"> Quên mật khẩu</h3>
                <p class="my-2">Nhập email tài khoản của bạn để lấy lại mật khẩu.</p>
            </div>
            <form action="{{ route('post.forgetpassword') }}" method="POST"  id="formforget" class="uk-child-width-1-1 uk-grid-small" uk-grid>              
                @csrf
                <div>
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Email</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="icon-feather-mail"></i>
                            </span>
                            <input id="emails" name="emails" class="uk-input" type="email" placeholder="name@example.com">  
                        </div>
                        @if($errors->first('emails'))
                        <span class="text-danger">{{ $errors->first('emails') }}</span>
                        @endif
                    </div>
                </div>
                <div>
                    <div class="mt-4 uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-expand@s">
                            <p> Tôi chưa có tài khoản <a href="/">Đăng ký</a></p>
                        </div>
                        <div class="uk-width-auto@s">
                            <button type="submit" id="jo-submit" class="btn btn-radius mt10 ">Nộp hồ sơ</button>
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