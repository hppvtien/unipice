@extends('pages.layouts.app_home')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/frontend_dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('css/course.css') }}">
@stop
@section('contents')
{{-- @include('pages.course.include._inc_breadcrumb') --}}
<style>
    .jobs-apply {
        padding: 20px 60px;
        background: #f4f4f4;
        margin-bottom: 20px;
    }

    form#form-jobs input {
        background: #fff;
        padding: 10px;
        box-shadow: none;
        outline: none;
        border: 1px solid #e2e5ec;
    }

    form#form-jobs input:focus {
        border-color: #0078bd;
        background: #fff;
        box-shadow: none;
        outline: none;
        padding: 10px;
    }

    #jobs-submit {
        background: #122a67;
        margin-top: 0 !important;
    }

    .title-apply {
        position: relative;
        background: #122a67;
        color: #fff;
        padding: 15px 10px;
        font-size: 16px;
        text-align: center;
        text-transform: uppercase;
    }

    .p-note {
        padding-bottom: 5px;
    }

    h3.title-apply::before {
        content: '';
        position: absolute;
        top: calc(100%);
        left: calc(50% - 5px);
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 10px solid #122a67;
    }

    .job-form-sb {
        margin-bottom: 20px;
    }
</style>
<div class="page-content">
    <div class="card">
        <div class="blog-article-single mt-9" data-src="{{ asset('assets/images/img-8.jpg') }}" uk-img>
            <div class="container-small">
                <h1>{{ $jobs->name }} </h1>
                <h2 class="text-white">{{ $jobs->desscription }}</h2>
            </div>
        </div>
        <div class="container p-0">
            <div class="container-small blog-article-content-read">
                {!! $jobs->content !!}
            </div>
        </div>
        <div class="container job-form-sb">
            <h3 class="title-apply">Nộp hồ sơ ứng tuyển </h3>
            <div class="jobs-apply">
                <p class="text-center p-note">( <span class="text-danger">*</span> ) là trường bắt buộc nhập</p>
                <div class="jobs-content">
                <form id="form-jobs" autocomplete="off" method="post" enctype="multipart/form-data" action="{{ route('get.jobsdetail',$jobs->slug) }}">
                    @csrf
                        <input type="hidden" name="j_job_id" value="{{ $jobs->id }}">
                        <div class="form-group">
                            <div class="line">
                                <input type="text" class="input" required name="j_fullname" placeholder="Họ và tên">
                                @if($errors->first('j_fullname'))
                                <span class="text-danger">{{ $errors->first('j_fullname') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="line">
                                <input type="text" class="input" required name="j_email" placeholder="Email">
                                @if($errors->first('j_email'))
                                <span class="text-danger">{{ $errors->first('j_email') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="line">
                                <input type="text" class="input" required name="j_phone" placeholder="Số điện thoại">
                                @if($errors->first('j_phone'))
                                <span class="text-danger">{{ $errors->first('j_phone') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="line">
                                <input type="text" class="input" required name="j_address" placeholder="Địa chỉ">
                                @if($errors->first('j_address'))
                                <span class="text-danger">{{ $errors->first('j_address') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="line">
                                <p>File CV <b class="text-danger"> *</b></p>
                                <input type="file" name="j_file_cv" required enctype="multipart/form-data" accept="image/x-png,image/jpeg,image/jpg,.doc,.pdf,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
                                @if($errors->first('j_file_cv'))
                                <span class="text-danger">{{ $errors->first('j_file_cv') }}</span>
                                @endif
                            </div>
                        </div>
                        <p class="text-center">(Cho phép tải file docx, pdf, xlsx. Dung lượng tối đa 25MB!)</p>
                        <div class="uk-grid-margin uk-first-column text-center">
                            <button type="submit" id="jobs-submit" class="btn btn-radius mt10 js-view-comment">Nộp hồ sơ</button>
                        </div>
                    </form>

                </div>

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