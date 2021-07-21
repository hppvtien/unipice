@extends('pages.layouts.app_master_frontend')
@section('contents')
<main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
    <div class="page messages">
        <div data-placeholder="messages"></div>
        <div data-bind="scope: 'messages'">
            <!-- ko if: cookieMessages && cookieMessages.length > 0 -->
            <!-- /ko -->

            <!-- ko if: messages().messages && messages().messages.length > 0 -->
            <!-- /ko -->
        </div>

    </div>
    <div class="columns">
        <div class="column main">
            <div class="page-title-wrapper">
                <h1 class="page-title">
                    <span class="base" data-ui-id="page-title-wrapper">My Account</span>
                </h1>
            </div>
            <input name="form_key" type="hidden" value="ti05PgAwYARp0X1u">
            <div class="block block-dashboard-info">
                <div class="block-title"><strong>Account Information</strong></div>
                <div class="block-content">
                    <div class="box box-information">
                        <strong class="box-title">
                            <span>Contact Information</span>
                        </strong>
                        <div class="box-content">
                            <p>
                                Tien Pham<br>
                                hppvtien@gmail.com<br>
                            </p>
                        </div>
                        <div class="box-actions">
                            <a class="action edit a-anchor" href="https://shop.coopmarket.com/customer/account/edit/">
                                <span>Edit</span>
                            </a>
                            <a href="https://shop.coopmarket.com/customer/account/edit/changepass/1/" class="action change-password a-anchor">
                                Change Password </a>
                        </div>
                    </div>
                    <div class="box box-newsletter">
                        <strong class="box-title">
                            <span>Newsletters</span>
                        </strong>
                        <div class="box-content">
                            <p class="newsletter-label">No subscribed newsletters.</p>
                        </div>
                        <div class="box-actions">
                            <a class="action edit a-anchor" href="https://shop.coopmarket.com/newsletter/manage/"><span>Edit</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block block-dashboard-addresses">
                <div class="block-title">
                    <strong>Address Book</strong>
                    <a class="action edit a-anchor" href="https://shop.coopmarket.com/customer/address/"><span>Manage Addresses</span></a>
                </div>
                <div class="block-content">
                    <div class="box box-billing-address">
                        <strong class="box-title">
                            <span>Default Billing Address</span>
                        </strong>
                        <div class="box-content">
                            <address>
                                You have not set a default billing address. </address>
                        </div>
                    </div>
                    <div class="box box-shipping-address">
                        <strong class="box-title">
                            <span>Default Shipping Address</span>
                        </strong>
                        <div class="box-content">
                            <address>
                                You have not set a default shipping address. </address>
                        </div>
                        <div class="box-actions">
                            <a class="action edit a-anchor" href="https://shop.coopmarket.com/customer/address/edit/" data-ui-id="default-shipping-edit-link"><span>Edit Address</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar sidebar-main">
            <div class="block block-collapsible-nav">
                <div class="title block-collapsible-nav-title">
                    <strong>
                        My Account 
                    </strong>
                </div>
                <div class="content block-collapsible-nav-content" id="block-collapsible-nav">
                    <ul class="nav items">
                        <li class="nav item"><a href="https://shop.coopmarket.com/sales/order/history/">My Orders</a></li>
                        <li class="nav item"><a href="https://shop.coopmarket.com/wishlist/">My Wish List</a></li>
                        <li class="nav item"><a href="https://shop.coopmarket.com/customer/address/">Address Book</a></li>
                    
                        <li class="nav item"><a href="https://shop.coopmarket.com/customer/account/edit/">Account Information</a></li>
                        <li class="nav item"><a href="https://shop.coopmarket.com/newsletter/manage/">Newsletter Subscriptions</a></li>
                        <li class="nav item"><a href="https://shop.coopmarket.com/favorites/">My Favorites</a></li>
                    
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
@stop