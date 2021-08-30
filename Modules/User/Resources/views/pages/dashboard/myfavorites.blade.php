@extends('user::pages.layout.app_master_user')
@section('content')
<main id="maincontent" class="">
    <!--<a id="contentarea" tabindex="-1"></a>-->
    <div class="page messages">
        <div data-placeholder="messages"></div>
        <div data-bind="scope: 'messages'">
            <!-- ko if: cookieMessages && cookieMessages.length > 0 -->
            <!-- /ko -->

            <!-- ko if: messages().messages && messages().messages.length > 0 -->
            <!-- /ko -->
        </div>

    </div>
    <div class="columns">
        @include('user::pages.component._inc_menu_user')

        <div class="column main padding_css">
            <div>
                <div class="c-filter-bar class_left">

                    <div class="c-filter-bar__sorting">
                        <div class="m-sort-by">
                            <select onchange="get_data1();" class="m-sort-by__select frontier-custom-sort" id="sort_by" name="sort_by" aria-label="Sắp xếp theo">
                                <option value="0" selected="">Chọn Danh Mục Sản Phẩm</option>
                                @foreach ($category_menu as $l)
                                <option value="{{ $l->id }}">{{ $l->name }}</option>
                                @endforeach
                            </select>
                            <span class="m-sort-by__arrow"></span>
                        </div>
                        <div class="m-sort-by">
                            <select onchange="get_data1();" class="m-sort-by__select frontier-custom-sort" id="order_by" name="order_by" aria-label="Order By">
                                <option value="0" selected="">Chọn Sắp Xếp</option>
                                <option value="desc" selected="">Tăng</option>
                                <option value="asc">Giảm</option>
                            </select>
                            <span class="m-sort-by__arrow"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="t-plp__grid js-plp-grid show-product" id="show-product">

                @foreach ($product_list as $item)
                <div class="loadmore1 t-plp__product margin_top_list" data-animate-grid-id="0.7226111054869209" style="transform-origin: 0px 0px;">
                    <div class="views-field views-field-search-api-rendered-item" style="transform-origin: 0px 0px;">
                        <span class="field-content">
                            <div data-product-name="{{ $item->name }}" data-product-sku="{{ $item->id }}" data-product-brand="frontiercoop_market" data-product-category="{{ get_category_id($item->id) }}" class="m-product-card">
                                <div class="m-product-card__content-wrapper">
                                    <a class="m-product-card__img-wrapper" href="{{ getSlugProduct($item->slug) }}" title="{{ $item->name }}">
                                        <img class="m-product-card__img ls-is-cached lazyloaded" data-src="{{ pare_url_file($item->thumbnail) }}" alt="{{ $item->name }}" src="{{ pare_url_file($item->thumbnail) }}">
                                    </a>

                                </div>
                                <div class="m-product-card__info">
                                    <div class="m-combined-product-name group-product">
                                        <a class="m-combined-product-name__link product-name-fio uni-css-title" href="{{ $item->slug }}">
                                            <span class="a-folio">
                                                {{ $item->name }}
                                            </span>
                                        </a>
                                    </div>
                                    <div class="m-product-card__sku">
                                        <span> SKU: {{ $item->id }}</span>
                                        <span> <img src="{{ asset('img/brand/star_5.png') }}" alt="{{ $item->name }}"> ({{ countReview($item->id) }})</span>
                                    </div>
                                    <div class="m-price-lockup m-product-card__price">
                                        <span class="m-price-lockup__price">
                                            <?php if (checkUid(get_data_user('web'))) { ?>
                                                <?php if ($item->view_price_sale_store != null) { ?>
                                                    <span class="g-price">
                                                        {{ formatVnd($item->view_price) }}
                                                    </span>
                                                    <span class="text-danger paid-save font_chu_mau_do">

                                                        @if ($item->view_price_sale_store == null || $item->view_price == null)

                                                        @else
                                                        (Tiết kiệm: {{ 100-round($item->view_price_sale_store*100/$item->view_price) }}% )
                                                        @endif
                                                    </span>
                                                    <br>
                                                    <span class="a-price font-weight-bold">
                                                        {{ formatVnd($item->view_price_sale_store) }}
                                                    </span>
                                                    <?php if ($item->qty) { ?>
                                                        <span class="a-price text-success product-notnull"><i class="fa fa-check" aria-hidden="true"></i>Còn hàng</span>
                                                    <?php } else { ?>
                                                        <span class="a-price text-dark product-notnull"><i class="fa fa-phone" aria-hidden="true"></i>Liên hệ</span>
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

                                                        (Tiết kiệm: {{ 100-round($item->view_price_sale*100/$item->view_price) }}% )

                                                    </span>
                                                    <br>
                                                    <span class="a-price font-weight-bold">
                                                        {{ formatVnd($item->view_price_sale) }}
                                                    </span>
                                                    <?php if ($item->qty) { ?>

                                                        <span class="a-price text-success product-notnull"><i class="fa fa-check" aria-hidden="true"></i>Còn hàng</span>

                                                    <?php } else { ?>
                                                        <span class="a-price text-info product-notnull"><i class="fa fa-phone"></i>Liên hệ</span>
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
                                                    <?php if ($item->qty) { ?>

                                                        <span class="a-price text-success product-notnull"><i class="fa fa-check" aria-hidden="true"></i>Còn hàng</span>

                                                    <?php } else { ?>
                                                        <span class="a-price text-info product-notnull"><i class="fa fa-phone"></i>Liên hệ</span>
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
                                                <p><span class="font-weight-bold" style="color:#ea7236">SL/ Thùng:</span> {{ $item->qty_in_box }} hộp</p>
                                                <p><span class="font-weight-bold" style="color:#ea7236">SL mua tối thiểu:</span> {{ $item->min_box }} thùng</p>
                                                <p><span class="font-weight-bold" style="color:#ea7236">Giá:</span> {{ formatVnd($item->qty_in_box * $item->view_price_sale_store) }}/thùng</p>
                                            </div>
                                            <?php if ($item->qty == null) { ?>
                                                <a href="{{ route('get.uni_contact') }}" class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn contact-btn" type="button" rel="nofollow">Liên hệ</a>
                                            <?php } else { ?>
                                                <button class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn js-add-cart" data-min-box="{{ $item->min_box }}" data-qtyinbox="{{ $item->qty_in_box }}" data-url="{{ route('get_user.cart.add',['id' => $item->id,'type' => 'single']) }}" data-uid="{{ get_data_user('web') }}" type="button">Thêm giỏ hàng</button>
                                            <?php } ?>

                                        <?php } else { ?>
                                            <?php if ($item->qty == null) { ?>
                                                <a href="{{ route('get.uni_contact') }}" class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn contact-btn" type="button" rel="nofollow">Liên hệ</a>
                                            <?php } else { ?>
                                                <form>
                                                    <button class="a-btn a-btn--primary m-product-card__add-to-cart-btn {{ get_data_user('web') != null ? 'js-add-cart':'' }}" data-target="{{ get_data_user('web') ==null ? '.login-js' :'' }}" data-toggle="{{ get_data_user('web') == null ? 'modal' :'' }}" data-url="{{ route('get_user.cart.add',['id' => $item->id,'type' => 'single']) }}" data-uid="{{ get_data_user('web') }}" data-id="{{ $item->id }}" type="button">Thêm giỏ hàng</button>
                                                    <!--<button class="a-btn a-btn--primary m-product-card__add-to-cart-icon" data-target=".login-js" data-toggle="modal" type="&quot;submit&quot;">
                                                        <span class="icon-add-to-cart"></span>
                                                    </button>-->
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
                @endforeach
            </div>


            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
            <script>
                function get_data1() {
                    var sort_by = $('#sort_by').val();
                    var order_by = $('#order_by').val();

                    $.get("{{ route('get_user.myfavorites_filter') }}", {
                            sort_by: sort_by,
                            order_by: order_by
                        })
                        .done(function(data) {
                            $("#show-product").html(data);
                        });
                }

                function check_my_favorites(my_id) {
                    var title = $(my_id).attr('my-id');
                    $.get("{{ route('get_user.myfavorites_delete') }}", {
                            id: title
                        })
                        .done(function(data) {
                            alert(data);
                            location.reload();
                        });
                }


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
</main>

@stop