<header id="masthead" class="site-header header-v1 header_thunho">
    <div class="">
        <div class="header-wrap">
            <div class="site-branding">
                <a href="/" class="custom-logo-link" rel="home">
                    <img src="{{ pare_url_file($configuration->logo) }}" class="pizzaro-logo" alt="Home" />
                </a>
            </div>
            <nav id="site-navigation" class="main-navigation" aria-label="Primary Navigation">
                <button id="hide_menu_pc" class=" navbar navbar-dark navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-menu" id="span_menu1"></span>
                </button>
                <div class="primary-navigation">
                    <ul id="menu-main-menu" class="menu nav-menu" aria-expanded="false">
                        @if (!get_data_user('web'))
                        <li class="menu-item"><a rel="nofollow" href="{{ route('get.register.b2b') }}">B2B</a></li>
                        @endif
                        <li class="menu-item"><a href="{{ route('get.spice_club') }}">Spice Club</a></li>
                        <li class="menu-item"><a rel="nofollow" href="{{ route('get.find') }}">Tìm Cửa hàng</a></li>
                        <li class="menu-item"><a href="{{ route('get.about') }}">Giới Thiệu</a></li>
                        {{-- <li class="menu-item"><a href="tel:0356105899" class="hotline-header"><span id="" class="phone-number"><i class="fa fa-phone"></i> 0356.105.899</span></a></li> --}}

                    </ul>
                </div>

            </nav>
            <!-- #site-navigation -->
            <div class="header-info-wrapper">
                <div class="header-phone-numbers">
                    <ul class="menu_class_menu d-none">
                        <li>
                            <img src="{{ asset('img/brand/32_UA.png') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('img/brand/32_VN.png') }}" alt="">
                        </li>
                    </ul>
                    <a href="tel:{{ $configuration->hotline }}" class="hotline-header"><span id="" class="phone-number"><i class="fa fa-phone"></i> {{ formatPhoneNumber($configuration->hotline) }}</span></a>
                </div>
                <ul class="site-header-cart-v2 menu">
                    <li class="cart-content ">
                        <a id="ser-input" class="a-icon-text-btn a-icon-text-btn--icon-only c-header__minicart-button js-minicart__trigger">
                            <span class="icon-search  a-icon-text-btn__icon" id="count-fff" aria-hidden="true"></span>
                        </a>
                        <a href="{{ route('get_user.myfavorites') }}" class="a-icon-text-btn a-icon-text-btn--icon-only c-header__minicart-button js-minicart__trigger">
                            <span class="icon-favorite  a-icon-text-btn__icon" id="count-fff" aria-hidden="true"></span>
                            <?php if (count_fav(get_data_user('web')) == 0 || get_data_user('web') == null) { ?>
                                <div id="count-fav">
                                    <div class=" count-fav" style="bottom: -10px;right: -5px">

                                    </div>
                                </div>
                            <?php } else { ?>
                                <div id="count-fav">
                                    <div class="c-header__minicart-count count-fav" id="count-fav" style="bottom: -10px;right: -5px;">
                                        <span style="font-size: 15px;margin: auto;text-align: center;padding-left: 5px;" id="js-count-favorite">{{ count_fav(get_data_user('web')) }}</span>
                                    </div>
                                </div>
                            <?php } ?>
                        </a>
                        <a href="{{ route('get_user.cart') }}" class="a-icon-text-btn a-icon-text-btn--icon-only c-header__minicart-button js-minicart__trigger" id="count-cart">
                            <span class="icon-cart a-icon-text-btn__icon" aria-hdden="true"></span>
                            <span class="a-icon-text-btn__label">
                                My Cart </span>
                            @php
                            $dem = count(\Cart::content());
                            @endphp
                            @if($dem == 0 || get_data_user('web') == null)
                            <div class="count-cart-s" style="bottom: -10px;right: -5px;"></div>
                            @else
                            <div class="c-header__minicart-count count-cart-s" style="bottom: -10px;right: -5px;">
                                <span style="font-size: 15px;margin: auto;text-align: center;padding-left: 5px;">{{ $dem }}</span>
                            </div>
                            @endif

                        </a>
                        @if (get_data_user('web'))
                        <div class="dropdown" id="uni">
                            <a class="a-icon-text-btn a-icon-text-btn--icon-only js-search-btn" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="icon-account a-icon-text-btn__icon" aria-hidden="true"></span>
                            </a>
                            <div class="dropdown-menu" id="uni-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('get_user.dashboard') }}">Tài khoản</a>
                                <a class="dropdown-item" href="{{ route('get_user.list_order') }}">Đơn hàng</a>
                                <a class="dropdown-item" href="{{ route('get_user.myfavorites') }}">Yêu thích</a>
                                <a class="dropdown-item" href="{{ route('get.logout') }}">Đăng xuất</a>
                            </div>
                        </div>
                        @else
                        <a class="a-icon-text-btn a-icon-text-btn--icon-only js-search-btn" href="{{ route('get.login') }}">
                            <span class="icon-account a-icon-text-btn__icon" aria-hidden="true"></span>
                            <span class="a-icon-text-btn__label">Users</span>
                        </a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <div class="pizzaro-secondary-navigation">
        <nav class="secondary-navigation" aria-label="Secondary Navigation">
            @include('pages.components.headers._inc_menu')
        </nav>
    </div>
</header>

<!-- Navigation -->
<div style="position: relative;z-index: 99999999;background:#0b2d25">
    <div class="search-full-view"> 
        <div class="input-group">
            <form action="{{ route('get.search') }}" autocomplete="off">
                <input id="search" name="search" type="text" placeholder="Tìm kiếm...">
            </form>
        </div>
        <button class="btn btn-close" id="search-close"><i class="fa fa-window-close"></i></button>
    </div>
</div>
<!-- Navigation -->
