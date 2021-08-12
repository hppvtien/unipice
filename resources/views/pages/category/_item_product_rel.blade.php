
<div class="c-categories-slider layout layout--onecol c-categories-slider--template-homepage" style="background-color: #0b2d25;">

    <div class="layout__region layout__region--heading">
        <div class="c-categories-slider__heading-wrapper layout-builder__add-block">
            <div data-block-plugin-id="inline_block:heading" data-inline-block-uuid="d1afec60-3051-47e9-bbe4-b98b39a88db8" class="m-heading">
                <h3 style="color: #fff">
                    Sản phẩm nổi bật nhất
                </h3>
            </div>
        </div>
    </div>

    <div class="layout__region layout__region--content">
        <div class="c-categories-slider__container js-swiper-container">
            <ul class="c-categories-slider__slider js-swiper-wrapper">
                @forelse($product_rel as $key_rel => $item)
                <li class="c-categories-slider__item js-swiper-slide">
                    <div class="loadmore11 t-plp__product" style="transform-origin: 0px 0px; display: block;" data-animate-grid-id="0.8579037597911499">
                        <div class="views-field views-field-search-api-rendered-item" style="transform-origin: 0px 0px;"><span class="field-content">
                                <div data-product-name="{{ $item->name }}" data-product-sku="{{ $item->id }}" data-product-brand="frontiercoop_market" class="m-product-card">
                                    <div class="m-product-card__content-wrapper">
                                        <a class="m-product-card__img-wrapper product-review" href="{{ $item->slug }}" title="{{ $item->meta_title }}">
                                            <img class="m-product-card__img ls-is-cached lazyloaded" data-src="{{ pare_url_file($item->thumbnail) }}" alt="{{ $item->meta_title }}" src="{{ pare_url_file($item->thumbnail) }}">
                                        </a>
                                    </div>
                                    <div class="m-product-card__info do_cao">
                                        <div class="m-combined-product-name group-product">
                                            <a class="m-combined-product-name__link product-name-fio align-items-center produc-rel-link" href="{{ $item->slug }}" title="{{ $item->meta_title }}">
                                                <span class="a-folio">
                                                    {{ $item->name }}
                                                </span>
                                            </a>
                                        </div>
                                        <div class="m-combined-product-name group-product">
                                            <a class="m-combined-product-name__link product-name-fio align-items-center produc-rel-link" href="{{ $item->slug }}" title="{{ $item->meta_title }}">
                                                <span> <img src="{{ asset('img/brand/star_5.png') }}" alt=""></span>  
                                            </a>
                                            <a class="text-center"><b> {{ countReview($item->id) !=0 ? '('.countReview($item->id).' đánh giá)':'' }}</b></a>
                                        </div>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </div>
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