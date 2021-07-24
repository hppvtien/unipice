@extends('pages.layouts.app_master_frontend') @section('contents')
<main id="maincontent" class="page-main">
    <a id="contentarea" tabindex="-1"></a>
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
        <div class="column main">
            <div class="show-product" id="show-product">
                <div class="container mt-2 mb-5">
                    <div class="d-flex justify-content-center row">
                        <div class="col-md-12">
                            @foreach ($my_flash_sale as $l)
                            <div class="loadmore1">
                                <div class=" mt-2 row p-2 bg-white border rounded">
                                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://aphoto.vn/wp-content/uploads/2019/02/hinh10-4.jpg"></div>
                                    <div class="col-md-6 mt-1">
                                        <a href="#{{ $l->slug }}">{{ $l->name }}</a>
                                        <div class="d-flex flex-row">
                                            <div class="ratings mr-2"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></div><span>{{ $l->qty }}</span>
                                        </div>
                                        <div class="mt-1 mb-1 spec-1">
                                            {{ $l->desscription }}
                                        </div>
                                        <p class="text-justify text-truncate para mb-0">{!! html_entity_decode($l->content) !!}<br><br></p>
                                    </div>
                                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                        <div class="d-flex flex-row align-items-center">
                                            <h4 class="mr-1" get-total-price="{{ number_format($l->price) }}">{{ number_format($l->price) }} VNĐ</h4>
                                        </div>
                                        <h6 class="text-success">@if ($l->status == 1) Đang Áp Dụng @else Đã Hết Hạn  @endif</h6>
                                        <div class="d-flex flex-column mt-4">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" data-id-sale="{{ $l->id }}" onclick="get_product_sale(this);">
                                                Xem Chi Tiết Gói Sale
                                            </button>
                                           
                                            <button onclick="cart_order_now(this);" id="button_sale" class="btn btn-outline-primary btn-sm mt-2" price-id="{{ $l->id }}" price-slug="{{ $l->slug }}" type="button">Mua Ngay</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="class_xem_them">
                <a href="#" id="loadMore">Xem Thêm</a>
            </div>
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                        Chi Tiết Gói Sale
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      
                    </div>
                    <div class="modal-footer">
                      <button onclick="cart_order_now(this);" id="cart_sale" type="button" class="btn btn-secondary" price-id="" price-slug="" data-dismiss="modal">Đặt Ngay</button>
                    </div>
                  </div>
                </div>
              </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>

        function cart_order_now(cart_order_now1){
            var cart_order_now_id = $( cart_order_now1 ).attr('price-id');
            var cart_order_now_slug = $( cart_order_now1 ).attr('price-slug');
            $.post( "{{ route('get_user.cart_now_1') }}", { cart_order_now_id: cart_order_now_id, cart_order_now_slug: cart_order_now_slug } )
            .done(function( data ) {
                alert(data);
            });
        }

        function get_product_sale(get_id){
            var get_id = $( get_id ).attr( "data-id-sale" );
            var get_total_price = $('h4.mr-1').attr('get-total-price');
            var price_id = $('#button_sale').attr('price-id');
            var price_slug = $('#button_sale').attr('price-slug');

            $.get( "{{ route('get_user.get_product_flash_sale') }}", { get_id: get_id, get_total_price: get_total_price } )
            .done(function( data ) {
                $( "#exampleModalLong .modal-body" ).html( data );
                $( '#cart_sale' ).attr( "price-slug", price_slug );
                $( '#cart_sale' ).attr( "price-id", price_id );
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