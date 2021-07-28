@extends('pages.layouts.app_master_frontend')
@section('contents')
<main role="main">
    <a id="main-content" tabindex="-1"></a>
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
                                                <div class="m-product-gallery__track glide__track" data-glide-el="track">
                                                    <ul class="m-product-gallery__slides glide__slides">
                                                        @forelse (json_decode($product->album) as $key => $item)
                                                        <li class="m-product-gallery__slide glide__slide">
                                                            <div class="m-product-gallery__img-wrapper">
                                                                <img class="lazyload m-product-gallery__img" data-src="{{ pare_url_file_product($item) }}" alt="{{ $product->name }}" data-zoom="{{ pare_url_file_product($item) }}">
                                                        </li>
                                                        @empty

                                                        @endforelse

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
                                                                <h1 class="m-combined-product-name__h1">
                                                                    <span class="a-product-name">
                                                                        {{ $product->name }}
                                                                    </span>
                                                                </h1>
                                                            </div>
                                                            <!-- FC-2249:: Remove markup that should only be available to authenticated users -->
                                                        </div>
                                                        <div class="m-product-overview__unit-and-sku">
                                                            <span class="m-product-overview__sku">Mã sản phẩm: {{ $product->id }}</span>
                                                        </div>
                                                        <!-- /TODO :: ADD RATING -->
                                                        <div role="article" class="m-product-overview__price-wrapper">
                                                            <div class="m-price-lockup">
                                                                <span class="m-price-lockup__price">
                                                                    <span class="a-price">
                                                                        Giá: {{ $product->price == '' ? 'liên hệ': $product->price.'vnd' }}
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="m-product-overview__unit-and-sku">
                                                            <span class="a-folio">
                                                                {{ $trade_name }}
                                                            </span>
                                                        </div>
                                                        <div role="article" class="m-product-overview__price-wrapper">
                                                            <div class="m-price-lockup">
                                                                <span class="m-price-lockup__price">
                                                                    <span class="a-qty">
                                                                        Số lượng: {{ $product->qty == '' ? 'Hiện tại hết hàng': $product->qty }}
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div role="article" class="m-product-overview__price-wrapper">
                                                            <div class="m-price-lockup">

                                                                <span class="m-price-lockup__price">
                                                                    <span class="a-product-name a-title-des">
                                                                        Mô tả về sản phẩm: </br>
                                                                    </span>
                                                                    <span class="a-folio">
                                                                        {{ $product->desscription }}
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <form class="m-product-overview__add-to-cart">
                                                        </form>
                                                    </div>
                                                    <!-- Review :: this should be removed -->
                                                    <div style="padding-top:20px;"></div>
                                                    <div class="c-product-overview__links">
                                                        <a class="c-product-overview__link a-anchor a-anchor--social-sharing" href="http://pinterest.com/pin/create/button/?url=/san-pham/{{ $product->slug }}&amp;media={{ pare_url_file_product($product->thumbnail) }}" target="_blank">
                                                            <span class="icon-pinterest  a-icon-text-btn__icon" aria-hidden="true"></span>
                                                        </a>
                                                        <a class="c-product-overview__link a-anchor a-anchor--social-sharing" href="https://www.facebook.com/sharer/sharer.php?u=https://www.coopmarket.com/accessories/storage/bottles/atomizer-with-1-2-3-oz-amber-oil-bottle" target="_blank">
                                                            <span class="icon-facebook  a-icon-text-btn__icon" aria-hidden="true"></span>
                                                        </a>
                                                        <a class="c-product-overview__link a-anchor a-anchor--social-sharing" href="http://twitter.com/share?text=Atomizer with 1 2/3 oz. Amber Oil Bottle&amp;url=https://www.coopmarket.com/accessories/storage/bottles/atomizer-with-1-2-3-oz-amber-oil-bottle" target="_blank">
                                                            <span class="icon-twitter  a-icon-text-btn__icon" aria-hidden="true"></span>
                                                        </a>
                                                        <a class="c-product-overview__link a-anchor a-anchor--social-sharing" href="/cdn-cgi/l/email-protection#dbe4a8aeb9b1beb8afe697b4a9beb6fee9ebb2aba8aeb6fdbab6abe0b9b4bfa2e697b4a9beb6fee9ebb2aba8aeb6fee9ebb3afafaba8fee89afee99dfee99dacacacf5b8b4b4abb6baa9b0beaff5b8b4b6fee99dbab8b8bea8a8b4a9b2bea8fee99da8afb4a9babcbefee99db9b4afafb7bea8fee99dbaafb4b6b2a1bea9f6acb2afb3f6eaf6e9f6e8f6b4a1f6bab6b9bea9f6b4b2b7f6b9b4afafb7bef5" target="_blank">
                                                            <span class="a-icon-text-btn__icon" aria-hidden="true">
                                                                <img src="https://www.coopmarket.com/themes/custom/frontierbase/dist/frontiercoop/images/email.svg" alt="Email icon" height="25" width="25">
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="layout layout--onecol">
                            <div class="layout__region layout__region--content">
                                <div>
                                    <div class="c-product-details">
                                        <div class="c-product-details__main-description m-accordion js-accordion-details js-accordion--mobile-only" />
                                        <div class="c-product-details__title m-accordion__title js-accordion-trigger">
                                            <span class="c-product-details__title-label m-accordion__title-label">
                                                Product Details
                                            </span>
                                        </div>
                                        <div class="c-product-details__content m-accordion__content js-accordion-content">
                                            <div class="c-product-details__content-inner m-accordion__content-inner js-accordion-content-inner">
                                                <div class="c-product-details__icon">
                                                    <span class="icon-star-filled"> </span>
                                                </div>
                                                <p class="a-paragraph--large">
                                                    {!! $product->content !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="c-product-details__container">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="non-visible layout layout--onecol">
                        <div class="layout__region layout__region--content">
                        </div>
                    </div>
                    <div class="non-visible layout layout--onecol">
                        <div class="c-categories-slider layout layout--onecol">

                            <div class="layout__region layout__region--heading">
                                <div class="c-categories-slider__heading-wrapper layout-builder__add-block">


                                    <div class="m-heading">
                                        <h2 class="m-heading__headline">
                                            Sản phẩm liên quan
                                        </h2>
                                    </div>


                                </div>
                            </div>
                            <div class="layout__region layout__region--content">
                                <div class="c-categories-slider__container js-swiper-container">
                                    <ul class="c-categories-slider__slider js-swiper-wrapper">
                                        @forelse ($product_related as $key => $item)
                                        <li class="c-categories-slider__item js-swiper-slide">
                                            <a class="m-category-card m-category-card--bordered" href="{{ $item->slug }}">
                                                <div class="m-category-card__image-wrapper">
                                                    <picture>
                                                        <source media="(min-width: 768px)" data-srcset="{{ pare_url_file_product($item->thumbnail) }}">
                                                        <img class="lazyload" data-src="{{ pare_url_file_product($item->thumbnail) }}" alt="{{ pare_url_file_product($item->thumbnail) }}">
                                                    </picture>
                                                    <div class="m-category-card__caption">
                                                        <span class="m-category-card__caption-text">{{ $item->name }}</span>
                                                    </div>
                                                    <div class="m-category-card__caption">
                                                        <p>{{ desscription_cut($item->desscription,60) }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        @empty

                                        @endforelse


                                    </ul>
                                    <div class="a-carousel-indicator a-carousel-indicator--no-bullets a-carousel-indicator--arrows c-categories-slider__arrows">
                                        <button class="a-carousel-indicator__arrow a-carousel-indicator__arrow--left js-swiper-button-prev" type="button" aria-label="Prev">
                                            <span class="icon-arrow-left"></span>
                                        </button>
                                        <button class="a-carousel-indicator__arrow a-carousel-indicator__arrow--right js-swiper-button-next" type="button" aria-label="Next">
                                            <span class="icon-arrow-right"></span>
                                        </button>
                                    </div>
                                    <div class="c-products-slider__scrollbar">
                                        <div class="a-slider-scrollbar">
                                            <div class="a-slider-scrollbar__inner js-swiper-scrollbar">

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
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
    </div>
    </div>
</main>
@stop