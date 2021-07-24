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
                                    <div class="m-product-card__sku">SKU: {{ $value->id }} <span my-id="{{ $value->id }}" onclick="check_my_favorites_add(this);" class="icon-favorite  a-icon-text-btn__icon @php foreach ($my_favorites as  $l) {
                                        if($value->id == $l){
                                            echo 'red';
                                        }else {
                                            echo  '';
                                        }
                                    } @endphp" aria-hidden="true"></span></div>
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

<script>
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

            function check_my_favorites_add(my_id){
                var title = $(my_id).attr('my-id');
                $.get( "{{ route('get_user.myfavorites_add') }}", { id: title} )
                .done(function( data ) {
                    alert(data);
                    location.reload();
                });
            }
        

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