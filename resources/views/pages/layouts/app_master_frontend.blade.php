<!doctype html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW"> {!! SEO::generate() !!}
    <link rel="icon" href="{{ asset('img/brand/favicon.png') }}" type="image/x-icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}" /> @if(session('toastr'))
    <script>
        var TYPE_MESSAGES = "{{ session('toastr.type') }}"
        var MESSAGE = "{{ session('toastr.message') }}"
    </script>
    @endif
    <link href="{{ asset('css/css_js/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/frontends.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" /> @include('pages.components.headers.css_js')

    <!------ Include the above in your HEAD tag ---------->

    <style>
        .footer-widget p {
            margin-bottom: 27px;
        }
        
        p {
            font-family: 'Nunito', sans-serif;
            font-size: 16px;
            line-height: 28px;
        }
        
        .animate-border {
            position: relative;
            display: block;
            width: 115px;
            height: 3px;
            background: #44e4be;
        }
        
        .animate-border:after {
            position: absolute;
            content: "";
            width: 35px;
            height: 3px;
            left: 0;
            bottom: 0;
            border-left: 10px solid #fff;
            border-right: 10px solid #fff;
            -webkit-animation: animborder 2s linear infinite;
            animation: animborder 2s linear infinite;
        }
        
        @-webkit-keyframes animborder {
            0% {
                -webkit-transform: translateX(0px);
                transform: translateX(0px);
            }
            100% {
                -webkit-transform: translateX(113px);
                transform: translateX(113px);
            }
        }
        
        @keyframes animborder {
            0% {
                -webkit-transform: translateX(0px);
                transform: translateX(0px);
            }
            100% {
                -webkit-transform: translateX(113px);
                transform: translateX(113px);
            }
        }
        
        .animate-border.border-white:after {
            border-color: #fff;
        }
        
        .animate-border.border-yellow:after {
            border-color: #F5B02E;
        }
        
        .animate-border.border-orange:after {
            border-right-color: #007bff;
            border-left-color: #007bff;
        }
        
        .animate-border.border-ash:after {
            border-right-color: #EEF0EF;
            border-left-color: #EEF0EF;
        }
        
        .animate-border.border-offwhite:after {
            border-right-color: #F7F9F8;
            border-left-color: #F7F9F8;
        }
        /* Animated heading border */
        
        @keyframes primary-short {
            0% {
                width: 15%;
            }
            50% {
                width: 90%;
            }
            100% {
                width: 10%;
            }
        }
        
        @keyframes primary-long {
            0% {
                width: 80%;
            }
            50% {
                width: 0%;
            }
            100% {
                width: 80%;
            }
        }
        
        .dk-footer {
            padding: 75px 0 0;
            background-color: #0b2d25;
            position: relative;
            z-index: 2;
        }
        
        .dk-footer .contact-us {
            margin-top: 0;
            margin-bottom: 30px;
            padding-left: 80px;
        }
        
        .dk-footer .contact-us .contact-info {
            margin-left: 50px;
        }
        
        .dk-footer .contact-us.contact-us-last {
            margin-left: -80px;
        }
        
        .dk-footer .contact-icon i {
            font-size: 24px;
            top: -15px;
            position: relative;
            color: #4effd5;
        }
        
        .dk-footer-box-info {
            position: absolute;
            top: -100px;
            background: #0b2d25;
            padding: 40px;
            z-index: 2;
            border-radius: 20px;
        }
        
        .dk-footer-box-info .footer-social-link h3 {
            color: #fff;
            font-size: 24px;
            margin-bottom: 25px;
        }
        
        .dk-footer-box-info .footer-social-link ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        
        .dk-footer-box-info .footer-social-link li {
            display: inline-block;
        }
        
        .dk-footer-box-info .footer-social-link a i {
            display: block;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            background: #000;
            margin-right: 5px;
            color: #fff;
        }
        
        .dk-footer-box-info .footer-social-link a i.fa-facebook {
            background-color: #3B5998;
        }
        
        .dk-footer-box-info .footer-social-link a i.fa-twitter {
            background-color: #55ACEE;
        }
        
        .dk-footer-box-info .footer-social-link a i.fa-google-plus {
            background-color: #DD4B39;
        }
        
        .dk-footer-box-info .footer-social-link a i.fa-linkedin {
            background-color: #0976B4;
        }
        
        .dk-footer-box-info .footer-social-link a i.fa-instagram {
            background-color: #B7242A;
        }
        
        .footer-awarad {
            margin-top: 285px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 100%;
            -moz-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }
        
        .footer-awarad p {
            color: #fff;
            font-size: 24px;
            font-weight: 700;
            margin-left: 20px;
            padding-top: 15px;
        }
        
        .footer-info-text {
            margin: 26px 0 32px;
            color: #fff;
        }
        
        .footer-left-widget {
            padding-left: 80px;
        }
        
        .footer-widget .section-heading {
            margin-bottom: 35px;
        }
        
        .footer-widget h3 {
            font-size: 24px;
            color: #fff;
            position: relative;
            margin-bottom: 15px;
            max-width: -webkit-fit-content;
            max-width: -moz-fit-content;
            max-width: fit-content;
        }
        
        .footer-widget ul {
            width: 50%;
            float: left;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        
        .footer-widget li {
            margin-bottom: 18px;
        }
        
        .footer-widget p {
            margin-bottom: 27px;
        }
        
        .footer-widget a {
            color: #fff;
            -webkit-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }
        
        .footer-widget a:hover {
            color: #fff;
        }
        
        .footer-widget:after {
            content: "";
            display: block;
            clear: both;
        }
        
        .dk-footer-form {
            position: relative;
        }
        
        .dk-footer-form input[type=email] {
            padding: 14px 28px;
            border-radius: 50px;
            background: #fff;
            border: #fff;
            height: 44px;
        }
        
        .dk-footer-form input::-webkit-input-placeholder,
        .dk-footer-form input::-moz-placeholder,
        .dk-footer-form input:-ms-input-placeholder,
        .dk-footer-form input::-ms-input-placeholder,
        .dk-footer-form input::-webkit-input-placeholder {
            color: #878787;
            font-size: 14px;
        }
        
        .dk-footer-form input::-webkit-input-placeholder,
        .dk-footer-form input::-moz-placeholder,
        .dk-footer-form input:-ms-input-placeholder,
        .dk-footer-form input::-ms-input-placeholder,
        .dk-footer-form input::placeholder {
            color: #878787;
            font-size: 14px;
        }
        
        .dk-footer-form button[type=submit] {
            position: absolute;
            top: 0;
            right: 0;
            padding: 8px 24px 12px 17px;
            border-top-right-radius: 25px;
            border-bottom-right-radius: 25px;
            border: 1px solid #fff;
            background: #155748;
            color: #fff;
            height: 40px;
        }
        
        .dk-footer-form button:hover {
            cursor: pointer;
        }
        /* ==========================

    Contact

=============================*/
        
        .contact-us {
            position: relative;
            z-index: 2;
            margin-top: 65px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }
        
        .contact-icon {
            position: absolute;
        }
        
        .contact-icon i {
            font-size: 36px;
            top: -5px;
            position: relative;
            color: #007bff;
        }
        
        .contact-info {
            margin-left: 75px;
            color: #fff;
        }
        
        .contact-info h3 {
            font-size: 20px;
            color: #fff;
            margin-bottom: 0;
        }
        
        .copyright {
            padding: 28px 0;
            margin-top: 55px;
            background-color: #3dbd9f;
        }
        
        .copyright span,
        .copyright a {
            color: #fff;
            -webkit-transition: all 0.3s linear;
            -o-transition: all 0.3s linear;
            transition: all 0.3s linear;
        }
        
        .copyright a:hover {
            color: #007bff;
        }
        
        .copyright-menu ul {
            text-align: center;
            margin: 0;
            line-height: 60px;
            font-size: 18px;
        }
        
        .copyright-menu li {
            display: inline-block;
            padding-left: 10px;
        }
        
        .back-to-top {
            position: relative;
            z-index: 2;
        }
        
        .back-to-top .btn-dark {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            padding: 0;
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #2e2e2e;
            border-color: #2e2e2e;
            display: none;
            z-index: 999;
            -webkit-transition: all 0.3s linear;
            -o-transition: all 0.3s linear;
            transition: all 0.3s linear;
        }
        
        .back-to-top .btn-dark:hover {
            cursor: pointer;
            background: #00FFC3;
            border-color: #fff;
        }
        
        .text_center {
            text-align: center;
            font-size: 18px;
            line-height: 80px;
        }
        
        .color-p {
            color: #fff;
        }
        
        .padding-left-0 {
            padding-left: 80px;
        }
        /* Credit to https://bootsnipp.com/snippets/ooa9M  */
        
        @media only screen and (max-width: 780px) {
            .footer-left-widget {
                padding-left: 0px;
            }
            .dk-footer-box-info {
                position: absolute;
                top: -100px;
                background: #3cb99b;
                padding: 30px;
                z-index: 2;
                border-radius: 0;
                margin: 0px;
                right: 0px;
            }
            .padding-left-0 {
                margin-left: -80px;
            }
            .footer-awarad p {
                color: #fff;
                font-size: 24px;
                font-weight: 700;
                margin-left: 0px;
                padding-top: 0px;
            }
        }
        
        a:hover {
            color: #0056b3;
            text-decoration: none;
        }
    </style>

</head>

<body>
    <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>
        <div class="layout-container">
            @include('pages.components.headers._inc_header') @yield('contents') @include('pages.components.footer._inc_footer')
        </div>
    </div>

    <!-- <script src="https://www.coopmarket.com/sites/default/files/js/js_4e1EHEQaAQ0l19WVSnwlvDtYVVkiTDW1ktKsaMmVO6g.js"></script> -->

    <script src="{{ asset('fontend_js/jquery.min.js') }}"></script>
    <script src="{{ asset('fontend_js/custom.js') }}"></script>
    <script src="{{ asset('js/frontends.js') }}"></script>
    <script src="{{ asset('fontend_js/unijs.js') }}"></script>
    <script>
        jQuery(document).ready(function() {

            var btn = $('.back-to-top');

            $(window).scroll(function() {
                if ($(window).scrollTop() > 500) {
                    btn.addClass('show');
                } else {
                    btn.removeClass('show');
                }
            });

            btn.on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: 0
                }, '1500');
            });

        });
    </script>

</body>

</html>