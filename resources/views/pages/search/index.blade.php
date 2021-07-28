@extends('pages.layouts.app_master_frontend')
@section('contents')
<main role="main">
    <a id="main-content" tabindex="-1"></a>
    <div class="layout-content">
        <div class="region region-content">
            <div data-drupal-messages-fallback class="hidden"></div>
            <div id="block-frontiercoop-market-content">
                <div class="views-element-container">
                    <header>
                        <div id="taxonomy-term-521" class="taxonomy-term vocabulary-products-categories">
                            <div class="content">
                                <div class="layout layout--onecol">
                                    <div class="layout__region layout__region--content">
                                        <div class="views-element-container">
                                            <div class="views-element-container">
                                                <div class="t-plp js-plp" id="js-plp">
                                                    <div class="t-plp__container js-plp-container">
                                                        <h2>Tìm thấy: {{ count($product) }} sản phẩm với từ khóa: {{ $search }}</h2>
                                                        <div class="t-plp__grid js-plp-grid show-product" id="show-product">
                                                            @forelse ($product as $key => $item)
                                                            <div class="t-plp__product" style="transform-origin: 0px 0px;">
                                                                <div class="views-field views-field-search-api-rendered-item" style="transform-origin: 0px 0px;"><span class="field-content">
                                                                        <div data-product-name="{{ $item->name }}" data-product-sku="{{ $item->id }}" data-product-brand="frontiercoop_market" class="m-product-card">
                                                                            <div class="m-product-card__content-wrapper">
                                                                                <a class="m-product-card__img-wrapper" href="{{ $item->slug }}" title="{{ $item->name }}">
                                                                                    <img class="m-product-card__img ls-is-cached lazyloaded" data-src="{{ pare_url_file($item->thumbnail) }}" alt="{{ $item->name }}" src="{{ pare_url_file($item->thumbnail) }}">
                                                                                </a>
                                                                                <form class="m-product-card__add-to-cart">
                                                                                    <button class="a-btn a-btn--primary m-product-card__add-to-cart-btn js-add-cart" data-url="{{ route('get_user.cart.add',['id' => $item->id,'type' => 'single']) }}" data-uid="{{ get_data_user('web') }}" data-id="{{ $item->id }}" type="button">Thêm giỏ hàng</button>
                                                                                    <button class="a-btn a-btn--primary m-product-card__add-to-cart-icon js-add-cart" type="&quot;submit&quot;">
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
                                                                                <div class="m-product-card__sku">SKU: {{ $item->id }} đ</div>
                                                                                <div class="m-price-lockup m-product-card__price">
                                                                                    <span class="m-price-lockup__price">
                                                                                        <?php if (checkUid($uid)) { ?>
                                                                                            <?php if ($item->price_sale_store != null) { ?>
                                                                                                <span class="a-price">
                                                                                                    {{ $item->price_sale_store }} đ
                                                                                                </span>
                                                                                            <?php } else { ?>
                                                                                                <a href="/lien-he"><span class="a-price">Liên hệ để biết thông tin</span></a>
                                                                                            <?php } ?>
                                                                                        <?php } else { ?>
                                                                                            <?php if ($item->price != null) { ?>
                                                                                                <span class="a-price">
                                                                                                    {{ $item->price }} đ
                                                                                                </span>
                                                                                            <?php } else { ?>
                                                                                                <a href="/lien-he"><span class="a-price">Liên hệ để biết thông tin</span></a>
                                                                                            <?php } ?>
                                                                                        <?php } ?>

                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="m-product-card__cta"></div>
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            @empty
                                                            @endforelse
                                                        </div>
                                                        <div class="t-plp__grid js-plp-grid">
                                                        </div>
                                                        <div class="t-plp__media-block" style="transform-origin: 0px 0px;">
                                                            <div class="t-plp__pagination">
                                                                <div class="m-pagination">
                                                                    <div class="primary">
                                                                        <button type="button" class="a-btn a-btn--primary login primary js-login">
                                                                            <span>Xem thêm</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="t-plp__container js-plp-container">
                                                        <h2>Tìm thấy: {{ count($post) }} bài viết với từ khóa: {{ $search }}</h2>
                                                        <div class="t-plp__grid js-plp-grid show-product" id="show-product">
                                                            @forelse ($post as $key => $item)
                                                            <div class="t-plp__product" style="transform-origin: 0px 0px;">
                                                                <div class="views-field views-field-search-api-rendered-item" style="transform-origin: 0px 0px;"><span class="field-content">
                                                                        <div data-product-name="{{ $item->name }}" class="m-product-card">
                                                                            <div class="m-product-card__content-wrapper">
                                                                                <a class="m-product-card__img-wrapper" href="{{ $item->slug }}" title="{{ $item->name }}">
                                                                                    <img class="m-product-card__img ls-is-cached lazyloaded" data-src="{{ pare_url_file($item->thumbnail) }}" alt="{{ $item->name }}" src="{{ pare_url_file($item->thumbnail) }}">
                                                                                </a>
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
                                                                            </div>
                                                                            <div class="m-product-card__cta"></div>
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            @empty
                                                            @endforelse
                                                        </div>
                                                        <div class="t-plp__grid js-plp-grid">
                                                        </div>
                                                        <div class="t-plp__media-block" style="transform-origin: 0px 0px;">
                                                            <div class="t-plp__pagination">
                                                                <div class="m-pagination">
                                                                    <div class="primary">
                                                                        <button type="button" class="a-btn a-btn--primary login primary js-login">
                                                                            <span>Xem thêm</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </header>
                </div>
            </div>
        </div>
    </div>
</main>
@stop