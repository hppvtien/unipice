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

    <div class="container" id="pjax-pages-page" style="margin: 0;padding: 0">
        <h1 class="text-center text-success">Cám ơn bạn đã mua hàng !!!</h1>
        
        <button type="button" class="btn btn-success btn-lg pdf-exp" id="vnpay-success">Thanh toán</button>
    </div>
</form>

@stop
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/cart.js') }}"></script>
<script >
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$("#bank_code").on('change', function() {
    let bank_code = $(this).val();
    $('#vnpay-success').on('click', function() {
        $.ajax({
            url: "{{ route('get_user.vnpaysuccsess') }}",
            type: "post",
            dataType: "text",
            data: {
                bank_code: bank_code,
                tranID: $('#tranID').val(),
                orderID: $('#orderID').val(),
                method_phone: $('#method_phone').val(),
                total_amount: $('#total_amount').val(),
                type_pay: 4,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(result) {
                console.log(result);
                let urlvnpay = result;
                console.log(urlvnpay);
                window.location.href = urlvnpay;
            },
            error: function(result) {
                console.log('loixxxxxxxxxxxxxxxxxxxx');
            }

        });
    })
});
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
@stop