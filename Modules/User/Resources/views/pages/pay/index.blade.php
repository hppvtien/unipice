@extends('pages.layouts.app_master_frontend')
@section('contents')
<style>
    .columns .column.main {
        padding-bottom: 40px;
        width: 100%;
    }

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
        margin-top: 20px!important;
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
        box-shadow: inset 0 -2px var(--color-primary);
        transition: box-shadow .2s ease-in-out;
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
</style>
<main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
    <div class="page-title-wrapper">
        <h1 class="page-title">
            <span class="base" data-ui-id="page-title-wrapper">Thanh toán</span>
        </h1>
    </div>
    <div class="columns">
        <div class="column main"><input name="form_key" type="hidden" value="GXhjnhZzwPqQ9aXV">
            <div id="checkout" data-bind="scope:'checkout'" class="checkout-container">
                <div class="checkout-main">
                    <div class="opc-estimated-wrapper">
                        <div class="estimated-block">
                            <span class="estimated-label" style="font-size: 22px;text-transform: uppercase;font-weight: 500;">Tổng tiền phải thanh toán: </span>
                            <span class="estimated-price" style="font-size: 22px;text-transform: uppercase;font-weight: 500;color:red">{{ \Cart::total(0,0,'.') }} đ</span>
                        </div>

                    </div>
                    <div data-role="checkout-messages" class="messages">
                    </div>
                    <div class="opc-wrapper">
                        <ol class="opc" id="checkoutSteps">
                            <li id="shipping" class="checkout-shipping-address" data-bind="fadeVisible: visible()">
                                <div id="checkout-step-shipping" class="step-content" data-role="content">
                                    <div class="block discount active" id="block-discount" data-collapsible="true" role="tablist">
                                        <div class="content" data-role="content" aria-labelledby="block-discount-heading" role="tabpanel" aria-hidden="false" style="display: block;">
                                            <form id="discount-coupon-form" action="" method="post">
                                                <div class="fieldset coupon">
                                                    <input type="hidden" name="remove" id="remove-coupon" value="0">
                                                    <div class="field">
                                                        <div class="m-text-input m-text-input--placeholder-label control">
                                                            <input type="text" class="a-text-input m-text-input__input input-text" id="vouchers" name="vouchers" value="" placeholder="Enter discount code">
                                                            <label for="vouchers" class="a-form-label m-text-input__label label"><span>Nhập mã giảm giá</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="messager_check text-center mb10 text-danger"></div>
                                                    <div class="actions-toolbar">
                                                        <div class="primary">
                                                            <button class="a-btn a-btn--primary action apply primary" id="check_vouchers" data-url="{{ route('get_user.check_vouchers') }}" type="button" value="Apply Discount">
                                                                <span>Sử dụng mã giảm giá</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <h4 class="step-title" data-role="title">Thông tin khách hàng</h4>
                                    <form class="form form-shipping-address" id="co-shipping-form" data-hasrequired="* Required Fields">
                                        <div id="shipping-new-address-form" class="fieldset address">
                                            <input type="hidden" class="form-control" name="code_invoice" id="method_invoice"
                                                value="#00<?php echo rand(1000, 9999); ?>">
                                            <div class="field _required" name="shippingAddress.firstname">
                                                <div class="control">
                                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                                        <input class="a-text-input m-text-input__input" type="text" name="customer_name" aria-required="true" aria-invalid="false" id="G11F99D">
                                                        <label class="a-form-label m-text-input__label" for="G11F99D">
                                                            <span>Họ tên khách hàng</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field _required" name="shippingAddress.lastname">
                                                <div class="control">
                                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                                        <input class="a-text-input m-text-input__input" type="text" name="email" aria-required="true" aria-invalid="false" id="NF52K8P">
                                                        <label class="a-form-label m-text-input__label" for="NF52K8P">
                                                            <span>Email</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field" name="shippingAddress.company">
                                                <div class="control">
                                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                                        <input class="a-text-input m-text-input__input" type="text" name="address" aria-invalid="false" id="SMA1P60">

                                                        <label class="a-form-label m-text-input__label" for="SMA1P60">
                                                            <span>Địa chỉ</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field _required" name="shippingAddress.telephone">
                                                <div class="control _with-tooltip">
                                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                                        <input class="a-text-input m-text-input__input" type="text" name="taxcode" aria-required="true" aria-invalid="false" id="CNBP3U7">
                                                        <label class="a-form-label m-text-input__label" for="CNBP3U7">
                                                            <span>Mã số thuế</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field" name="shippingAddress.fax">
                                                <div class="control">
                                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                                        <input class="a-text-input m-text-input__input" type="text" name="phone" aria-invalid="false" id="CBQX168">
                                                        <label class="a-form-label m-text-input__label" for="CBQX168">
                                                            <span>Số điện thoại</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field pay_type">
                                                @foreach (config('cart.pay_type') as $key => $item)
                                                <div class="validContainer addressOption selected m-radio-button">
                                                    <input type="radio" class="validAddress m-radio-button__input" name="type_pay"  {{ $key == 0 ? 'checked' : '' }} value="{{ $item['type'] }}" id="valid-{{ $item['type'] }}">
                                                    <label class="addressLabel" for="valid-{{ $item['type'] }}">
                                                        <span class="m-radio-button__circle"></span>
                                                        <div class="optionTitle m-radio-button__text-label">{{ $item['name'] }}</div>
                                                        <div class="optionAddress validAddressText"></div>
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </form>
                                    <div class="actions-toolbar">
                                        <div class="primary">
                                            <button class="a-btn a-btn--primary action apply primary " id="pay_success" data-url="{{ route('get_user.postpay') }}"  data-url-rd = "{{ route('get_user.paysuccsess') }}" type="button" value="Pay Continue">
                                                <span>Tiếp tục thanh toán</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
                <aside role="dialog" class="modal-custom opc-sidebar opc-summary-wrapper custom-slide" aria-describedby="modal-content-11" data-role="modal" data-type="custom" tabindex="0">
                    <div data-role="focusable-start" tabindex="0"></div>
                    <div class="modal-inner-wrap" data-role="focusable-scope">
                        <div id="modal-content-11" class="modal-content" data-role="content">
                            <div id="opc-sidebar">
                                <div class="opc-block-summary">
                                    <div class="order-summary__heading" style="margin-left: 20px">
                                        <span class="title">Thông tin đơn hàng</span>
                                    </div>
                                    <div class="block items-in-cart" data-collapsible="true" role="tablist">
                                        <div class="title items-in-cart__title" style="margin-left: 20px" data-role="title" role="tab" aria-selected="false" aria-expanded="false" tabindex="0">
                                            <span>
                                                <span>Sản phẩm đã mua</span>
                                            </span>
                                        </div>
                                        <div class="content minicart-items" data-role="content" role="tabpanel" aria-hidden="true">
                                            @foreach ($listCarts as $key => $item)
                                            <div class="minicart-items-wrapper overflowed">
                                                <ol class="minicart-items">
                                                    <li class="product-item">
                                                        <div class="product">
                                                            <span class="product-image-container" style="height: 78px; width: 78px;">
                                                                <span class="product-image-wrapper">
                                                                    <img src="{{ pare_url_file($item->options->images) }}" width="100%" height="100%" alt="{{ $item->name }}">
                                                                </span>
                                                            </span>
                                                            <div class="product-item-details">
                                                                <div class="product-item-inner">
                                                                    <div class="product-item-name-block">
                                                                        <strong class="product-item-name">{{ $item->name }} </strong>
                                                                        <div class="details-qty">
                                                                            <span class="label">Số lượng: </span>
                                                                            <span class="value">{{ $item->qty }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="subtotal">
                                                                        <span class="price-excluding-tax" data-label="Excl. Tax">
                                                                            <span class="cart-price">
                                                                                <span class="label">Thành tiền: </span>
                                                                                <span class="price">{{ $item->price }} đ</span>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </div>
                                            @endforeach
                                            
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="opc-block-shipping-information">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div data-role="focusable-end" tabindex="0"></div>
                </aside>
            </div>
        </div>
    </div>
</main>
@stop