@extends('pages.layouts.app_master_frontend') @section('contents')

@include('pages.components.headers.css_js')
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
        @include('user::components._inc_menu_user')

        <div class="column main padding_css">
            <div>
                <div class="c-filter-bar class_left">

                    <div class="c-filter-bar__sorting">
                        <div class="m-sort-by">
                            <select onchange="get_data1();" class="m-sort-by__select frontier-custom-sort" id="sort_by" name="sort_by" aria-label="Sort By">
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
                
                @foreach ($product_list as $value)
                <div class="loadmore1 t-plp__product margin_top_list" data-animate-grid-id="0.7226111054869209" style="transform-origin: 0px 0px;">
                    <div class="views-field views-field-search-api-rendered-item" style="transform-origin: 0px 0px;">
                        <span class="field-content">
                            <div data-product-name="{{ $value->name }}" data-product-sku="{{ $value->id }}" data-product-brand="frontiercoop_market" data-product-category="{{ get_category_id($value->id) }}" class="m-product-card">
                                <div class="m-product-card__content-wrapper">
                                    <a class="m-product-card__img-wrapper" href="san-pham-10" title="{{ $value->name }}">
                                        <img class="m-product-card__img ls-is-cached lazyloaded" data-src="https://wall.vn/wp-content/uploads/2020/03/hinh-nen-dep-may-tinh-1.jpg" alt="{{ $value->name }}" src="https://wall.vn/wp-content/uploads/2020/03/hinh-nen-dep-may-tinh-1.jpg">
                                    </a>
                                    <form class="m-product-card__add-to-cart">
                                        <button class="a-btn a-btn--primary m-product-card__add-to-cart-btn" type="submit">Thêm Vào Giỏ</button>
                                        <button class="a-btn a-btn--primary m-product-card__add-to-cart-icon" type="&quot;submit&quot;">
                                        <span class="icon-add-to-cart"></span>
                                        </button>
                                    </form>
                                </div>
                                <div class="m-product-card__info">
                                    <div class="m-combined-product-name">
                                        <a class="m-combined-product-name__link" href="san-pham-10">
                                            <span class="a-folio">{{ $value->name }}</span>
                                            <span class="a-product-name">{{ Str::limit($value->desscription, 55) }}</span>
                                        </a>
                                    </div>
                                    <div class="m-product-card__sku">SKU: {{ $value->id }} <span my-id="{{ $value->id }}" onclick="check_my_favorites(this);" class="icon-favorite  a-icon-text-btn__icon red" aria-hidden="true"></span></div>
                                    <div class="m-price-lockup m-product-card__price">
                                        <span class="m-price-lockup__price" style="display: none">
                                            <span class="a-price"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="m-product-card__cta"></div>
                            </div>
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
            <div >
                <a href="#" id="loadMore">Xem Thêm</a>
            </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
    <script>
        function get_data1(){
            var sort_by = $('#sort_by').val();
            var order_by = $('#order_by').val();

            $.get( "{{ route('get_user.myfavorites_filter') }}", { sort_by: sort_by, order_by: order_by } )
                .done(function( data ) {
                $( "#show-product" ).html( data );
            });
        }

        function check_my_favorites(my_id){
            var title = $(my_id).attr('my-id');
            $.get( "{{ route('get_user.myfavorites_delete') }}", { id: title} )
            .done(function( data ) {
                alert(data);
                location.reload();
            });
        }
        
       
        $(function () {
            $(".loadmore1").slice(0, 4).show();
                $("#loadMore").on("click", function (e) {
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

            $("a[href=#top]").click(function () {
                $("#show-product").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });

            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $(".totop a").fadeIn();
                } else {
                    $(".totop a").fadeOut();
                }
            });
            
    </script>
</main>

@stop

