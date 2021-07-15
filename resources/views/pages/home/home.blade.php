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
                            <div class="layout layout--onecol c-homepage-hero-carousel js-homepage-hero-carousel glide" id="homepageHeroCarouselDemo">
                                <div class="c-homepage-hero-carousel__track glide__track" data-glide-el="track">
                                    <div class="c-homepage-hero-carousel__slides glide__slides layout-builder__add-block">
                                        @forelse ($slides as $key => $item)
                                        <div data-block-plugin-id="inline_block:homepage_hero_carousel_item" data-inline-block-uuid="dcedd143-f654-430c-a5d1-f473232bdea8" class="c-homepage-hero-carousel__slide">
                                            <div class="c-homepage-hero-carousel__overlay-img-wrapper">
                                                <img class="c-homepage-hero-carousel__overlay-img lazyload" data-src="{{ pare_url_file($item->s_banner) }}" alt="{{ $item->s_name }}">
                                            </div>
                                            <div class="c-homepage-hero-carousel__overlay-content">
                                                <div class="c-homepage-hero-carousel__content">
                                                    <h2 class="c-homepage-hero-carousel__headline">{{ $item->s_name }}</h2>
                                                    <a class="a-btn a-btn--secondary c-homepage-hero-carousel__cta" href="{{ $item->s_link }}" title="{{ $item->s_name }}">Shop All</a>
                                                </div>
                                            </div>
                                            <img class="c-homepage-hero-carousel__img lazyload" data-src="{{ pare_url_file($item->s_banner) }}" alt="{{ $item->s_name }}">
                                        </div>
                                        @empty
                                            
                                        @endforelse
                                    </div>
                                </div>

                                <div class="a-carousel-indicator a-carousel-indicator--arrows-no-bg glide__arrows c-homepage-hero-carousel__arrows" data-glide-el="controls">
                                    <button class="a-carousel-indicator__arrow a-carousel-indicator__arrow--left" type="button" aria-label="Prev" data-glide-dir="<">
                                        <span class="icon-arrow-left"></span>
                                    </button>

                                    <div class="a-carousel-indicator__bullets glide__bullets" data-glide-el="controls[nav]">
                                        <button class="a-carousel-indicator__bullet " type="button" aria-label="Go to slide 0" data-glide-dir="=0" data-slide-number="0">
                                        </button>
                                        <button class="a-carousel-indicator__bullet " type="button" aria-label="Go to slide 1" data-glide-dir="=1" data-slide-number="1">
                                        </button>
                                        <button class="a-carousel-indicator__bullet " type="button" aria-label="Go to slide 2" data-glide-dir="=2" data-slide-number="2">
                                        </button>
                                    </div>

                                    <button class="a-carousel-indicator__arrow a-carousel-indicator__arrow--right" type="button" aria-label="Next" data-glide-dir=">">
                                        <span class="icon-arrow-right"></span>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="c-expandable-products-slider layout layout--onecol">
                        <div class="layout__region layout__region--content c-expandable-products-slider__slider-wrapper dragscroll">
                            <div class="c-expandable-products-slider__slider">
                                <div class="c-expandable-products-slider__heading">
                                    <span>Sản phẩm được quan tâm nhất</span>
                                </div>
                                <ul class="c-expandable-products-slider__products">
                                    @forelse ($product_hot as $key => $item)
                                    <li class="c-expandable-products-slider__item layout-builder__add-block">
                                        <a data-history-node-id="305426" role="article" about="" class="m-expandable-product-card" href="{{ $item->slug }}">
                                            <div class="m-expandable-product-card__content-wrapper">
                                                <div class="m-expandable-product-card__img-wrapper">
                                                    <img class="lazyload" data-src="{{ pare_url_file_product($item->thumbnail) }}" alt="{{ $item->name }}">
                                                </div>
                                                <div class="m-expandable-product-card__info">
                                                    <div class="m-expandable-product-card__info-left">
                                                        <div class="m-combined-product-name">
                                                            <span class="a-folio">
                                                                {{ $item->name }}
                                                            </span>
                                                            <span class="a-product-name">
                                                                {{ desscription_cut($item->desscription,60) }}
                                                            </span>
                                                        </div>
                                                        <span class="a-product-unit m-expandable-product-card__unit">
                                                            @if ($item->price)
                                                            {{ $item->price }} VND
                                                            @else
                                                                Đang cấp nhật
                                                            @endif
                                                            
                                                        </span>
                                                    </div>
                                                    <div class="m-expandable-product-card__info-right">
                                                        <div class="m-price-lockup m-expandable-product-card__price">
                                                            <span class="m-price-lockup__price" style="display: none">
                                                                <span class="a-price">
                                                                    @if ($item->price)
                                                                    {{ $item->price }} VND
                                                                    @else
                                                                        Đang cấp nhật
                                                                    @endif
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <span class="m-expandable-product-card__arrow icon-arrow"></span>
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
                            <div data-block-plugin-id="inline_block:media_block_aligned" data-inline-block-uuid="216dee36-5fb1-40fa-af69-b56ccbaf373a" class="c-media-block-aligned c-media-block-aligned--reverse-bg">
                                <div class="c-media-block-aligned__content-wrapper">
                                    <div data-block-plugin-id="inline_block:media_block_aligned" data-inline-block-uuid="216dee36-5fb1-40fa-af69-b56ccbaf373a" class="c-media-block-aligned c-media-block-aligned--reverse-bg m-media-block-aligned m-media-block-aligned--bottom">
                                        <div class="m-media-block-aligned__image-wrapper">
                                            <picture>
                                                <source media="(min-width: 768px)" data-srcset="{{ pare_url_file($slides_home_first->s_banner) }}">
                                                <img class="lazyload" data-src="{{ pare_url_file($slides_home_first->s_banner) }}" alt=" ">
                                            </picture>
                                        </div>

                                        <div class="m-media-block-aligned__content">
                                            <div class="m-heading ">
                                                <h2 class="m-heading__headline">{{ $slides_home_first->s_name }}</h2>
                                                <div class="m-heading__cta">
                                                    <a href="{{ $slides_home_first->s_link }}"><span class="m-heading__cta--text">Xem thêm</span>
                                                        <span class="icon-arrow"></span></a>
                                                </div>
                                            </div>
                                            <p class="m-media-block-aligned__description">{{ $slides_home_first->s_desscription }}</p>
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


                                <div data-block-plugin-id="inline_block:heading" data-inline-block-uuid="d1afec60-3051-47e9-bbe4-b98b39a88db8" class="m-heading">
                                    <h2 class="m-heading__headline">
                                        Danh mục sản phẩm của chúng tôi.
                                    </h2>
                                    <div class="m-heading__cta">
                                        <a href="javascript:;"><span class="m-heading__cta--text">Shop All Categories</span>
                                            <span class="icon-arrow"></span></a>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="layout__region layout__region--content">
                            <div class="c-categories-slider__container js-swiper-container">
                                <ul class="c-categories-slider__slider js-swiper-wrapper">
                                    @forelse ($category as $key => $item)
                                        <li class="c-categories-slider__item js-swiper-slide">
                                            <a data-block-plugin-id="inline_block:media_component" data-inline-block-uuid="380a9014-fee0-43d7-8277-0e3a68d90cee" class="m-category-card" href="{{ $item->slug }}">
                                                <div class="m-category-card__image-wrapper">
                                                    <picture>
                                                        <source media="(min-width: 768px)" data-srcset="{{ pare_url_file_product($item->thumbnail) }}">
                                                        <img class="lazyload" data-src="{{ pare_url_file_product($item->thumbnail) }}" alt=" ">
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

                    <!-- DEBUG :: DRAFT V2 -->
                    <!--</div> -->
                    <!-- /DEBUG :: DRAFT V2 -->
                    <div class="layout layout--onecol">
                        <div class="layout__region layout__region--content">
                            <div data-block-plugin-id="inline_block:media_block_aligned" data-inline-block-uuid="ecd5c07f-5ad6-4ac8-ab91-923f78df592c" class="c-media-block-aligned">
                                <div class="c-media-block-aligned__content-wrapper">
                                
                                    <div data-block-plugin-id="inline_block:media_block_aligned" data-inline-block-uuid="ecd5c07f-5ad6-4ac8-ab91-923f78df592c" class="c-media-block-aligned m-media-block-aligned m-media-block-aligned--bottom">
                                        <div class="m-media-block-aligned__image-wrapper">
                                            <picture>
                                                <source media="(min-width: 768px)" data-srcset="{{ pare_url_file($slides_home_thirst->s_banner) }}">
                                                <img class="lazyload" data-src="{{ pare_url_file($slides_home_thirst->s_banner) }}" alt="{{ $slides_home_thirst->s_name }}">
                                            </picture>
                                        </div>

                                        <div class="m-media-block-aligned__content">
                                            <div class="m-heading ">
                                                <h2 class="m-heading__headline">{{ $slides_home_thirst->s_name }}</h2>
                                                <div class="m-heading__cta">
                                                    <a href="{{ $slides_home_thirst->s_link }}" title="{{ $slides_home_thirst->s_name }}">
                                                        <span class="m-heading__cta--text">Read More</span>
                                                        <span class="icon-arrow"></span></a>
                                                </div>
                                            </div>
                                            <p class="m-media-block-aligned__description">{{ $slides_home_thirst->s_desscription }}</p>
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


                                <div data-block-plugin-id="inline_block:heading" data-inline-block-uuid="4d501cc7-7465-4b33-9a6e-cdf57fdc8e77" class="m-heading">
                                    <h2 class="m-heading__headline">
                                        Sản phẩm mới nhất
                                    </h2>
                                    <div class="m-heading__cta">
                                        <a href="/home-and-pet"><span class="m-heading__cta--text">Xem các sản phẩm khác cùng loại</span>
                                            <span class="icon-arrow"></span>
                                        </a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="layout__region layout__region--content">
                            <div class="c-categories-slider__container js-swiper-container">
                                <ul class="c-categories-slider__slider js-swiper-wrapper">
                                    @forelse ($product_feauture as $key => $item)
                                    <li class="c-categories-slider__item js-swiper-slide">
                                        <a data-block-plugin-id="inline_block:media_component" data-inline-block-uuid="e12ac350-b671-41f4-822c-459f7063a409" class="m-category-card m-category-card--bordered" href="{{ $item->slug }}">
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

                    <!-- DEBUG :: DRAFT V2 -->
                    <!--</div> -->
                    <!-- /DEBUG :: DRAFT V2 -->
                    <div class="layout layout--onecol">
                        <div class="layout__region layout__region--content">
                            <div data-block-plugin-id="inline_block:media_block_aligned" data-inline-block-uuid="2fdc5030-4488-48fd-b140-830135f9b16f" class="c-media-block-aligned">
                                <div class="c-media-block-aligned__content-wrapper">
                                    <div data-block-plugin-id="inline_block:media_block_aligned" data-inline-block-uuid="2fdc5030-4488-48fd-b140-830135f9b16f" class="c-media-block-aligned m-media-block-aligned">
                                        <div class="m-media-block-aligned__image-wrapper">
                                            <picture>
                                                <source media="(min-width: 768px)" data-srcset="{{ pare_url_file($slides_home_three->s_banner) }}">
                                                <img class="lazyload" data-src="{{ pare_url_file($slides_home_three->s_banner) }}" alt="{{ $slides_home_three->s_name }}">
                                            </picture>
                                        </div>

                                        <div class="m-media-block-aligned__content">
                                            <div class="m-heading ">
                                                <h2 class="m-heading__headline">{{ $slides_home_three->s_name }}</h2>
                                                <div class="m-heading__cta">
                                                    <a href="{{ $slides_home_three->s_link }}"><span class="m-heading__cta--text">Learn More</span>
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
                                                <select class="c-products-slider__switcher-select" id="trade-product" data-url={{ route('get.product_trade') }}>
                                                  @foreach ($trade as $key => $item)
                                                    <option style="color: #0B2D25;font-size: 16px" value="{{ $item->id }}">{{ $item->name }}</option>
                                                  @endforeach
                                                </select>
                                                <span class="c-products-slider__switcher-select-icon icon-arrow-down"></span>
                                            </div>
                                        </label>
                                    </h2>
                                    <div class="c-products-slider__slider-container js-swiper-container" style="display:block!important" id="group-product">
                                        <ul class="c-products-slider__slider js-swiper-wrapper">
                                            @forelse ($product_trade as $key => $item)
                                            <li class="c-products-slider__item js-swiper-slide">
                                                <!-- BASE :: MINI-PRODUCT-CARD -->
                                                <a style="--color-brand:var(--color-simply-organic)"
                                                class="m-mini-product-card" href="{{ $item->slug }}">
                                                    <div class="m-mini-product-card__img-wrapper">
                                                        <img class="lazyload" data-src="{{ pare_url_file_product($item->thumbnail) }}" alt="{{ $item->name }}">
                                                    </div>
                                                    <div class="m-mini-product-card__info">
                                                        <div class="m-combined-product-name">
                                                            <span class="a-folio" style="--color-brand: var(--color-simply-organic)">
                                                                {{ $item->name }}
                                                            </span>
                                                            <span class="a-product-name">
                                                                {{ desscription_cut($item->desscription,60) }}
                                                            </span>
                                                        </div>
                                                        <div class="m-mini-product-card__price">
                                                            <div class="m-price-lockup">
                                                                <span class="m-price-lockup__price" style="display: none">
                                            
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
                                                <div class="a-carousel-indicator a-carousel-indicator--no-bullets a-carousel-indicator--arrows c-products-slider__arrows">
                                                    <button class="a-carousel-indicator__arrow a-carousel-indicator__arrow--left js-swiper-button-prev" type="button" aria-label="Prev">
                                                        <span class="icon-arrow-left"></span>
                                                    </button>
                                                    <button class="a-carousel-indicator__arrow a-carousel-indicator__arrow--right js-swiper-button-next" type="button" aria-label="Next">
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
                            <div data-block-plugin-id="inline_block:media_block" data-inline-block-uuid="ee168006-3fe9-4f1c-bbc5-ba42ddc90f9a" class="c-media-block c-media-block--template-">
                                <div class="c-media-block__image-wrapper">
                                    <picture>
                                        <source media="(min-width: 768px)" data-srcset="{{ pare_url_file($slides_home_four->s_banner) }}">
                                        <img class="lazyload" data-src="{{ pare_url_file($slides_home_four->s_banner) }}" alt=" ">
                                    </picture>
                                </div>

                                <div class="c-media-block__content">
                                    <div class="c-media-block__headline">{{ $slides_home_four->s_desscription }}</div>


                                </div>
                            </div>

                        </div>
                    </div>

                </div>


            </div>

        </div>

    </div>


</main>
@stop