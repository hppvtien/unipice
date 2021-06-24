
@extends('user::layouts.app_master_user')
@section('style')
<link rel="stylesheet" href="{{ asset('css/pay.css') }}">
@stop
@section('content')
<style>
    .pay-process ul li:last-child {
        background: #50ad4e;
        color: white;
        position: relative;
    }

    .checkout-triangle-right-succsess {
        border-top: 25px solid transparent;
        border-left: 20px solid #50ad4e;
        border-bottom: 25px solid transparent;
        position: absolute;
        right: -20px;
    }

    .pay-process ul {
        overflow: unset;
    }

    .cart-detail {
        width: 100%;
        margin: 30px auto;
    }

    .col-item-c {
        margin: 10px;
    }

    .cart-detail-top {
        margin: 10px 0;
    }

    .cart-detail-top p {
        margin: 10px 0;
    }

    .title-pay {
        margin: 20px 0;
        text-transform: uppercase;
        font-size: 20px;
        font-weight: 700
    }

    @media only screen and (max-width: 768px) {
        .adsmo-top {
            margin-top: 60px;
        }

        ul.checkout-list-part.pc {
            display: block;
        }

        .pay-process ul li {
            display: block;
            width: 90%;
        }

        .pay-process ul li:nth-child(1),
        .pay-process ul li:nth-child(2) {
            display: none;
        }

        .cart-detail {
            width: 90%;
        }

    }
</style>
<div class="pay-process adsmo-top mb20">
    <div class="container">
        <ul class="checkout-list-part pc">
            <li>
                <span class="checkout-span">Xem giỏ hàng</span>
                <span class="checkout-triangle-right"></span>
            </li>
            <li>
                <span class="checkout-triangle-left"></span>
                <span class="checkout-span">Chọn cách thanh toán và điền thông tin</span>
                <span class="checkout-triangle-right"></span>
            </li>
            <li>
                <span class="checkout-triangle-left"></span>
                <span class="checkout-span">Hoàn tất đơn hàng</span>
                <span class="checkout-triangle-right-succsess"></span>

            </li>
        </ul>
    </div>
</div>
<form id="form-order" method="get">

    <div class="container" id="pjax-pages-page">
        <h1 class="text-center text-success">Cám ơn bạn đã mua hàng !!!</h1>
        <div class="cart-detail">
            <div class="cart-detail-top">
                <p><span class="text-danger"> Họ tên khách hàng (<i class="text-success"> Buyer name </i>):</span> {{ $bill_data->method_customer }}</p>
                @if ($bill_data->method_company)
                <p><span class="text-danger"> Tên công ty (<i class="text-success"> Company's name </i>):</span> {{ $bill_data->method_company }}</p>
                <p><span class="text-danger"> Mã số thuế (<i class="text-success"> TaxCode </i>):</span> {{ $bill_data->method_customer_code }}</p>
                @else

                @endif
                <p><span class="text-danger"> Địa chỉ (<i class="text-success"> Address </i>):</span> {{ $bill_data->method_address }}</p>
                <p><span class="text-danger"> Hình thức thanh toán (<i class="text-success"> Payment Method </i>):</span> {{ config('cart.pay_type')[$bill_data->method_pay-1]['name'] }}</p>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên khóa học</th>
                        <th scope="col">Sô lượng</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col">Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n = 1; ?>
                    @foreach(json_decode($bill_data->method_course) as $key => $item)
                    <tr>
                        <th scope="row">{{ $n++ }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ number_format(round($item->price), 0, '', '.') }}đ</td>
                        <td>{{ number_format(round($item->price)*$item->qty, 0, '', '.') }}đ</td>
                    </tr>
                    @endforeach
                    @if ($bill_data->total_no_vat)
                    <tr>
                        <td colspan="4">Tổng tiền khóa học( Total amount )</td>
                        <td>{{ $bill_data->total_no_vat }}</td>
                    </tr>
                    <tr>
                        <td colspan="2">Thuế GTGT (VAT Rate): 10%</td>
                        <td colspan="2">Tiền Thuế GTGT (VAT amount)</td>
                        <td>{{ $bill_data->vat_total }}</td>
                    </tr>
                    @else

                    @endif
                    @if ($bill_data->method_voucher)
                    <tr>
                        <td colspan="4">Tổng tiền VAT: </td>                             
                        <td>{{ $bill_data->paid_total }}</td>
                    </tr>
                    <tr>
                        <td colspan="3">Được giảm {{ $bill_data->method_voucher_percent }}% từ mã giảm giá</td>
                        <td>{{ $bill_data->method_voucher }}</td>
                        <td>-{{ number_format(round($bill_data->method_paid*10/(100-$bill_data->method_voucher_percent)), 0, '', '.') }}đ</td>
                    </tr>
                    @else

                    @endif

                    <tr>
                        <td colspan="4">Tổng cộng tiền thanh toán (Grand total)</td>
                        <td>{{ number_format(round($bill_data->method_paid), 0, '', '.') }}đ</td>
                    </tr>
                </tbody>
            </table>
            <div class="container">
                <h3 class="title-pay text-center text-success">Thêm thông tin để thanh toán qua MOMO</h3>
                <div class="form-group">
                    <label for="bank_code">Tổng tiền thanh toán</label>
                    <input class="form-control" type="text" id="total_amount" name="total_amount" value="{{ $bill_data->method_paid }}">
                </div>
                <div class="form-group">
                    <label for="bank_code">Số điện thoại</label>
                    <input class="form-control" disabled type="text" id="method_phone" name="method_phone" value="{{ $bill_data->method_phone }}">
                </div>
                <div class="form-group">
                    <label for="bank_code">Nội dung thanh toán</label>
                    <input class="form-control" type="text" name="t_note" value="" placeholder="Vui lòng nhập nội dung thanh toán">
                </div>
                <input type="hidden" id="tranID" value="{{ $tran_data->id }}">
                <input type="hidden" id="orderID" value="{{ $order_data->id }}">
            </div>

        </div>
        <button type="button" class="btn btn-success btn-lg" url-ajax="{{ route('get_user.momosuccsess') }}" id="momo-success">Thanh toán MOMO</button>
    </div>
</form>

@stop
@section('script')

<script src="{{ asset('js/cart.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('#momo-success').on('click', function() {
    let urrl = $(this).attr('url-ajax');
    $.ajax({
        url: urrl,
        type: "post",
        dataType: "text",
        data: {
            tranID: $('#tranID').val(),
            orderID: $('#orderID').val(),
            method_phone: $('#method_phone').val(),
            total_amount: $('#total_amount').val(),
            t_note: $("input[name='t_note']").val(),
            type_pay: 2,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function(result) {
            let urlmomo = result;
            window.location.href = urlmomo;
        },
        error: function(result) {
            console.log(result);
        }

    });
});
</script>
@stop