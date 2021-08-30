<!doctype html>
<html lang="vi">

<head>
    {!! SEO::generate() !!}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
    <link rel="icon" href="{{ asset('img/brand/favicon.png') }}" type="image/x-icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="{{ asset('css/css_js/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/frontends.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css_js/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/unimall.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css_js/unimall_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/unimall2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css_js/css_header_menu/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <link href="{{ asset('css/css_js/custom.css') }}" rel="stylesheet">
    @yield('css_js_spice_club')
    @if(session('toastr'))
    <script>
        var TYPE_MESSAGES = "{{ session('toastr.type') }}"
        var MESSAGE = "{{ session('toastr.message') }}"
    </script>
    @endif
</head>
<div id="toast-container" class="toast-top-right"></div>
<div class="zeynep">
    <div class="col-md-12 col-xs-12 border_menu_mobile">
        <div class="row menu_can_giua">
            <span class="gach_flag"><img src="{{ asset('images/icon_menu/32.png') }}" alt="Ngôn Ngữ Tiếng Việt - UniMall"></span>
            <span class="gach_flag"><img src="{{ asset('images/icon_menu/31.png') }}" alt="Ngôn Ngữ Tiếng Anh - UniMall"></span>
        </div>
        <div class="col-lg-12 kich_co">
            @if (get_data_user('web'))
            <a class="col-md-12 row" href="{{ route('get_user.dashboard') }}"><span class="icon-account font_icon_new"><b> Quản Lý Tài Khoản</b> </span></a>
            @else
            <a class="col-md-12 row" href="{{ route('get.login') }}"><span class="icon-account font_icon_new"> <b> Tài Khoản</b> </span></a>
            @endif
            <a class="col-md-12 row" href="@if (get_data_user('web')) {{ route('get_user.dashboard') }} @else {{ route('get.register.b2b') }} @endif">
                <span class="icon-account font_icon_new" id="count-fff" aria-hidden="true"><b> @if (get_data_user('web')) Quản Lý B2B @else Đăng Nhập B2B @endif</b></span>
            </a>
            <a class="col-md-12 row" href="{{ route('get.spice_club') }}">
                <span class="icon-account font_icon_new" id="count-fff" aria-hidden="true"><b> Spice Club</b></span>
            </a>

            <a class="col-md-12 row" href="{{ route('get_user.myfavorites') }}">

                <?php if (count_fav(get_data_user('web')) == 0 || get_data_user('web') == null) { ?>
                    <span class="icon-favorite font_icon_new" id="count-fff" aria-hidden="true"><b> Yêu Thích</b></span>
                <?php } else { ?>
                    <span class="icon-favorite  font_icon_new" id="count-fff" aria-hidden="true"><b> Yêu Thích {{ count_fav(get_data_user('web')) }} Sản Phẩm</b></span>
                <?php } ?>
            </a>
            <a class="col-md-12 row" href="{{ route('get_user.cart') }}">
                <span class="icon-cart font_icon_new"><b>Giỏ Hàng
                        @php
                        $dem = count(\Cart::content());
                        @endphp
                        @if($dem == 0 || get_data_user('web') == null)
                        @else
                        {{ $dem }} Sản Phẩm
                        @endif
                    </b>
                </span>
            </a>
            <a class="col-md-12 row" href="tel:{{ $configuration->hotline }}"><span id="" class="phone-number"><i class="fa fa-phone"></i> {{ formatPhoneNumber($configuration->hotline) }}</span></a>

        </div>
    </div>

    <ul>
        @forelse ($category_mn as $key => $item)
        <li class="has-submenu">
            <a href="{{ getSlugCategory($item->slug) }}"><img style="float: left;padding: 5px;" width="30px" src="{{ pare_url_file_product($item->icon_thumb) }}" alt=""><span> {{ $item->name }}</span></a>
            <span data-submenu="menu_{{ $item->id }}" style="float: right;margin: -30px 20px 0 0;" class="fa fa-chevron-right"></span>
            <div id="menu_{{ $item->id }}" class="submenu">
                <div class="submenu-header" style="padding-left:26px" data-submenu-close="menu_{{ $item->id }}">
                    <a href="#">{{ $item->name }} <img src="{{ asset('/images/icon_menu/back.png') }}" alt="" style="width:30px; float: right;"></a>
                </div>
                <ul>
                    @foreach (getCatParent($item->id) as $vl)
                    <li>
                        <a href="{{ getSlugCategory($vl->slug) }}">{{ $vl->name }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </li>
        @empty @endforelse
    </ul>
</div>



<div class="zeynep-overlay"></div>

<body>

    <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>
        <div class="layout-container">
            @include('pages.components.headers._inc_header') @yield('contents') @include('pages.components.footer._inc_footer')
        </div>
    </div>



    <div id="login" class="modal fade login-js" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button data-dismiss="modal" class="close">&times;</button>
                    <h4><span class="base" data-ui-id="page-title-wrapper">Đăng nhập khách hàng</span></h4>
                    <div class="c-login">
                        <div class="c-login__content" style="padding:0;margin-right:0">
                            <div class="login-container">
                                <div class="c-login__block block-customer-login">
                                    <h2 class="c-login__block-heading" id="block-customer-login-heading">Khách hàng đã đăng ký</h2>
                                    <div class="block-content" aria-labelledby="block-customer-login-heading">
                                        <form class="form form-login" action="{{ route('post.login') }}" method="POST" id="formLogin">
                                            @csrf
                                            <input name="form_key" type="hidden" value="1">
                                            <fieldset class="fieldsets login" data-hasrequired="* Required Fields">
                                                <div class="field note">Nếu bạn có tài khoản, Hãy đăng nhập bằng email của bạn.</div>
                                                <div class="field email required">

                                                    <div class="m-text-input m-text-input--placeholder-label control">
                                                        <input name="email" id="email" autocomplete="off" type="email" class="" placeholder="Nhập email" title="Email">
                                                    </div>
                                                </div>
                                                <div class="field password required">
                                                    <div class="m-text-input m-text-input--placeholder-label control">
                                                        <input name="password" type="password" autocomplete="off" class="" placeholder="Mật khẩu" id="pass" title="Password">
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="actions-toolbar">
                                                <div class="primary">
                                                    <button type="submit" class="a-btn a-btn--primary login primary js-login">
                                                        <span>Đăng nhập</span></button>
                                                </div>
                                                <div class="secondary"><a class="a-btn a-btn--text action remind" href="{{ route('get.forgetpassword') }}"><span>Quên mật khẩu?</span></a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="c-login__block block-new-customer">
                                    <h2 class="c-login__block-heading" id="block-new-customer-heading">Khách hàng mới</h2>
                                    <div class="block-content" aria-labelledby="block-new-customer-heading">
                                        <p>Tạo tài khoản có nhiều lợi ích: Thanh toán nhanh hơn, theo dõi đơn đặt hàng và hơn thế nữa.</p>
                                        <div class="actions-toolbar">
                                            <div class="primary">
                                                <a href="{{ route('get.register') }}" class="a-btn a-btn--primary create primary"><span class="rigister-text">Tạo tài khoản khách hàng</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTACT JS  -->
    <!-- revolution JS FILES -->
    <script src="{{ asset('fontend_js/jquery.min.js') }}"></script>
    <script src="{{ asset('css/css_js/popper.min.js') }}"></script>
    <script src="{{ asset('css/css_js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('css/css_js/jquery.zeynep.min.js') }}"></script>
    <script src="{{ asset('fontend_js/select2.min.js') }}"></script>
    <script src="{{ asset('fontend_js/custom.js') }}"></script>
    <script src="{{ asset('js/frontends.js') }}"></script>
    <script src="{{ asset('fontend_js/unijs.js') }}"></script>

    @yield('js_about')



    <!-- CUSTOM FUCTIONS  -->
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
        $(function() {
            // init zeynepjs
            var zeynep = $('.zeynep').zeynep({
                onClosed: function() {
                    // enable main wrapper element clicks on any its children element
                    $("body main").attr("style", "");

                    console.log('the side menu is closed.');
                },
                onOpened: function() {
                    // disable main wrapper element clicks on any its children element
                    $("body main").attr("style", "pointer-events: none;");

                    console.log('the side menu is opened.');
                }
            });

            // handle zeynep overlay click
            $(".zeynep-overlay").click(function() {
                zeynep.close();
            });

            // open side menu if hamburger menu is clicked
            $("nav .navbar-toggler").click(function() {
                if ($("html").hasClass("zeynep-opened")) {
                    zeynep.close();
                } else {
                    zeynep.open();
                }
            });
        });
        $(document).ready(function() {
            $("#ser-input").click(function() {
                $('.search-full-view').addClass("search-normal-screen");
            });
            $("#search-close").click(function() {
                $('.search-full-view').removeClass("search-normal-screen");
            });
        });
    </script>


    @yield('js_product_comment_review')

</body>

</html>