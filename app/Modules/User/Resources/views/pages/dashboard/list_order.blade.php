@extends('user::pages.layout.app_master_user')
@section('content')



<main id="maincontent" class="">

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

            <div class="show-product" id="show-product">
                <div class="mt-2 mb-5">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-12">
                           
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Thông tin sản phẩm</th>
                                        <th scope="col">Phương thức thanh toán</th>
                                        <th scope="col">Tổng tiền thanh toán</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Địa chỉ</th>
                                        <th scope="col">Điện thoại</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (count($uni_order) > 0) { ?>
                                        @foreach ($uni_order as $key => $item)
                                        <tr>
                                            <th scope="row">{{ $key+1 }}</th>
                                            <td>
                                                @foreach (json_decode($item->cart_info) as $keys => $items)
                                                <span class="text-success">Sản phẩm :</span> <span>{{ $items->name }}</span> ||
                                                <span class="text-success">Số lượng :</span> <span>{{ $items->qty }}</span> ||
                                                <span class="text-success">Giá sản phẩm:</span> <span>{{ number_format($items->price) }}</span><br>
                                                @endforeach
                                            </td>
                                            <td class="text-center">{{ $item->type_pay }}</td>
                                            <td class="text-center">{{ number_format((int)$item->total_money) }}</td>
                                            <td class="text-center">{{ $item->status }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->phone }}</td>
                                        </tr>
                                        @endforeach
                                    <?php } else { ?>
                                        <tr>
                                            <td colspan=7 scope="row">Dữ liệu đang cập nhật</th>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function cart_order_now(cart_order_now1) {
            var data_url = $(cart_order_now1).attr('data-url');
            $.get(data_url).fail(function() {
                location.reload();
            });
        }

        function get_product_sale(get_id) {
            var get_id = $(get_id).attr("data-id-sale");
            var get_total_price = $('h4.mr-1').attr('get-total-price');
            var price_id = $('#button_sale').attr('price-id');
            var price_slug = $('#button_sale').attr('price-slug');

            $.get("{{ route('get_user.get_product_flash_sale') }}", {
                    get_id: get_id,
                    get_total_price: get_total_price
                })
                .done(function(data) {
                    $("#exampleModalLong .modal-body").html(data);
                    $('#cart_sale').attr("price-slug", price_slug);
                    $('#cart_sale').attr("price-id", price_id);
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