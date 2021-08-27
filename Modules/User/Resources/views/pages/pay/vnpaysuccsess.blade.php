@extends('pages.layouts.app_master_frontend')
@section('contents')

<style>
    ul.checkout-methods-items li:before {
        content: '';
        display: none;
    }

    .optionTitle.m-radio-button__text-label {
        float: left;
        margin-right: 10px;
    }

    .cart-container .cart-summary .shipping .m-text-input,
    .cart-container .cart-summary .shipping .m-select-menu {
        margin-top: 20px;
        width: 100%;
    }

    .checkout-container {
        position: relative;
    }

    .m-radio-button {
        position: relative;
        margin-bottom: 10px;
        flex: 0 0 25%;
        max-width: 100%;
    }

    .pay_type {
        display: flex;
        margin-top: 20px !important;
    }

    .a-select-menu {
        position: relative;
        padding-right: 40px;
        cursor: pointer;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 100%;
    }

    .m-select-menu__label {
        padding-bottom: 0;
        white-space: nowrap;
    }

    .m-select-menu__arrow {
        top: 0;
    }

    .m-select-menu__arrow:before {
        content: "";
    }

    .a-form-label,
    .checkout-payment-method .payment-method-braintree .hosted-control .label {
        display: block;
        padding-bottom: 5px;
    }

    .cart-container .cart-summary .shipping.block {
        margin-bottom: 20px;
    }

    .cart-container .cart-summary .shipping .title {
        display: flex;
        justify-content: space-between;
    }

    .cart-container .cart-accordion-title {
        margin: 0;
        font-size: 1rem;
        line-height: 1.3;
    }

    .cart-container .cart-summary .block .collapsible-arrow {
        display: inline-block;
    }

    .fieldset>.field,
    .fieldset>.fields>.field {
        margin: 0 0 6px;
    }

    .cart-container .cart-summary .shipping-rates {
        margin-top: 16px;
    }

    .icon-arrow-down:before {
        transform: rotate(90deg);
    }

    .cart-container .cart-summary .shipping .fieldset {
        margin: 0;
    }

    .cart-container .cart-totals {
        margin-bottom: 20px;
        border-top: 1px solid #a8a99e;
    }

    .cart-container .cart-totals .table {
        margin-bottom: 30px;
        width: 100%;
        margin: 0 0 10px;
    }

    .table>caption {
        border: 0;
        clip: rect(0, 0, 0, 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
    }

    .cart-container .cart-totals th {
        padding-left: 0;
    }

    .cart-container .cart-totals th,
    .cart-container .cart-totals td {
        border-bottom: 1px solid #a8a99e;
        font-size: 14px;
        font-size: .875rem;
        font-weight: 400;
        padding: 16px 12px;
    }

    .cart-container .cart-totals td {
        padding-right: 0;
        text-align: right;
    }

    .cart-container .cart-totals th,
    .cart-container .cart-totals td {
        border-bottom: 1px solid #a8a99e;
        font-size: 14px;
        font-size: .875rem;
        font-weight: 400;
        padding: 16px 12px;
    }

    .cart-container .cart-table .item-info {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
    }

    .cart-container .cart-table .item-info .item {
        grid-column-end: span 3;
        display: flex;
        align-items: center;
    }

    .cart-container .cart-table td {
        padding: 0;
    }

    .cart-container .cart-table td a.product-item-photo {
        box-shadow: none;
    }

    .cart-container .cart-table td a {
        box-shadow: none;
    }

    .cart-container .cart-summary .summary.title {
        display: block;
        margin-bottom: 20px;
    }

    .cart-container {
        display: grid;
        grid-template-columns: 1fr 320px;
        grid-template-rows: auto auto 1fr;
        grid-gap: 0 30px;
    }



    .cart-container .cart-messaging__shipping {
        margin: 20px 0;
    }

    .table td a {
        font-family: "Montserrat", sans-serif;
        font-family: 'Montserrat', sans-serif;
        color: inherit;
        text-decoration: none;
        padding: 0 0 2px;

        outline: none;
        display: inline-block;
        margin-right: 10px;
    }

    .product-image-container {
        width: 40%;
        height: auto;
        display: inline-block;
        max-width: 100%;
        margin-right: 10px;
        object-fit: contain;
    }

    .checkout-container .opc-sidebar .product {
        display: flex;
        margin: 0;
    }

    .checkout-container .opc-sidebar .product-image-wrapper {
        height: auto;
    }

    .checkout-container .opc-sidebar .product-image-container img {
        object-fit: contain;
    }

    .checkout-container .opc-sidebar .subtotal {
        color: #0b2d25;
        margin-top: 5px;
    }

    .product-item-name {
        -moz-hyphens: auto;
        -ms-hyphens: auto;
        -webkit-hyphens: auto;
        display: block;
        hyphens: auto;
        margin: 5px 0;
        word-wrap: break-word;
        font-weight: 600;
    }

    .product-image-wrapper {
        display: block;
        /* height: 0; */
        position: relative;
        z-index: 1;
    }

    .content.minicart-items {
        margin-top: 10px;
    }

    .product-image-photo {
        bottom: 0;
        display: block;
        height: auto;
        left: 0;
        margin: auto;
        max-width: 100%;
        position: absolute;
        right: 0;
        top: 0;
    }

    .checkout {
        width: 100%;
    }

    .cart-container .cart-table .actions-toolbar {
        margin-top: 16px;
        margin-bottom: 0;
        padding: 20px 0;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .cart-container .cart-actions {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .cart-container .cart-actions button {
        margin-bottom: 10px;
    }

    .cart-container .cart-continue {
        margin: 20px 0;
        text-align: center;
    }

    .opc-progress-bar-item {
        display: flex;
        align-items: center;
        max-width: 50%;
        margin: 15px 0;
    }

    .opc-progress-bar-item-last:last-child:before {
        content: '>';
        display: inline-block;
        padding: 0 20px;
    }

    .opc-estimated-wrapper .estimated-price {
        font-weight: 700;
    }

    .opc-estimated-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 10px 0 20px;
    }

    .opc-wrapper .opc>li {
        padding: 0;
        margin-bottom: 32px;
    }

    .checkout-container .opc-sidebar .order-summary__heading {
        min-height: 48px;
        display: flex;
        align-items: center;
    }

    .checkout-container .opc-sidebar .product-item:last-child {
        border-bottom: none;
    }

    .checkout-container .opc-sidebar .product-item {
        padding: 0;
        margin: 0;
        display: block;
    }

    .message.notice {
        background-color: #a8a99e;
        font-size: 14px;
        font-size: .875rem;
        font-weight: 700;
        padding: 14px;
        text-align: center;
        margin: 0 0 10px;
        background-color: #fc6;
    }

    ol>li:before,
    ul li:before {
        display: none;
    }

    .opc-progress-bar-item._active span {
        font-weight: 700;
    }

    .m-text-input {
        width: 100%;
    }

    .m-select-menu {
        width: 100%;
    }

    .minicart-items-wrapper.overflowed {
        margin-bottom: 10px;
        border-bottom: 1px solid #f2f2f2;
    }

    .minicart-items-wrapper.overflowed:last-child {
        border-bottom: none;
    }

    table.cart tbody tr td {
        padding: 0 1em;
    }

    @media screen and (min-width: 1024px) {
        .checkout-container {
            display: grid;
            grid-template-columns: 1fr 320px;
            grid-gap: 30px;
        }

        .cart-container .cart-summary .discount .actions-toolbar,
        .cart-container .cart-summary .giftcard .actions-toolbar {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .cart-container .cart-summary {
            grid-column: 2/span 1;
            grid-row: 1/-1;
        }

        .actions-toolbar .primary {
            float: left;
        }

        .actions-toolbar .primary {
            float: left;
        }
    }

    @media screen and (min-width: 768px) {
        .cart-container .cart-table thead {
            display: table-header-group;
        }

        .opc-progress-bar {
            display: flex;
        }

        .cart-container .cart-table .item-info {
            display: table-row;
        }

        .cart-container .cart-table td:first-child {
            padding-left: 0;
        }

        .cart-container .cart-table td {
            padding-left: 12px;
            padding-right: 12px;
        }

        .cart-container .cart-table .actions-toolbar {
            justify-content: flex-start;
            padding-top: 0;
        }

        .cart-container .cart-actions button {
            margin-left: 10px;
        }

        .cart-container .cart-table .actions-toolbar a {
            margin-right: 32px;
        }

        .cart-container .cart-actions {
            flex-direction: row;
            justify-content: center;
        }
    }

    @media screen and (max-width: 1023px) {
        .cart-container {
            display: block;
        }

        .cart-container .cart-table .item-info {
            display: table-row;
            grid-template-columns: repeat(3, 1fr);
        }

        .cart-container .cart-table .item-info .item {
            display: block;
        }

        .fieldset>.field {
            box-sizing: border-box;
        }

        .cart-container .cart-table .actions-toolbar {
            margin-top: 0;
            padding: 10px 0;
        }
    }

    table.color-abc th {

        background-color: transparent;
        text-align: left;
        color: #0b2d25;
        font-weight: 700;
        border-bottom: 2px solid #97ccc0;
    }
</style>
<main id="maincontent" class="">
    <div class="columns">
        <div class="column main padding_css">
            <div class="block block-dashboard-info col-md-6 col-lg-5 col-xs-12 noi_left cach_top_bottom">
                <div class="block-title"><strong>Thông tin khách hàng</strong></div>
                <div class="block-content">
                    <table class="table table-sm color-abc">
                        <tbody>
                            <tr>
                                <th scope="row">Chi tiết đơn hàng:</th>
                                <th>{{ $order->code_invoice }}</th>
                            </tr>
                            <tr>
                                <th scope="row">Người mua:</th>
                                <th>{{ $order->customer_name }}</th>
                            </tr>
                            <tr>
                                <th scope="row">Địa chỉ:</th>
                                <th>{{ $order->address }}</th>
                            </tr>
                            <tr>
                                <th scope="row">Điện thoại:</th>
                                <th>{{ $order->phone }}</th>
                            </tr>
                            <tr>
                                <th scope="row">Email:</th>
                                <th>{{ $order->email }}</th>
                            </tr>
                            <tr>
                                <th scope="row">Hình thức thanh toán:</th>
                                <th>{{ config('cart.pay_type')[$order->type_pay]['name'] }}</th>
                            </tr>
                            <tr>
                                <th scope="row">Mã số thuế:</th>
                                <th>{{ $order->taxcode }}</th>
                            </tr>
                            <tr>
                                <th scope="row">Chọn ngân hàng:</th>
                                <th>
                                    <div class="m-sort-by">
                                        <select class="m-sort-by__select frontier-custom-sort" name="bank_code" id="bank_code">
                                            <option value="" selected> Chọn ngân hàng thanh toán</option>
                                            <option value="NCB"> Ngan hang NCB</option>
                                            <option value="AGRIBANK"> Ngan hang Agribank</option>
                                            <option value="SCB"> Ngan hang SCB</option>
                                            <option value="SACOMBANK">Ngan hang SacomBank</option>
                                            <option value="EXIMBANK"> Ngan hang EximBank</option>
                                            <option value="MSBANK"> Ngan hang MSBANK</option>
                                        </select>
                                        <span class="m-sort-by__arrow"></span>
                                    </div>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                    <div class="primary">
                        <button class="a-btn a-btn--primary action apply primary " id="btn-vnpay" data-url="{{ route('post_user.vnpaysuccsess',$order->id) }}" type="button" value="Pay Continue">
                            <span>Thanh toán qua VNPAY</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="block block-dashboard-info col-md-6 col-lg-7 col-xs-12 noi_left cach_top_bottom">
                <div class="block-title"><strong>Thông tin giỏ hàng</strong></div>
                <div class="column main" style="width:100%">
                    <table class="table">
                        <thead>
                            <tr class="th-payCart">
                                <th scope="col" class="color-text">Sản phẩm</th>
                                <th scope="col" class="color-text">Đơn giá</th>
                                <th scope="col" class="color-text">Số lượng</th>
                                <th scope="col" class="color-text">Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $carts = json_decode($order->cart_info, true); ?>
                            @forelse ($carts as $key => $item)
                            <tr>
                                <td><a href="javascript:;" data-id-sale="{{ $item['id'] }}" class="ahr-text" onclick="get_product_sale(this);"><span>{{ $item['name'] }}</span></a></td>
                                <td><span>{{ formatVnd($item['price']) }} </span></td>
                                <td><span>{{ $item['qty'] }}</span></td>
                                <td><span>{{ formatVnd($item['subtotal']) }}</span></td>
                            </tr>
                            @empty
                            @endforelse
                            <tr>
                                <td colspan="3">TỔNG TIỀN</td>
                                <td><span>{{ $order->total_no_vat }} đ</span></td>
                            </tr>
                            <tr>
                                <td colspan="3">VAT</td>
                                <td><span>{{ $order->total_vat }} đ</span></td>
                            </tr>
                            <tr>
                                <td colspan="3">TỔNG Đơn Hàng</td>
                                <td><span>{{ $order->total_money }} đ</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        @include('user::pages.component._inc_menu_user')
    </div>
</main>
@stop
<script>
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
            });
    }
</script>