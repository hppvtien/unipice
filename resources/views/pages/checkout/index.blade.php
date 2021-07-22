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

    .cart-container .cart-summary .shipping .m-text-input,
    .cart-container .cart-summary .shipping .m-select-menu {
        margin-top: 20px;
        width: 100%;
    }

    .checkout-container {
        position: relative;
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
                    <ul class="opc-progress-bar">
                        <li class="opc-progress-bar-item _active">
                            <span>Chi tiết thanh toán</span>
                        </li>
                    </ul>
                    <div class="opc-estimated-wrapper">
                        <div class="estimated-block">
                            <span class="estimated-label">Estimated Total</span>
                            <span class="estimated-price">$4.99</span>
                        </div>

                    </div>
                    <div data-role="checkout-messages" class="messages">
                    </div>
                    <div class="opc-wrapper">
                        <ol class="opc" id="checkoutSteps">
                            <li id="shipping" class="checkout-shipping-address" data-bind="fadeVisible: visible()">
                                <!-- <div class="message notice">
                                    <span>
                                        <span>The shipping address specified on the quote was deleted from your Address Book. </span>
                                        <span>To proceed with the checkout, update the shipping address.</span>
                                    </span>
                                </div> -->
                                <div class="step-title" data-role="title">Địa chỉ giao hàng</div>
                                <div id="checkout-step-shipping" class="step-content" data-role="content">
                                    <!-- <form class="form form-login" data-role="email-with-possible-login" method="post">
                                        <fieldset id="customer-email-fieldset" class="fieldset">
                                            <div class="field required">
                                                <div class="m-text-input m-text-input--placeholder-label control _with-tooltip">
                                                    <input class="a-text-input m-text-input__input input-text" type="email" name="username" data-validate="{required:true, 'validate-email':true}" id="customer-email">
                                                    <label class="a-form-label m-text-input__label label" for="customer-email">
                                                        <span>Email Address</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="m-text-input m-text-input--placeholder-label control">
                                                    <input class="a-text-input m-text-input__input input-text" type="password" name="password" id="customer-password" autocomplete="off" placeholder="Password">
                                                    <label class="a-form-label m-text-input__label label" for="customer-password">
                                                        <span>Password</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <input name="captcha_form_id" type="hidden" value="user_login" data-scope="">
                                            <div class="actions-toolbar">
                                                <input name="context" type="hidden" value="checkout">
                                                <div class="primary">
                                                    <button type="submit" class="a-btn a-btn--primary action login primary" data-action="checkout-method-login"><span data-bind="i18n: 'Login'">Đăng nhập</span></button>
                                                </div>
                                                <div class="secondary">
                                                    <a class="a-btn a-btn--text action remind" href="https://shop.coopmarket.com/customer/account/forgotpassword/">
                                                        <span>Forgot Your Password?</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form> -->

                                    <form class="form form-shipping-address" id="co-shipping-form" data-hasrequired="* Required Fields">
                                        <div id="shipping-new-address-form" class="fieldset address">
                                            <div class="field _required" name="shippingAddress.firstname">

                                                <div class="control">

                                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                                        <input class="a-text-input m-text-input__input" type="text" name="firstname" aria-required="true" aria-invalid="false" id="G11F99D">

                                                        <label class="a-form-label m-text-input__label" for="G11F99D">
                                                            <span>First Name</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field _required" name="shippingAddress.lastname">

                                                <div class="control">

                                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                                        <input class="a-text-input m-text-input__input" type="text" name="lastname" aria-required="true" aria-invalid="false" id="NF52K8P">

                                                        <label class="a-form-label m-text-input__label" for="NF52K8P">
                                                            <span>Last Name</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field" name="shippingAddress.company">

                                                <div class="control">

                                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                                        <input class="a-text-input m-text-input__input" type="text" name="company" aria-invalid="false" id="SMA1P60">

                                                        <label class="a-form-label m-text-input__label" for="SMA1P60">
                                                            <span>Company</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="control">
                                                <div class="field _required">

                                                    <div class="control">

                                                        <div class="m-text-input m-text-input--placeholder-label  ">
                                                            <input class="a-text-input m-text-input__input" type="text" name="street[0]" aria-required="true" aria-invalid="false" id="SAIFHCQ">

                                                            <label class="a-form-label m-text-input__label" data-bind="attr: { for: uid }" for="SAIFHCQ">
                                                                <span>Street Address: Line 1</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field additional" name="shippingAddress.street.1">

                                                    <div class="control">

                                                        <div class="m-text-input m-text-input--placeholder-label  ">
                                                            <input class="a-text-input m-text-input__input" type="text" name="street[1]" aria-invalid="false" id="S2QDEV3">

                                                            <label class="a-form-label m-text-input__label" for="S2QDEV3">
                                                                <span>Street Address: Line 2</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field _required" name="shippingAddress.city">

                                                <div class="control">

                                                    <div class="m-text-input m-text-input--placeholder-label">
                                                        <input class="a-text-input m-text-input__input" type="text" name="city" aria-required="true" aria-invalid="false" id="LV82JH6">

                                                        <label class="a-form-label m-text-input__label" for="LV82JH6">
                                                            <span>City</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="field _required" name="shippingAddress.telephone">

                                                <div class="control _with-tooltip">

                                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                                        <input class="a-text-input m-text-input__input" type="text" name="telephone" aria-required="true" aria-invalid="false" id="CNBP3U7">

                                                        <label class="a-form-label m-text-input__label" for="CNBP3U7">
                                                            <span>Phone Number</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field" name="shippingAddress.fax">

                                                <div class="control">

                                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                                        <input class="a-text-input m-text-input__input" type="text" name="fax" aria-invalid="false" id="CBQX168">

                                                        <label class="a-form-label m-text-input__label" for="CBQX168">
                                                            <span>Fax</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="message notice" style="display: none;">
                                        <span class="link-back">
                                            <span>Your shipping address is locked. To change your shipping address, go </span><!-- /ko -->
                                            <a href="https://shop.coopmarket.com/negotiable_quote/quote/view/quote_id/7869393/">back to the quote</a>
                                            <span>.</span>
                                        </span>
                                    </div>
                                </div>
                            </li>

                            <li id="opc-shipping_method" class="checkout-shipping-method" role="presentation">
                                <div class="checkout-shipping-method">
                                    <div class="step-title" data-role="title">Shipping Methods</div>
                                    <div class="shipping-policy-block field-tooltip" style="display: none;">
                                        <span class="field-tooltip-action" tabindex="0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                            <span>See our Shipping Policy</span>
                                        </span>
                                        <div class="field-tooltip-content" data-target="dropdown" aria-hidden="true">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div id="checkout-step-shipping_method" class="step-content" data-role="content" role="tabpanel" aria-hidden="false">
                                        <div class="no-quotes-block">Sorry, no quotes are available for this order at this time</div><!-- /ko -->
                                    </div>
                                </div>
                            </li>
                            <li id="validate_address" role="presentation" class="checkout-validate-address" style="display: none;">
                                <div class="step-title" data-role="title">Verify Your Address</div>
                                <div class="step-content" data-role="content" role="tabpanel" aria-hidden="false">
                                    <div class="instructions noError">To ensure accurate delivery, we suggest the changes highlighted below. Please choose which address you would like to use. If neither option is correct, <a href="#" class="edit-address">edit your address</a>.</div>
                                    <form id="co-validate-form" class="form validate noError" novalidate="novalidate">
                                        <div class="validContainer addressOption selected m-radio-button">
                                            <input type="radio" class="validAddress m-radio-button__input" name="addressToUse" checked="" data-bind="attr: {id: 'valid-' + uid}" id="valid-QIXABRP">
                                            <label class="addressLabel" for="valid-QIXABRP">
                                                <span class="m-radio-button__circle"></span>
                                                <div class="optionTitle m-radio-button__text-label">Suggested Address</div>
                                                <div class="optionAddress validAddressText"></div>
                                            </label>
                                        </div>
                                        <div class="originalContainer addressOption m-radio-button">
                                            <input type="radio" class="originalAddress m-radio-button__input" name="addressToUse" id="original-QIXABRP">
                                            <label class="addressLabel" for="original-QIXABRP">
                                                <span class="m-radio-button__circle"></span>
                                                <div class="optionTitle m-radio-button__text-label">Original Address</div>
                                                <div class="optionAddress originalAddressText"></div>
                                            </label>
                                        </div>
                                    </form>
                                    <div class="errorMessageContainer yesError">
                                        <div class="instructions" data-uid="QIXABRP">We were unable to validate your address. <p class="error-message"></p> If the address below is correct then you don’t need to do anything. To change your address, <a href="#" class="edit-address">click here</a>.</div>
                                        <div class="originalAddressText"></div>
                                    </div>
                                </div>
                            </li>
                            <li id="payment" role="presentation" class="checkout-payment-method" style="display: none;">
                                <div id="checkout-step-payment" class="step-content" data-role="content" role="tabpanel" aria-hidden="false">
                                    <form id="co-payment-form" class="form payments" novalidate="novalidate">
                                        <input type="hidden" name="form_key" value="GXhjnhZzwPqQ9aXV">
                                        <fieldset class="fieldset">
                                            <legend class="legend payment-information-legend">
                                                <span>Payment Information</span>
                                            </legend>
                                            <div class="no-quotes-block">
                                                <span>No Payment method available.</span>
                                            </div>

                                            <div class="payment-option _collapsible opc-payment-additional discount-code" data-collapsible="true" role="tablist">
                                                <div class="payment-option-title field choice a-anchor" data-role="title" role="tab" aria-selected="false" aria-expanded="false" tabindex="0">
                                                    <span class="action action-toggle" id="block-discount-heading" role="heading" aria-level="2">
                                                        <span>Apply Discount Code</span>
                                                    </span>
                                                </div>
                                                <div class="payment-option-content" data-role="content" role="tabpanel" aria-hidden="true" style="display: none;">
                                                    <div data-role="checkout-messages" class="messages">
                                                    </div>
                                                    <form class="form form-discount" id="discount-form">
                                                        <div class="payment-option-inner">
                                                            <div class="field">
                                                                <div class="control m-text-input m-text-input--placeholder-label">
                                                                    <input class="input-text a-text-input m-text-input__input" type="text" id="discount-code" name="discount_code" data-validate="{'required-entry':true}" data-bind="value: couponCode, attr:{placeholder: $t('Enter discount code')}, 'disable': isDisable " placeholder="Enter discount code">
                                                                    <label class="label a-form-label m-text-input__label" for="discount-code">
                                                                        <span>Enter discount code</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions-toolbar">
                                                            <div class="primary">
                                                                <button class="action action-apply a-btn a-btn--primary" type="submit" value="Apply Discount">
                                                                    <span>
                                                                        <span>Apply Discount</span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <input name="captcha_form_id" type="hidden" value="sales_rule_coupon_request" data-scope="">

                                                    </form>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="payment-option-content" data-role="content">
                                                    <form class="form form-ordercomments" id="ordercomments-form">

                                                        <div class="ordercomments-inner" style="display: none;">
                                                            <div class="field">
                                                                <label class="label" for="order-comment">
                                                                    <span>Order Comment</span>
                                                                </label>
                                                                <div class="control">
                                                                    <textarea class="input-text" id="order-comment" name="order-comment" data-bind="attr:{placeholder: $t('Enter Order Comments')}" cols="5" rows="3" placeholder="Enter Order Comments"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="shipcomplete field" style="display: none;">
                                                            <div class="control ship-complete">
                                                                <input type="checkbox" name="ship-complete" id="ship-complete" value="0" class="checkbox">
                                                                <label class="label" for="ship-complete">
                                                                    <span>Ship Complete</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
                <aside role="dialog" class="modal-custom opc-sidebar opc-summary-wrapper
       custom-slide
       " aria-describedby="modal-content-11" data-role="modal" data-type="custom" tabindex="0">
                    <div data-role="focusable-start" tabindex="0"></div>
                    <div class="modal-inner-wrap" data-role="focusable-scope">
                        <div id="modal-content-11" class="modal-content" data-role="content">
                            <div id="opc-sidebar">
                                <div class="opc-block-summary">
                                    <div class="order-summary__heading">
                                        <span class="title">Order Summary</span>
                                    </div>
                                    <div class="block items-in-cart" data-collapsible="true" role="tablist">
                                        <div class="title items-in-cart__title" data-role="title" role="tab" aria-selected="false" aria-expanded="false" tabindex="0">
                                            <span>
                                                <span>1</span>
                                                <span>Items in Cart</span>
                                            </span>
                                        </div>
                                        <div class="content minicart-items" data-role="content" role="tabpanel" aria-hidden="true">
                                            <div class="minicart-items-wrapper overflowed">
                                                <ol class="minicart-items">
                                                    <li class="product-item">
                                                        <div class="product">
                                                            <span class="product-image-container" style="height: 78px; width: 78px;">
                                                                <span class="product-image-wrapper">
                                                                    <img src="https://acquia.prod.wholesale.frontiercoop.com/sites/default/files/acquiadam/2020-09/1_Frontier-Co-op-Self-Closing-Lid-Half-Gallon-12401-Front.jpg" width="100%" height="100%" alt="Self Closing Lid for 1/2 Gallon Plastic Container     " title="Self Closing Lid for 1/2 Gallon Plastic Container     ">
                                                                </span>
                                                            </span>
                                                            <div class="product-item-details">

                                                                <div class="product-item-inner">
                                                                    <div class="product-item-name-block">
                                                                        <strong class="product-item-name">Self Closing Lid for 1/2 Gallon Plastic Container </strong>
                                                                        <div class="details-qty">
                                                                            <span class="label">Số lượng</span>
                                                                            <span class="value">1</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="subtotal">
                                                                        <span class="price-excluding-tax" data-label="Excl. Tax">
                                                                            <span class="cart-price">
                                                                                <span class="price">$4.99</span>
                                                                            </span>
                                                                        </span>
                                                                        <!-- /ko -->
                                                                    </div>
                                                                </div>

                                                                <!-- ko if: (JSON.parse($parent.options).length > 0)-->
                                                                <!-- /ko -->
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- /ko -->
                                                </ol>
                                            </div>
                                            <div class="minicart-items-wrapper overflowed">
                                                <ol class="minicart-items">
                                                    <li class="product-item">
                                                        <div class="product">
                                                            <span class="product-image-container" style="height: 78px; width: 78px;">
                                                                <span class="product-image-wrapper">
                                                                    <img src="https://acquia.prod.wholesale.frontiercoop.com/sites/default/files/acquiadam/2020-09/1_Frontier-Co-op-Self-Closing-Lid-Half-Gallon-12401-Front.jpg" width="100%" height="100%" alt="Self Closing Lid for 1/2 Gallon Plastic Container     " title="Self Closing Lid for 1/2 Gallon Plastic Container     ">
                                                                </span>
                                                            </span>
                                                            <div class="product-item-details">

                                                                <div class="product-item-inner">
                                                                    <div class="product-item-name-block">
                                                                        <strong class="product-item-name">Self Closing Lid for 1/2 Gallon Plastic Container </strong>
                                                                        <div class="details-qty">
                                                                            <span class="label">Số lượng</span>
                                                                            <span class="value">1</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="subtotal">
                                                                        <span class="price-excluding-tax" data-label="Excl. Tax">
                                                                            <span class="cart-price">
                                                                                <span class="price">$4.99</span>
                                                                            </span>
                                                                        </span>
                                                                        <!-- /ko -->
                                                                    </div>
                                                                </div>

                                                                <!-- ko if: (JSON.parse($parent.options).length > 0)-->
                                                                <!-- /ko -->
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!-- /ko -->
                                                </ol>
                                            </div>
                                        </div>
                                        <!-- ko if: maxCartItemsToDisplay < getCartLineItemsCount() -->
                                        <!-- /ko -->
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