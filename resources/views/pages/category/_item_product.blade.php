@forelse ($product as $key => $item)
<div class="loadmore12 t-plp__product" style="transform-origin: 0px 0px;">
    <div class="views-field views-field-search-api-rendered-item" style="transform-origin: 0px 0px;"><span class="field-content">
            <div data-product-name="{{ $item->name }}" data-product-sku="{{ $item->id }}" data-product-brand="frontiercoop_market" class="m-product-card">
                <div class="m-product-card__content-wrapper">
                    <a class="m-product-card__img-wrapper" href="{{ $item->slug }}" title="{{ $item->name }}">
                        <img class="m-product-card__img ls-is-cached lazyloaded" data-src="{{ pare_url_file($item->thumbnail) }}" alt="{{ $item->name }}" src="{{ pare_url_file($item->thumbnail) }}">
                    </a>
                    <a class="fav-product">
                        <span my-id="{{ $item->id }}" id="red_heart{{ $item->id }}" data-target="{{ get_data_user('web') ==null ? '.login-js' :'' }}" data-toggle="{{ get_data_user('web') == null ? 'modal' :'' }}" data-uid="{{ get_data_user('web') != null ? get_data_user('web') : 0 }}" {{ get_data_user('web') !=null ? get_data_user('web') : 0 }} 
                            onclick="{{ get_data_user('web') !=null ? 'check_my_favorites_add(this)' : 'unset' }};" class="icon-favorite  a-icon-text-btn__icon  {{ red_heart($item->id,get_data_user('web')) != 0 ? 'red':''; }}" aria-hidden=""></span>
                    </a>
                </div>
                <div class="m-product-card__info">
                    <div class="m-combined-product-name group-product">
                        <a class="m-combined-product-name__link product-name-fio" href="{{ $item->slug }}">
                            <span class="a-folio">
                                {{ $item->name }}
                            </span>
                        </a>
                    </div>
                    <div class="m-product-card__sku">
                        <span> SKU: {{ $item->id }}</span>
                        <span> <img src="{{ asset('img/brand/star_5.png') }}" alt=""> ({{ countReview($item->id) }})</span>
                    </div>
                    <div class="m-price-lockup m-product-card__price">
                        <span class="m-price-lockup__price">
                            <?php if (checkUid($uid)) { ?>
                                <?php if ($item->view_price_sale_store != null) { ?>
                                    <span class="g-price">
                                        {{ formatVnd($item->view_price) }}
                                    </span>
                                    <span class="text-danger paid-save font_chu_mau_do">

                                        @if ($item->view_price_sale_store == null || $item->view_price == null)

                                        @else
                                        (Ti???t ki???m: {{ 100-round($item->view_price_sale_store*100/$item->view_price) }}% )
                                        @endif
                                    </span>
                                    <br>
                                    <span class="a-price font-weight-bold">
                                        {{ formatVnd($item->view_price_sale_store) }}
                                    </span>
                                    <?php if (checkQtyProduct($item->id) > 0) { ?>
                                        <span class="a-price text-success product-notnull"><i class="fa fa-check" aria-hidden="true"></i>C??n h??ng</span>
                                    <?php } else { ?>
                                        <span class="a-price text-dark product-notnull"><i class="fa fa-phone" aria-hidden="true"></i>Li??n h???</span>
                                    <?php } ?>
                                <?php } else { ?>
                                    <a href="{{ route('get.uni_contact') }}"><span class="a-price">{{ formatVnd($item->view_price) }}</span></a>
                                <?php } ?>
                            <?php } else { ?>
                                <?php if ($item->view_price_sale != null) { ?>
                                    <span class="g-price">
                                        {{ formatVnd($item->view_price) }}
                                    </span>
                                    <span class="text-danger paid-save font_chu_mau_do">

                                        (Ti???t ki???m: {{ 100-round($item->view_price_sale*100/$item->view_price) }}% )

                                    </span>
                                    <br>
                                    <span class="a-price font-weight-bold">
                                        {{ formatVnd($item->view_price_sale) }}
                                    </span>
                                    <?php if (checkQtyProduct($item->id) > 0) { ?>

                                        <span class="a-price text-success product-notnull"><i class="fa fa-check" aria-hidden="true"></i>C??n h??ng</span>

                                    <?php } else { ?>
                                        <span class="a-price text-info product-notnull"><i class="fa fa-phone"></i>Li??n h???</span>
                                    <?php } ?>
                                    <span class="row">
                                        <div class="buttons_added add-qty col-12">
                                            <input class="minus is-form" type="button" value="-">
                                            <input aria-label="quantity" class="input-qty update-qty" id="js-qty{{ $item->id }}" max="10" min="1" name="qty-user" type="number" value="1">
                                            <input class="plus is-form" type="button" value="+">
                                        </div>
                                    </span>
                                <?php } else { ?>
                                    <span>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span>
                                    <span class="text-danger paid-save font_chu_mau_do">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </span>
                                    <br>
                                    <span class="a-price font-weight-bold">
                                        {{ formatVnd($item->view_price) }}
                                    </span>
                                    <?php if (checkQtyProduct($item->id) > 0) { ?>

                                        <span class="a-price text-success product-notnull"><i class="fa fa-check" aria-hidden="true"></i>C??n h??ng</span>

                                    <?php } else { ?>
                                        <span class="a-price text-info product-notnull"><i class="fa fa-phone"></i>Li??n h???</span>
                                    <?php } ?>
                                    <span class="row">
                                        <div class="buttons_added add-qty col-12">
                                            <input class="minus is-form" type="button" value="-">
                                            <input aria-label="quantity" class="input-qty update-qty" id="js-qty{{ $item->id }}" max="10" min="1" name="qty-user" type="number" value="1">
                                            <input class="plus is-form" type="button" value="+">
                                        </div>
                                    </span>
                                <?php } ?>

                            <?php } ?>
                        </span>
                    </div>
                    <div class="m-combined-product-name group-product group-product-cart">
                        <?php if (checkUid(get_data_user('web')) != null) { ?>
                            <div class="info-sale-store">
                                <a href="{{ $item->slug }}" title="{{ $item->name }}" class="text-center">
                                    <img src="{{ pare_url_file($item->thumbnail) }}" alt="{{ $item->name }}">
                                </a>
                                <p><span class="text-warning font-weight-bold">SL/ Th??ng:</span> {{ $item->qty_in_box }} l???</p>
                                <p><span class="text-warning font-weight-bold">SL mua t???i thi???u:</span> {{ $item->min_box }} th??ng</p>
                                <p><span class="text-warning font-weight-bold">Gi??:</span> {{ formatVnd($item->qty_in_box * $item->view_price_sale_store) }}/th??ng</p>
                            </div>
                            <?php if (checkQtyProduct($item->id) == 0) { ?>
                                <a href="{{ route('get.uni_contact') }}" class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn contact-btn" type="button" rel="nofollow">Li??n h???</a>
                            <?php } else { ?>
                                <button class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn js-add-cart" data_href="" data-min-box="{{ $item->min_box }}" data-qtyinbox="{{ $item->qty_in_box }}" data-url="{{ route('get_user.cart.add',['id' => $item->id,'type' => 'single']) }}" data-uid="{{ get_data_user('web') }}" type="button">Th??m gi??? h??ng</button>
                            <?php } ?>

                        <?php } else { ?>
                            <?php if (checkQtyProduct($item->id) == 0) { ?>
                                <a href="{{ route('get.uni_contact') }}" class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn contact-btn" type="button" rel="nofollow">Li??n h???</a>
                            <?php } else { ?>
                                <form>
                                    <button class="a-btn a-btn--primary m-product-card__add-to-cart-btn {{ get_data_user('web') != null ? 'js-add-cart':'' }}" data-target="{{ get_data_user('web') ==null ? '.login-js' :'' }}" data_href="" data-toggle="{{ get_data_user('web') == null ? 'modal' :'' }}" data-url="{{ route('get_user.cart.add',['id' => $item->id,'type' => 'single']) }}" data-uid="{{ get_data_user('web') }}" data-id="{{ $item->id }}" type="button">Th??m gi??? h??ng</button>
                                    <button class="a-btn a-btn--primary m-product-card__add-to-cart-icon" data-target=".login-js" data-toggle="modal" type="&quot;submit&quot;">
                                        <span class="icon-add-to-cart"></span>
                                    </button>
                                </form>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="m-product-card__cta"></div>
            </div>
        </span>
    </div>
</div>
@empty
<div class="loadmore11 t-plp__product" style="transform-origin: 0px 0px;height:500px">
    <div class="views-field views-field-search-api-rendered-item" style="transform-origin: 0px 0px;">
        S???n ph???m ??ang ???????c c???p nh???t
    </div>
</div>
@endforelse