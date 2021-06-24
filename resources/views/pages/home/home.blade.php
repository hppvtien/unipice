@extends('pages.layouts.app_home')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/frontend_dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@stop
@section('contents')
<style>
    h2.cat_title {
        font-size: 40px;
        text-align: center;
        padding-top: 24px;
    }

    .section_one {
        margin: 30px 0 0;
    }

    .heading-h2 {
        font-size: 44px;
        padding-bottom: 0;
    }

    .section_two {
        padding: 10px 0;
    }

    .tags_hot {
        padding: 0 0 40px 0;
    }

    .tags_hot .heading-h2 {
        margin-bottom: 40px;
    }

    .lecture {
        padding: 30px 0;
    }

    .lecture .heading-h2 {
        margin-bottom: 30px;
    }

    .slider-hot .owl-item .uni-sl-content {
        padding: 0 30px;
    }

    .slider-hot .owl-item .uni-sl-content .quote {
        margin-top: 0;
    }

    .slider-hot {
        padding: 30px 0;
    }

    .section {
        padding: 30px 0 40px;
    }

    .footer {
        margin-top: 0;
    }

    @media only screen and (max-width: 768px) {
        .page-content .home-hero {
            height: 280px;
        }

        .uk-position-z-index {
            text-align: center;
        }

        .home-hero h1 {
            font-size: 34px;
        }

        .home-hero p {
            font-size: 24px;
        }

        .home-hero p span {
            font-size: 34px;
        }

        .section_one {
            margin-top: 0;
        }

        h2.cat_title {
            font-size: 22px;
            padding-top: 12px;
        }

        .text-center.mb-5 {
            margin-bottom: 24px !important;
        }

        .heading-h2 {
            font-size: 24px;
        }

        .section_two {
            padding: 0;
        }

        .section_two {
            margin-top: -20px;
        }

        .section_two .course-grid-slider .uni-uk-right,
        .section_two .course-grid-slider .uni-uk-left {
            top: 30%;
        }

        .uk-slider-container.pb-4 {
            padding-bottom: 0 !important;
        }

        .course-grid-slider.mt-lg-5.uk-slider {
            padding-bottom: 0;
        }

        .tags_hot .heading-h2 {
            margin-bottom: 25px;
        }

        .tags_hot {
            padding: 0 0 10px 0;
        }

        .lecture {
            padding: 5px 0;
        }

        .slider-hot {
            padding: 0;
        }

        .slider-hot .owl-item .uni-sl-content {
            padding: 0 0 0 30px;
        }

        .slider-hot .owl-item .uni-sl-content p {
            font-size: 22px;
        }

        .uk-grid-margin.uk-first-column {
            text-align: center;
        }

        .footer {
            padding-top: 20px;
        }
    }
</style>
<div class="page-content">

    <div class="home-hero" data-src="{{ pare_url_file($slides[0]->s_banner) }}" style="background-position: center;background-repeat: no-repeat;background-size: cover;" uk-img>
        <div class="uk-width-1-1">
            <div class="page-content-inner uk-position-z-index">
                <h1>{{ $slides[0]->s_name }}</h1>
                {!! $slides[0]->s_desscription !!}
            </div>
        </div>
    </div>
    <!-- Content================================================== -->
    <h2 class="cat_title">Danh mục các khóa học</h2>
    <section class="section_one">
        <div class="container">
            <div class="lists">
                @foreach ($categoriesParent as $item)
                <div class="item list-course item-4-20 mr20 box-course mb20">
                    <div class="avatar-item">
                        <div class="img">
                            <a href="{{ route('get.course.render', ['slug' => $item->c_slug . '-c']) }}" title="{{ $item->c_name }}">
                                <img src="{{ pare_url_file($item->a_avatar) }}" alt="{{ $item->c_name }}">
                            </a>
                            <div class="img_badget">
                                <h3><a href="{{ route('get.course.render', ['slug' => $item->c_slug . '-c']) }}" title="{{ $item->c_name }}">{{ $item->c_name }}</a>
                                </h3>
                                <a href="{{ route('get.course.render', ['slug' => $item->c_slug . '-c']) }}" title="{{ $item->c_name }}">
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                    {{ count(('App\Models\Category')::find($item->id)->courses) }} khóa học
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="section_two">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="heading-h2"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Các khóa
                    học hàng đầu <br><span class="uni-span-color">của chúng tôi</span></h2>
            </div>
            <div class="course-grid-slider mt-lg-5" uk-slider="finite: true">
                <div class="uk-slider-container pb-4">
                    <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-4@m uk-grid">
                        @foreach ($coursesHotPositionOne as $item)
                        <li>
                            <a href="#">
                                <div class="course-card">
                                    <div class="course-card-thumbnail ">
                                        <a href="{{ route('get.course.render', ['slug' => $item->c_slug . '-cr']) }}" title="{{ $item->c_name }}">
                                            <img src="{{ pare_url_file($item->c_avatar) }}" alt="{{ $item->c_name }}">
                                        </a>
                                        <span class="play-button-trigger"></span>
                                    </div>
                                    <div class="course-card-body">

                                        <h4><a href="{{ route('get.course.render', ['slug' => $item->c_slug . '-cr']) }}" title="{{ $item->c_name }}">{{ $item->c_name }}</a> </h4>

                                        <div class="course-card-info">
                                            <div>
                                                <span class="catagroy">Giáo viên:
                                                    {{ $item->teacher->t_name ?? '[N\A]' }}</span>
                                            </div>
                                            <div>
                                                <i class="icon-feather-bookmark icon-small"></i>
                                            </div>
                                        </div>
                                        <div class="star-rating">
                                            <span class="avg"> {{ $item->c_total_evaluate ?? 0 }} </span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="uni-video"><i class="fa fa-play-circle"></i>
                                                {{ $item->video_count ?? 0 }}</span>
                                        </div>
                                        <div class="course-card-footer">
                                            <h5> <i class="fa fa-money"></i>
                                                @if ($item->c_price > 0)
                                                <span class="price">{{ number_format($item->c_price, 0, ',', '.') }}
                                                    đ</span>
                                                @else
                                                <span class="price">Miễn phí</span>
                                                @endif
                                            </h5>
                                            <h5>
                                                <a href="{{ route('get.course.render', ['slug' => $item->c_slug . '-cr']) }}" title="{{ $item->c_name }} ">
                                                    <i class="fa fa-play-circle"></i>Học thử
                                                </a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        @endforeach

                    </ul>

                </div>
                <a class="uni-uk uni-uk-left uk-position-center-left " href="#" uk-slider-item="previous"><i class='fa fa-chevron-left '></i></a>
                <a class="uni-uk uni-uk-right uk-position-center-right" href="#" uk-slider-item="next"><i class='fa fa-chevron-right'></i></a>
            </div>
        </div>
    </div>
    @include('pages.home.include._inc_tags_hot',['tags' => $tagsHot])
    @include('pages.home.include._inc_lecture',['teachers' => $teachers])
    @include('pages.home.include._inc_slider_hot',['slideshot' => $slideshot])
    <div class="section" style="background-image: url('{{ asset('assets/images/uni-banner-form.jpg') }}');">
        <div class="container">
            <h2 class="text-center heading-h2 my-lg-10"> Bạn cần đào tạo nhóm </h2>
            <p class="uni-p text-center">Chúng tôi cung cấp tư cách thành viên nhóm linh hoạt, hiệu quả về chi phí cho
                doanh nghiệp, trường học hoặc tổ chức chính phủ của bạn.
                Liên hệ với chúng tôi để được học nhiều điều hơn.</p>
            <div class="uk-child-width-1-2@m uniform uk-grid ">
                <div class="uk-first-column uni-img-form" style="background-image: url('{{ asset('assets/images/form-home.png') }}'); background-repeat: no-repeat;
                    background-size: 100% 100%;">
                </div>
                <div class="uk-first-column uni-form">
                    <form class="form-horizontal" id="jobs_submit" autocomplete="off" method="POST" action="">
                        @csrf
                        <div class="form-horizontal">
                            <input class="uk-input" type="text" name="name" placeholder="Nhập họ tên">
                            @if ($errors->first('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-horizontal">
                            <input class="uk-input" type="email" name="email" placeholder="Nhập email">
                            @if ($errors->first('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-horizontal">
                            <input class="uk-input" type="number" name="phone" placeholder="Nhập số điện thoại">
                            @if ($errors->first('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="uk-grid-margin uk-first-column">
                            <button class="btn btn-info"><i class="la la-save"></i> Gửi thông tin</button>
                        </div>
                    </form>
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
<script src="{{ asset('js/frontend_dashboard.js') }}"></script>
<script src="{{ asset('js/home.js') }}"></script>
@stop