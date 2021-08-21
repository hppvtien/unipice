@if ($product_related)
<div class="non-visible layout layout--onecol">
    <div class="c-categories-slider layout layout--onecol">

        <div class="layout__region layout__region--heading">
            <div class="c-categories-slider__heading-wrapper layout-builder__add-block">


                <div class="m-heading">
                    <h3 class="m-heading__headline">
                        Bạn cũng có thể thích
                    </h3>
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
                                    <source media="(min-width: 768px)" data-srcset="{{ pare_url_file($item->thumbnail) }}">
                                    <img class="lazyload" data-src="{{ pare_url_file($item->thumbnail) }}" alt="{{ $item->name }}">
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
                    @empty @endforelse

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
@else
    
@endif