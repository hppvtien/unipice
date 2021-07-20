
    @forelse ($product as $key => $item)

    <div class="t-plp__product" data-animate-grid-id="0.7226111054869209" style="transform-origin: 0px 0px;">
        <div class="views-field views-field-search-api-rendered-item" style="transform-origin: 0px 0px;"><span class="field-content">
                <div data-product-name="{{ $item->name }}" data-product-sku="{{ $item->id }}" data-product-brand="frontiercoop_market" data-product-category="\Accessories\Home and Pet\Kitchen and Dining\Food Storage and Containers" class="m-product-card">
                    <div class="m-product-card__content-wrapper">
                        <a class="m-product-card__img-wrapper" href="{{ $item->slug }}" title="{{ $item->name }}">
                            <img class="m-product-card__img ls-is-cached lazyloaded" data-src="{{ pare_url_file_product($item->thumbnail) }}" alt="{{ $item->name }}" src="{{ pare_url_file_product($item->thumbnail) }}">
                        </a>
                        <form class="m-product-card__add-to-cart">
                            <button class="a-btn a-btn--primary m-product-card__add-to-cart-btn" type="submit">Add to cart</button>
                            <button class="a-btn a-btn--primary m-product-card__add-to-cart-icon" type="&quot;submit&quot;">
                                <span class="icon-add-to-cart"></span>
                            </button>
                        </form>
                    </div>
                    <div class="m-product-card__info">
                        <div class="m-combined-product-name">
                            <a class="m-combined-product-name__link" href="{{ $item->slug }}">
                                <span class="a-folio">
                                    {{ $item->name }}
                                </span>
                                <span class="a-product-name">
                                    {{ desscription_cut($item->desscription,60) }}
                                </span>
                            </a>
                        </div>
                        <div class="m-product-card__sku">SKU: {{ $item->id }}</div>
                        <div class="m-price-lockup m-product-card__price">
                            <span class="m-price-lockup__price" style="display: none">
                                <span class="a-price">
                                    {{ $item->price_sale }}
                                </span>
                            </span>
                        </div>
                    </div>
                    <!-- FC-2249:: Remove markup that should only be available to authenticated users -->
                    <div class="m-product-card__cta"></div>
                </div>
            </span>
        </div>
    </div>
    @empty

    @endforelse



