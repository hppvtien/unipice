@extends('pages.layouts.app_master_frontend')
@section('contents')


<main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
    <div class="page-title-wrapper">
        <h1 class="page-title">
            <span class="base" data-ui-id="page-title-wrapper">Cám ơn bạn đã mua hàng !!!</span>
        </h1>
    </div>
    <div class="columns">
        <div class="column main" style="width:100%">
            <div id="checkout" data-bind="scope:'checkout'" class="checkout-container">
                <div class="checkout-main">
                    <div class="opc-wrapper">
                        <ol class="opc" id="checkoutSteps">
                            <li id="shipping" class="checkout-shipping-address" data-bind="fadeVisible: visible()">
                                <div class="step-title" data-role="title">Thông tin đơn hàng</div>
                                <div id="checkout-step-shipping" class="step-content" data-role="content">
                                    <form id="form-order" action="{{ route('get_user.downPDF') }}" method="get">

                                        <div class="container" id="pjax-pages-page">
                                            <div class="cart-detail">
                                                <div class="cart-detail-top">
                                                    <p><span class="text-danger"> Họ tên khách hàng (<i class="text-success"> Buyer name </i>):</span> {{ $order_data_sucsses->customer_name }}</p>
                                                    @if ($order_data_sucsses->method_company)
                                                    <p><span class="text-danger"> Tên công ty (<i class="text-success"> Company's name </i>):</span> {{ $order_data_sucsses->customer_name }}</p>
                                                    <p><span class="text-danger"> Mã số thuế (<i class="text-success"> TaxCode </i>):</span> {{ $order_data_sucsses->taxcode }}</p>
                                                    @else
                                                    @endif
                                                    <p><span class="text-danger"> Địa chỉ (<i class="text-success"> Address </i>):</span> {{ $order_data_sucsses->address }}</p>
                                                    {{-- <p><span class="text-danger"> Hình thức thanh toán (<i class="text-success"> Payment Method </i>):</span> {{ config('cart.pay_type')[$order_data_sucsses->type_pay]['name'] }}</p> --}}
                                                    <p>Thông tin ngân hàng: <span class="text-danger"> Tài khoản: <i class="text-dark">01256655852366</i> &nbsp&nbsp||&nbsp&nbspNgân hàng: <i class="text-dark">VIB</i> &nbsp&nbsp||&nbsp&nbsp Chủ Thẻ: <i class="text-dark">Phạm văn Tiến</i> &nbsp&nbsp||&nbsp&nbsp Chi nhánh: <i class="text-dark">Thủy Nguyên - Hải Phòng</i> </span></p>
                                                </div>
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">STT</th>
                                                            <th scope="col">Sản phẩm</th>
                                                            <th scope="col">Sô lượng</th>
                                                            <th scope="col">Đơn giá</th>
                                                            <th scope="col">Thành tiền</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $n=1; ?>
                                                        @foreach(json_decode($order_data_sucsses->cart_info) as $key => $item)
                                                        <tr>
                                                            <td>{{ $n++ }}</td>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->qty }}</td>
                                                            <td>{{ $item->price }}đ</td>
                                                            <td>{{ $item->price }}đ</td>
                                                        </tr>
                                                        @endforeach
                                                  
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        </form>
                                    <div class="actions-toolbar">
                                        <div class="primary">
                                            <button class="a-btn a-btn--primary action apply primary js-save-cart" id="export_pdf" data-url="{{ route('get_user.paysuccsess') }}"  data-url-rd = "{{ route('get_user.paysuccsess') }}" type="button" value="Pay Continue">
                                                <span>Xuất hóa đơn</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@stop
