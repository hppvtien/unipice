@forelse ($product as $key => $item)

<div class="loadmore1 t-plp__product" data-animate-grid-id="0.7226111054869209" style="transform-origin: 0px 0px;">
    <div class="views-field views-field-search-api-rendered-item" style="transform-origin: 0px 0px;"><span class="field-content">
            <div data-product-name="{{ $item->name }}" data-product-sku="{{ $item->id }}" class="m-product-card">
                <div class="m-product-card__content-wrapper">
                    <a class="m-product-card__img-wrapper" href="{{ $item->slug }}" title="{{ $item->name }}">
                        <img class="m-product-card__img ls-is-cached lazyloaded" data-src="{{ pare_url_file_product($item->thumbnail) }}" alt="{{ $item->name }}" src="{{ pare_url_file($item->thumbnail) }}">
                    </a>
                    <?php if (checkUid(get_data_user('web')) != null) { ?>
                        <form class="m-product-card__add-to-cart">
                            <div class="a-btn a-btn--primary m-product-card__add-to-cart-btn">
                                <?php if ($item->qty_in_box != null) { ?>
                                    <p>Thùng: {{ $item->qty_in_box }} hộp</p>
                                    <p>Số lượng: {{ $item->min_box }} trở lên</p>
                                    <p>Giá: {{ formatVnd($item->qty_in_box * $item->price_sale_store) }}/thùng</p>
                                    <button class="btn_store_submit js-add-cart" data-min-box="{{ $item->min_box }}" data-qtyinbox="{{ $item->qty_in_box }}" data-url="{{ route('get_user.cart.add',['id' => $item->id,'type' => 'single']) }}" data-uid="{{ get_data_user('web') }}" type="button">Thêm giỏ hàng</button>
                                <?php } else { ?>
                                    <p class="text-center">Dữ liệu về sản phẩm</p>
                                    <p class="text-center">đang được cập nhật</p>
                                <?php } ?>
                            </div>

                        </form>
                    <?php } else { ?>
                        <form class="m-product-card__add-to-cart">
                            <button class="a-btn a-btn--primary m-product-card__add-to-cart-btn js-add-cart" data-url="{{ route('get_user.cart.add',['id' => $item->id,'type' => 'single']) }}" data-uid="{{ get_data_user('web') }}" data-id="{{ $item->id }}" type="button">Thêm giỏ hàng</button>
                            <button class="a-btn a-btn--primary m-product-card__add-to-cart-icon" type="&quot;submit&quot;">
                                <span class="icon-add-to-cart"></span>
                            </button>
                        </form>
                    <?php } ?>
                </div>
                <div class="m-product-card__info">
                    <div class="m-combined-product-name group-product">
                        <a class="m-combined-product-name__link" href="{{ $item->slug }}">
                            <span class="a-folio">
                                {{ $item->name }}
                            </span>
                        </a>
                        <a class="m-combined-product-name__link fav-product" href="{{ $item->slug }}">
                            <span my-id="{{ $item->id }}" onclick="check_my_favorites_add(this);" class="icon-favorite  a-icon-text-btn__icon" aria-hidden="true"></span>
                        </a>
                    </div>
                    <div class="m-combined-product-name">
                        <a class="m-combined-product-name__link" href="javascript:;">
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


<script>
    $(function() {
        $(".loadmore1").slice(0, 4).show();
        $("#loadMore").on("click", function(e) {
            e.preventDefault();
            $(".loadmore1:hidden").slice(0, 4).slideDown();
            if ($(".loadmore1:hidden").length == 0) {
                $("#load").fadeOut("slow");
            }
            $("#show-product").animate({
                scrollTop: $(this).offset().top
            }, 1500);
        });
    });

    $("a[href=#top]").click(function() {
        $("#show-product").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $(".totop a").fadeIn();
        } else {
            $(".totop a").fadeOut();
        }
    });
</script>