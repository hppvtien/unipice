@extends('pages.layouts.app_master_frontend')
@section('contents')
<main role="main">
    <a id="main-content" tabindex="-1"></a>
    <div class="layout-content">
        <div class="region region-content">
            <div data-drupal-messages-fallback class="hidden"></div>
            <div id="block-frontiercoop-market-content">
                <div class="views-element-container">
                    <header>
                        <div id="taxonomy-term-521" class="taxonomy-term vocabulary-products-categories">
                            <div class="content">
                                <div class="layout layout--onecol">
                                    <div class="layout__region layout__region--content">
                                        <div class="views-element-container">
                                            <div class="views-element-container">
                                                <div class="t-plp js-plp" id="js-plp">
                                                    <div class="t-plp__container js-plp-container">
                                                        <h2>Tìm thấy: {{ count($product) }} sản phẩm với từ khóa: {{ $search }}</h2>
                                                        <div class="t-plp__grid js-plp-grid show-product" id="show-product">
                                                            @forelse ($product as $key => $item)
                                                            <div class="loadmore1 t-plp__product" style="transform-origin: 0px 0px;">
                                                                <div class="views-field views-field-search-api-rendered-item" style="transform-origin: 0px 0px;"><span class="field-content">
                                                                        <div data-product-name="{{ $item->name }}" data-product-sku="{{ $item->id }}" class="m-product-card">
                                                                            <div class="m-product-card__content-wrapper">
                                                                                <a class="m-product-card__img-wrapper" href="{{ getSlugProduct($item->slug) }}" title="{{ $item->name }}">
                                                                                    <img class="m-product-card__img ls-is-cached lazyloaded" data-src="{{ pare_url_file($item->thumbnail) }}" alt="{{ $item->name }}" src="{{ pare_url_file($item->thumbnail) }}">
                                                                                </a>
                                                                                <a class="fav-product">
                                                                                    <span my-id="{{ $item->id }}" id="red_heart{{ $item->id }}" data-target="{{ get_data_user('web') ==null ? '.login-js' :'' }}" data-toggle="{{ get_data_user('web') == null ? 'modal' :'' }}" data-uid="{{ get_data_user('web') != null ? get_data_user('web') : 0 }}" {{ get_data_user('web') !=null ? get_data_user('web') : 0 }} onclick="{{ get_data_user('web') !=null ? 'check_my_favorites_add(this)' : 'unset' }};" class="icon-favorite  a-icon-text-btn__icon  {{ red_heart($item->id,get_data_user('web')) != 0 ? 'red':''; }}" aria-hidden=""></span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="m-product-card__info">
                                                                                <div class="m-combined-product-name group-product">
                                                                                    <a class="m-combined-product-name__link product-name-fio uni-css-title" href="{{ getSlugProduct($item->slug) }}">
                                                                                        <span class="a-folio">
                                                                                            {{ $item->name }}
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="m-product-card__sku">
                                                                                    <span> SKU: {{ $item->id }}</span>
                                                                                    <span> <img src="{{ asset('img/brand/star_5.png') }}" alt="{{ $item->name }}"> ({{ countReview($item->id) }})</span>
                                                                                </div>
                                                                                <div class="m-price-lockup m-product-card__price">
                                                                                    <span class="m-price-lockup__price">
                                                                                        <?php if (checkUid(get_data_user('web'))) { ?>
                                                                                            <?php if (getPriceSaleStore($item->id) != null) { ?>
                                                                                                <span class="g-price">
                                                                                                    {{ formatVnd(getPrice($item->id)) }}
                                                                                                </span>
                                                                                                <span class="text-danger paid-save font_chu_mau_do">

                                                                                                    @if (getPriceSaleStore($item->id) == null || $item->view_price == null)

                                                                                                    @else
                                                                                                    (Tiết kiệm: {{ 100-round(getPriceSaleStore($item->id)*100/getPrice($item->id)) }}% )
                                                                                                    @endif
                                                                                                </span>
                                                                                                <br>
                                                                                                <span class="a-price font-weight-bold price-sale-preview{{ $item->id }}">
                                                                                                    {{ formatVnd(getPriceSaleStore($item->id)) }}
                                                                                                </span>
                                                                                                <?php if ($item->qty) { ?>
                                                                                                    <span class="a-price text-success product-notnull"><i class="fa fa-check" aria-hidden="true"></i>Còn hàng</span>
                                                                                                <?php } else { ?>
                                                                                                    <span class="a-price text-dark product-notnull"><i class="fa fa-phone" aria-hidden="true"></i>Liên hệ</span>
                                                                                                <?php } ?>
                                                                                            <?php } else { ?>
                                                                                                <a href="{{ route('get.uni_contact') }}"><span class="a-price">{{ formatVnd(getPrice($item->id)) }}</span></a>
                                                                                            <?php } ?>
                                                                                        <?php } else { ?>
                                                                                            <?php if (getPriceSale($item->id) != null) { ?>
                                                                                                <span class="g-price">
                                                                                                    {{ formatVnd(getPrice($item->id)) }}
                                                                                                </span>
                                                                                                <span class="text-danger paid-save font_chu_mau_do">

                                                                                                    (Tiết kiệm: {{ 100-round(getPriceSale($item->id)*100/getPrice($item->id)) }}% )

                                                                                                </span>
                                                                                                <br>
                                                                                                <span class="a-price font-weight-bold price-sale-preview{{ $item->id }}">
                                                                                                    {{ formatVnd(getPriceSale($item->id)) }}
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
                                                                                            <?php } else { ?>
                                                                                                <span>
                                                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                </span>
                                                                                                <span class="text-danger paid-save font_chu_mau_do">
                                                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                </span>
                                                                                                <br>
                                                                                                <span class="a-price font-weight-bold price-sale-preview{{ $item->id }}">
                                                                                                    {{ formatVnd(getPrice($item->id)) }}
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
                                                                                            <a href="{{ $item->slug }}" title="{{ $item->name }}" class="text-center">
                                                                                                <img src="{{ pare_url_file($item->thumbnail) }}" alt="{{ $item->name }}">
                                                                                            </a>
                                                                                            <p><span class="font-weight-bold" style="color:#ea7236">SL/ Thùng:</span> {{ getQtyInBox($item->id) }} lọ</p>
                                                                                            <p><span class="font-weight-bold" style="color:#ea7236">SL mua tối thiểu:</span> {{ getMinBox($item->id) }} thùng</p>
                                                                                            <p><span class="font-weight-bold" style="color:#ea7236">Giá:</span> {{ formatVnd(getQtyInBox($item->id) * getPriceSaleStore($item->id)) }}/thùng</p>
                                                                                        </div>
                                                                                        <?php if ($item->qty == null) { ?>
                                                                                            <a href="javascript:;" class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn contact-btn js-add-contact" type="button" rel=""  data-name-product="{{ $item->name }}" data-id-prd="{{ $item->id }}" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Liên hệ</a>
                                                                                        <?php } else { ?>
                                                                                            <button class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn js-add-cart box-shadow-in" data-size="{{ getSizeId($item->id) }}" data-id="{{ $item->id }}" data-min-box="{{ getMinBox($item->id) }}" data-qtyinbox="{{ getQtyInBox($item->id) }}" data-url="{{ route('get_user.cart.add',['id' => $item->id,'type' => 'single']) }}" data-uid="{{ get_data_user('web') }}" type="button">Thêm giỏ hàng</button>
                                                                                        <?php } ?>

                                                                                    <?php } else { ?>
                                                                                        <?php if ($item->qty == null) { ?>
                                                                                            <a href="javascript:;" class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn contact-btn js-add-contact" type="button" rel="" data-name-product="{{ $item->name }}" data-id-prd="{{ $item->id }}" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Liên hệ</a>
                                                                                        <?php } else { ?>
                                                                                            <form>
                                                                                                <button class="a-btn a-btn--primary m-product-card__add-to-cart-btn box-shadow-in {{ get_data_user('web') != null ? 'js-add-cart':'' }}" data-size="{{ getSizeId($item->id) }}" data-id="{{ $item->id }}" data-target="{{ get_data_user('web') ==null ? '.login-js' :'' }}" data-toggle="{{ get_data_user('web') == null ? 'modal' :'' }}" data-url="{{ route('get_user.cart.add',['id' => $item->id,'type' => 'single']) }}" data-uid="{{ get_data_user('web') }}" type="button">Thêm giỏ hàng</button>
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
                                                        <div class="t-plp__grid js-plp-grid">
                                                        </div>
                                                    </div>
                                                    <?php if (count($product) > 8) { ?>
                                                        <div class="class_xem_them">
                                                            <a href="javascript:;" id="loadMore">Xem Thêm</a>
                                                        </div>
                                                    <?php } elseif (count($product) == 8) { ?>
                                                        <div class="class_xem_them">
                                                            <a href="javascript:;">Dữ liệu đang đang cập nhật!!</a>
                                                        </div>
                                                    <?php } else {
                                                    } ?>
                                                </div>
                                                <div class="t-plp__container js-plp-container">
                                                    <h2>Tìm thấy: {{ count($post) }} bài viết với từ khóa: {{ $search }}</h2>
                                                    <div class="t-plp__grid js-plp-grid show-product" id="show-product">
                                                        @forelse ($post as $key => $item)
                                                        <div class="t-plp__product" style="transform-origin: 0px 0px;">
                                                            <div class="views-field views-field-search-api-rendered-item" style="transform-origin: 0px 0px;"><span class="field-content">
                                                                    <div data-product-name="{{ $item->name }}" class="m-product-card">
                                                                        <div class="m-product-card__content-wrapper">
                                                                            <a class="m-product-card__img-wrapper" href="{{ $item->slug }}" title="{{ $item->name }}">
                                                                                <img class="m-product-card__img ls-is-cached lazyloaded" data-src="{{ pare_url_file($item->thumbnail) }}" alt="{{ $item->name }}" src="{{ pare_url_file($item->thumbnail) }}">
                                                                            </a>
                                                                        </div>
                                                                        <div class="m-product-card__info">
                                                                            <div class="m-combined-product-name">
                                                                                <a class="m-combined-product-name__link" href="{{ $item->slug }}">
                                                                                    <span class="a-folio">
                                                                                        {{ $item->name }}
                                                                                    </span>
                                                                                    <span class="a-product-name">
                                                                                        {{ desscription_cut($item->desscription,60) }}
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="m-product-card__cta"></div>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        @empty
                                                        @endforelse
                                                    </div>
                                                    <div class="t-plp__grid js-plp-grid">
                                                    </div>

                                                </div>
                                            </div>
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