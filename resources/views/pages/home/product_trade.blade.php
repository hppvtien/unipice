    <ul class="c-products-slider__slider js-swiper-wrapper">
        @forelse ($product as $key => $item)
        <li class="c-products-slider__item js-swiper-slide">
            <!-- BASE :: MINI-PRODUCT-CARD -->
            <a style="--color-brand:var(--color-simply-organic)" class="m-mini-product-card" href="{{ $item->slug }}">
                <div class="m-mini-product-card__img-wrapper">
                    <img class="lazyload" data-src="{{ pare_url_file_product($item->thumbnail) }}" alt="{{ $item->name }}" >
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