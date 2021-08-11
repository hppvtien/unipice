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
    <link rel="stylesheet" href="{{ asset('css/css_js/font-awesome.css') }}" /> 
    
    <link rel="stylesheet" href="{{ asset('css/ducanh.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css_js/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ducanh2.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/css_js/css_header_menu/style.css') }}">
    <link href="{{ asset('css/css_js/custom.css') }}" rel="stylesheet">


</head>
<div class="zeynep">
    <div class="col-md-12 col-xs-12 border_menu_mobile">
        <div class="row menu_can_giua">
            <span class="gach_flag"><img src="https://www.countryflags.io/vn/flat/32.png" alt=""></span>
            <span class="gach_flag"><img src="https://www.countryflags.io/us/flat/32.png" alt=""></span>
        </div>
        <div class="col-lg-12 kich_co">
            <span class="icon-account font_icon_new"> <b>Tài Khoản</b> </span>
            <span class="font_icon_new"> <b>|</b> </span>
            <span class="icon-cart font_icon_new"> <b>Giỏ Hàng</b> </span>
        </div>
        <div class="col-lg-12 kich_co">
            <a href="tel:{{ $configuration->hotline }}"><span id="" class="phone-number"><i class="fa fa-phone"></i>  {{ formatPhoneNumber($configuration->hotline) }}</span></a>
        </div>
    </div>
   
    <ul>
        @forelse ($category_mn as $key => $item)
        <li class="has-submenu">
            <a  href="{{ getSlugCategory($item->slug) }}"><img style="float: left;padding: 5px;" width="30px" src="{{ pare_url_file_product($item->icon_thumb) }}" alt=""><span> {{ $item->name }}</span></a>
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
            @include('pages.components.headers._inc_header') 
            @yield('contents') 
            @include('pages.components.footer._inc_footer')
        </div>
    </div>


    <script src="{{ asset('fontend_js/jquery.min.js') }}"></script>
    <script src="{{ asset('css/css_js/popper.min.js') }}"></script>
    <script src="{{ asset('css/css_js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('css/css_js/jquery.zeynep.min.js') }}"></script>
    <script src="{{ asset('fontend_js/custom.js') }}"></script>
    <script src="{{ asset('js/frontends.js') }}"></script>
    <script src="{{ asset('fontend_js/unijs.js') }}"></script>
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
                                                    <button type="button" class="a-btn a-btn--primary login primary js-login">
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
    
    <script>
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
    </script>

    


</body>

</html>