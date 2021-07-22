@extends('pages.layouts.app_master_frontend')
@section('contents')
<style>
    .columns .column.main {
        padding-bottom: 40px;
        width: 100%;
    }
    ul.checkout-methods-items li:before {
    content: '';
}
    .cart-container .cart-summary .shipping .m-text-input,
    .cart-container .cart-summary .shipping .m-select-menu {
        margin-top: 20px;
        width: 100%;
    }

    .a-select-menu {
        position: relative;
        padding-right: 40px;
        cursor: pointer;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .m-select-menu__label {
        padding-bottom: 0;
        white-space: nowrap;
    }

    .m-select-menu__arrow {
        top: 13px;
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
        margin-bottom: 0;
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
        padding: 24px 12px;
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
        padding: 24px 12px;
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
        display: inline-block;
        max-width: 100%;
    }

    .product-image-wrapper {
        display: block;
        height: 0;
        overflow: hidden;
        position: relative;
        z-index: 1;
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

    .cart-container .cart-table .actions-toolbar {
        padding: 20px 0;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .cart-container .cart-actions {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
    }

    .cart-container .cart-actions button {
        margin-bottom: 10px;
    }

    .cart-container .cart-continue {
        margin: 20px 0;
        text-align: center;
    }

    @media screen and (min-width: 1024px) {

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
            justify-content: flex-end;
        }
    }

    @media screen and (min-width: 1023px) {
        .fieldset>.field {
            box-sizing: border-box;
        }
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
</style>
<main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
    <div class="page-title-wrapper">
        <h1 class="page-title">
            <span class="base" data-ui-id="page-title-wrapper">Shopping Cart</span>
        </h1>
    </div>
    <div class="page messages">
        <div data-placeholder="messages"></div>
    </div>
    <div class="columns">
        <div class="column main"><input name="form_key" type="hidden" value="GXhjnhZzwPqQ9aXV">
            <div class="cart-container">
                <div class="cart-messaging__shipping">
                    <div class="cart-messaging__inner">
                        <p class="cart-messaging__text">
                            Only $34.01 away from FREE Shipping — Keep Shopping </p>
                    </div>
                </div>
                <div class="cart-summary"><strong class="summary title">Summary</strong>
                    <div id="block-shipping" class="block shipping active" data-collapsible="true" role="tablist">
                        <div class="title" data-role="title" aria-controls="block-summary" role="tab" aria-selected="false" aria-expanded="false" tabindex="0">
                            <h2 id="block-shipping-heading" class="cart-accordion-title">
                                Estimate Shipping and Tax </h2>
                        </div>
                        <div id="block-summary" class="content" data-role="content" aria-labelledby="block-shipping-heading" role="tabpanel" aria-hidden="true">

                            <form id="co-shipping-method-form" data-bind="blockLoader: isLoading, visible: isVisible()" class="shipping-rates">
                                <p class="field note" data-bind="visible: (!isLoading() &amp;&amp; shippingRates().length <= 0)" style="">
                                    <!-- ko text: $t('Sorry, no quotes are available for this order at this time')-->Sorry, no quotes are available for this order at this time
                                    <!-- /ko -->
                                </p>
                                <fieldset class="fieldset rate" data-bind="visible: (shippingRates().length > 0)" style="display: none;">
                                    <dl class="items methods" data-bind="foreach: shippingRateGroups"></dl>
                                </fieldset>
                            </form>

                        </div>
                    </div>
                    <div id="cart-totals" class="cart-totals" data-bind="scope:'block-totals'">
                        <!-- ko template: getTemplate() -->
                        <div class="table-wrapper" data-bind="blockLoader: isLoading">
                            <table class="data table totals">
                                <caption class="table-caption" data-bind="text: $t('Total')">Total</caption>
                                <tbody>

                                    <tr class="totals sub">
                                        <th data-bind="i18n: title" class="mark" scope="row">Subtotal</th>
                                        <td class="amount">
                                            <span class="price" data-bind="text: getValue(), attr: {'data-th': title}" data-th="Subtotal">$6.65</span>
                                        </td>
                                    </tr>
                                    <tr class="grand totals">
                                        <th class="mark" scope="row">
                                            <strong data-bind="i18n: title">Order Total</strong>
                                        </th>
                                        <td data-bind="attr: {'data-th': title}" class="amount" data-th="Order Total">
                                            <strong><span class="price" data-bind="text: getValue()">$6.65</span></strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /ko -->

                    </div>
                    <div class="block discount active" id="block-discount" data-collapsible="true" role="tablist">
                        <div class="title" data-role="title" role="tab" aria-selected="true" aria-expanded="true" tabindex="0">
                            <h2 class="cart-accordion-title" id="block-discount-heading">Apply Discount Code</h2>
                        </div>
                        <div class="content" data-role="content" aria-labelledby="block-discount-heading" role="tabpanel" aria-hidden="false" style="display: block;">
                            <form id="discount-coupon-form" action="https://shop.coopmarket.com/checkout/cart/couponPost/" method="post">
                                <div class="fieldset coupon">
                                    <input type="hidden" name="remove" id="remove-coupon" value="0">
                                    <div class="field">
                                        <div class="m-text-input m-text-input--placeholder-label control">
                                            <input type="text" class="a-text-input m-text-input__input input-text" id="coupon_code" name="coupon_code" value="" placeholder="Enter discount code">
                                            <label for="coupon_code" class="a-form-label m-text-input__label label"><span>Enter discount code</span></label>
                                        </div>
                                    </div>
                                    <div class="actions-toolbar">
                                        <div class="primary">
                                            <button class="a-btn a-btn--primary action apply primary" type="button" value="Apply Discount">
                                                <span>Apply Discount</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <ul class="checkout methods items checkout-methods-items">
                        <li class="item"> 
                            <button type="button" data-role="proceed-to-checkout" title="Proceed to Checkout on Co-Op Market" class="a-btn a-btn--primary action primary checkout">
                                <span>Proceed to Checkout on Co-Op Market</span>
                            </button>
                        </li>
                    </ul>
                </div>
                <form action="https://shop.coopmarket.com/checkout/cart/updatePost/" method="post" id="form-validate" class="form form-cart">
                    <input name="form_key" type="hidden" value="GXhjnhZzwPqQ9aXV">
                    <div class="cart table-wrapper">
                        <table id="shopping-cart-table" class="cart items data table cart-table">
                            <caption class="table-caption">Shopping Cart Items</caption>
                            <thead>
                                <tr>
                                    <th class="col item" scope="col"><span>Item</span></th>
                                    <th class="col price" scope="col"><span>Price</span></th>
                                    <th class="col qty" scope="col"><span>Qty</span></th>
                                    <th class="col subtotal" scope="col"><span>Subtotal</span></th>
                                </tr>
                            </thead>
                            <tbody class="cart item">
                                <tr class="item-info">
                                    <td data-th="Item" class="col item">
                                        <a href="https://www.coopmarket.com/self-closing-lid-for-1-2-gallon-plastic-container" title="Self Closing Lid for 1/2 Gallon Plastic Container     " tabindex="-1" class="product-item-photo">

                                            <span class="product-image-container" style="width:110px;">
                                                <span class="product-image-wrapper" style="padding-bottom: 145.45454545455%;">
                                                    <img class="product-image-photo" src="https://acquia.prod.wholesale.frontiercoop.com/sites/default/files/acquiadam/2020-09/1_Frontier-Co-op-Self-Closing-Lid-Half-Gallon-12401-Front.jpg" max-width="110" max-height="160" alt="Self Closing Lid for 1/2 Gallon Plastic Container     "></span>
                                            </span>
                                        </a>
                                        <div class="product-item-details">
                                            <strong class="product-item-name">
                                                <a href="https://www.coopmarket.com/self-closing-lid-for-1-2-gallon-plastic-container">Self Closing Lid for 1/2 Gallon Plastic Container </a>
                                            </strong>
                                            <div class="product attribute sku">
                                                <strong class="type">SKU:</strong>
                                                <span class="value" itemprop="sku">12401</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="col price" data-th="Price">

                                        <span class="price-excluding-tax" data-label="Excl. Tax">
                                            <span class="cart-price">
                                                <span class="price">$4.99</span> </span>

                                        </span>
                                    </td>
                                    <td class="col qty" data-th="Qty">
                                        <div class="field qty">
                                            <div class="control qty">
                                                <label for="cart-20563347-qty">
                                                    <input id="cart-20563347-qty" name="cart[20563347][qty]" data-cart-item-id="12401" value="1" type="number" size="4" step="any" title="Qty" class="input-text qty" data-validate="{required:true,'validate-greater-than-zero':true}" data-role="cart-item-qty">
                                                </label>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="col subtotal" data-th="Subtotal">

                                        <span class="price-excluding-tax" data-label="Excl. Tax">
                                            <span class="cart-price">
                                                <span class="price">$4.99</span> </span>

                                        </span>
                                    </td>
                                </tr>
                                <tr class="item-actions">
                                    <td colspan="4">
                                        <div class="actions-toolbar">
                                            <a href="#" data-post="{&quot;action&quot;:&quot;https:\/\/shop.coopmarket.com\/wishlist\/index\/fromcart\/&quot;,&quot;data&quot;:{&quot;item&quot;:&quot;21003618&quot;,&quot;uenc&quot;:&quot;aHR0cHM6Ly9zaG9wLmNvb3BtYXJrZXQuY29tL2NoZWNrb3V0L2NhcnQv&quot;}}" class="use-ajax action towishlist action-towishlist">
                                                <span>Move to Wishlist</span>
                                            </a>
                                            <a class="action action-edit" href="https://shop.coopmarket.com/checkout/cart/configure/id/21003618/product_id/10606/" title="Edit item parameters">
                                                <span>Edit</span>
                                            </a>
                                            <a href="#" title="Remove item" class="action action-delete" data-post="{&quot;action&quot;:&quot;https:\/\/shop.coopmarket.com\/checkout\/cart\/delete\/&quot;,&quot;data&quot;:{&quot;id&quot;:&quot;21003618&quot;,&quot;uenc&quot;:&quot;aHR0cHM6Ly9zaG9wLmNvb3BtYXJrZXQuY29tL2NoZWNrb3V0L2NhcnQv&quot;}}">
                                                <span>
                                                    Remove item </span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart main actions">
                        <div class="cart-actions">
                            <button type="submit" name="update_cart_action" data-cart-item-update="" value="update_qty" title="Update Shopping Cart" class="a-btn a-btn--primary action update">
                                <span>Update Shopping Cart</span>
                            </button>
                            <button type="button" name="update_cart_action" data-cart-empty="" value="empty_cart" title="Clear Shopping Cart" class="a-btn a-btn--secondary action clear" id="empty_cart_button">
                                <span>Clear Shopping Cart</span>
                            </button>
                            <input type="hidden" value="" id="update_cart_action_container" data-cart-item-update="">
                        </div>

                        <div class="cart-continue">
                            <a class="action continue a-anchor" href="https://www.coopmarket.com/" title="Continue Shopping">
                                <span>Continue Shopping</span>
                            </a>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</main>
@stop