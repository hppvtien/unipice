@extends('user::layouts.app_master_user')
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
            <span class="base" data-ui-id="page-title-wrapper">Checkout</span>
        </h1>
    </div>
    <div class="columns">
        <div class="column main"><input name="form_key" type="hidden" value="v9BxiWtJHThf9pqf">
            <div id="authenticationPopup" data-bind="scope:'authenticationPopup'" style="display: none;">
            </div>
            <div id="checkout" data-bind="scope:'checkout'" class="checkout-container">
                <div class="checkout-main">
                    <ul class="opc-progress-bar">
                        <li class="opc-progress-bar-item _active" data-bind="css: item.isVisible() ? '_active' : ($parent.isProcessed(item) ? '_complete' : '')">
                            <span data-bind="i18n: item.title, click: $parent.navigateTo">Shipping</span>
                        </li>

                        <li class="opc-progress-bar-item" data-bind="css: item.isVisible() ? '_active' : ($parent.isProcessed(item) ? '_complete' : '')">
                            <span data-bind="i18n: item.title, click: $parent.navigateTo">Review &amp; Payments</span>
                        </li>
                        <!-- /ko -->
                    </ul>
                    <div class="opc-estimated-wrapper" data-bind="blockLoader: isLoading">
                        <div class="estimated-block">
                            <span class="estimated-label" data-bind="i18n: 'Estimated Total'">Estimated Total</span>
                            <span class="estimated-price" data-bind="text: getValue()">$6.65</span>
                        </div>
                        <div class="minicart-wrapper">
                            <button type="button" class="action showcart" data-toggle="opc-summary" data-bind="click: showSidebar">
                                <span class="counter qty">
                                    <span class="counter-number" data-bind="text: getQuantity()">1</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div data-role="checkout-messages" class="messages" data-bind="visible: isVisible(), click: removeAll">
                    </div>
                    <div class="opc-wrapper">
                        <ol class="opc" id="checkoutSteps">
                            <li id="shipping" class="checkout-shipping-address" data-bind="fadeVisible: visible()">
                                <div class="message notice" data-bind="visible: isQuoteAddressDeleted &amp;&amp; isQuoteAddressLocked" style="display: none;">
                                    <span>
                                        <span>The shipping address specified on the quote was deleted from your Address Book.</span>
                                        <span>To proceed with the checkout, go </span>
                                        <a data-bind="attr: {href: backQuoteUrl}, i18n: 'back to the quote'" href="https://shop.coopmarket.com/negotiable_quote/quote/view/quote_id/8879706/">back to the quote</a>
                                        <span> and update the shipping address.</span>
                                    </span>
                                </div>
                                <div class="message notice" data-bind="visible: isQuoteAddressDeleted &amp;&amp; !isQuoteAddressLocked" style="display: none;">
                                    <span>
                                        <!-- ko i18n: 'The shipping address specified on the quote was deleted from your Address Book. ' --><span>The shipping address specified on the quote was deleted from your Address Book. </span><!-- /ko -->
                                        <!-- ko i18n: 'To proceed with the checkout, update the shipping address.' --><span>To proceed with the checkout, update the shipping address.</span><!-- /ko -->
                                    </span>
                                </div>
                                <div class="step-title" data-role="title" data-bind="i18n: 'Shipping Address'">Shipping Address</div>
                                <div id="checkout-step-shipping" class="step-content" data-role="content">
                                    <form class="form form-login" data-role="email-with-possible-login" data-bind="submit:login" method="post" novalidate="novalidate">
                                        <fieldset id="customer-email-fieldset" class="fieldset" data-bind="blockLoader: isLoading">
                                            <div class="field required">
                                                <div class="m-text-input m-text-input--placeholder-label control _with-tooltip">
                                                    <input class="a-text-input m-text-input__input input-text" type="email" name="username" data-validate="{required:true, 'validate-email':true}" id="customer-email" aria-required="true">
                                                    <label class="a-form-label m-text-input__label label" for="customer-email">
                                                        <span data-bind="i18n: 'Email Address'">Email Address</span>
                                                    </label>
                                                    <!-- ko template: 'ui/form/element/helper/tooltip' -->
                                                    <div class="field-tooltip toggle">

                                                        <!-- ko if: (tooltip.link)-->
                                                        <!-- /ko -->

                                                        <span id="tooltip-label" class="label">
                                                            <!-- ko i18n: 'Tooltip' --><span>Tooltip</span><!-- /ko -->
                                                        </span>
                                                        <!-- ko if: (!tooltip.link)-->
                                                        <span id="tooltip" class="field-tooltip-action action-help icon-tooltip" tabindex="0" data-toggle="dropdown" data-bind="mageInit: {'dropdown':{'activeClass': '_active', 'parent': '.field-tooltip.toggle'}}" aria-labelledby="tooltip-label" aria-haspopup="true" aria-expanded="false" role="button">
                                                        </span>
                                                        <!-- /ko -->

                                                        <div class="field-tooltip-content" data-target="dropdown" aria-hidden="true">
                                                            <div class="field-tooltip-content-inner" data-bind="i18n: tooltip.description">We'll send your order confirmation here.</div>
                                                        </div>
                                                    </div>
                                                    <!-- /ko -->
                                                    <span class="note" data-bind="fadeVisible: isPasswordVisible() == false" style="display: none;">
                                                    <span>You can create an account after checkout.</span><!-- /ko -->
                                                    </span>
                                                </div>
                                            </div>

                                            <!--Hidden fields -->
                                            <fieldset class="fieldset hidden-fields" data-bind="fadeVisible: isPasswordVisible" style="display: block;">
                                                <div class="field">
                                                    <div class="m-text-input m-text-input--placeholder-label control">
                                                        <input class="a-text-input m-text-input__input input-text" type="password" name="password" id="customer-password" data-validate="{required:true}" autocomplete="off" placeholder="Password">
                                                        <label class="a-form-label m-text-input__label label" for="customer-password">
                                                            <span data-bind="i18n: 'Password'">Password</span>
                                                        </label>
                                                        <span class="note" data-bind="i18n: 'You already have an account with us. Sign in or continue as guest.'">You already have an account with us. Sign in or continue as guest.</span>
                                                    </div>

                                                </div>
                                                <input name="captcha_form_id" type="hidden" data-bind="value: formId,  attr: {'data-scope': dataScope}" value="user_login" data-scope="">
                                                <div class="actions-toolbar">
                                                    <input name="context" type="hidden" value="checkout">
                                                    <div class="primary">
                                                        <button type="submit" class="a-btn a-btn--primary action login primary" data-action="checkout-method-login"><span data-bind="i18n: 'Login'">Login</span></button>
                                                    </div>
                                                    <div class="secondary">
                                                        <a class="a-btn a-btn--text action remind" data-bind="attr: { href: forgotPasswordUrl }" href="https://shop.coopmarket.com/customer/account/forgotpassword/">
                                                            <span data-bind="i18n: 'Forgot Your Password?'">Forgot Your Password?</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <!--Hidden fields -->
                                        </fieldset>
                                    </form>
                
                                    <form class="form form-shipping-address" id="co-shipping-form" data-bind="attr: {'data-hasrequired': $t('* Required Fields')}" data-hasrequired="* Required Fields">
                               
                                        <div id="shipping-new-address-form" class="fieldset address">
                                            <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.firstname">

                                                <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                                    <!-- ko ifnot: element.hasAddons() -->
                                                    <!-- ko template: element.elementTmpl -->

                                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                                        <input class="a-text-input m-text-input__input" type="text" name="firstname" aria-required="true" aria-invalid="false" id="I4VCHLI">

                                                        <label class="a-form-label m-text-input__label" data-bind="attr: { for: uid }" for="I4VCHLI">
                                                            <span data-bind="i18n: label">First Name</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /ko -->
                                            <!-- /ko -->
                                            <!-- /ko -->

                                            <!-- ko if: hasTemplate() -->
                                            <!-- ko template: getTemplate() -->
                                            <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.lastname">

                                                <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                                    <!-- ko ifnot: element.hasAddons() -->
                                                    <!-- ko template: element.elementTmpl -->

                                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                                        <input class="a-text-input m-text-input__input" type="text" name="lastname" aria-required="true" aria-invalid="false" id="L3EQSOG">

                                                        <label class="a-form-label m-text-input__label" data-bind="attr: { for: uid }" for="L3EQSOG">
                                                            <span data-bind="i18n: label">Last Name</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.company">

                                                <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                                    <!-- ko ifnot: element.hasAddons() -->
                                                    <!-- ko template: element.elementTmpl -->

                                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                                        <input class="a-text-input m-text-input__input" type="text" name="company" aria-invalid="false" id="GU2OOE0">

                                                        <label class="a-form-label m-text-input__label" data-bind="attr: { for: uid }" for="GU2OOE0">
                                                            <span data-bind="i18n: label">Company</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <fieldset class="field street admin__control-fields required" data-bind="css: additionalClasses">
                                                <legend class="label a-form-label">
                                                    <span data-bind="i18n: element.label">Street Address</span>
                                                </legend>
                                                <div class="control">
                                                    <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.street.0">

                                                        <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">

                                                            <div class="m-text-input m-text-input--placeholder-label  ">
                                                                <input class="a-text-input m-text-input__input" type="text" name="street[0]" aria-required="true" aria-invalid="false" id="T5XC8EE">

                                                                <label class="a-form-label m-text-input__label" data-bind="attr: { for: uid }" for="T5XC8EE">
                                                                    <span data-bind="i18n: label">Street Address: Line 1</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="field additional" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.street.1">

                                                        <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                                            <div class="m-text-input m-text-input--placeholder-label  ">
                                                                <input class="a-text-input m-text-input__input" type="text" name="street[1]" aria-invalid="false" id="U0QNTRG">

                                                                <label class="a-form-label m-text-input__label" data-bind="attr: { for: uid }" for="U0QNTRG">
                                                                    <span data-bind="i18n: label">Street Address: Line 2</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.city">

                                                <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">

                                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                                        <input class="a-text-input m-text-input__input" type="text" name="city" aria-required="true" aria-invalid="false" id="E7C6Q50">

                                                        <label class="a-form-label m-text-input__label" data-bind="attr: { for: uid }" for="E7C6Q50">
                                                            <span data-bind="i18n: label">City</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.region_id">

                                                <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">

                                                    <div class="m-select-menu  ">
                                                        <select class="a-select-menu m-select-menu__select" name="region_id" id="WBTU09G" aria-required="true" aria-invalid="false">
                                                            <option value="">Please select a region, state or province.</option>
                                                            <option data-title="Alabama" value="1">Alabama</option>
                                                            <option data-title="Alaska" value="2">Alaska</option>
                                                            <option data-title="American Samoa" value="3">American Samoa</option>
                                                            <option data-title="Arizona" value="4">Arizona</option>
                                                        
                                               
                                                        </select>

                                                        <label class="a-form-label m-select-menu__label" data-bind="attr: { for: uid }" for="WBTU09G">
                                                            <span data-bind="i18n: label">State/Province</span>
                                                        </label>
                                                        <span class="m-select-menu__arrow"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.region" style="display: none;">

                                                <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">

                                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                                        <input class="a-text-input m-text-input__input" type="text" name="region" aria-required="true" aria-invalid="false" id="WPWRDWX">

                                                        <label class="a-form-label m-text-input__label" data-bind="attr: { for: uid }" for="WPWRDWX">
                                                            <span data-bind="i18n: label">State/Province</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.postcode">

                                                <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                                    <!-- ko ifnot: element.hasAddons() -->
                                                    <!-- ko template: element.elementTmpl -->

                                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                                        <input class="a-text-input m-text-input__input" type="text" name="postcode" aria-required="true" aria-invalid="false" id="SWPSBUG">

                                                        <label class="a-form-label m-text-input__label" data-bind="attr: { for: uid }" for="SWPSBUG">
                                                            <span data-bind="i18n: label">Zip/Postal Code</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.country_id">

                                                <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">
                                                    <!-- ko ifnot: element.hasAddons() -->
                                                    <!-- ko template: element.elementTmpl -->

                                                    <div class="m-select-menu  ">
                                                        <select class="a-select-menu m-select-menu__select" name="country_id" id="J00NV7G" aria-required="true" aria-invalid="false">
                                                            <option data-title="United States" value="US">United States</option>
                                                            <option data-title="──────────" value="delimiter" disabled="true">──────────</option>
                                                        </select>

                                                        <label class="a-form-label m-select-menu__label" data-bind="attr: { for: uid }" for="J00NV7G">
                                                            <span data-bind="i18n: label">Country</span>
                                                        </label>
                                                        <span class="m-select-menu__arrow"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field _required" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.telephone">

                                                <div class="control _with-tooltip" data-bind="css: {'_with-tooltip': element.tooltip}">
                                                    <!-- ko ifnot: element.hasAddons() -->
                                                    <!-- ko template: element.elementTmpl -->

                                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                                        <input class="a-text-input m-text-input__input" type="text" name="telephone" aria-required="true" aria-invalid="false" id="MFRG6MK">

                                                        <label class="a-form-label m-text-input__label" data-bind="attr: { for: uid }" for="MFRG6MK">
                                                            <span data-bind="i18n: label">Phone Number</span>
                                                        </label>
                                                    </div>
                                                    <div class="field-tooltip toggle">

                                                        <!-- ko if: (tooltip.link)-->
                                                        <!-- /ko -->

                                                        <span id="tooltip-label" class="label">
                                                            <!-- ko i18n: 'Tooltip' --><span>Tooltip</span><!-- /ko -->
                                                        </span>
                                                        <!-- ko if: (!tooltip.link)-->
                                                        <span id="tooltip" class="field-tooltip-action action-help icon-tooltip" tabindex="0" data-toggle="dropdown" data-bind="mageInit: {'dropdown':{'activeClass': '_active', 'parent': '.field-tooltip.toggle'}}" aria-labelledby="tooltip-label" aria-haspopup="true" aria-expanded="false" role="button">
                                                        </span>
                                                        <!-- /ko -->

                                                        <div class="field-tooltip-content" data-target="dropdown" aria-hidden="true">
                                                            <div class="field-tooltip-content-inner" data-bind="i18n: tooltip.description">For delivery questions.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field" data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses" name="shippingAddress.fax">

                                                <div class="control" data-bind="css: {'_with-tooltip': element.tooltip}">

                                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                                        <input class="a-text-input m-text-input__input" type="text" name="fax" aria-invalid="false" id="NVDPKRR">

                                                        <label class="a-form-label m-text-input__label" data-bind="attr: { for: uid }" for="NVDPKRR">
                                                            <span data-bind="i18n: label">Fax</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- /ko -->
                                    <!-- /ko -->
                                    <div class="message notice" data-bind="visible: !isQuoteAddressDeleted &amp;&amp; isQuoteAddressLocked" style="display: none;">
                                        <span class="link-back">
                                            <!-- ko i18n: 'Your shipping address is locked. To change your shipping address, go ' --><span>Your shipping address is locked. To change your shipping address, go </span><!-- /ko -->
                                            <a data-bind="attr: {href: backQuoteUrl}, i18n: 'back to the quote'" href="https://shop.coopmarket.com/negotiable_quote/quote/view/quote_id/8879706/">back to the quote</a>
                                            <span data-bind="text: '.'">.</span>
                                        </span>
                                    </div>
                                </div>
                            </li>

                            <!--Shipping method template-->
                            <li id="opc-shipping_method" class="checkout-shipping-method" data-bind="fadeVisible: visible(), blockLoader: isLoading" role="presentation">
                                <div class="checkout-shipping-method">
                                    <div class="step-title" data-role="title" data-bind="i18n: 'Shipping Methods'">Shipping Methods</div>
                                    <div class="shipping-policy-block field-tooltip" data-bind="visible: config.isEnabled" style="display: none;">
                                        <span class="field-tooltip-action" tabindex="0" data-toggle="dropdown" data-bind="mageInit: {'dropdown':{'activeClass': '_active'}}" aria-haspopup="true" aria-expanded="false" role="button">
                                            <!-- ko i18n: 'See our Shipping Policy' --><span>See our Shipping Policy</span><!-- /ko -->
                                        </span>
                                        <div class="field-tooltip-content" data-target="dropdown" aria-hidden="true">
                                            <span data-bind="html: config.shippingPolicyContent"></span>
                                        </div>
                                    </div>
                                    <div id="checkout-step-shipping_method" class="step-content" data-role="content" role="tabpanel" aria-hidden="false">
                                        <div class="no-quotes-block" data-bind="i18n: 'Sorry, no quotes are available for this order at this time'">Sorry, no quotes are available for this order at this time</div><!-- /ko -->
                                    </div>
                                </div>
                            </li>
                            <li id="validate_address" role="presentation" class="checkout-validate-address" data-bind="fadeVisible: isVisible" style="display: none;">
                                <div class="step-title" data-bind="i18n: 'Verify Your Address'" data-role="title">Verify Your Address</div>
                                <div class="step-content" data-role="content" role="tabpanel" aria-hidden="false">
                                    <!-- ko template: getBaseValidateAddressTemplate() -->
                                    <div class="instructions noError" data-bind="html: instructions, attr: {'data-uid': uid}" data-uid="UBC66RV">To ensure accurate delivery, we suggest the changes highlighted below. Please choose which address you would like to use. If neither option is correct, <a href="#" class="edit-address">edit your address</a>.</div>
                                    <!-- ko if: choice == 1 -->
                                    <form id="co-validate-form" class="form validate noError" novalidate="novalidate">
                                        <div class="validContainer addressOption selected m-radio-button">
                                            <input type="radio" class="validAddress m-radio-button__input" name="addressToUse" checked="" data-bind="attr: {id: 'valid-' + uid}" id="valid-UBC66RV">
                                            <label data-bind="attr: {for: 'valid-' + uid}" class="addressLabel" for="valid-UBC66RV">
                                                <span class="m-radio-button__circle"></span>
                                                <div class="optionTitle m-radio-button__text-label" data-bind="i18n: 'Suggested Address'">Suggested Address</div>
                                                <div class="optionAddress validAddressText"></div>
                                            </label>
                                        </div>
                                        <div class="originalContainer addressOption m-radio-button">
                                            <input type="radio" class="originalAddress m-radio-button__input" name="addressToUse" data-bind="attr: {id: 'original-' + uid}" id="original-UBC66RV">
                                            <label data-bind="attr: {for: 'original-' + uid}" class="addressLabel" for="original-UBC66RV">
                                                <span class="m-radio-button__circle"></span>
                                                <div class="optionTitle m-radio-button__text-label" data-bind="i18n: 'Original Address'">Original Address</div>
                                                <div class="optionAddress originalAddressText"></div>
                                            </label>
                                        </div>
                                    </form>
                                    <div class="errorMessageContainer yesError">
                                        <div class="instructions" data-bind="html: errorInstructions, attr: {'data-uid': uid}" data-uid="UBC66RV">We were unable to validate your address. <p class="error-message"></p> If the address below is correct then you don’t need to do anything. To change your address, <a href="#" class="edit-address">click here</a>.</div>
                                        <div class="originalAddressText"></div>
                                    </div>
                                    <!-- /ko -->
                                </div>
                            </li>
                            <li id="payment" role="presentation" class="checkout-payment-method" data-bind="fadeVisible: isVisible" style="display: none;">
                                <div id="checkout-step-payment" class="step-content" data-role="content" role="tabpanel" aria-hidden="false">
                                    <form id="co-payment-form" class="form payments" novalidate="novalidate">
                                        <input data-bind="attr: {value: getFormKey()}" type="hidden" name="form_key" value="UrGQMAhAXJb3nCnH">
                                        <fieldset class="fieldset">
                                            <legend class="legend payment-information-legend">
                                                <span data-bind="i18n: 'Payment Information'">Payment Information</span>
                                            </legend>
                                            <div id="checkout-payment-method-load" class="opc-payment" data-bind="visible: isPaymentMethodsAvailable" style="display: none;">
                                                <div class="no-payments-block" data-bind="i18n: 'No Payment Methods'">No Payment Methods</div>
                                            </div>
                                            <div class="no-quotes-block" data-bind="visible: isPaymentMethodsAvailable() == false">
                                                <!-- ko i18n: 'No Payment method available.'--><span>No Payment method available.</span><!-- /ko -->
                                            </div>
                                            <div class="payment-option _collapsible opc-payment-additional discount-code" data-bind="mageInit: {'collapsible':{'openedState': '_active'}}" data-collapsible="true" role="tablist">
                                                <div class="payment-option-title field choice a-anchor" data-role="title" role="tab" aria-selected="false" aria-expanded="false" tabindex="0">
                                                    <span class="action action-toggle" id="block-discount-heading" role="heading" aria-level="2">
                                                        <!-- ko i18n: 'Apply Discount Code'--><span>Apply Discount Code</span><!-- /ko -->
                                                    </span>
                                                </div>
                                                <div class="payment-option-content" data-role="content" role="tabpanel" aria-hidden="true" style="display: none;">
                                                    <div data-role="checkout-messages" class="messages" data-bind="visible: isVisible(), click: removeAll">
                                                    </div>
                                                    <form class="form form-discount" id="discount-form">
                                                        <div class="payment-option-inner">
                                                            <div class="field">
                                                                <div class="control m-text-input m-text-input--placeholder-label">
                                                                    <input class="input-text a-text-input m-text-input__input" type="text" id="discount-code" name="discount_code" data-validate="{'required-entry':true}" data-bind="value: couponCode, attr:{placeholder: $t('Enter discount code')}, 'disable': isDisable " placeholder="Enter discount code">
                                                                    <label class="label a-form-label m-text-input__label" for="discount-code">
                                                                        <span data-bind="i18n: 'Enter discount code'">Enter discount code</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions-toolbar">
                                                            <div class="primary">
                                                                <button class="action action-apply a-btn a-btn--primary" type="submit" data-bind="'value': $t('Apply Discount'), click: apply, 'disable': isDisable" value="Apply Discount">
                                                                    <span>
                                                                        <span>Apply Discount</span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <input name="captcha_form_id" type="hidden" data-bind="value: formId,  attr: {'data-scope': dataScope}" value="sales_rule_coupon_request" data-scope="">
                                                    </form>
                                                </div>
                                            </div>

                                            <div>
                                                <div class="payment-option-content" data-role="content">
                                                    <form class="form form-ordercomments" id="ordercomments-form">

                                                        <div class="ordercomments-inner" data-bind="visible: canShowComments" style="display: none;">
                                                            <div class="field">
                                                                <label class="label" for="order-comment">
                                                                    <span data-bind="i18n: 'Order Comment'">Order Comment</span>
                                                                </label>
                                                                <div class="control">
                                                                    <textarea class="input-text" id="order-comment" name="order-comment" data-bind="attr:{placeholder: $t('Enter Order Comments')}" cols="5" rows="3" placeholder="Enter Order Comments"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="shipcomplete field" data-bind="visible: canShowShipComplete" style="display: none;">
                                                            <div class="control ship-complete">
                                                                <input type="checkbox" name="ship-complete" id="ship-complete" value="0" class="checkbox">
                                                                <label class="label" for="ship-complete">
                                                                    <span data-bind="i18n: 'Ship Complete'">Ship Complete</span>
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
                        <header class="modal-header">

                            <button class="action-close" data-role="closeBtn" type="button">
                                <span>Close</span>
                            </button>
                        </header>
                        <div id="modal-content-11" class="modal-content" data-role="content">
                            <div id="opc-sidebar" data-bind="afterRender:setModalElement, mageInit: {
    'Magento_Ui/js/modal/modal':{
        'type': 'custom',
        'modalClass': 'opc-sidebar opc-summary-wrapper',
        'wrapperClass': 'checkout-container',
        'parentModalClass': '_has-modal-custom',
        'responsive': true,
        'responsiveClass': 'custom-slide',
        'overlayClass': 'modal-custom-overlay',
        'buttons': []
    }}">

                                <!-- ko foreach: getRegion('summary') -->
                                <!-- ko template: getTemplate() -->
                                <div class="opc-block-summary" data-bind="blockLoader: isLoading">
                                    <div class="order-summary__heading">
                                        <span data-bind="i18n: 'Order Summary'" class="title">Order Summary</span>
                                    </div>
                                    <!-- ko foreach: elems() -->
                                    <!-- ko template: getTemplate() -->
                                    <!-- ko if: isDisplayed() -->
                                    <!-- /ko -->
                                    <!-- /ko -->

                                    <!-- ko template: getTemplate() -->
                                    <!-- ko foreach: {data: elems, as: 'element'} -->
                                    <!-- /ko -->
                                    <!-- /ko -->

                                    <!-- ko template: getTemplate() -->
                                    <div class="block items-in-cart" data-bind="mageInit: {'collapsible':{'openedState': 'active', 'active': isItemsBlockExpanded()}}" data-collapsible="true" role="tablist">
                                        <div class="title items-in-cart__title" data-role="title" role="tab" aria-selected="false" aria-expanded="false" tabindex="0">
                                            <span>
                                                <!-- ko if: maxCartItemsToDisplay < getCartLineItemsCount() -->
                                                <!-- /ko -->
                                                <!-- ko if: maxCartItemsToDisplay < getCartLineItemsCount() -->
                                                <!-- /ko -->
                                                <span data-bind="text: getCartSummaryItemsCount()">1</span>
                                                <!-- ko if: getCartLineItemsCount() === 1 -->
                                                <!-- ko i18n: 'Item in Cart' --><span>Item in Cart</span><!-- /ko -->
                                                <!-- /ko -->
                                                <!-- ko if: getCartLineItemsCount() > 1 -->
                                                <!-- /ko -->
                                            </span>
                                            <span class="items-in-cart__expand-icon icon-arrow-down"></span>
                                        </div>
                                        <div class="content minicart-items" data-role="content" role="tabpanel" aria-hidden="true" style="display: none;">
                                            <div class="minicart-items-wrapper overflowed">
                                                <ol class="minicart-items">
                                                    <!-- ko foreach: items() -->
                                                    <li class="product-item">
                                                        <div class="product">
                                                            <!-- ko foreach: $parent.elems() -->
                                                            <!-- ko template: getTemplate() -->

                                                            <!-- ko foreach: getRegion('before_details') -->
                                                            <!-- ko template: getTemplate() -->
                                                            <span class="product-image-container" data-bind="attr: {'style': 'height: ' + getHeight($parents[1]) + 'px; width: ' + getWidth($parents[1]) + 'px;' }" style="height: 78px; width: 78px;">
                                                                <span class="product-image-wrapper">
                                                                    <img data-bind="attr: {'src': getSrc($parents[1]), 'width': getWidth($parents[1]), 'height': getHeight($parents[1]), 'alt': getAlt($parents[1]), 'title': getAlt($parents[1]) }" src="https://acquia.prod.wholesale.frontiercoop.com/sites/default/files/acquiadam/2020-09/1_Citra-Solv-Citra-Clear-Natural-Window-Glass-Valencia-Orange-32oz-211752-Front.jpg" width="78" height="78" alt="Citra Solv Citra Clear Natural Window &amp; Glass Cleaner, Valen" title="Citra Solv Citra Clear Natural Window &amp; Glass Cleaner, Valen">
                                                                </span>
                                                            </span>
                                                            <!-- /ko -->
                                                            <!-- /ko -->
                                                            <div class="product-item-details">

                                                                <div class="product-item-inner">
                                                                    <div class="product-item-name-block">
                                                                        <strong class="product-item-name" data-bind="html: $parent.name">Citra Solv Citra Clear Natural Window &amp; Glass Cleaner, Valen</strong>
                                                                        <div class="details-qty">
                                                                            <span class="label">
                                                                                <!-- ko i18n: 'Qty' --><span>Qty</span><!-- /ko -->
                                                                            </span>
                                                                            <span class="value" data-bind="text: $parent.qty">1</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="subtotal">
                                                                        <span class="price-excluding-tax" data-bind="attr:{'data-label': $t('Excl. Tax')}" data-label="Excl. Tax">
                                                                            <span class="cart-price">
                                                                                <span class="price" data-bind="text: getFormattedPrice(getRowDisplayPriceExclTax($parents[2]))">$6.65</span>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
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
            data: {
                check_vouchers: $("input[name='vouchers']").val()
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
    let input_html = '<div class="item-1">' +
        '<input type="text" required name="method_company" required class="form-control" id="method_company" placeholder="Vui lòng nhập tên công ty" value="">' +
        '<div class="text-danger method_company" ></div>' +
        '</div>' +
        '<div class="item-1">' +
        '<input type="text" required name="method_customer_code" required class="form-control" id="method_customer_code" placeholder="Vui lòng nhập mã số thuế" value="">' +
        '<div class="text-danger method_customer_code" ></div>' +
        '</div>';
    $(".company_us").on('change', function() {
        let group_buy = $("input[name='group_buy']:checked").val();
        let in_per =
            ' <p class="color-orange box-total-pay">' +
            ' <span>Tổng tiền thanh toán: </span>' +
            ' <span id="total_paid">{{ \Cart::total(0,0,'.
        ') }}đ</span>' +
        ' </p>';
        let in_int = '<p>' +
            '<span>Học phí gốc</span>' +
            '<span id="total_no_vat">{{ $total_no_vat }}đ</span>' +
            '</p>' +
            '<p>' +
            '<span>Thuế 10%</span>' +
            '<span id="vat_total">{{ $vat_total }}đ</span>' +
            '</p>' +
            '<p class="color-orange box-total-pay">' +
            ' <span>Tổng tiền thanh toán: </span>' +
            ' <span id="total_paid">{{ $paid_total }}đ</span>' +
            ' </p>';
        if (group_buy == 1) {
            $('.add-form-company').html(input_html);
            $('.pay-footer').html(in_int);
        };
        if (group_buy == 2) {
            $('.add-form-company').html(input_html);
            $('.pay-footer').html(in_int);
        };
        if (group_buy == 0) {
            $('.add-form-company .item-1').remove();
            $('.pay-footer').html(in_per);
        };

    });
    // 
</script>
<script src="{{ asset('js/cart.js') }}"></script>
@stop