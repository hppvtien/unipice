@extends('pages.layouts.app_master_frontend') @section('contents')
<main role="main">

    <div class="layout-content">
        <div class="region region-content">
            <div data-drupal-messages-fallback class="hidden"></div>
            <div id="block-frontiercoop-market-content">
                <article>
                    <div>
                        <div class="layout layout--onecol">
                            <div class="layout__region layout__region--content">
                                <div data-block-plugin-id="system_breadcrumb_block">
                                    <nav class="m-breadcrumb" aria-label="Breadcrumb">
                                        <h2 class="visually-hidden">Breadcrumb</h2>
                                        <ol class="m-breadcrumb__list">
                                            <li class="m-breadcrumb__item">
                                                <a class="a-anchor" href="/">Home</a>
                                            </li>
                                            <li class="m-breadcrumb__item">
                                                <a class="a-anchor" href="/{{ getSlugCategory($cat_data->slug) }}">{{ $cat_data->name }}</a>
                                            </li>
                                            <li class="m-breadcrumb__item">
                                                <a class="a-anchor" href="{{ getSlugProduct($product->slug) }}"> {{ $product->name }} </a>
                                            </li>
                                        </ol>
                                    </nav>

                                </div>
                            </div>
                        </div>
                        <div class="layout layout--onecol">
                            <div class="layout__region layout__region--content">
                                <div>
                                    <div class="c-product-overview">
                                        <div class="c-product-overview__content-wrapper">

                                            <div class="m-product-gallery glide">

                                                <div class="m-product-gallery__track glide__track">
                                                    <ul class="m-product-gallery__slides glide__slides" id="image-slides">
                                                        @if ($product->album != '[]' )
                                                        @foreach (json_decode($product->album) as $key => $item)
                                                        <li class="m-product-gallery__slide glide__slide glide__slide--active">
                                                            <div class="m-product-gallery__img-wrapper">
                                                                <img class="lazyload m-product-gallery__img" data-src="{{ pare_url_file_product($item) }}" src="{{ pare_url_file_product($item) }}" alt="{{ $product->name }}" data-zoom="{{ pare_url_file_product($item) }}">
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                        @else

                                                        @endif
                                                    </ul>
                                                </div>
                                                <div class="a-carousel-indicator glide__arrows m-product-gallery__controls" data-glide-el="controls">
                                                    <button class="a-carousel-indicator__arrow a-carousel-indicator__arrow--left" type="button" aria-label="Prev" data-glide-dir="<">
                                                        <span class="icon-arrow-left"></span>
                                                    </button>

                                                    <div class="a-carousel-indicator__bullets glide__bullets" data-glide-el="controls[nav]">
                                                        <button class="a-carousel-indicator__bullet " type="button" aria-label="Go to slide 0" data-glide-dir="=0" data-slide-number="0">
                                                        </button>
                                                    </div>

                                                    <button class="a-carousel-indicator__arrow a-carousel-indicator__arrow--right" type="button" aria-label="Next" data-glide-dir=">">
                                                        <span class="icon-arrow-right"></span>
                                                    </button>
                                                </div>

                                            </div>

                                            <div class="c-product-overview__info">
                                                <div class="c-product-overview__content">

                                                    <div class="m-product-overview">
                                                        <div class="m-product-overview__name-wrapper">

                                                            <div class="m-combined-product-name">
                                                                <h2 class="m-combined-product-name__h1">
                                                                    <span class="a-product-name">
                                                                        {{ $product->name }}
                                                                    </span>
                                                                </h2>
                                                            </div>
                                                            <!-- FC-2249:: Remove markup that should only be available to authenticated users -->
                                                        </div>
                                                        <div class="m-product-card__sku margin-single-10">
                                                            <span> SKU: {{ $product->id }}</span>
                                                            <span> <img src="{{ asset('img/brand/star_5.png') }}" alt="{{ $product->name }}"> ({{ countReview($product->id) }} đánh giá)</span>
                                                        </div>
                                                        <div role="article" class="m-product-overview__price-wrapper d-block">
                                                            <div class="m-price-lockup margin-single-10 ">

                                                                <span class="m-price-lockup__price">
                                                                    <span class="a-folio text-dark text-lowercase font-weight-normal">
                                                                        {{ $product->desscription }}
                                                                    </span> <br>
                                                                    <span class="m-product-overview__price-wrapper d-block">
                                                                        <span class="a-product-name a-title-des text-dark">
                                                                            Thương hiệu:
                                                                        </span>
                                                                        <span class="text-danger paid-save">
                                                                            <a class="text-dark d-inline" href="{{ getSlugTrade($trade_name->slug) }}">
                                                                                {{ $trade_name->name }}
                                                                            </a>
                                                                        </span>

                                                                    </span>
                                                                    <span class="m-product-overview__price-wrapper d-block">
                                                                        <span class="a-product-name a-title-des text-dark">
                                                                            Khối lượng tĩnh:
                                                                        </span><br>
                                                                        <span class="text-danger paid-save" style="line-height: 3.5">
                                                                            @forelse ($product->size_product as $key => $size)
                                                                            <b class="border check-price check{{ $size['size_id'] }} {{ $key == 0 ? 'box-shadow-in' : '' }}" 
                                                                            data-uid="{{ checkUid(get_data_user('web')) }}" data-size="{{ $size['size_id'] }}" data-img="{{ $size['image'] }}"
                                                                            size-price="{{ $size['price'] }}" size-price-sale="{{ $size['price_sale'] }}" 
                                                                            <?php if (checkUid(get_data_user('web')) != null) { ?> 
                                                                                size-price-sale-store="{{ $size['price_sale_store'] }}" 
                                                                                size-qty-inbox="{{ $size['qty_in_box'] }}" 
                                                                                size-min-box="{{ $size['min_box'] }}"
                                                                                data-img="{{ $size['image'] }}" <?php } ?> 
                                                                            style="padding: 15px 10px;cursor: pointer;">{{ getSizeName($size['size_id']) }}</b>
                                                                            @empty

                                                                            @endforelse
                                                                        </span>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                        <!-- /TODO :: ADD RATING -->
                                                        <div role="article" class="m-product-overview__price-wrapper d-block">
                                                            <div class="m-price-lockup d-block">
                                                                @if (checkUid(get_data_user('web')))
                                                                <div role="article" class="m-product-overview__price-wrapper">
                                                                    <div class="m-price-lockup">
                                                                        <span class="m-price-lockup__price">
                                                                            <span class="a-qty">
                                                                                <span class="a-product-name a-title-des text-dark">
                                                                                    Số lượng / thùng:
                                                                                </span>
                                                                                <span id="qty-in-box-store">
                                                                                    {{ $product['size_product'][0]['qty_in_box'] == null ? 'Đang cập nhật' : $product['size_product'][0]['qty_in_box'].' sản phẩm' }}
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div role="article" class="m-product-overview__price-wrapper">
                                                                    <div class="m-price-lockup">
                                                                        <span class="m-price-lockup__price">
                                                                            <span class="a-qty">
                                                                                <span class="a-product-name a-title-des text-dark">
                                                                                    Số lượng mua tối thiểu:
                                                                                </span>
                                                                                <span id="min-box-store">
                                                                                    {{ $product['size_product'][0]['min_box'] == null ? 'Đang cập nhật' : $product['size_product'][0]['min_box'].' thùng' }}
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                @endif

                                                                <span class="line-height-single2 m-price-lockup__price d-block">
                                                                    <?php if (checkUid(get_data_user('web')) != null) { ?>

                                                                        <span class="price-gg-gg">
                                                                            {{ formatVnd($product['size_product'][0]['price']) }}
                                                                        </span>
                                                                        <span class="text-danger paid-save font_chu_mau_do price-save">
                                                                            (Tiết kiệm: -{{ 100-round($product['size_product'][0]['price_sale_store']*100/$product['size_product'][0]['price']) }}% )
                                                                        </span>
                                                                        <br>


                                                                        <span class="a-price price-single " style="font-size: 1rem !important;">
                                                                            Giá / Sản phẩm: <span class="price-sale-preview{{ $product->id }} price-preview">{{ $product['size_product'][0]['price_sale_store'] == null ? 'liên hệ': formatVnd($product['size_product'][0]['price_sale_store']) }}</span>
                                                                        </span>
                                                                        <?php if ($product->qty) { ?>
                                                                            <span class="text-dark float-right line-height-single4"><i class="fa fa-check" aria-hidden="true"></i>Còn hàng</span>
                                                                        <?php } else { ?>
                                                                            <span class="text-dark float-right line-height-single4"><i class="fa fa-phone" aria-hidden="true"></i>Liên hệ</span>
                                                                        <?php } ?>

                                                                    <?php } else { ?>
                                                                        @if ($product['size_product'][0]['price_sale'])
                                                                        <span class="g-price price-gg-gg">
                                                                            {{ formatVnd($product['size_product'][0]['price']) }}
                                                                        </span>
                                                                        <span class="text-danger paid-save font_chu_mau_do price-save">
                                                                            (Tiết kiệm: -{{ 100-round($product['size_product'][0]['price_sale']*100/$product['size_product'][0]['price']) }}% )
                                                                        </span>
                                                                        <br>
                                                                        <span class="a-price price-single">
                                                                            <span class="a-product-name a-title-des text-dark price-preview-sale price-sale-preview{{ $product->id }}">
                                                                                Giá: {{ formatVnd($product['size_product'][0]['price_sale']) }}
                                                                            </span>
                                                                        </span>
                                                                        @elseif (!$product['size_product'][0]['price_sale'])
                                                                        <br>
                                                                        <span class="a-price price-single">
                                                                            <span class="a-product-name a-title-des text-dark price-preview-sale price-sale-preview{{ $product->id }}">
                                                                                Giá: {{ formatVnd($product['size_product'][0]['price']) }}
                                                                            </span>
                                                                        </span>
                                                                        @endif
                                                                        <!--<?php if ($product->qty) { ?>
                                                                <span class="a-price text-success sigle line-height-single4"><i class="fa fa-check" aria-hidden="true"></i>Còn hàng</span>
                                                                <?php } else { ?>
                                                                <span class="text-dark float-right line-height-single4"><i class="fa fa-phone" aria-hidden="true"></i>Liên hệ</span>
                                                                <?php } ?>-->

                                                                        <span class="row">
                                                                            <div class="buttons_added col-12 text-center">
                                                                                <input class="minus is-form" type="button" value="-">
                                                                                <input aria-label="quantity" class="input-qty update-qty" id="js-qty{{ $product->id }}" max="10" min="1" name="qty-user" type="number" value="1">
                                                                                <input class="plus is-form" type="button" value="+">
                                                                            </div>
                                                                        </span>
                                                                    <?php } ?>
                                                                </span>
                                                                <!--</span>-->
                                                            </div>
                                                        </div>

                                                        <form class="m-product-overview__add-to-cart">
                                                        </form>
                                                    </div>
                                                    <div id="row" style="margin-bottom: 30px;">
                                                        <div class="m-product-card__content-wrapper row fix-btn-cart">
                                                            <div class="m-product-card__add-to-cart col-md-12 col-lg-6" style="opacity: 1;display:block;position: unset;pointer-events: auto;">
                                                                <button style="display:block;width:100%;margin-bottom:10px" class="a-btn a-btn--primary m-product-card__add-to-cart-btn " data-target="{{ get_data_user('web') ==null ? '.login-js' :'' }}" data-toggle="{{ get_data_user('web') == null ? 'modal' :'' }}" data-uid="{{ get_data_user('web') != null ? get_data_user('web') : 0 }}" {{ get_data_user( 'web') !=null ? get_data_user( 'web') : 0 }} onclick="{{ get_data_user('web') !=null ? 'check_my_favorites_add(this)' : 'unset' }};" data-url="{{ route('get_user.cart.add',['id' => $product->id,'type' => 'single']) }}" data-uid="{{ get_data_user('web') }}" data-id="{{ $product->id }}" type="button">Yêu thích</button>
                                                            </div>
                                                            <?php if ($product->qty != null) { ?>
                                                                <?php if (checkUid(get_data_user('web')) != null) { ?>
                                                                    <div class="m-product-card__add-to-cart col-md-12 col-lg-6" style="opacity: 1;display:block;position: unset;pointer-events: auto;">
                                                                        <button style="padding: 16px 10px;display:block;width:100%;margin-bottom:10px" class="a-btn a-btn--primary m-product-card__add-to-cart-btn js-add-cart" data-size="{{ getSizeId($product->id) }}" data-id="{{ $product->id }}" data-min-box="{{ getMinBox($product->id) }}" data-qtyinbox="{{ getQtyInBox($product->id) }}" data-url="{{ route('get_user.cart.add',['id' => $product->id,'type' => 'single']) }}" data-uid="{{ get_data_user('web') }}" type="button">Thêm giỏ hàng</button>
                                                                    </div>
                                                                <?php } else { ?>
                                                                    <div class="m-product-card__add-to-cart col-md-12 col-lg-6" style="opacity: 1;display:block;position: unset;pointer-events: auto;">
                                                                        <button style="padding: 16px 10px;display:block;width:100%;margin-bottom:10px" data-target="{{ get_data_user('web') ==null ? '.login-js' :'' }}" data-toggle="{{ get_data_user('web') == null ? 'modal' :'' }}" class="a-btn a-btn--primary m-product-card__add-to-cart-btn {{ get_data_user('web') != null ? 'js-add-cart':'' }}" data-url="{{ route('get_user.cart.add',['id' => $product->id,'type' => 'single']) }}" data-uid="{{ get_data_user('web') }}" data-id="{{ $product->id }}" type="button">
                                                                            Thêm giỏ hàng
                                                                        </button>
                                                                    </div>
                                                                <?php } ?>
                                                            <?php } else { ?>
                                                                <div class="m-product-card__add-to-cart col-md-12 col-lg-6" style="opacity: 1;display:block;position: unset;pointer-events: auto;">
                                                                    <a href="{{ route('get.uni_contact') }}" class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn contact-btn" type="button" rel="nofollow">Liên hệ</a>
                                                                </div>
                                                            <?php } ?>


                                                        </div>
                                                    </div>
                                                    <!-- Review :: this should be removed -->
                                                    <div id="share">

                                                        <!-- facebook -->
                                                        <a class="facebook" href="https://www.facebook.com/share.php?u=url&title=title" target="blank" rel="nofollow"><i class="fa fa-facebook"></i></a>

                                                        <!-- twitter -->
                                                        <a class="twitter" href="https://twitter.com/intent/tweet?status=title+url" target="blank" rel="nofollow"><i class="fa fa-twitter"></i></a>

                                                        <!-- google plus -->
                                                        <a class="googleplus" href="https://plus.google.com/share?url=url" target="blank" rel="nofollow"><i class="fa fa-google-plus"></i></a>

                                                        <!-- linkedin -->
                                                        <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=url&title=title&source=source" target="blank" rel="nofollow"><i class="fa fa-linkedin"></i></a>

                                                        <!-- pinterest -->
                                                        <a class="pinterest" href="https://pinterest.com/pin/create/bookmarklet/?media=media&url=url&is_video=false&description=title" target="blank" rel="nofollow"><i class="fa fa-pinterest-p"></i></a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="layout layout--onecol">
                            <div class="container">
                                <div>
                                    <p class="font-weight-bold text-dark">Mô tả về sản phẩm</p>
                                </div>
                                <div>
                                    {!! $product->content !!}
                                </div>
                            </div>
                            <div class="col-md-12 container">
                                <h3 class="text-center">Đánh giá</h3>
                                <p class="text-center">Mọi người nói gì về {{ $product->name }}</p>
                            </div>
                            <div class="col-md-12 container text-center">
                                <span class="font-weight-bold">5</span>
                                <span class="fa fa-star checked-star"></span>
                                <span class="fa fa-star checked-star"></span>
                                <span class="fa fa-star checked-star"></span>
                                <span class="fa fa-star checked-star"></span>
                                <span class="fa fa-star checked-star"></span>
                                <p>{{ $count_bl1 }} Đánh giá, {{ $count_ch1 }} Câu hỏi</p>
                            </div>
                        </div>
                        @include('pages.product.write_comment') @include('pages.product.view_comment')
                    </div>
                    @include('pages.product.product_hotpic')
                    <div class="layout layout--onecol">
                        <div class="layout__region layout__region--content">
                            <div data-block-plugin-id="inline_block:media_block" data-inline-block-uuid="ee168006-3fe9-4f1c-bbc5-ba42ddc90f9a" class="c-media-block c-media-block--template-">
                                <div class="c-media-block__image-wrapper">
                                    <picture>
                                        @if($slides_home_four1)
                                        <source media="(min-width: 768px)" data-srcset="{{ pare_url_file($slides_home_four1->s_banner) }}" srcset="{{ pare_url_file($slides_home_four1->s_banner) }}">
                                        <img class=" lazyloaded" data-src="{{ pare_url_file($slides_home_four1->s_banner) }}" alt="{{ $slides_home_four1->s_name }}" src="{{ pare_url_file($slides_home_four1->s_banner) }}">
                                        @endif
                                    </picture>
                                </div>

                                <div class="c-media-block__content">
                                    <div class="c-media-block__headline">Baking soda baths are a great way to detox. Check out the benefits of baking soda baths and how to do one at home!</div>
                                </div>
                            </div>

                        </div>
                    </div>
                    @include('pages.product.product_rel')
            </div>
            <div class="layout layout--onecol">
                <div class="layout__region layout__region--content">
                    <div class="views-element-container" data-block-plugin-id="views_block:product_detail_page_shop_the_recipe_carousel-block_shop_the_recipe_card">
                        <div class="views-element-container">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </article>
    </div>
</main>


@stop

@section('js_product_comment_review')
<script>
    $('#show_viet_danh_gia').click(function() {
        $("#News").slideToggle("slow");
        $("#question").hide("slow");
    });
    $('#show_dat_cau_hoi').click(function() {
        $("#question").slideToggle("slow");
        $("#News").hide("slow");
    });
    $('#view_danh_gia').click(function() {
        $("#view_review").slideToggle("slow");
        $("#view_question").hide("slow");
    });
    $('#view_cau_hoi').click(function() {
        $("#view_question").slideToggle("slow");
        $("#view_review").hide("slow");
    });
</script>
@endsection