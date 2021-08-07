@extends('pages.layouts.app_master_frontend') @section('contents')
<main role="main">
    <a id="main-content" tabindex="-1"></a>
    <div class="layout-content">
        <div class="region region-content">
            <div data-drupal-messages-fallback class="hidden"></div>
            <div id="block-frontiercoop-market-content" data-block-plugin-id="system_main_block">
                <div class="views-element-container">
                    <header>
                        <div data-frontier-type="products_categories" id="taxonomy-term-521" class="taxonomy-term vocabulary-products-categories">
                            <div class="content">
                                <div class="layout layout--onecol">
                                    <div class="layout__region layout__region--content">
                                        <div data-block-plugin-id="entity_view:taxonomy_term">
                                            <div class="c-page-header c-page-header--light">
                                                <picture class="c-page-header__image">
                                                    <source media="(min-width: 1024px)" data-srcset="{{ pare_url_file($category->banner) }}">
                                                    <img class="lazyload" data-src="{{ pare_url_file($category->banner) }}" alt="{{ $category->name }}">
                                                </picture>
                                                <div class="c-page-header__content">
                                                    <h1 class="c-page-header__headline">
                                                        <div class="field field--name-name field--type-string field--label-hidden field__item">{{ $category->name }}</div>
                                                    </h1>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="layout layout--onecol">
                                    <div class="layout__region layout__region--content">
                                        <div class="views-element-container" data-block-plugin-id="views_block:page_listing_page_recipe_products_-product_listing_page">
                                            <div class="views-element-container">
                                                <div class="t-plp js-plp" id="js-plp">
                                                    <div class="t-plp__nav">
                                                        <nav class="m-breadcrumb" aria-label="Breadcrumb">
                                                            <h2 class="visually-hidden">Breadcrumb</h2>
                                                            <ol class="m-breadcrumb__list">
                                                                <li class="m-breadcrumb__item">
                                                                    <a class="a-anchor" href="/">Home</a>
                                                                </li>
                                                                <li class="m-breadcrumb__item m-breadcrumb__item--active">
                                                                    <a class="a-anchor" aria-current="page">{{ $category->name }}</a>
                                                                </li>
                                                            </ol>
                                                        </nav>
                                                        <div class="t-plp__filter-bar js-filter-bar">
                                                            <div class="c-filter-bar">
                                                                <button class="c-filter-bar__filter-btn a-icon-text-btn a-icon-text-btn--icon-right js-toggle-filters" type="button">
                                                                    <span class="icon-filters a-icon-text-btn__icon" aria-hidden="true"></span>
                                                                    <span class="a-icon-text-btn__label">
                                                                        <span class="c-filter-bar__label--show">Show Filters</span>
                                                                        <span class="c-filter-bar__label--hide">Hide Filters</span>
                                                                    </span>
                                                                </button>
                                                                <div class="c-filter-bar__sorting">
                                                                    <div class="m-sort-by">
                                                                        <label class="m-sort-by__label" for="sort_by">Sort By</label>
                                                                        <select class="m-sort-by__select frontier-custom-sort" id="sort_by" name="sort_by" aria-label="Sort By">
                                                                            <option value="price" selected>Price</option>
                                                                            <option value="name">Name</option>
                                                                        </select>
                                                                        <span class="m-sort-by__arrow"></span>
                                                                    </div>
                                                                    <div class="m-sort-by">
                                                                        <label class="m-sort-by__label" for="order_by">Order By</label>
                                                                        <select class="m-sort-by__select frontier-custom-sort" id="order_by" name="order_by" aria-label="Order By">
                                                                            <option value="asc" selected>Asc</option>
                                                                            <option value="desc">Desc</option>
                                                                        </select>

                                                                        <span class="m-sort-by__arrow"></span>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="t-plp__quick-filters js-mobile-quick-filters">
                                                        </div>
                                                    </div>
                                                    <div class="t-plp__container js-plp-container">
                                                        <div class="t-plp__filters js-filters">
                                                            <div class="c-sidebar-filters">
                                                                <div class="c-sidebar-filters__close-filters">
                                                                    <!-- BASE -->
                                                                    <button class="a-icon-text-btn  a-icon-text-btn--icon-only js-close-filters" type="button">
                                                                        <span class="icon-close a-icon-text-btn__icon" aria-hidden="true"></span>
                                                                        <span class="a-icon-text-btn__label">Ẩn bộ lọc</span>
                                                                    </button>
                                                                    <!-- /BASE -->
                                                                </div>
                                                                <div class="c-sidebar-filters__heading">
                                                                    <p class="c-sidebar-filters__title">Lọc với:</p>
                                                                </div>
                                                                <div class="c-sidebar-filters__list">

                                                                    <div data-drupal-facet-id="product_brand_plp" data-drupal-facet-alias="product_brand_plp" class="facet-inactive js-facets-checkbox-links m-accordion js-filter-accordion">
                                                                        <div class="m-accordion__title m-accordion__title--open js-accordion-trigger">
                                                                            <span class="m-accordion__title-label">Thương hiêu</span>
                                                                        </div>
                                                                        <div class="m-accordion__content m-accordion__content--open js-accordion-content">
                                                                            <div class="m-accordion__content-inner js-accordion-content-inner js-frontier-facet">
                                                                                @forelse ($trade as $key => $item)
                                                                                <div class="facet-item m-checkbox c-sidebar-filters__filter">
                                                                                    <a href="javascript:;" class="name-filler" rel="nofollow" data-url="{{ route('get.fillter',$category->slug) }}" data-slug-trade="{{ $item->slug }}" data-drupal-facet-item-id="product-brand-plp-1171">
                                                                                        <span class="m-checkbox__text-label facet-item__value">
                                                                                            {{ $item->name }}
                                                                                            <span class="facet-item__count"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                                @empty @endforelse
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-drupal-facet-id="product_categories" data-drupal-facet-alias="product_categories" class="facet-inactive js-facets-checkbox-links m-accordion js-filter-accordion">
                                                                        <div class="m-accordion__title m-accordion__title--open js-accordion-trigger">
                                                                            <span class="m-accordion__title-label">Danh mục gia vị</span>
                                                                        </div>
                                                                        <div class="m-accordion__content m-accordion__content--open js-accordion-content">
                                                                            <div class="m-accordion__content-inner js-accordion-content-inner js-frontier-facet">
                                                                                @forelse ($categories as $key => $item)
                                                                                <div class="facet-item m-checkbox c-sidebar-filters__filter">
                                                                                    <a href="javascript:;" class="name-filler" rel="nofollow" data-url="{{ route('get.fillter',$category->slug) }}" data-slug-cat="{{ $item->slug }}">
                                                                                        <span class="m-checkbox__text-label facet-item__value">
                                                                                            {{ $item->name }}
                                                                                            <span class="facet-item__count"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                                @empty @endforelse
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="t-plp__grid js-plp-grid show-product" id="show-product">
                                                            @forelse ($product as $key => $item)
                                                            <div class="loadmore1 t-plp__product" style="transform-origin: 0px 0px;">
                                                                <div class="views-field views-field-search-api-rendered-item" style="transform-origin: 0px 0px;"><span class="field-content">
                                                                        <div data-product-name="{{ $item->name }}" data-product-sku="{{ $item->id }}" data-product-brand="frontiercoop_market" class="m-product-card">
                                                                            <div class="m-product-card__content-wrapper">
                                                                                <a class="m-product-card__img-wrapper" href="{{ $item->slug }}" title="{{ $item->name }}">
                                                                                    <img class="m-product-card__img ls-is-cached lazyloaded" data-src="{{ pare_url_file_product($item->thumbnail) }}" alt="{{ $item->name }}" src="{{ pare_url_file($item->thumbnail) }}">
                                                                                </a>
                                                                                <?php if (checkUid(get_data_user('web')) != null) { ?>
                                                                                    <form class="m-product-card__add-to-cart">
                                                                                        <div class="a-btn a-btn--primary m-product-card__add-to-cart-btn">
                                                                                            <?php if ($item->qty_in_box != null) { ?>
                                                                                                <p>Thùng: {{ $item->qty_in_box }} hộp</p>
                                                                                                <p>Số lượng: {{ $item->min_box }} trở lên</p>
                                                                                                <p>Giá: {{ formatVnd($item->qty_in_box * $item->price_sale_store) }}/thùng</p>
                                                                                                <button class="btn_store_submit js-add-cart" data-min-box="{{ $item->min_box }}" data-qtyinbox="{{ $item->qty_in_box }}" data-url="{{ route('get_user.cart.add',['id' => $item->id,'type' => 'single']) }}" data-uid="{{ get_data_user('web') }}" type="button">Thêm giỏ hàng</button>
                                                                                            <?php } else { ?>
                                                                                                <p class="text-center">Dữ liệu về sản phẩm</p>
                                                                                                <p class="text-center">đang được cập nhật</p>
                                                                                            <?php } ?>
                                                                                        </div>

                                                                                    </form>
                                                                                <?php } else { ?>
                                                                                    <form class="m-product-card__add-to-cart">
                                                                                        <button class="a-btn a-btn--primary m-product-card__add-to-cart-btn {{ get_data_user('web') != null ? 'js-add-cart':'' }}" data-target="{{ get_data_user('web') ==null ? '.login-js' :'' }}" data-toggle="{{ get_data_user('web') == null ? 'modal' :'' }}" data-url="{{ route('get_user.cart.add',['id' => $item->id,'type' => 'single']) }}" data-uid="{{ get_data_user('web') }}" data-id="{{ $item->id }}" type="button">Thêm giỏ hàng</button>
                                                                                        <button class="a-btn a-btn--primary m-product-card__add-to-cart-icon" data-target=".login-js" data-toggle="modal" type="&quot;submit&quot;">
                                                                                            <span class="icon-add-to-cart"></span>
                                                                                        </button>
                                                                                    </form>
                                                                                <?php } ?>
                                                                            </div>
                                                                            <div class="m-product-card__info">
                                                                                <div class="m-combined-product-name group-product">
                                                                                    <a class="m-combined-product-name__link product-name-fio" href="{{ $item->slug }}">
                                                                                        <span class="a-folio">
                                                                                            {{ $item->name }}
                                                                                        </span>
                                                                                    </a>
                                                                                    <span my-id="{{ $item->id }}" id="red_heart{{ $item->id }}" data-target="{{ get_data_user('web') ==null ? '.login-js' :'' }}" data-toggle="{{ get_data_user('web') == null ? 'modal' :'' }}" data-uid="{{ get_data_user('web') != null ? get_data_user('web') : 0 }}" {{ get_data_user('web') !=null ? get_data_user('web') : 0 }} onclick="{{ get_data_user('web') !=null ? 'check_my_favorites_add(this)' : 'unset' }};" class="icon-favorite  a-icon-text-btn__icon  {{ red_heart($item->id,get_data_user('web')) != 0 ? 'red':''; }}" aria-hidden=""></span>
                                                                                </div>
                                                                                <div class="m-product-card__sku">
                                                                                    <span> SKU: {{ $item->id }}</span>
                                                                                    <span> <img src="{{ asset('img/brand/star_5.png') }}" alt=""> ({{ countReview($item->id) }} đánh giá)</span>
                                                                                </div>
                                                                                <div class="m-price-lockup m-product-card__price">
                                                                                    <span class="m-price-lockup__price">
                                                                                        <?php if (checkUid($uid)) { ?>
                                                                                            <?php if ($item->price_sale_store != null) { ?>
                                                                                                <span class="a-price">
                                                                                                    {{ formatVnd($item->price_sale_store) }}
                                                                                                </span>
                                                                                            <?php } else { ?>
                                                                                                <a href="{{ route('get.uni_contact') }}"><span class="a-price">Liên hệ để biết thông tin</span></a>
                                                                                            <?php } ?>
                                                                                        <?php } else { ?>
                                                                                            <?php if ($item->price_sale != null) { ?>
                                                                                                <span class="g-price">
                                                                                                    {{ formatVnd($item->price) }}
                                                                                                </span>
                                                                                                <span class="text-danger paid-save">
                                                                                                    (Tiết kiệm: {{ 100-round($item->price_sale*100/$item->price) }}% )
                                                                                                </span>
                                                                                                <br>
                                                                                                <span class="a-price">
                                                                                                    {{ formatVnd($item->price_sale) }}
                                                                                                </span>
                                                                                                <br>
                                                                                                <span class="row">
                                                                                                    <div class="buttons_added col-12">
                                                                                                        <input class="minus is-form" type="button" value="-">
                                                                                                        <input aria-label="quantity" class="input-qty update-qty" id="js-qty{{ $item->id }}" max="10" min="1" name="qty-user" type="number" value="1">
                                                                                                        <input class="plus is-form" type="button" value="+">
                                                                                                    </div>
                                                                                                </span>
                                                                                                <?php if ($item->qty) { ?>
                                                                                                    <a href="{{ route('get.uni_contact') }}"><span class="a-price text-success"><i class="fa fa-check" aria-hidden="true"></i>Còn hàng</span></a>
                                                                                                <?php } else { ?>
                                                                                                    <a href="{{ route('get.uni_contact') }}"><span class="a-price text-primary"><i class="fa fa-phone"></i>Liên hệ</span></a>
                                                                                                <?php } ?>
                                                                                            <?php } else { ?>
                                                                                                <a href="{{ route('get.uni_contact') }}"><span class="a-price text-primary"><i class="fa fa-phone"></i>Liên hệ</span></a>
                                                                                            <?php } ?>
                                                                                        <?php } ?>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="m-product-card__cta"></div>
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div id="toast-container" class="toast-top-right">

                                                            </div>
                                                            @empty
                                                            @endforelse

                                                            <script>
                                                                function check_my_favorites_add(my_id) {
                                                                    var title = $(my_id).attr('my-id');
                                                                    var uid = $(my_id).attr('data-uid');

                                                                    $.get("{{ route('get_user.myfavorites_add') }}", {
                                                                            id: title
                                                                        })
                                                                        .done(function(data) {
                                                                            $('.c-header__minicart-count').html('' +
                                                                                '<span style="font-size: 15px;margin: auto;text-align: center;padding-left: 5px;" id="js-count-favorite">' + data.count + '</span>' +
                                                                                '');
                                                                            if (data.message == 'add') {
                                                                                $('#toast-container').html(' <div class="toast toast-success" aria-live="assertive" style=""><div class="toast-message">Sản phẩm được thêm vào danh sách yêu thích</div></div>'), 4000;
                                                                                setTimeout(function() {
                                                                                    $('.toast-success').remove();
                                                                                }, 2000);
                                                                                $('#red_heart' + title).addClass('red');
                                                                            } else {
                                                                                $('#toast-container').html(' <div class="toast toast-warning" aria-live="assertive" style=""><div class="toast-message">Sản phẩm được xóa khỏi danh sách yêu thích</div></div>'), 4000;
                                                                                setTimeout(function() {
                                                                                    $('.toast-warning').remove();
                                                                                }, 2000);
                                                                                console.log(data);
                                                                                $('#red_heart' + title).removeClass('red');
                                                                            };

                                                                        });


                                                                }
                                                            </script>

                                                            <script>
                                                                $(function() {
                                                                    $(".loadmore1").slice(0, 4).show();
                                                                    $("#loadMore").on("click", function(e) {
                                                                        e.preventDefault();
                                                                        $(".loadmore1:hidden").slice(0, 4).slideDown();
                                                                        if ($(".loadmore1:hidden").length == 0) {
                                                                            $("#load").fadeOut("slow");
                                                                        }
                                                                        $("#show-product").animate({
                                                                            scrollTop: $(this).offset().top
                                                                        }, 1500);
                                                                    });
                                                                });
                                                                $("a[href=#top]").click(function() {
                                                                    $("#show-product").animate({
                                                                        scrollTop: 0
                                                                    }, 600);
                                                                    return false;
                                                                });
                                                                $(window).scroll(function() {
                                                                    if ($(this).scrollTop() > 50) {
                                                                        $(".totop a").fadeIn();
                                                                    } else {
                                                                        $(".totop a").fadeOut();
                                                                    }
                                                                });
                                                            </script>

                                                        </div>

                                                    </div>
                                                </div>
                                                <?php if (count($product) > 4) { ?>
                                                    <div>
                                                        <a href="#" id="loadMore">Xem Thêm</a>
                                                    </div>
                                                <?php } else { ?>

                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </header>
                </div>
            </div>
        </div>
    </div>
</main>
@stop