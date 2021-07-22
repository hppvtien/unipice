@extends('pages.layouts.app_master_frontend')
@section('contents')
<main role="main">
    <a id="main-content" tabindex="-1"></a>
    <div class="layout-content">
        <div class="region region-content">
            <div data-drupal-messages-fallback class="hidden"></div>
            <div id="block-frontiercoop-market-content" data-block-plugin-id="system_main_block">
                <article data-history-node-id="246326" role="article" about="/accessories/storage/bottles/atomizer-with-1-2-3-oz-amber-oil-bottle" data-frontier-type="products">
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
                                                <a class="a-anchor" href="/accessories">Accessories</a>
                                            </li>
                                            <li class="m-breadcrumb__item">
                                                <a class="a-anchor" href="/accessories/storage">Storage</a>
                                            </li>
                                            <li class="m-breadcrumb__item m-breadcrumb__item--active">
                                                <a class="a-anchor" aria-current="page">Bottles</a>
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
                                                                    <span class="a-folio">
                                                                        {{ $trade_name }}
                                                                    </span>
                                                                    <span class="a-product-name">
                                                                        {{ $product->name }}
                                                                        {{-- {{ desscription_cut($product->desscription,60) }} --}}
                                                                    </span>
                                                                </h1>
                                                            </div>
                                                            <!-- FC-2249:: Remove markup that should only be available to authenticated users -->
                                                        </div>
                                                        {{-- <div class="m-product-overview__unit-and-sku">
                                                            <span class="m-product-overview__sku">SKU: {{ $product->id }}</span>
                                                        </div> --}}
                                                        <!-- /TODO :: ADD RATING -->
                                                        <div role="article" class="m-product-overview__price-wrapper">
                                                            <div class="m-price-lockup">
                                                                <span class="m-price-lockup__price">
                                                                    <span class="a-price">
                                                                        {{ $product->price == '' ? 'Giá liên hệ': $product->price }}
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div role="article" class="m-product-overview__price-wrapper">
                                                            <div class="m-price-lockup">
                                                                <span class="m-price-lockup__price">
                                                                    <span class="a-qty">
                                                                        {{ $product->qty == '' ? 'Hiện tại hết hàng': $product->qty }}
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <form class="m-product-overview__add-to-cart">
                                                            <input class="a-number-input m-product-overview__qty" type="number" id="qty" name="qty" min="0" max="10000" value="1" aria-label="Quantity" /> <button class="a-btn a-btn--primary m-product-overview__add-to-cart-btn js-add-cart" data-url="{{ route('get_user.cart.add',['id' => $item->id,'type' => 'single']) }}" type="button">Add to Cart</button>
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
                                <div data-block-plugin-id="entity_view:node">
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
                                                    {{ $product->desscription }}
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
                        <div class="layout__region layout__region--content">
                            <div class="c-testimonial-carousel">
                                <div class="c-testimonial-carousel__carousel glide">
                                    <div class="c-testimonial-carousel__track glide__track" data-glide-el="track">
                                        <div class="c-testimonial-carousel__slides glide__slides">
                                            <div class="c-testimonial-carousel__slide glide__slide">
                                                <div data-block-plugin-id="inline_block:testimonial_block" data-inline-block-uuid="cdaa6813-674d-4305-8823-c40e6921b4fd" class="m-review-testimonial-block">
                                                    <div class="m-review-testimonial-block__image-container">
                                                        <img class="lazyload" data-src="https://www.coopmarket.com/sites/default/files/styles/281x356/public/acquiadam/2020-07/testimonial-1.png?itok=JxQ9MMj6" alt=" ">
                                                    </div>
                                                    <div class="m-review-testimonial-block__content">
                                                        <blockquote class="m-review-testimonial-block__quote" cite="">
                                                            <p class="m-review-testimonial-block__quote-text">Aura Cacia essential oils are the perfect addition to any skincare routine.</p>
                                                            <footer>
                                                                <p class="m-review-testimonial-block__quote-author">Catherine Nelson<br>
                                                                    <cite class="m-review-testimonial-block__quote-cite">Licensed Esthetician, Chicago, IL</cite>
                                                                </p>
                                                            </footer>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="c-testimonial-carousel__slide glide__slide">
                                                <div data-block-plugin-id="inline_block:testimonial_block" data-inline-block-uuid="380dc9f3-a052-4db1-a107-e226f0671086" class="m-review-testimonial-block">
                                                    <div class="m-review-testimonial-block__image-container">
                                                        <img class="lazyload" data-src="https://www.coopmarket.com/sites/default/files/styles/281x356/public/acquiadam/2020-07/testimonial-2.png?itok=Z4dklNKY" alt=" ">
                                                    </div>
                                                    <div class="m-review-testimonial-block__content">
                                                        <blockquote class="m-review-testimonial-block__quote" cite="">
                                                            <p class="m-review-testimonial-block__quote-text">aura cacia dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                                                            <footer>
                                                                <p class="m-review-testimonial-block__quote-author">Page Turner<br>
                                                                    <cite class="m-review-testimonial-block__quote-cite">Licensed Esthetician, Chicago, IL</cite>
                                                                </p>
                                                            </footer>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="c-testimonial-carousel__slide glide__slide">
                                                <div data-block-plugin-id="inline_block:testimonial_block" data-inline-block-uuid="2325b869-9df7-4c72-8594-29f8f30c85f5" class="m-review-testimonial-block">
                                                    <div class="m-review-testimonial-block__image-container">
                                                        <img class="lazyload" data-src="https://www.coopmarket.com/sites/default/files/styles/281x356/public/acquiadam/2020-07/testimonial-3.png?itok=lgDgWofL" alt=" ">
                                                    </div>
                                                    <div class="m-review-testimonial-block__content">
                                                        <blockquote class="m-review-testimonial-block__quote" cite="">
                                                            <p class="m-review-testimonial-block__quote-text">aura cacia dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                                                            <footer>
                                                                <p class="m-review-testimonial-block__quote-author">Crystal Chandelier<br>
                                                                    <cite class="m-review-testimonial-block__quote-cite">Licensed Esthetician, Chicago, IL</cite>
                                                                </p>
                                                            </footer>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-testimonial-carousel__controls">
                                    <div class="c-testimonial-carousel__page-track glide__track" data-glide-el="track">
                                        <div class="c-testimonial-carousel__page-slides glide__slides">
                                            <div class="c-testimonial-carousel__page-slide glide__slide">
                                                <img class="lazyload" data-src="https://www.coopmarket.com/sites/default/files/styles/281x356/public/acquiadam/2020-07/testimonial-1.png?itok=JxQ9MMj6">
                                            </div>
                                            <div class="c-testimonial-carousel__page-slide glide__slide">
                                                <img class="lazyload" data-src="https://www.coopmarket.com/sites/default/files/styles/281x356/public/acquiadam/2020-07/testimonial-2.png?itok=Z4dklNKY">
                                            </div>
                                            <div class="c-testimonial-carousel__page-slide glide__slide">
                                                <img class="lazyload" data-src="https://www.coopmarket.com/sites/default/files/styles/281x356/public/acquiadam/2020-07/testimonial-3.png?itok=lgDgWofL">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="a-carousel-indicator a-carousel-indicator--no-bullets a-carousel-indicator--arrows glide__arrows ">
                                        <button class="a-carousel-indicator__arrow a-carousel-indicator__arrow--left" type="button" aria-label="Prev">
                                            <span class="icon-arrow-left"></span>
                                        </button>

                                        <div class="a-carousel-indicator__bullets glide__bullets">
                                            <button class="a-carousel-indicator__bullet " type="button" aria-label="Go to slide " data-slide-number="">
                                            </button>
                                        </div>

                                        <button class="a-carousel-indicator__arrow a-carousel-indicator__arrow--right" type="button" aria-label="Next">
                                            <span class="icon-arrow-right"></span>
                                        </button>
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
