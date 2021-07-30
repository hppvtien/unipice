@forelse ($product as $key => $item)

<div class="t-plp__product" data-animate-grid-id="0.7226111054869209" style="transform-origin: 0px 0px;">
    <div class="views-field views-field-search-api-rendered-item" style="transform-origin: 0px 0px;"><span class="field-content">
            <div data-product-name="{{ $item->name }}" data-product-sku="{{ $item->id }}" class="m-product-card">
                <div class="m-product-card__content-wrapper">
                    <a class="m-product-card__img-wrapper" href="{{ $item->slug }}" title="{{ $item->name }}">
                        <img class="m-product-card__img ls-is-cached lazyloaded" data-src="{{ pare_url_file($item->thumbnail) }}" alt="{{ $item->name }}" src="{{ pare_url_file($item->thumbnail) }}">
                    </a>
                    <form class="m-product-card__add-to-cart">
                        <button class="a-btn a-btn--primary m-product-card__add-to-cart-btn js-add-cart" data-url="{{ route('get_user.cart.add',['id' => $item->id,'type' => 'single']) }}" data-uid="{{ get_data_user('web') }}" type="button">Thêm giỏ hàng</button>
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
                        <span class="m-price-lockup__price">
                            <?php if (checkUid($uid)) { ?>
                                <?php if ($item->price_sale_store != null) { ?>
                                    <span class="a-price">
                                        {{ formatVnd($item->price_sale_store) }}
                                    </span>
                                <?php } else { ?>
                                    <a href="/lien-he"><span class="a-price">Liên hệ để biết thông tin</span></a>
                                <?php } ?>
                            <?php } else { ?>
                                <?php if ($item->price != null) { ?>
                                    <span class="a-price">
                                        {{ formatVnd($item->price) }}
                                    </span>
                                <?php } else { ?>
                                    <a href="/lien-he"><span class="a-price">Liên hệ để biết thông tin</span></a>
                                <?php } ?>
                            <?php } ?>

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