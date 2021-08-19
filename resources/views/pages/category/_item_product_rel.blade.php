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
                    <a class="m-category-card m-category-card--bordered" href="{{ getSlugProduct($item->slug) }}">
                        <div class="m-category-card__image-wrapper">
                            <picture>
                                <source media="(min-width: 768px)" data-srcset="{{ pare_url_file($item->thumbnail) }}" srcset="{{ pare_url_file($item->thumbnail) }}">
                                <img class=" lazyloaded" data-src="{{ pare_url_file($item->thumbnail) }}" alt="{{ $item->name }}" src="{{ pare_url_file($item->thumbnail) }}">
                            </picture>
                            <div class="m-category-card__caption product-name-fio">
                                <span class="m-category-card__caption-text a-folio" style="font-size: 1em!important">{{ $item->name }}</span>
                            </div>
                            <div class="m-category-card__caption">
                                <span> <img src="{{ asset('img/brand/star_5.png') }}" alt=""></span>
                            </div>
                            <div class="m-category-card__caption do_cao">
                                <span> <b> {{ countReview($item->id) !=0 ? '('.countReview($item->id).' đánh giá)':'' }}</b></span>
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