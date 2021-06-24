<style>
       header.header.header-horizontal.header.bg-grey.uk-light{
           padding-top: 5px;
       }
       #search{
           display: none;
       }
       </style>
<header class="header header-horizontal header bg-grey uk-light">
    <div class="top-header">
        <div class="container">
            <nav uk-navbar>
                <!-- left Side Content -->
                <div class="uk-navbar-left">
                    <!-- menu icon -->
                    <span class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                    <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                    </span>
                    </button>
                    </span>
                    <!-- logo -->
                    <a href="{{ route('get.home') }}" class="logo">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="">
                    </a>
                   
                </div>
                <!--  Right Side Content   -->
                <div class="uk-navbar-right header-right">
                    <div class="header-widget">
                        <div class="searchbox uk-visible@s">
                            <form action="{{ route('get.search') }}" class="flex" id="form-search-header">
                                <input class="uk-search-input" id="input_search" name="k" value="{{ \Request::get('k') }}" type="search" placeholder="Search...">
                                <button class="btn-searchbox"> </button>
                            </form>
                        </div>
                        
        
                        <span class="icon-feather-x icon-small uk-hidden@s"
                            uk-toggle="target: .header-widget ; cls: is-active"> </span>
                        <a href="{{ route('get.course.pay_selling') }}" class="header-widget-icon"
                            uk-tooltip="title: Khóa học bán chạy ; pos: bottom ;offset:21">
                        <i class="uil-youtube-alt"></i>
                        </a>
                        <a href="{{ route('get.course.favourite') }}" class="header-widget-icon"
                            uk-tooltip="title: Khóa học yêu thích ; pos: bottom ;offset:21">
                        <i class="uil-heart"></i>
                        <span id="count_favourites">{{ count(('App\Models\Favourite')::where('f_user_id',get_data_user('web'))->get()) }}</span>
                        </a>
                        @php
                            $dem = Cart::count();
                        @endphp
                         @if($dem == 0)
                            <a href="{{ route('get_user.cart') }}" class="header-widget-icon" uk-tooltip="title: Chưa có sản phẩm ; pos: bottom ;offset:21">
                            <i class="uil-cart"></i>
                            <span id="countSource">0</span>
                            </a>
                        @else
                            <a href="{{ route('get_user.cart') }}" class="header-widget-icon" uk-tooltip="title: Giỏ hàng ; pos: bottom ;offset:21">
                                <i class="uil-cart"></i>
                                <span id="countSource">{{ \Cart::count() }}</span>
                            </a>
                        @endif
                    </div>   
                    @if(get_data_user('web'))
                    <!-- profile-icon-->
                    <a href="#" class="header-widget-icon profile-icon">
                        <img src="{{ pare_url_file(get_data_user('web','avatar')) }}" alt="" class="header-profile-icon">
                        </a>
                        <div uk-dropdown="pos: top-right ;mode:click" class="dropdown-notifications small">
                            <!-- User Name / Avatar -->
                            <a href="#">
                                <div class="dropdown-user-details">
                                    <div class="dropdown-user-avatar">
                                        <img src="{{ pare_url_file(get_data_user('web','avatar')) }}" alt="">
                                    </div>
                                    <div class="dropdown-user-name">
                                        {{ get_data_user('web','name') }} <span>Students</span>
                                    </div>
                                </div>
                            </a>
                            <!-- User menu -->
                            <ul class="dropdown-user-menu">
                                <li>
                                    <a href="{{ route('get_user.dashboard') }}">
                                    <i class="icon-material-outline-dashboard"></i> Dashboard</a>
                                </li>
                                {{-- <li><a href="{{ route('get_user.transaction') }}">
                                    <i class="icon-feather-bookmark"></i> Đơn hàng </a>
                                </li>
                                <li><a href="#">
                                    <i class="icon-feather-settings"></i> Khóa học</a>
                                </li> --}}
                                <li><a href="{{ route('get_user.jobs') }}">
                                    <i class="icon-feather-star"></i> Tuyển dụng</a>
                                </li>                              
                                <li class="menu-divider">
                                <li><a href="#">
                                    <i class="icon-feather-help-circle"></i> Hỗ trợ</a>
                                </li>
                                <li><a href="{{ route('get.logout') }}">
                                    <i class="icon-feather-log-out"></i> Đăng xuất</a>
                                </li>
                            </ul>
                        </div>
                    @else
                         <div id="js-auth" class="auth flex flex-a-c" style="margin-right: 10px;">
                            <p class="js-auth-popup">
                                <a href="" class="login"><i class="fa fa-user"></i><span> Đăng nhập</span></a>
                            </p>
                        </div>
                    @endif
                    <!-- icon search-->
                    <a class="uk-navbar-toggle uk-hidden@s" id="search"
                        uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#">
                    <i class="uil-search icon-small"></i>
                    </a>
                    <!-- User icons -->
                    <a href="#" class="uil-user icon-small uk-hidden@s"
                        uk-toggle="target: .header-widget ; cls: is-active">
                    </a>
                    
                </div>
                <!-- End Right Side Content / End -->
            </nav>
        </div>
    </div>
    <div class="top-menu">
        <div class="container">
            <nav uk-navbar>
                <!-- left Side Content -->
                <div class="uk-navbar-left">                  
                    <!-- Main Navigation -->
                    <nav id="navigation">
                        <ul id="responsive">
                            <li><a href="{{ route('get.home') }}">Home</a> </li>
                            <li><a href="{{ route('get.about') }}">Giới thiệu</a> </li>
                            <li>
                                <a href="{{ route('get.category.all')}}">Khoá học</a>
                                <ul class="dropdown-nav nav-large nav-courses">
                                    @foreach ($categoriesParent as $item)
                                    <li><a href="{{ route('get.course.render',['slug' => $item->c_slug.'-c']) }}" title="{{ $item->c_name }}">
                                        <i class="{{ $item->c_icon }}" style="color: #bb9f57;"></i> {{ $item->c_name }}
                                        </a>
                                    </li>
                                    @endforeach                                                           
                                </ul>
                            </li>
                            <li><a href="{{ route('get.inhouse') }}" class="nav-active">Inhouse</a> </li>
                            <li>
                                <a href="#">Dịch vụ</a>
                                <ul class="dropdown-nav">                         
                                    <li>
                                        <a href="https://adsmo.vn/giai-phap/thiet-ke-nhan-dien-thuong-hieu/" target="_blank" rel="nofollow" title="Thiết kế thương hiệu">
                                            Thiết kế thương hiệu
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://adsmo.vn/giai-phap/phat-trien-website/" target="_blank" rel="nofollow" title="Phát triển Website Digital">
                                            Phát triển Website Digital
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://adsmo.vn/giai-phap/dich-vu-seo/" target="_blank" rel="nofollow" title="Dịch vụ SEO">
                                            Dịch vụ SEO
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://adsmo.vn/giai-phap/digital-marketing/" target="_blank" rel="nofollow" title="Digital Marketing">
                                            Digital Marketing
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://adsmo.vn/giai-phap/marketing-online/" target="_blank" rel="nofollow" title="Marketing Online">
                                            Marketing Online
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://adsmo.vn/giai-phap/chien-luoc-xay-dung-thuong-hieu/" target="_blank" rel="nofollow" title="Chiến lược thương hiệu">
                                            Chiến lược thương hiệu
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://adsmo.vn/giai-phap/dich-vu-tu-van-doanh-nghiep/" target="_blank" rel="nofollow" title="Tư vấn Doanh Nghiệp">
                                            Tư vấn Doanh Nghiệp
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://adsmo.vn/giai-phap/dich-vu-kem-theo/" target="_blank" rel="nofollow" title="Dịch vụ kèm theo">
                                            Dịch vụ kèm theo
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('get_blog.home') }}">Góc kiến thức</a>
                                <ul class="dropdown-nav">
                                    @foreach ($blogmenu as $item)
                                    <li>
                                        <a href="{{ route('get_blog.render',['slug' => $item->m_slug.'-m']) }}" title="{{ $item->m_name }}">
                                        <i class="{{ $item->c_icon }}" style="color: #f7df1e;"></i> {{ $item->m_name }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{ route('get.freebook') }}">Free Ebooks</a> </li>
                            <li><a href="{{ route('get.jobs') }}">Việc làm</a> </li>
                            <li><a href="{{ route('get.contact') }}">Liên hệ</a> </li>
                        </ul>
                    </nav>
                    <!-- Main Navigation / End -->
                </div>           
            </nav>
        </div>
    </div>
    <!-- container  / End -->
</header>
<!-- overlay seach on mobile-->
<div class="nav-overlay uk-navbar-left uk-position-relative uk-flex-1 bg-grey uk-light p-2" hidden
    style="z-index: 10000;">
    <div class="uk-navbar-item uk-width-expand" style="min-height: 60px;">
        <form class="uk-search uk-search-navbar uk-width-1-1">
            <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
        </form>
    </div>
    <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade"
        href="#"></a>
</div>