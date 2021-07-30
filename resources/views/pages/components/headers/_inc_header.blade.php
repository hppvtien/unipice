<header id="masthead" class="site-header header-v1" style="background-color: #0b2d25;">
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
                        <li class="menu-item"><a href="shop-grid-3-column.html">B2B</a></li>
                        <li class="menu-item"><a href="shop-grid-3-column.html">Spice Club</a></li>
                        <li class="menu-item"><a href="{{ route('get.find') }}">Tìm Cửa hàng</a></li>
                        <li class="menu-item"><a href="{{ route('get.about') }}">Giới Thiệu</a></li>
                    </ul>
                </div>

            </nav>
            <!-- #site-navigation -->
            <div class="header-info-wrapper">
                <div class="header-phone-numbers">
                    <div class="lang-menu">
                        <div class="selected-lang">
                            Vietnamses
                        </div>
                        <ul>
                            <li>
                                <a href="" class="en">English</a>
                            </li>
                            <li>
                                <a href="#" class="de">German</a>
                            </li>
                        </ul>
                        
                    </div>
                    <span id="" class="phone-number">{{ $configuration->hotline }}</span>
                </div>
                <ul class="site-header-cart-v2 menu">
                    <li class="cart-content ">
                        <a href="{{ route('get_user.cart') }}" class="a-icon-text-btn a-icon-text-btn--icon-only c-header__minicart-button js-minicart__trigger">
                            <span class="icon-cart a-icon-text-btn__icon" aria-hdden="true"></span>
                            <span class="a-icon-text-btn__label">
                                My Cart </span> @php $dem = count(\Cart::content()); @endphp @if($dem == 0)
                            <div></div>
                            @else
                            <div class="c-header__minicart-count" style="bottom: -10px;right: -5px;">
                                <span style="font-size: 15px;margin: auto;text-align: center;padding-left: 5px;">{{ $dem }}</span>
                            </div>
                            @endif

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
            @include('pages.components.headers._inc_menu')
        </nav>
        <!-- #secondary-navigation -->
    </div>
</header>