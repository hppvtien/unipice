@extends('pages.layouts.app_home')
@section('styles')

<link rel="stylesheet" href="{{ asset('css/frontend_dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('css/teacher.css') }}">
@stop
@section('contents')
@include('pages.teacher.include._inc_breadcrumb')
<style>
        .grp-dess {
            padding: 10px 0;
        }

        .grp-dess p {}

        .grp-dess01 {
            padding: 0 0 10px 0;
        }

        .dess01 {
            font-weight: 600;
        }
        .grp-dess02{
            margin: 10px;
        }
</style>
<div class="page-content-adsmo">
    <div class="container">
        <div class="mt-lg-5 uk-grid" uk-grid="">

            <div class="uk-width-expand@m">
                <div class="section-header mb-lg-3">
                    <div class="section-header-left">
                        <h1 class="uk-article-title"> Đội ngũ giảng viên </h1>
                    </div>
                </div>

                <div class="results mb10">
                    <b>{{ count($teachers) }}</b> Giảng viên
                </div>
                <div class="uk-child-width-1-4@m uniform uk-grid ">
                    @foreach($teachers as $item)

                    <div class="uni-item">
                        <div class="course-card-thumbnail ">
                            <a href="{{ route('get.teacher.course',$item->t_slug) }}" title="{{ $item->t_name }}">
                                <img src="/images/default.png" alt="Viral Marketing">
                            </a>
                            <span class="play-button-trigger"></span>
                        </div>
                        <div class="course-card-body">
                            <a href="{{ route('get.teacher.course',$item->t_slug) }}" title="{{ $item->t_name }}">
                                <h2>{{ $item->t_name }}</h2>
                            </a>

                            <div class="grp-dess">
                                <p>Với kinh nghiệm nhiều năm trong ngành...</p>
                            </div>
                            <div class="row grp-dess01">
                                <div class="col-6 dess01">Khóa học: <span>15</span></div>
                                <div class="col-6 dess01">Câu hỏi: <span>15</span></div>
                            </div>
                            <div class="row grp-dess02">
                                <div class="col-12 text-center">
                                    <a class="btn btn-success" href="">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    <div class="clear"></div>
                </div>

            </div>
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
<script src="{{ asset('js/teacher.js') }}"></script>
<script src="{{ asset('js/frontend_dashboard.js') }}"></script>
@stop