
<header id="masthead" class="site-header header-v1" style="background-color: #0b2d25;">
    <div class="">
        <div class="header-wrap">
            <div class="site-branding">
                <a href="/" class="custom-logo-link" rel="home">
                  <img data-src="{{ pare_url_file($configuration->logo) }}" class="pizzaro-logo" alt="Home" />
                </a>
            </div>
            <nav id="site-navigation" class="main-navigation" aria-label="Primary Navigation">
                <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><span class="close-icon"><i class="po po-close-delete"></i></span><span class="menu-icon"><i class="po po-menu-icon"></i></span><span class=" screen-reader-text">Menu</span></button>
                <div class="primary-navigation">
                    <ul id="menu-main-menu" class="menu nav-menu" aria-expanded="false">
                        <li class="menu-item"><a href="shop-grid-3-column.html">B2B</a></li>
                        <li class="menu-item"><a href="shop-grid-3-column.html">Spice Club</a></li>
                        <li class="menu-item"><a href="{{ route('get.find') }}">Tìm Cửa hàng</a></li>
                        <li class="menu-item"><a href="{{ route('get.about') }}">Giới Thiệu</a></li>
                    </ul>
                </div>
                <div class="handheld-navigation">
                    <span class="phm-close">Close</span>
                    <ul class="menu">
                        <li class="menu-item "><a href="shop-grid-3-column.html"><i class="po po-pizza"></i>Gia Vị Hoàn Chỉnh</a></li>
                        <li class="menu-item "><a href="shop-grid-3-column.html"><i class="po po-burger"></i>Burgers</a></li>
                        <li class="menu-item "><a href="shop-grid-3-column.html"><i class="po po-salads"></i>Salads</a></li>
                        <li class="menu-item "><a href="shop-grid-3-column.html"><i class="po po-tacos"></i>Tacos</a></li>
                        <li class="menu-item "><a href="shop-grid-3-column.html"><i class="po po-wraps"></i>Wraps</a></li>
                        <li class="menu-item "><a href="shop-grid-3-column.html"><i class="po po-fries"></i>Fries</a></li>
                        <li class="menu-item "><a href="shop-grid-3-column.html"><i class="po po-salads"></i>Salads</a></li>
                        <li class="menu-item "><a href="shop-grid-3-column.html"><i class="po po-drinks"></i>Drinks</a></li>
                    </ul>
                </div>

            </nav>
            <!-- #site-navigation -->
            <div class="header-info-wrapper">
                <div class="header-phone-numbers">
                    <span class="intro-text">Đặt Hàng Ngay</span>
                    <select class="select-city-phone-numbers" name="city-phone-numbers" id="city-phone-numbers">
                   <option value="54 548 779 654">London</option>
                   <option value="33 398 621 710">Paris</option>
                   <option value="718 54 674 021">New York</option>
                </select>
                    <span id="" class="phone-number">{{ $configuration->hotline }}</span>
                </div>
                <ul class="site-header-cart-v2 menu">
                    <li class="cart-content ">
                        <a href="https://eshop.unispice.net/gio-hang.html" class="a-icon-text-btn a-icon-text-btn--icon-only c-header__minicart-button js-minicart__trigger">
                            <span class="icon-cart a-icon-text-btn__icon" aria-hdden="true"></span>
                            <span class="a-icon-text-btn__label">
                         My Cart </span>
                            <div></div>

                        </a>
                        
                        @if (get_data_user('web'))
                        <a class="a-icon-text-btn a-icon-text-btn--icon-only js-search-btn" href="{{ route('get.login') }}">
                           <span class="icon-account a-icon-text-btn__icon" aria-hidden="true"></span>
                           <span class="a-icon-text-btn__label">Users</span>
                        </a>
                            @else
                              <a class="a-icon-text-btn a-icon-text-btn--icon-only js-search-btn" href="{{ route('get.login') }}">
                                 <span class="icon-account a-icon-text-btn__icon" aria-hidden="true"></span>
                                 <span class="a-icon-text-btn__label">Users</span>
                              </a>
                            @endif
                        <div id="wrap">
                            <form action="{{ route('get.search') }}" autocomplete="off">
                                <input id="search" name="search" type="text" placeholder="Tìm kiếm...">
                                <span class="icon-search a-icon-text-btn__icon" aria-hidden="true"></span>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <div class="pizzaro-secondary-navigation">
        <nav class="secondary-navigation" aria-label="Secondary Navigation">
            <ul class="menu">
                <li class="menu-item">
                    <a href="shop-grid-3-column.html"><img style="float: left;padding: 5px;" width="45px" src="{{ asset('images/icon_menu/gia_vi_hoan_chinh.png') }}" alt=""><span> GIA VỊ HOÀN CHỈNH</span></a>
                </li>
                <li class="menu-item">
                    <a href="shop-grid-3-column.html"><img style="float: left;padding: 5px;" width="45px" src="{{ asset('images/icon_menu/tea.png') }}" alt=""><span> TRÀ</span></a>
                </li>
                <li class="menu-item">
                    <a href="shop-grid-3-column.html"><img style="float: left;padding: 5px;" width="45px" src="{{ asset('images/icon_menu/muoi.png') }}" alt=""><span> GIA VỊ & MUỐI</span></a>
                </li>
                <li class="menu-item">
                    <a href="shop-grid-3-column.html"><img style="float: left;padding: 5px;" width="45px" src="{{ asset('images/icon_menu/bbq.png') }}" alt=""><span> GIA VỊ TẨM ƯỚP & BBQ</span></a>
                </li>
                <li class="menu-item">
                    <a href="shop-grid-3-column.html"><img style="float: left;padding: 5px;" width="45px" src="{{ asset('images/icon_menu/san_pham_moi_1.png') }}" alt=""><span> SẢN PHẨM MỚI</span></a>
                </li>
                <li class="menu-item">
                    <a href="shop-grid-3-column.html"><img style="float: left;padding: 5px;" width="45px" src="{{ asset('images/icon_menu/san_pham_moi.png') }}" alt=""><span> GIA VỊ QUÀ TẶNG</span></a>
                </li>
                <li class="menu-item">
                    <a href="shop-grid-3-column.html"><img style="float: left;padding: 5px;" width="45px" src="{{ asset('images/icon_menu/gia_vi_tu_nhien.png') }}" alt=""><span> GIA VỊ TỰ NHIÊN</span></a>
                </li>
                <li class="menu-item">
                    <a href="shop-grid-3-column.html"><img style="float: left;padding: 5px;" width="45px" src="{{ asset('images/icon_menu/khuyen_mai.png') }}" alt=""><span> KHUYẾN MÃI</span></a>
                </li>
            </ul>
        </nav>
        <!-- #secondary-navigation -->
    </div>
</header>