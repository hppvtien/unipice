@extends('user::pages.layout.app_master_user')
@section('content')

    <main id="maincontent" class="">

    <div class=" columns">
        @include('user::pages.component._inc_menu_user')

        <div class="column main padding_css">

            <div class="show-product" id="show-product">
                <div class="mt-2 mb-5">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-12">

                            <table class="table table-striped">
                                <thead>
                                    <tr class="order-list-li">
                                        <th class="text-center" scope="col">#</th>
                                        <th scope="col" class="text-center">Mã đơn hàng</th>
                                        <th scope="col" class="text-center">Ngày đặt</th>
                                        <th scope="col" class="text-center">Phương thức thanh toán</th>
                                        <th scope="col" class="text-center">Tổng tiền</th>
                                        <th scope="col" class="text-center">Trạng thái</th>
                                        <th scope="col" class="text-center">Xuất đơn hàng</th>
                                        <th scope="col" class="text-center">Hủy đơn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (count($uni_order) > 0) { ?>
                                    @forelse ($uni_order as $key => $item)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td class="text-left" data-id="{{ $item->id }}">
                                                <a type="button" class="btn text-primary mx-auto" data-toggle="modal"
                                                    data-target="#exampleModal{{ $item->id }}">
                                                    {{ $item->code_invoice }}
                                                </a>
                                            </td>
                                            <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header btn-success">
                                                            <h5 class="modal-title text-white" id="exampleModalLabel">Đơn
                                                                hàng: {{ $item->code_invoice }}</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-1 text-info">#</div>
                                                                <div class="col-4 text-info">Sản phẩm</div>
                                                                <div class="col-3 text-info">Số lượng</div>
                                                                <div class="col-4 text-info">Giá sản phẩm</div>
                                                            </div>
                                                            <?php $stt_p = 0; ?>
                                                            @foreach (json_decode($item->cart_info) as $keys => $items)
                                                                <div class="row"
                                                                    style="margin-top: 10px;margin-bottom: 10px;">
                                                                    <div class="col-1 text-info">{{ $stt_p++ }}</div>
                                                                    <div class="col-4">{{ $items->name }}</div>
                                                                    <div class="col-3">{{ $items->qty }}</div>
                                                                    <div class="col-4">
                                                                        {{ formatVnd($items->price) }}</div>
                                                                </div>
                                                            @endforeach
                                                            <div class="row btn-success text-center" style="padding: 10px;">
                                                                <h6 class="modal-title text-white ">Thông tin liên lạc</h6>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p></p>
                                                                </div>
                                                                <div class="col-12">
                                                                    <p><span class="text-success">Đại chỉ</span>
                                                                        :{{ $item->address }}</p>
                                                                </div>
                                                                <div class="col-12">
                                                                    <p><span class="text-success">Số điện thoại</span>
                                                                        :{{ $item->phone }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Đóng</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <td class="text-center">{{ $item->created_at }}</td>
                                            @if ($item->type_pay != null)
                                                <td class="text-center"><a class="btn btn-success w-75"
                                                        href="javascript:;">{{ config('cart.pay_type')[$item->type_pay]['name'] }}</a>
                                                </td>
                                            @else
                                                <td class="text-center"><a class="btn btn-info w-75"
                                                        href="{{ route('get_user.paysuccsess', $item->id) }}">Đơn hàng
                                                        chưa thanh toán</a></td>
                                            @endif
                                            <td class="text-center">{{ formatVnd($item->total_money) }} </td>
                                            <td class="text-center"><span
                                                    class="badge {{ $item->getStatus($item->status)['class'] }}">{{ $item->getStatus($item->status)['name'] }}</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="javascript:;" class="btn btn-info print_pdf" id="print_pdf"
                                                    data-id="{{ $item->id }}"
                                                    data-url="{{ route('get_user.generatePDF') }}">
                                                    <i class="fa fa-download text-white"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                @if ($item->status == 0 && Carbon\Carbon::now() < $item->created_at->subHours(-24))
                                                    <!-- Button trigger modal -->
                                                    <button type="button" style="margin-top: 10px;" class="btn btn-info" data-toggle="modal"
                                                        data-target="#exampleModals">
                                                        <i class="fa fa-trash text-white"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModals" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" style="color: #000000" id="exampleModalLabel">Bạn có chắc muốn hủy đơn hàng không?</h5>
                                                                </div>
                                                                <div class="modal-footer text-center mx-auto">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Đóng</button>
                                                                        <a href="javascript:;" class="btn btn-info delete_order"
                                                                        id="delete_order" data-id="{{ $item->id }}"
                                                                        data-url="{{ route('get_user.delete_order') }}">
                                                                        Hủy đơn
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                @else
                                                    <button type="button" style="margin-top: 10px;" class="btn btn-info"
                                                        data-toggle="modal" data-target="#exampleModal">
                                                        <i class="fa fa-clock-o text-white"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" style="color: #000000"
                                                                        id="exampleModalLabel">Yêu cầu hủy đơn hàng của bạn
                                                                        đã thất bại!</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Đơn hàng của bạn đã được hệ thông chập nhận và đang
                                                                        xử lý.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endif
                                            </td>
                                        </tr>
                                    @empty

                                    @endforelse
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
