@extends('user::layouts.app_master_user')
@section('style')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/pay.css') }}">
@stop
@section('content')
@include('user::pages.pay.include._inc_process')
<style>
    @media only screen and (max-width: 768px) {
        .container.flex {
            display: flex;
            flex-wrap: wrap;
            padding-top: 0;
        }

        .container.flex .item {
            flex: 0 0 100%;
            max-width: 100%;
            display: flex;
            width: 100%;
        }

        .item span:nth-child(1) {
            color: chocolate;
            padding-right: 20px;
            padding-bottom: 0 !important;
        }

        .box-fix {
            height: 140px;
            padding-top: 0px;
            padding: 15px 30px;
        }

        button.checkout-button.btn.js-save-cart {
            padding: 10px 50px;
            font-size: 14px;
            margin: 0;
            text-transform: uppercase;
        }
        .box-fix .item span:first-child{
            font-size: 14px;
        }
    }

</style>
<div class="container" id="pjax-pages-page">
    <form action="" method="POST" id="formTransaction">
        <div class="box mb20">
            <div class="box-70">
                @include('user::pages.pay.include._inc_pay_left')
                <div class="item">
                    <button type="button" class="checkout-button btn js-save-cart btn-danger" data-url-rd="{{ route('get_user.paysuccsess') }}" data-url="{{ route('post_user.cart.pay',['type' => 'course']) }}">Hoàn tất đơn hàng</button>
                </div>
            </div>
            <div class="box-30">
                @include('user::pages.pay.include._inc_pay_right',['listCarts' => $listCarts])
            </div>
            
        </div>
    </form>
</div>
@stop
@section('script')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#check_vouchers').click(function() {
        $.ajax({
            url: "{{ route('get_user.check_vouchers') }}",
            type: "post",
            dataType: "text",
            data:{
                check_vouchers:$("input[name='vouchers']").val()
            },
            success: function(result) {
                    $('.messager_check').html(result);
            },
            error: function(result) {
                    $('.messager_check').html(result);
            }
        });
    })
</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    let input_html = '<div class="item-1">'+
    '<input type="text" required name="method_company" required class="form-control" id="method_company" placeholder="Vui lòng nhập tên công ty" value="">'+
    '<div class="text-danger method_company" ></div>'+
    '</div>'+
    '<div class="item-1">'+
    '<input type="text" required name="method_customer_code" required class="form-control" id="method_customer_code" placeholder="Vui lòng nhập mã số thuế" value="">'+
    '<div class="text-danger method_customer_code" ></div>'+
    '</div>';
    $(".company_us").on('change', function() {
        let group_buy = $("input[name='group_buy']:checked").val();
        let in_per = 
           ' <p class="color-orange box-total-pay">'+
               ' <span>Tổng tiền thanh toán: </span>'+
               ' <span id="total_paid">{{ \Cart::total(0,0,'.') }}đ</span>'+
           ' </p>';
        let in_int = '<p>'+
                '<span>Học phí gốc</span>'+
                '<span id="total_no_vat">{{ $total_no_vat }}đ</span>'+
            '</p>'+
           '<p>'+
                '<span>Thuế 10%</span>'+
                '<span id="vat_total">{{ $vat_total }}đ</span>'+
           '</p>'+
           '<p class="color-orange box-total-pay">'+
               ' <span>Tổng tiền thanh toán: </span>'+
               ' <span id="total_paid">{{ $paid_total }}đ</span>'+
           ' </p>';
        if(group_buy == 1){
            $('.add-form-company').html(input_html);
            $('.pay-footer').html(in_int);
        };
        if(group_buy == 2){
            $('.add-form-company').html(input_html);
            $('.pay-footer').html(in_int);
        };
        if(group_buy == 0){
            $('.add-form-company .item-1').remove();
            $('.pay-footer').html(in_per);
        };
        
    });
    // 
</script>
<script src="{{ asset('js/cart.js') }}"></script>
@stop