<div class="t-plp__container js-plp-container product-rel">
    <h3>Sản phẩm nổi bật nhất</h3>
    <div class="row no-gutters" style="margin:auto">
        @forelse($product_rel as $key_rel => $item)
        <div class="loadmore11 t-plp__product" style="transform-origin: 0px 0px; display: block;" data-animate-grid-id="0.8579037597911499">
            <div class="views-field views-field-search-api-rendered-item" style="transform-origin: 0px 0px;"><span class="field-content">
                    <div data-product-name="{{ $item->name }}" data-product-sku="{{ $item->id }}" data-product-brand="frontiercoop_market" class="m-product-card">
                        <div class="m-product-card__content-wrapper">
                            <a class="m-product-card__img-wrapper product-review" href="{{ $item->slug }}" title="{{ $item->meta_title }}">
                                <img class="m-product-card__img ls-is-cached lazyloaded" data-src="{{ pare_url_file($item->thumbnail) }}" alt="{{ $item->meta_title }}" src="{{ pare_url_file($item->thumbnail) }}">
                            </a>
                            <!-- <a class="fav-product">
                                <span my-id="11" id="red_heart11" data-target=".login-js" data-toggle="modal" data-uid="0" 0="" onclick="unset;" class="icon-favorite  a-icon-text-btn__icon  " aria-hidden=""></span>
                            </a> -->
                        </div>
                        <div class="m-product-card__info">
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
        @empty
        @endforelse
    </div>
</div>