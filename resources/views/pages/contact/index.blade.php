@extends('pages.layouts.app_home')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/frontend_dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('css/course.css') }}">
@stop
@section('contents')
{{-- @include('pages.course.include._inc_breadcrumb') --}}
<div class="page-content">

    <div class="page-content-inner">


        <!-- Intro banner container  -->
        <h1 class="mb-0">Liên hệ</h1>
        <p class="mt-2">Gửi thông tin liên hệ cho chúng tôi</p>
        <div class="uk-child-width-1-2@m uk-flex-middle" uk-grid>
            <div>
            <form class="form-horizontal" id="jobs_submit" autocomplete="off" method="POST" action="">
             @csrf
                    <div class="uk-width-1-1@s uk-first-column">
                        <label class="uk-form-label">Name<span class="text-danger">(*)</span></label>
                        <input class="uk-input" type="text" name="name" placeholder="Nhập họ tên">
                        @if($errors->first('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="uk-width-1-1@s">
                        <label class="uk-form-label">Email</label>
                        <input class="uk-input" type="email" name="email" placeholder="Nhập email">
                        @if($errors->first('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="uk-width-1-1@s">
                        <label class="uk-form-label">Số điện thoại<span class="text-danger">(*)</span></label>
                        <input class="uk-input" type="number" name="phone" placeholder="Nhập số điện thoại">
                        @if($errors->first('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="uk-width-1-1-1@s uk-grid-margin uk-first-column">
                        <label class="uk-form-label">Nội dung<span class="text-danger">(*)</span></label>
                        <textarea class="uk-textarea" name="content" placeholder="Nhập nội dung..." style=" height:160px"></textarea>
                        @if($errors->first('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="uk-grid-margin uk-first-column">
                    <button class="btn btn-info"><i class="la la-save"></i> Save</button>
                    </div>
                </form>

            </div>
            <div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.8568684280995!2d-122.46879874955597!3d37.76995417966093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085874252dbf581%3A0xc63d8069e9eed41a!2sAcademy%20Store!5e0!3m2!1sen!2sso!4v1567521705213!5m2!1sen!2sso" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>

        </div>


    </div>
</div>
@include('pages.course.include._inc_popup_view_course')
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
<script src="{{ asset('js/course.js') }}"></script>
@stop