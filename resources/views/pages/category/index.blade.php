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
                                                        <div class="row cat-desscription">
                                                            <div class="col-md-10">
                                                                <p class="font-weight-bold" style="color: #000; background-color:transparent;font-size:20px;opacity: 1;">
                                                                    {{ $category->desscription }}
                                                                </p>
                                                                <p style="color: #000; background-color:transparent; text-align:justify;opacity: 1;">
                                                                    {!! $category->content !!}
                                                                </p>

                                                            </div>
                                                            <div class="col-md-2" style="background-image: url({{ asset('/images/icon_menu/Spice-Header-2.png') }}); background-size: contain;
                                                            background-repeat: no-repeat;
                                                            background-position: center;
                                                            ">

                                                            </div>
                                                        </div>
                                                        <div class="cat-parent" style="padding: 30px 0">
                                                            <div class="row">
                                                                @foreach(getCatParent($category->id) as $parentItem)
                                                                <div class="col-md-3 col-lg-3 col-sm-4 col-12 parent-item">
                                                                    <a class="btn btn-parent" href="{{ getSlugCategory($parentItem->slug) }}">
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
                                                                    <div data-product-name="{{ $item->name }}" data-product-sku="{{ $item->id }}" class="m-product-card">
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
                                                                                <a class="m-combined-product-name__link product-name-fio uni-css-title" href="{{ $item->slug }}">
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
                                                                                        <p><span class="font-weight-bold" style="color:#ea7236">SL/ Thùng:</span> {{ getQtyInBox($item->id) }} hộp</p>
                                                                                        <p><span class="font-weight-bold" style="color:#ea7236">SL mua tối thiểu:</span> {{ getMinBox($item->id) }} thùng</p>
                                                                                        <p><span class="font-weight-bold" style="color:#ea7236">Giá:</span> {{ formatVnd(getQtyInBox($item->id) * getPriceSaleStore($item->id)) }}/thùng</p>
                                                                                    </div>
                                                                                    <?php if ($item->qty == null) { ?>
                                                                                        <a href="{{ route('get.uni_contact') }}" class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn contact-btn" type="button" rel="nofollow">Liên hệ</a>
                                                                                    <?php } else { ?>
                                                                                        <button class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn js-add-cart" data-id="{{ $item->id }}" 
                                                                                            data-min-box="{{ getMinBox($item->id) }}" data-qtyinbox="{{ getQtyInBox($item->id) }}" 
                                                                                            data-url="{{ route('get_user.cart.add',['id' => $item->id,'type' => 'single']) }}" 
                                                                                            data-uid="{{ get_data_user('web') }}" type="button">Thêm giỏ hàng</button>
                                                                                    <?php } ?>

                                                                                <?php } else { ?>
                                                                                    <?php if ($item->qty == null) { ?>
                                                                                        <a href="{{ route('get.uni_contact') }}" class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn contact-btn" 
                                                                                        type="button" rel="nofollow">Liên hệ</a>
                                                                                    <?php } else { ?>
                                                                                        <form>
                                                                                            <button class="a-btn a-btn--primary m-product-card__add-to-cart-btn {{ get_data_user('web') != null ? 'js-add-cart':'' }}"  
                                                                                            data-id="{{ $item->id }}" data-target="{{ get_data_user('web') ==null ? '.login-js' :'' }}" 
                                                                                            data-toggle="{{ get_data_user('web') == null ? 'modal' :'' }}" 
                                                                                            data-url="{{ route('get_user.cart.add',['id' => $item->id,'type' => 'single']) }}" 
                                                                                            data-uid="{{ get_data_user('web') }}" type="button">Thêm giỏ hàng</button>
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

                                                        @empty @endforelse
                                                        
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

                                            </div>

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
                                    <?php } else{} ?>
                                  
                                    
                                </div>
                                <div class="layout layout--onecol">
                                    @include('pages.category._item_product_rel')
                                </div>

                                <div class="layout layout--onecol">
                                    <div class="layout__region layout__region--content">
                                        <div class="c-media-block c-media-block--template-">
                                            <div class="c-media-block__image-wrapper">
                                                <picture>
                                                    <source media="(min-width: 768px)" data-srcset="/storage/uploads/cm-hero-1627696924.png" srcset="/storage/uploads/cm-hero-1627696924.png">
                                                    <img class=" ls-is-cached lazyloaded" data-src="/storage/uploads/cm-hero-1627696924.png" alt="Baking soda baths are a great way to detox. Check out the benefits of baking soda baths and how to do one at home!" src="/storage/uploads/cm-hero-1627696924.png">
                                                </picture>
                                            </div>

                                            <div class="c-media-block__content">
                                                <div class="c-media-block__headline">Baking soda baths are a great way to detox. Check out the benefits of baking soda baths and how to do one at home!</div>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="layout layout--onecol">
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