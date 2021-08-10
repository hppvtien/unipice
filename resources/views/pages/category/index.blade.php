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
                                @include('pages.category._banner')
                                <div class="layout layout--onecol">
                                    <div class="layout__region layout__region--content">
                                        <div class="views-element-container">
                                            <div class="t-plp js-plp" id="js-plp">
                                                @include('pages.category._fillterOptions')
                                                <div class="t-plp__container js-plp-container">
                                                    @include('pages.category._fillterBy')
                                                    <div class="">
                                                        <div class="cat-desscription">
                                                            <h2>
                                                                {{ $category->desscription }}
                                                            </h2>
                                                            <p>
                                                                {{ $category->content }}
                                                            </p>
                                                            <img class="" src="/images/icon_menu/cooking-spices-ingredients.jpg" alt="">
                                                        </div>
                                                        <div class="cat-parent">
                                                            <div class="row">
                                                                @foreach(getCatParent($category->id) as $parentItem)
                                                                <div class="col-md-3 col-lg-3 col-6 parent-item">
                                                                    <a class="btn btn-parent" href="/{{ getSlugCategory($parentItem->slug) }}">
                                                                        {{ $parentItem->name }}
                                                                    </a>
                                                                </div>
                                                                @endforeach
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
                                                                                <img class="m-product-card__img ls-is-cached lazyloaded" data-src="{{ pare_url_file($item->thumbnail) }}" alt="{{ $item->name }}" src="{{ pare_url_file($item->thumbnail) }}">
                                                                            </a>
                                                                            <a class="fav-product">
                                                                                <span my-id="{{ $item->id }}" id="red_heart{{ $item->id }}" data-target="{{ get_data_user('web') ==null ? '.login-js' :'' }}" data-toggle="{{ get_data_user('web') == null ? 'modal' :'' }}" data-uid="{{ get_data_user('web') != null ? get_data_user('web') : 0 }}" {{ get_data_user('web') !=null ? get_data_user('web') : 0 }} onclick="{{ get_data_user('web') !=null ? 'check_my_favorites_add(this)' : 'unset' }};" class="icon-favorite  a-icon-text-btn__icon  {{ red_heart($item->id,get_data_user('web')) != 0 ? 'red':''; }}" aria-hidden=""></span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="m-product-card__info">
                                                                            <div class="m-combined-product-name group-product">
                                                                                <a class="m-combined-product-name__link product-name-fio" href="{{ $item->slug }}">
                                                                                    <span class="a-folio">
                                                                                        {{ $item->name }}
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="m-product-card__sku">
                                                                                <span> SKU: {{ $item->id }}</span>
                                                                                <span> <img src="{{ asset('img/brand/star_5.png') }}" alt=""> ({{ countReview($item->id) }} đánh giá)</span>
                                                                            </div>
                                                                            <div class="m-price-lockup m-product-card__price">
                                                                                <span class="m-price-lockup__price">
                                                                                    <?php if (checkUid($uid)) { ?>
                                                                                        <?php if ($item->view_price_sale_store != null) { ?>
                                                                                            <span class="g-price">
                                                                                                {{ formatVnd($item->view_price) }}
                                                                                            </span>
                                                                                            <span class="text-danger paid-save">
                                                                                                @if ($item->view_price_sale_store == null || $item->view_price == null)

                                                                                                @else
                                                                                                (Tiết kiệm: {{ 100-round($item->view_price_sale_store*100/$item->view_price) }}% )
                                                                                                @endif
                                                                                            </span>
                                                                                            <br>
                                                                                            <span class="a-price font-weight-bold">
                                                                                                {{ formatVnd($item->view_price_sale_store) }}
                                                                                            </span>
                                                                                            <?php if ($item->qty) { ?>
                                                                                                <span class="a-price text-success product-notnull"><i class="fa fa-check" aria-hidden="true"></i>Còn hàng</span>
                                                                                            <?php } else { ?>
                                                                                                <span class="a-price text-dark product-notnull"><i class="fa fa-question-circle" aria-hidden="true"></i>Hết hàng</span>
                                                                                            <?php } ?>
                                                                                        <?php } else { ?>
                                                                                            <a href="{{ route('get.uni_contact') }}"><span class="a-price">Liên hệ để biết thông tin</span></a>
                                                                                        <?php } ?>
                                                                                    <?php } else { ?>
                                                                                        <?php if ($item->view_price_sale != null) { ?>
                                                                                            <span class="g-price">
                                                                                                {{ formatVnd($item->view_price) }}
                                                                                            </span>
                                                                                            <span class="text-danger paid-save">
                                                                                                @if ($item->view_price_sale == null || $item->view_price == null)

                                                                                                @else
                                                                                                (Tiết kiệm: {{ 100-round($item->view_price_sale*100/$item->view_price) }}% )
                                                                                                @endif

                                                                                            </span>
                                                                                            <br>
                                                                                            <span class="a-price font-weight-bold">
                                                                                                {{ formatVnd($item->view_price_sale) }}
                                                                                            </span>
                                                                                            <?php if ($item->qty) { ?>

                                                                                                <span class="a-price text-success product-notnull"><i class="fa fa-check" aria-hidden="true"></i>Còn hàng</span>

                                                                                            <?php } else { ?>
                                                                                                <span class="a-price text-info product-notnull"><i class="fa fa-phone"></i>Liên hệ</span>
                                                                                            <?php } ?>
                                                                                            <span class="row">
                                                                                                <div class="buttons_added add-qty col-12">
                                                                                                    <input class="minus is-form" type="button" value="-">
                                                                                                    <input aria-label="quantity" class="input-qty update-qty" id="js-qty{{ $item->id }}" max="10" min="1" name="qty-user" type="number" value="1">
                                                                                                    <input class="plus is-form" type="button" value="+">
                                                                                                </div>
                                                                                            </span>
                                                                                        <?php } ?>

                                                                                    <?php } ?>
                                                                                </span>
                                                                            </div>
                                                                            <div class="m-combined-product-name group-product group-product-cart">
                                                                                <?php if (checkUid(get_data_user('web')) != null) { ?>
                                                                                    <div class="info-sale-store">
                                                                                        <a href="{{ $item->slug }}" title="{{ $item->name }}">
                                                                                            <img src="{{ pare_url_file($item->thumbnail) }}" alt="{{ $item->name }}">
                                                                                        </a>
                                                                                        <p><span class="text-warning font-weight-bold">SL/ Thùng:</span> {{ $item->qty_in_box }} hộp</p>
                                                                                        <p><span class="text-warning font-weight-bold">SL mua tối thiểu:</span> {{ $item->min_box }} thùng</p>
                                                                                        <p><span class="text-warning font-weight-bold">Giá:</span> {{ formatVnd($item->qty_in_box * $item->view_price_sale_store) }}/thùng</p>
                                                                                    </div>
                                                                                    <?php if ($item->qty == null) { ?>
                                                                                        <a href="{{ route('get.uni_contact') }}" class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn contact-btn" type="button">Liên hệ</a>
                                                                                    <?php } else { ?>
                                                                                        <button class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn js-add-cart" data-min-box="{{ $item->min_box }}" data-qtyinbox="{{ $item->qty_in_box }}" data-url="{{ route('get_user.cart.add',['id' => $item->id,'type' => 'single']) }}" data-uid="{{ get_data_user('web') }}" type="button">Thêm giỏ hàng</button>
                                                                                    <?php } ?>

                                                                                <?php } else { ?>
                                                                                    <?php if ($item->qty == null) { ?>
                                                                                        <a href="{{ route('get.uni_contact') }}" class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn contact-btn" type="button">Liên hệ</a>
                                                                                    <?php } else { ?>
                                                                                        <form>
                                                                                            <button class="a-btn a-btn--primary m-product-card__add-to-cart-btn {{ get_data_user('web') != null ? 'js-add-cart':'' }}" data-target="{{ get_data_user('web') ==null ? '.login-js' :'' }}" data-toggle="{{ get_data_user('web') == null ? 'modal' :'' }}" data-url="{{ route('get_user.cart.add',['id' => $item->id,'type' => 'single']) }}" data-uid="{{ get_data_user('web') }}" data-id="{{ $item->id }}" type="button">Thêm giỏ hàng</button>
                                                                                            <button class="a-btn a-btn--primary m-product-card__add-to-cart-icon" data-target=".login-js" data-toggle="modal" type="&quot;submit&quot;">
                                                                                                <span class="icon-add-to-cart"></span>
                                                                                            </button>
                                                                                        </form>
                                                                                    <?php } ?>
                                                                                <?php } ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="m-product-card__cta"></div>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        @empty
                                                        @endforelse
                                                        <div id="toast-container" class="toast-top-right">

                                                        </div>
                                                        <script>
                                                            function check_my_favorites_add(my_id) {
                                                                var title = $(my_id).attr('my-id');
                                                                var uid = $(my_id).attr('data-uid');

                                                                $.get("{{ route('get_user.myfavorites_add') }}", {
                                                                        id: title
                                                                    })
                                                                    .done(function(data) {
                                                                        if (data.count != 0) {
                                                                            $('#count-fav').html('<div class="c-header__minicart-count count-fav" style="bottom: -10px;right: -5px"><span style="font-size: 15px;margin: auto;text-align: center;padding-left: 5px;" id="js-count-favorite">' + data.count + '</span>' +
                                                                                '</div>');
                                                                        } else {
                                                                            $('#count-fav').html('');
                                                                        }

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
                                                    </div>
                                                </div>
                                                <?php if (count($product) > 12) { ?>
                                                    <div>
                                                        <a href="#" id="loadMore">Xem Thêm</a>
                                                    </div>
                                                <?php } else { ?>

                                                <?php } ?>
                                            </div>

                                        </div>
                                        
                                    </div>
                                    @include('pages.category._item_product_rel')
                                        @include('pages.category._item_product_review')
                                </div>
                            </div>
                    </header>
                </div>
            </div>
        </div>
    </div>
</main>
@stop