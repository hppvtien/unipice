@extends('user::layouts.app_master_user')
@section('style')
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@stop
@section('content')

<div class="container page-shopping-cart adsmo-top" id="pjax-pages-page">
    <h1 class="mt-3 mb-3">Giỏ hàng</h1>
    <div class="table-responsive pt20">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="width: 10%;">Image</th>
                    <th style="width: 40%;text-align: left">Sản phẩm</th>
                    <th style="text-align: left">Giá</th>
                    <th style="text-align: left">Thành tiền</th>
                    <th style="width: 10%;text-align:center">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listCarts as $key => $item)
                <tr>
                    <td>
                        <a href="" title="{{ $item->name }}" class="avatar image contain">
                            <img alt="{{ $item->name }}" onerror="this.onerror=null;this.src='/images/default.png';" src="{{ $item->options->avatar }}" class="lazyload">
                        </a>
                    </td>
                    <td>
                        <div style="" class="name-product"> <a href=""><strong>{{ $item->name }}</strong></a> </div>
                    </td>
                    <td> <span class="js-total-item">{{ number_format(round($item->price + $item->price*$item->taxRate/100), 0, '', '.') }}đ</span> </td>
                    <td> <span class="js-total-item">{{ number_format(round($item->price + $item->price*$item->taxRate/100), 0, '', '.') }}đ</span> </td>                 
                    <td class="text-center">
                        <a href="{!! url('xoa-san-pham',['id'=>$item->rowId])!!}" class="btn btn-xs btn-pink btn-radius"><i class="fa fa-trash"></i> Huỷ bỏ</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="cart-footer mt20">
            <p class="text-danger">Tổng tiền : <b id="sub-total">{{ \Cart::total(0,0,'.') }}đ</b></p>
            <div class="group-btn-pay">
                <a href="{{ route('get_user.pay') }}" class="btn btn-success" title="Thanh toán">Thanh toán</a>
                <a href="{{ route('get.category.all') }}" title="Tất cả khoá học" class="btn btn-primary">Tiếp tục tìm khoá học</a>
            </div>
        </div>
    </div>
</div>
@stop
