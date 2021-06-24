@extends('pages.layouts.app_home')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/course.css') }}">
<link rel="stylesheet" href="{{ asset('css/frontend_dashboard.css') }}">
<style>
    div.box-comment {
                        padding: 20px 0;
                        width: 60%;
                        margin: auto;
                    }

                    #comment {
                        border: none;
                        box-shadow: 0 0.010416667in 0.25pc 0in rgb(0 0 0 / 12%);
                    }

                    p.comment-form-comment textarea {
                        padding: 10px;
                    }

                    p.comment-form-comment textarea:focus {
                        outline: none;
                        border: 1px solid #e2e5ec;
                        box-shadow: none
                    }

                    .teacher-answer input,
                    .image-answer input {
                        padding: 5px;
                    }

                    button.btn.btn-answer {
                        background: #bb9f57;
                        border-radius: 20px;
                        border-color: #bb9f57;
                    }
                    button.btn.btn-answer:hover {
                        background: #122A67;
                    }

                    input.image-answer--file {
                        padding: 5px
                    }

                    .comment-form-comment label {
                        text-transform: uppercase;
                        font-weight: 600;
                        color: #122a67;
                    }

                    @media only screen and (max-width: 768px) {
                        div.box-comment {
                            padding: 20px 0;
                            width: 90%;
                            margin: auto;
                        }
                    }
            .card {
                position: relative;
                display: flex;
                padding: 20px;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background-color: #fff;
                background-clip: border-box;
                border: 1px solid #d2d2dc;
                border-radius: 11px;
                -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
                -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
                box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
            }

            .media img {
                width: 30px;
                height: 30px
            }

            .reply a {
                text-decoration: none
            }

            p.content-asw {
                margin: -5px 0 5px;
            }

            .media {
                display: flex;
                align-items: flex-start;
                margin-bottom: 20px;
            }

            .media-body {
                margin-left: 15px;
            }

            .media-first {
                border-bottom: 1px solid #f2f2f2;
            }

            .media-first:last-child {
                border-bottom: none;
            }

            span.img_name {
                width: 50px;
                height: 50px;
                border: 1px solid #122A67;
                text-align: center;
                font-size: 28px;
                background: #122A67;
                color: #fff;
                border-radius: 100%;
                margin-right: 10px;
            }

            .media-last span.img_name {
                width: 40px;
                height: 40px;
                font-size: 20px;
            }

            .media-last .img_name,
            .media-first .img_name {
                border-radius: 100%;
                object-fit: cover
            }

            h5.h5-name-tc {
                margin-bottom: -5px
            }

            span.text-time {
                font-size: 12px;
                color: #BB9F57
            }

            .btn-reply,
            .btn-submit {
                padding: 5px 20px;
                float: right;
                margin-right: 20px;
                background: #BB9F57
            }

            .form-reply {
                margin-top: 20px;
            }

            .form-reply input,
            .form-ssm input {
                padding: 5px
            }

            .form-ssm {
                margin-top: 20px;
            }

            .form-ssm input:focus {
                box-shadow: none;
                border: 1px solid #e2e5ec;
            }

            .media {
                margin: 10px 0;
            }
        </style>
@stop
@section('contents')
@if(get_data_user('web'))

<div class="page-content">
    <?php if (count($courseVideos) > 0) { ?>
        <div class="course-layouts">
            <div class="course-content bg-dark">
                <div class="course-header">
                    <a href="#" class="btn-back" uk-toggle="target: .course-layouts; cls: course-sidebar-collapse">
                        <i class="icon-feather-chevron-left"></i>
                    </a>
                    <h4 class="text-white"> Video khóa học </h4>
                    <div>
                        <a href="#">
                            <i class="icon-feather-help-circle btns"></i> </a>
                        <div uk-drop="pos: bottom-right;mode : click">
                            <div class="uk-card-default p-4">
                                <h4> Elementum tellus id mauris faucibuss soluta nobis </h4>
                                <p class="mt-2 mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                                    diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                    volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                    suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum
                                    soluta nobis eleifend option congue nihil imperdiet</p>
                            </div>
                        </div>
                        <a hred="#">
                            <i class="icon-feather-more-vertical btns"></i>
                        </a>
                        <div class="dropdown-option-nav " uk-dropdown="pos: bottom-right ;mode : click">
                            <ul>
                                <li><a href="#">
                                        <i class="icon-feather-bookmark"></i>
                                        Add To Bookmarks</a></li>
                                <li><a href="#">
                                        <i class="icon-feather-share-2"></i>
                                        Share With Friend </a></li>
                                <li>
                                    <a href="#" id="night-mode" class="btn-night-mode">
                                        <i class="icon-line-awesome-lightbulb-o"></i> Night mode
                                        <label class="btn-night-mode-switch">
                                            <div class="uk-switch-button"></div>
                                        </label>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="course-content-inner">
                    <ul id="video-slider" class="uk-switcher">
                        <li class="uk-active">
                            <div class="video-responsive" id="video-responsive">

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="course-sidebar">
                <div class="course-sidebar-title">
                    <h3> Danh sách video </h3>
                </div>
                <div class="course-sidebar-container" data-simplebar>
                    <ul class="course-video-list-section" uk-accordion>
                        @php
                        $keys = 0;
                        @endphp
                        @foreach($courseContent as $keycc => $item)
                        <li class='{{$keys ++ == 0 ? "uk-open" : ""}}'>
                            <a class="uk-accordion-title" href="#"> {{ $item->cc_name }} </a>
                            <div class="uk-accordion-content">
                                <!-- course-video-list -->
                                <ul class="course-video-list highlight-watched" uk-switcher=" connect: #video-slider{{ $keycc }}  ; animation: uk-animation-slide-right-small, uk-animation-slide-left-medium">
                                    @if(isset($item->videos) && !$item->videos->isEmpty())
                                    @foreach($item->videos as $key => $itemcv)
                                    <li>
                                        <a href="{{ route('ajax_get.course.view_course', $itemcv->id) }}" class="{{ get_data_user('web') ?  'js-view-course' : 'js-show-login' }}"><i class="fa fa-play-circle"></i> {{ $itemcv->cv_name }}</a>
                                    </li>
                                    @endforeach
                                    @endif
                                </ul>
                            </div>
                        </li>
                        @endforeach

                        <li id="show-comment">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="course-content bg-dark">
            <div class="course-header">
                <h4 class="text-white mx-auto"> Bạn chưa có khóa học nào !!! </h4>
            </div>
            <div class="course-content-inner">
                <ul id="video-slider" class="uk-switcher">
                    <li class="uk-active">
                        <div class="video-responsive" id="video-responsive">
                            <iframe src="https://www.youtube.com/embed/wZwjgQ5ZETI" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    <?php } ?>

    <div class="box-comment">
        <div class="container">
            <form class="form-horizontal" id="form-cmt-kh" autocomplete="off" action="{{ route('get.video.kh',$courseDetail[0]->c_slug) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="asw_id_course" value="{{ $courseDetail[0]->id }}">
                <p class="comment-form-comment">
                    <label for="comment">Bình luận</label>
                    <textarea id="comment" name="asw_content" cols="20" rows="4" placeholder="Hãy gửi câu hỏi cho tôi!!!" maxlength="65525"></textarea>
                </p>
                {{-- <div class="row">
                    <input type="hidden" name="asw_teacher" value="{{ $courseDetail[0]->c_teacher_id }}">
                <div class="col-12 image-answer">
                    <input type="file" name="asw_image" id="">
                </div>
        </div> --}}
        <button type="submit" class="btn btn-answer btn-success">Gửi câu hỏi</button>
        </form>
    </div>
</div>
<div class="box-comment">
    <div class="container">
        @if(count($comment_cc) > 0)
        <div class="card">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center mb-5"> Danh sách câu hỏi giáo viên đã trả lời </h3>
                    <div class="row">
                        <div class="col-md-12">

                            @foreach($comment_cc as $keycm => $comment )
                            <div class="media media-first">
                                <img class="img_name" src="{{ pare_url_file(('\App\Models\User')::find($comment->asw_id_user)->avatar) }}">
                                <div class="media-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="text-primary h5-name-tc">{{ ('\App\Models\User')::find($comment->asw_id_user)->name }}</h5>
                                            <span class="text-time">Gửi lúc: {{ date ("H:i Y-d-m", strtotime($comment->created_at)) }}</span>
                                        </div>
                                    </div>
                                    <p class="content-asw">
                                        {{ $comment->asw_content }}
                                    </p>
                                    <div class="media media-last">
                                        <img class="img_name" src="{{ pare_url_file(('\App\Models\Education\Teacher')::find($comment->asw_teacher)->t_avatar) }}">
                                        <div class="media-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 class="text-primary h5-name-tc">{{ ('\App\Models\Education\Teacher')::where('id',$comment->asw_teacher)->pluck('t_name')->first() }}</h5>
                                                    <span class="text-time">Gửi lúc: {{ date ("H:i Y-d-m", strtotime($comment->created_at)) }}</span>
                                                </div>
                                            </div>
                                            @if (('\App\Models\QuestionsToTeacher')::where('qs_answerID',$comment->id)->pluck('qs_content')->first())
                                            <p class="content-asw">
                                                {{ ('\App\Models\QuestionsToTeacher')::where('qs_answerID',$comment->id)->pluck('qs_content')->first() }}
                                            </p>
                                            @else
                                            <p class="content-asw text-danger">
                                                Chờ giáo viên xác nhận.
                                            </p>
                                            @endif

                                            @if(count($comment->childAnswer))
                                            @foreach ($comment->childAnswer as $subComment)
                                            @include('pages.course_video.sub_comment', ['sub_Comment' => $subComment])
                                            @endforeach
                                            @endif
                                            <div class="form-ssm form-reply{{ $comment->id }}"></div>
                                            <div class="form-ssm btn-submit{{ $comment->id }}">
                                                <a class="btn btn-reply" id="btn-reply{{ $comment->id }}" href="javascript:;" data-id="{{ $comment->id }}" role="button">Reply</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@else
<div class="page-content">
    <div class="course-content bg-dark">
        <div class="course-header">
            <h4 class="text-white mx-auto"> Bạn chưa có khóa học nào !!! </h4>
        </div>
        <div class="course-content-inner">
            <ul id="video-slider" class="uk-switcher">
                <li class="uk-active">
                    <div class="video-responsive" id="video-responsive">
                        <iframe src="https://www.youtube.com/embed/wZwjgQ5ZETI" frameborder="0" allowfullscreen></iframe>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="box-comment">
        <div class="container">
            <p>Bạn không có quyền xem video này</p>
        </div>
</div>
</div>
@endif
</div>
@stop
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="{{ asset('js/course.js') }}"></script>
<script src="{{ asset('js/frontend_dashboard.js') }}"></script>
<script>
    $('document').ready(function() {
        $('.btn-reply').on('click', function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            let data_id = $(this).attr('data-id');
            let input_reply = '<form action="{{ route('get.video.kh',$courseDetail[0]->c_slug) }}" id=reply_form'+data_id+' method="POST">  {{ csrf_field() }}'+
                            '<input type="text" name="asw_content" placeholder="Nhập nội dung...">'+
                            '<input type="hidden" name="asw_parent" value="'+data_id+'" placeholder="Nhập nội dung...">'+
                            '<input type="hidden" name="asw_teacher" value="{{ $courseDetail[0]->c_teacher_id }}">'+
                            '<input type="hidden" name="asw_id_course" value="{{ $courseDetail[0]->id }}">'+
                            '<button class="btn btn-submit" id="btn-submit'+data_id+'" href="javascript:;" role="submit" type="submit">Gửi câu hỏi</button></form>';
       
            let submit_reply = '<a class="btn btn-submit" id="btn-submit' + data_id + '" href="javascript:;" role="button">Gửi câu hỏi</a>';
            $('.form-reply' + data_id).html(input_reply);
            $('#btn-reply' + data_id).remove();
        });
    });

    // 
</script>
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
<!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script> -->
<script>
    function make_button_active(tab) {
        var siblings = tab.siblings();
        tab.addClass('watched');
    }
    $(document).ready(function() {

        if (localStorage) {
            var ind = localStorage['tab']
            make_button_active($('.highlight-watched li').eq(ind));
        }
        $(".highlight-watched li").click(function() {
            if (localStorage) {
                localStorage['tab'] = $(this).index();
            }
            make_button_active($(this));
        });
    });
</script>

@stop