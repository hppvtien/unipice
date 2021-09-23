@extends('pages.layouts.app_master_frontend')
@section('contents')
    <main role="main">
        <a id="main-content" tabindex="-1"></a>
        <div class="layout-content">
            <div class="region region-content">
                <div data-drupal-messages-fallback class="hidden"></div>
                <div id="block-frontiercoop-market-content" data-block-plugin-id="system_main_block">

                    <div class="p-homepage">

                        <div class="layout layout--onecol">
                            <div class="layout__region layout__region--content">
                                <div class="layout layout--onecol c-homepage-hero-carousel js-homepage-hero-carousel glide"
                                    id="homepageHeroCarouselDemo">
                                    <div class="c-homepage-hero-carousel__track glide__track" data-glide-el="track">
                                        <div
                                            class="c-homepage-hero-carousel__slides glide__slides layout-builder__add-block">
                                            @forelse ($slides as $key => $item)
                                                <div class="c-homepage-hero-carousel__slide">
                                                    <div class="c-homepage-hero-carousel__overlay-img-wrapper">
                                                        <img class="c-homepage-hero-carousel__overlay-img lazyload"
                                                            data-src="{{ pare_url_file($item->s_banner) }}"
                                                            alt="{{ $item->s_name }}">
                                                    </div>
                                                    <div class="c-homepage-hero-carousel__overlay-content text-crs-homepage">
                                                        <div class="c-homepage-hero-carousel__content">
                                                            <h2 class="c-homepage-hero-carousel__headline">
                                                                {{ $item->s_name }}</h2>
                                                            <a class="a-btn c-homepage-hero-carousel__cta btn-all-product"
                                                                href="{{ $item->s_link }}"
                                                                title="{{ $item->s_name }}">Tất cả sản phẩm</a>
                                                        </div>
                                                    </div>
                                                    <img class="c-homepage-hero-carousel__img lazyload"
                                                        data-src="{{ pare_url_file($item->s_banner) }}"
                                                        alt="{{ $item->s_name }}">
                                                </div>
                                            @empty

                                            @endforelse
                                        </div>
                                    </div>

                                    <div class="a-carousel-indicator a-carousel-indicator--arrows-no-bg glide__arrows c-homepage-hero-carousel__arrows"
                                        data-glide-el="controls">
                                        <button class="a-carousel-indicator__arrow a-carousel-indicator__arrow--left"
                                            type="button" aria-label="Prev" data-glide-dir="<">
                                            <span class="icon-arrow-left"></span>
                                        </button>

                                        <div class="a-carousel-indicator__bullets glide__bullets"
                                            data-glide-el="controls[nav]">
                                            <button class="a-carousel-indicator__bullet " type="button"
                                                aria-label="Go to slide 0" data-glide-dir="=0" data-slide-number="0">
                                            </button>
                                            <button class="a-carousel-indicator__bullet " type="button"
                                                aria-label="Go to slide 1" data-glide-dir="=1" data-slide-number="1">
                                            </button>
                                            <button class="a-carousel-indicator__bullet " type="button"
                                                aria-label="Go to slide 2" data-glide-dir="=2" data-slide-number="2">
                                            </button>
                                        </div>

                                        <button class="a-carousel-indicator__arrow a-carousel-indicator__arrow--right"
                                            type="button" aria-label="Next" data-glide-dir=">">
                                            <span class="icon-arrow-right"></span>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="c-expandable-products-slider layout layout--onecol">
                            <div
                                class="layout__region layout__region--content c-expandable-products-slider__slider-wrapper dragscroll">
                                <div class="c-expandable-products-slider__slider">
                                    <div class="c-expandable-products-slider__heading">
                                        <span>Sản phẩm được quan tâm nhất</span>
                                    </div>
                                    <ul class="c-expandable-products-slider__products">
                                        @forelse ($product_hot as $key => $item)
                                            <li class="c-expandable-products-slider__item layout-builder__add-block">
                                                <a data-history-node-id="305426" role="article" about=""
                                                    class="m-expandable-product-card can_tren_duoi_home"
                                                    href="{{ getSlugProduct($item->slug) }}">
                                                    <div class="m-expandable-product-card__content-wrapper">
                                                        <div class="m-expandable-product-card__img-wrapper">
                                                            <img class="lazyload"
                                                                data-src="{{ pare_url_file($item->thumbnail) }}"
                                                                alt="{{ $item->name }}">
                                                        </div>
                                                        <div class="m-expandable-product-card__info">
                                                            <div class="m-expandable-product-card__info-left">
                                                                <div class="m-combined-product-name">
                                                                    <span class="a-folio font_chu_home">
                                                                        {{ $item->name }}
                                                                    </span>
                                                                    <br>
                                                                    <span class="a-product-name card-text-uni">
                                                                        {{ $item->desscription }}
                                                                    </span>
                                                                </div>
                                                                <span
                                                                    class="a-product-unit m-expandable-product-card__unit">
                                                                    @if (getPrice($item->id))
                                                                    {{ formatVnd(getPrice($item->id)) }}
                                                                @else
                                                                    Đang cập nhật
                                                                @endif
                                                                </span>
                                                            </div>
                                                            <div class="m-expandable-product-card__info-right">
                                                                <div
                                                                    class="m-price-lockup m-expandable-product-card__price">
                                                                    <span class="m-price-lockup__price"
                                                                        style="display: none">
                                                                        <span class="a-price">
                                                                            @if (getPrice($item->id))
                                                                            {{ formatVnd(getPrice($item->id)) }}
                                                                        @else
                                                                            Đang cập nhật
                                                                        @endif
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                                <span
                                                                    class="m-expandable-product-card__arrow icon-arrow"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        @empty

                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="layout layout--onecol">
                            <div class="layout__region layout__region--content">
                                <div data-block-plugin-id="inline_block:media_block_aligned"
                                    data-inline-block-uuid="216dee36-5fb1-40fa-af69-b56ccbaf373a"
                                    class="c-media-block-aligned c-media-block-aligned--reverse-bg">
                                    <div class="c-media-block-aligned__content-wrapper">
                                        <div data-block-plugin-id="inline_block:media_block_aligned"
                                            data-inline-block-uuid="216dee36-5fb1-40fa-af69-b56ccbaf373a"
                                            class="c-media-block-aligned c-media-block-aligned--reverse-bg m-media-block-aligned m-media-block-aligned--bottom">
                                            <div class="m-media-block-aligned__image-wrapper">
                                                <picture>
                                                    <source media="(min-width: 768px)"
                                                        data-srcset="{{ pare_url_file($content_page_1->thumbnail) }}">
                                                    <img class="lazyload"
                                                        data-src="{{ pare_url_file($content_page_1->thumbnail) }}"
                                                        alt="{{ $content_page_1->name }}">
                                                </picture>
                                            </div>

                                            <div class="m-media-block-aligned__content">
                                                <div class="m-heading ">
                                                    <h2 class="m-heading__headline">{{ $content_page_1->name }}</h2>
                                                    <div class="m-heading__cta">
                                                        <a href="{{ $content_page_1->url_but }}"><span
                                                                class="m-heading__cta--text">{{ $content_page_1->name_but }}</span>
                                                            <span class="icon-arrow"></span></a>
                                                    </div>
                                                </div>
                                                <p class="m-media-block-aligned__description">
                                                    {{ $content_page_1->desscription }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- DEBUG :: DRAFT V2 -->

                        <div class="c-categories-slider layout layout--onecol c-categories-slider--template-homepage">

                            <div class="layout__region layout__region--heading">
                                <div class="c-categories-slider__heading-wrapper layout-builder__add-block">


                                    <div data-block-plugin-id="inline_block:heading"
                                        data-inline-block-uuid="d1afec60-3051-47e9-bbe4-b98b39a88db8"
                                        class="m-heading">
                                        <h2 class="m-heading__headline">
                                            Danh mục sản phẩm của chúng tôi.
                                        </h2>

                                    </div>


                                </div>
                            </div>

                            <div class="layout__region layout__region--content">
                                <div class="c-categories-slider__container js-swiper-container">
                                    <ul class="c-categories-slider__slider js-swiper-wrapper">
                                        @forelse ($category as $key => $item)
                                            <li class="c-categories-slider__item js-swiper-slide">
                                                <a data-block-plugin-id="inline_block:media_component"
                                                    data-inline-block-uuid="380a9014-fee0-43d7-8277-0e3a68d90cee"
                                                    class="m-category-card" href="{{ getSlugCategory($item->slug) }}">
                                                    <div class="m-category-card__image-wrapper">
                                                        <picture>
                                                            <source media="(min-width: 768px)"
                                                                data-srcset="{{ pare_url_file_product($item->thumbnail) }}">
                                                            <img class="lazyload"
                                                                data-src="{{ pare_url_file_product($item->thumbnail) }}"
                                                                alt="{{ $item->name }}">

                                                        </picture>
                                                        <div class="m-category-card__caption">
                                                            <span
                                                                class="m-category-card__caption-text">{{ $item->name }}</span>
                                                        </div>
                                                        <div class="m-category-card__caption">
                                                            <p class="card-text">{{ $item->desscription }}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        @empty

                                        @endforelse
                                    </ul>
                                    <div
                                        class="a-carousel-indicator a-carousel-indicator--no-bullets a-carousel-indicator--arrows c-categories-slider__arrows">
                                        <button
                                            class="a-carousel-indicator__arrow a-carousel-indicator__arrow--left js-swiper-button-prev"
                                            type="button" aria-label="Prev">
                                            <span class="icon-arrow-left"></span>
                                        </button>
                                        <button
                                            class="a-carousel-indicator__arrow a-carousel-indicator__arrow--right js-swiper-button-next"
                                            type="button" aria-label="Next">
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

                        <!-- DEBUG :: DRAFT V2 -->
                        <!--</div> -->
                        <!-- /DEBUG :: DRAFT V2 -->
                        <div class="layout layout--onecol">
                            <div class="layout__region layout__region--content">
                                <div data-block-plugin-id="inline_block:media_block_aligned"
                                    data-inline-block-uuid="ecd5c07f-5ad6-4ac8-ab91-923f78df592c"
                                    class="c-media-block-aligned">
                                    <div class="c-media-block-aligned__content-wrapper">

                                        <div data-block-plugin-id="inline_block:media_block_aligned"
                                            data-inline-block-uuid="ecd5c07f-5ad6-4ac8-ab91-923f78df592c"
                                            class="c-media-block-aligned m-media-block-aligned m-media-block-aligned--bottom">
                                            <div class="m-media-block-aligned__image-wrapper">
                                                <picture>
                                                    <source media="(min-width: 768px)"
                                                        data-srcset="{{ pare_url_file($content_page_2->thumbnail) }}">
                                                    <img class="lazyload"
                                                        data-src="{{ pare_url_file($content_page_2->thumbnail) }}"
                                                        alt="{{ $content_page_2->name }}">
                                                </picture>
                                            </div>

                                            <div class="m-media-block-aligned__content">
                                                <div class="m-heading ">
                                                    <h2 class="m-heading__headline">{{ $content_page_2->name }}</h2>
                                                    <div class="m-heading__cta">
                                                        <a href="{{ $content_page_2->url_but }}"
                                                            title="{{ $content_page_2->name_but }}">
                                                            <span
                                                                class="m-heading__cta--text">{{ $content_page_2->name_but }}</span>
                                                            <span class="icon-arrow"></span></a>
                                                    </div>
                                                </div>
                                                <p class="m-media-block-aligned__description">
                                                    {{ $content_page_2->desscription }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- DEBUG :: DRAFT V2 -->

                        <!-- /DEBUG :: DRAFT V2 -->

                        <div class="c-categories-slider layout layout--onecol">

                            <div class="layout__region layout__region--heading">
                                <div class="c-categories-slider__heading-wrapper layout-builder__add-block">


                                    <div data-block-plugin-id="inline_block:heading"
                                        data-inline-block-uuid="4d501cc7-7465-4b33-9a6e-cdf57fdc8e77"
                                        class="m-heading">
                                        <h2 class="m-heading__headline">
                                            Sản phẩm mới nhất
                                        </h2>
                                    </div>


                                </div>
                            </div>
                            <div class="layout__region layout__region--content">
                                <div class="c-categories-slider__container js-swiper-container">
                                    <ul class="c-categories-slider__slider js-swiper-wrapper">
                                        @forelse ($product_new as $key => $item)
                                            <li class="c-categories-slider__item js-swiper-slide">
                                                <a class="m-category-card m-category-card--bordered"
                                                    href="{{ getSlugProduct($item->slug) }}">
                                                    <div class="m-category-card__image-wrapper">
                                                        <picture>
                                                            <source media="(min-width: 768px)"
                                                                data-srcset="{{ pare_url_file($item->thumbnail) }}">
                                                            <img class="lazyload"
                                                                data-src="{{ pare_url_file($item->thumbnail) }}"
                                                                alt="{{ $item->name }}">
                                                        </picture>
                                                        <div class="m-category-card__caption">
                                                            <span
                                                                class="m-category-card__caption-text">{{ $item->name }}</span>
                                                        </div>
                                                        <div class="m-category-card__caption">
                                                            <p class="card-text">{{ $item->desscription }}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        @empty

                                        @endforelse


                                    </ul>
                                    <div
                                        class="a-carousel-indicator a-carousel-indicator--no-bullets a-carousel-indicator--arrows c-categories-slider__arrows">
                                        <button
                                            class="a-carousel-indicator__arrow a-carousel-indicator__arrow--left js-swiper-button-prev"
                                            type="button" aria-label="Prev">
                                            <span class="icon-arrow-left"></span>
                                        </button>
                                        <button
                                            class="a-carousel-indicator__arrow a-carousel-indicator__arrow--right js-swiper-button-next"
                                            type="button" aria-label="Next">
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

                        <!-- DEBUG :: DRAFT V2 -->
                        <!--</div> -->
                        <!-- /DEBUG :: DRAFT V2 -->
                        <div class="layout layout--onecol">
                            <div class="layout__region layout__region--content">
                                <div class="c-media-block-aligned">
                                    <div class="c-media-block-aligned__content-wrapper">
                                        <div class="c-media-block-aligned m-media-block-aligned">
                                            <div class="m-media-block-aligned__image-wrapper">
                                                <picture>
                                                    <source media="(min-width: 768px)"
                                                        data-srcset="{{ pare_url_file($content_page_3->thumbnail) }}">
                                                    <img class="lazyload"
                                                        data-src="{{ pare_url_file($content_page_3->thumbnail) }}"
                                                        alt="{{ $content_page_3->name }}">
                                                </picture>
                                            </div>

                                            <div class="m-media-block-aligned__content">
                                                <div class="m-heading ">
                                                    <h2 class="m-heading__headline">{{ $content_page_3->name }}</h2>
                                                    <div class="m-heading__cta">
                                                        <a href="{{ $content_page_3->url_but }}"><span
                                                                class="m-heading__cta--text">{{ $content_page_3->name_but }}</span>
                                                            <span class="icon-arrow"></span></a>
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

                                <!-- DEGUG :: HOMEPAGE__NO-SPACING -->
                                <div class="t-homepage__no-spacing">
                                    <!-- /DEGUG :: HOMEPAGE__NO-SPACING -->

                                    <div class="c-products-slider c-products-slider--changeable">
                                        <h2 class="c-products-slider__heading">
                                            <label class="c-products-slider__switcher">
                                                <span class="c-products-slider__switcher-label">Thương hiệu sản phẩm</span>
                                                <div class="c-products-slider__switcher-select-wrapper">
                                                    <select class="c-products-slider__switcher-select" id="trade-product"
                                                        data-url={{ route('get.product_trade') }}>
                                                        @foreach ($trade as $key => $item)
                                                            <option style="color: #0b2d25;font-size: 16px"
                                                                value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <span
                                                        class="c-products-slider__switcher-select-icon icon-arrow-down"></span>
                                                </div>
                                            </label>
                                        </h2>
                                        <div class="c-products-slider__slider-container js-swiper-container"
                                            style="display:block!important" id="group-product">
                                            <ul class="c-products-slider__slider js-swiper-wrapper">
                                                @forelse ($product_trade as $key => $item)
                                                    <li class="c-products-slider__item js-swiper-slide">
                                                        <!-- BASE :: MINI-PRODUCT-CARD -->
                                                        <a style="--color-brand:var(--color-simply-organic)"
                                                            class="m-mini-product-card"
                                                            href="{{ getSlugProduct($item->slug) }}">
                                                            <div class="m-mini-product-card__img-wrapper">
                                                                <img class="lazyload"
                                                                    data-src="{{ pare_url_file($item->thumbnail) }}"
                                                                    alt="{{ $item->name }}">
                                                            </div>
                                                            <div class="m-mini-product-card__info">
                                                                <div class="m-combined-product-name">
                                                                    <div class="m-category-card__caption">
                                                                        <span
                                                                            class="m-category-card__caption-text">{{ $item->name }}</span>
                                                                    </div>
                                                                    <span class="a-product-name card-text">
                                                                        {{ $item->desscription }}
                                                                    </span>
                                                                </div>
                                                                <div class="m-mini-product-card__price">
                                                                    <div class="m-price-lockup">
                                                                        <span class="m-price-lockup__price"
                                                                            style="display: none">

                                                                            <span class="a-price">
                                                                                @if ($item->price)
                                                                                    {{ $item->price }} VND
                                                                                @else
                                                                                    Đang cấp nhật
                                                                                @endif
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                @empty

                                                @endforelse
                                            </ul>
                                            <div
                                                class="a-carousel-indicator a-carousel-indicator--no-bullets a-carousel-indicator--arrows c-products-slider__arrows">
                                                <button
                                                    class="a-carousel-indicator__arrow a-carousel-indicator__arrow--left js-swiper-button-prev"
                                                    type="button" aria-label="Prev">
                                                    <span class="icon-arrow-left"></span>
                                                </button>
                                                <button
                                                    class="a-carousel-indicator__arrow a-carousel-indicator__arrow--right js-swiper-button-next"
                                                    type="button" aria-label="Next">
                                                    <span class="icon-arrow-right"></span>
                                                </button>
                                            </div>
                                            <div class="c-products-slider__scrollbar">
                                                <div class="a-slider-scrollbar a-slider-scrollbar--light">
                                                    <div class="a-slider-scrollbar__inner js-swiper-scrollbar">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- DEGUG :: END HOMEPAGE__NO-SPACING -->
                                </div>
                                <!-- /DEGUG :: END HOMEPAGE__NO-SPACING -->

                            </div>
                        </div>
                        <div class="layout layout--onecol">
                            <div class="layout__region layout__region--content">
                                <div data-block-plugin-id="inline_block:media_block"
                                    data-inline-block-uuid="ee168006-3fe9-4f1c-bbc5-ba42ddc90f9a"
                                    class="c-media-block c-media-block--template-">
                                    <div class="c-media-block__image-wrapper">
                                        <picture>
                                            <source media="(min-width: 768px)"
                                                data-srcset="{{ pare_url_file($content_page_4->thumbnail) }}">
                                            <img class="lazyload"
                                                data-src="{{ pare_url_file($content_page_4->thumbnail) }}"
                                                alt="{{ $content_page_4->name }}">
                                        </picture>
                                    </div>

                                    <div class="c-media-block__content">
                                        <div class="c-media-block__headline">{{ $content_page_4->name }}</div>


                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    {{-- blog --}}
                    <div class="layout__region layout__region--content uni-magin-top-but">
                        <div class="container container-uni">
                            <div class="pading-uni">
                                <div data-block-plugin-id="inline_block:heading"
                                    data-inline-block-uuid="4d501cc7-7465-4b33-9a6e-cdf57fdc8e77" class="m-heading">
                                    <h2 class="m-heading__headline">
                                        Gia vị & Cuộc sống
                                    </h2>
                                </div>
                                <div class="row">
                                    @foreach ($blog_post as $item)
                                        <div class="col-12 col-md-6 col-lg-3">
                                            <a class="" href=" {{ getSlugPost($item->slug) }}"
                                                title="{{ $item->name }}">
                                                <div class="mt-3 mb-3 uni-blog-home-img">
                                                    <picture>
                                                        <source data-srcset="{{ pare_url_file($item->thumbnail) }}"
                                                            srcset="{{ pare_url_file($item->thumbnail) }}">
                                                        <img class=" ls-is-cached lazyloaded" data-src="" width="100%"
                                                            alt="{{ $item->name }}">
                                                    </picture>
                                                    <div class="uni-blog-home">
                                                        <p>{{ $item->name }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- blog --}}
                </div>

            </div>

        </div>


    </main>
@stop
