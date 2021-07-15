<header role="banner" class="c-header">
                <!-- BASE-->
                <div class="c-header__top">
                    <!-- BASE :: PROMO-MESSAGE -->
                    <div class="c-header__promo">
                        <a href="tel:0969938801" class="m-account-menu__link">
                            <span class="m-account-menu__link-text a-promo-message">
                                Hotline: {!! nl2br($configuration->hotline ?? '') !!}
                            </span>
                        </a>
                    </div>
                    <div class="c-header__account-menu-desktop">
                        <ul class="m-account-menu">
                            <li class="m-account-menu__item">
                                <a href="{{ route('get.login') }}" class="m-account-menu__link">
                                    <span class="m-account-menu__link-text">
                                        Sign In/Create Account
                                    </span>
                                </a>
                            </li>
                            <li class="m-account-menu__item">
                                <a href="/associate-member-landing" class="m-account-menu__link">
                                    <span class="m-account-menu__link-text">
                                        Tìm cửa hàng
                                    </span>
                                </a>
                            </li>
                            <li class="m-account-menu__item">
                                <a href="https://shop.coopmarket.com/wishlist/" class="m-account-menu__link">
                                    <span class="m-account-menu__link-text">
                                        B2B
                                    </span>
                                </a>
                            </li>
                            <li class="m-account-menu__item">
                                <a href="/associate-member-landing" class="m-account-menu__link">
                                    <span class="m-account-menu__link-text">
                                        Spice club
                                    </span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- BASE -->
                <div class="c-header__main js-main-menu">
                    <div class="c-header__menu-button">
                        <!-- BASE -->
                        <button class="a-icon-text-btn  a-icon-text-btn--icon-only js-main-menu__trigger" type="button">
                            <span class="icon-menu a-icon-text-btn__icon" aria-hidden="true"></span>
                            <span class="a-icon-text-btn__label">Menu</span>
                        </button>
                        <!-- /BASE -->
                    </div>
                    <div class="c-header__logo">
                        <a class="a-logo" href="/">
                            <img data-src="{{ pare_url_file($configuration->logo) }}" class="lazyload" alt="Home" />
                        </a>
                    </div>
                    <!-- BASE -->
                    <div class="c-header__main-panel">
                        <!-- BASE -->
                        <button class="a-icon-text-btn  c-header__main-panel-close a-icon-text-btn--icon-only js-main-menu__trigger" type="button">
                            <span class="icon-close a-icon-text-btn__icon" aria-hidden="true"></span>
                            <span class="a-icon-text-btn__label">Close Menu</span>
                        </button>
                        <div class="c-header__main-panel-top">
                            @include('pages.components.headers._inc_menu')
                            
                            <div class="c-header__search-panel-wrapper js-search-panel">
                                <div class="c-header__search-panel">
                                    <!-- BASE :: BLK-HEADER-MAIN-PANEL-TOP-SEARCH -->
                                    <div>
                                        <div class="js-view-dom-id-c75dfc58f2982dad582fbc9ee2ab133dc2297d43e99590b5cb43ba19e0750150">
                                            <div class="m-search-panel">
                                                <div class="m-search-panel__input">
                                                    <form class="views-exposed-form m-search frontier-custom-header-search-form" data-drupal-selector="views-exposed-form-acquia-search-block-header-search" action="/search" method="get" id="views-exposed-form-acquia-search-block-header-search" accept-charset="UTF-8">
                                                        <div class="m-search__input-wrapper frontier-search-exposed">
                                                            <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-search form-item-search">
                                                                <label for="edit-search">Search</label>
                                                                <input data-drupal-selector="edit-search" type="text" id="edit-search" name="search" value="" size="30" maxlength="128" class="form-text m-search__input js-search__input frontier-custom-header-search-form-input" placeholder="What can we help you find?" aria-label="Search">
                                                                <div class="m-search__underline"></div>
                                                            </div>
                                                            <div class="js-form-item form-item js-form-type-select form-type-select js-form-item-type form-item-type">
                                                                <label for="edit-type">Content type</label>
                                                                <select data-drupal-selector="edit-type" id="edit-type" name="type" class="form-select">
                                                                    <option value="All">- Any -</option>
                                                                    <option value="1" selected="selected">Products</option>
                                                                    <option value="2">Recipes</option>
                                                                    <option value="3">Guides</option>
                                                                    <option value="4">Articles</option>
                                                                </select>
                                                            </div>
                                                            <div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-wrapper" id="edit-actions">
                                                                <input data-drupal-selector="edit-submit-acquia-search" type="submit" id="edit-submit-acquia-search" value="Search" class="button js-form-submit form-submit js-submit-input drupal-submit" />
                                                            </div>
                                                            <span class="views-exposed-form a-icon-text-btn m-search__submit-btn a-icon-text-btn--icon-only" data-drupal-selector="views-exposed-form-acquia-search-block-header-search">
                                                                <span class="icon-search a-icon-text-btn__icon js-submit-icon" aria-hidden="true"></span>
                                                                <span class="a-icon-text-btn__label">Search</span>
                                                            </span>
                                                        </div>
                                                        <button class="a-icon-text-btn m-search__close-btn a-icon-text-btn--icon-only js-search-panel__trigger js-search-close" type="button">
                                                            <span class="icon-close a-icon-text-btn__icon" aria-hidden="true"></span>
                                                            <span class="a-icon-text-btn__label">Cancel</span>
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="m-search-panel__trending">
                                                    <div id="block-frontiertrendingsearchblock-frontiercoop" data-block-plugin-id="trending_search_block">
                                                        <div class="m-search-panel__trending-heading">
                                                            Trending
                                                        </div>
                                                        <ul class="m-search-panel__trending-list">
                                                            <li class="m-search-panel__trending-item">
                                                                <button class="a-btn a-btn--text js-search-trending" type="button">
                                                                    simply organic spices
                                                                </button>
                                                            </li>
                                                            <li class="m-search-panel__trending-item">
                                                                <button class="a-btn a-btn--text js-search-trending" type="button">
                                                                    plant boss
                                                                </button>
                                                            </li>
                                                            <li class="m-search-panel__trending-item">
                                                                <button class="a-btn a-btn--text js-search-trending" type="button">
                                                                    simply organic simmer sauce
                                                                </button>
                                                            </li>
                                                            <li class="m-search-panel__trending-item">
                                                                <button class="a-btn a-btn--text js-search-trending" type="button">
                                                                    nettle
                                                                </button>
                                                            </li>
                                                            <li class="m-search-panel__trending-item">
                                                                <button class="a-btn a-btn--text js-search-trending" type="button">
                                                                    sweet
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="m-search-panel__results  js-search-results">
                                                    <div class="m-search-panel__categories-container dragscroll">
                                                        <ul class="m-search-panel__categories">

                                                            <li class="m-search-panel__category">
                                                                <a class="t-srp__category-link js-srp-category-link t-srp__category-link--active frontier-custom-headersearch-tabs" data-type="Products" data-frontier-search-custom-value="1">
                                                                    Products
                                                                    ( 7777 )
                                                                </a>
                                                            </li>
                                                            <li class="m-search-panel__category">
                                                                <a class="t-srp__category-link js-srp-category-link  frontier-custom-headersearch-tabs" data-type="Recipes" data-frontier-search-custom-value="2">
                                                                    Recipes
                                                                    ( 14 )
                                                                </a>
                                                            </li>
                                                            <li class="m-search-panel__category">
                                                                <a class="t-srp__category-link js-srp-category-link  frontier-custom-headersearch-tabs" data-type="Guides" data-frontier-search-custom-value="3">
                                                                    Guides
                                                                    ( 0 )
                                                                </a>
                                                            </li>
                                                            <li class="m-search-panel__category">
                                                                <a class="t-srp__category-link js-srp-category-link  frontier-custom-headersearch-tabs" data-type="Articles" data-frontier-search-custom-value="4">
                                                                    Articles
                                                                    ( 2 )
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="m-search-panel__products-container dragscroll">
                                                        <div class="a-message a-message--warning">

                                                        </div>

                                                        <ul class="m-search-panel__products">

                                                        </ul>
                                                    </div>
                                                    <div class="m-search-panel__show-all-wrapper">
                                                        <a class="m-search-panel__show-all a-btn a-btn--primary frontier-custom-search-panel-show-all">Show All Results</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /BASE :: BLK-HEADER-MAIN-PANEL-TOP-SEARCH -->
                                </div>
                                <button class="c-header__search-panel-open js-search-panel__trigger">
                                    <span>Search</span>
                                </button>
                            </div>
                        </div>
                        <!-- /BASE :: HEADER-MAIN-PANEL-TOP-A -->
                        <!-- BASE :: HEADER-MAIN-PANEL-bottom-A -->
                        <div class="c-header__main-panel-bottom">
                            <!-- BASE :: BLK-HEADER-MAIN-PANEL-BOTTOM-CONTENT -->
                            <div class="c-header__account-menu-desktop">
                                <ul class="m-account-menu">
                                    <li class="m-account-menu__item">
                                        <a href="/associate-member-landing" class="m-account-menu__link">
                                            <span class="m-account-menu__link-text">
                                                Join Us
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-account-menu__item">
                                        <a href="https://shop.coopmarket.com/wishlist/" class="m-account-menu__link">
                                            <span class="m-account-menu__link-text">
                                                Wishlist
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="c-header__social">
                                <ul class="m-social-links">
                                    <li class="m-social-links__link">
                                        <a class="a-icon-text-btn a-icon-text-btn--icon-only" href="https://www.facebook.com/coopmarketpage" target="_blank">
                                            <span class="icon-facebook  a-icon-text-btn__icon" aria-hidden="true"></span>
                                            <span class="a-icon-text-btn__label">Facebook</span>
                                        </a>
                                    </li>
                                    <li class="m-social-links__link">
                                        <a class="a-icon-text-btn a-icon-text-btn--icon-only" href="https://www.instagram.com/coopmarket/" target="_blank">
                                            <span class="icon-instagram  a-icon-text-btn__icon" aria-hidden="true"></span>
                                            <span class="a-icon-text-btn__label">Instagram</span>
                                        </a>
                                    </li>
                                    <li class="m-social-links__link">
                                        <a class="a-icon-text-btn a-icon-text-btn--icon-only" href="https://www.twitter.com/coop_market" target="_blank">
                                            <span class="icon-twitter  a-icon-text-btn__icon" aria-hidden="true"></span>
                                            <span class="a-icon-text-btn__label">Twitter</span>
                                        </a>
                                    </li>
                                    <li class="m-social-links__link">
                                        <a class="a-icon-text-btn a-icon-text-btn--icon-only" href="https://www.pinterest.com/coopmarket/" target="_blank">
                                            <span class="icon-pinterest  a-icon-text-btn__icon" aria-hidden="true"></span>
                                            <span class="a-icon-text-btn__label">Pinterest</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /BASE :: BLK-HEADER-MAIN-PANEL-BOTTOM-CONTENT -->
                        </div>
                        <!-- /BASE :: HEADER-MAIN-PANEL-bottom-A -->
                    </div>
                    <!-- /BASE -->
                    <div class="c-header__icon-btns">
                        <div class="c-header__search-button">
                            <a class="a-icon-text-btn a-icon-text-btn--icon-only js-search-btn" href="#">
                                <span class="icon-search a-icon-text-btn__icon" aria-hidden="true"></span>
                                <span class="a-icon-text-btn__label">Search</span>
                            </a>
                        </div>
                        <div class="c-header__account-button js-account" style="display:none">

                            <a class="a-icon-text-btn a-icon-text-btn--icon-only" href="https://shop.coopmarket.com/customer/account/index/referer/aHR0cDovL2Zyb250aWVyY29vcC5wcm9kLmFjcXVpYS1zaXRlcy5jb20%3D">
                                <span class="icon-account a-icon-text-btn__icon" aria-hidden="true"></span>
                                <span class="a-icon-text-btn__label">My Account</span>
                            </a>
                        </div>
                        <div class="c-header__minicart js-minicart">
                            <button class="a-icon-text-btn a-icon-text-btn--icon-only c-header__minicart-button js-minicart__trigger">
                                <span class="icon-cart a-icon-text-btn__icon" aria-hdden="true"></span>
                                <span class="a-icon-text-btn__label">
                                    My Cart </span>
                            </button>
                            <div class="c-header__minicart-panel">
                                <div class="m-minicart">

                                    <div class="m-minicart__content">
                                        <div class="m-minicart__empty">
                                            <p>Your Shopping Cart is Empty.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /BASE -->
                <!-- /BASE-->
            </header>