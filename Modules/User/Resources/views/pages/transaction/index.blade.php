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
                        <span class="base" data-ui-id="page-title-wrapper">Đơn hàng</span>
                    </h1>
                </div>
                <div class="cart table-wrapper">
                    <table id="shopping-cart-table" class="cart items data table cart-table">

                        <thead>
                            <tr>
                                <th class="col item" scope="col"><span>Sản phẩm</span></th>
                                <th class="col price" scope="col"><span>Giá</span></th>
                                <th class="col qty" scope="col"><span>Số lượng</span></th>
                                <th class="col subtotal" scope="col"><span>Tổng tiền</span></th>
                                <th class="col subtotal" scope="col"><span>Trạng thái</span></th>
                            </tr>
                        </thead>
                        <tbody class="cart item">
                            <tr class="item-info">
                                <td data-th="Item" class="col item">
                                    <a href="" title="ASản phẩm 01" tabindex="-1" class="product-item-photo">
                                        <span class="product-image-container" style="width:110px;">
                                            <span class="product-image-wrapper" style="padding-bottom: 145.45454545455%;">
                                                <img class="product-image-photo"
                                                    src="/storage/uploads//storage/uploads_product/31103-900x900-1626172168.jpg"
                                                    max-width="100%" max-height="100%" alt="ASản phẩm 01">
                                            </span>
                                        </span>
                                    </a>
                                    <div class="product-item-details">
                                        <strong class="product-item-name">
                                            <a href=""> </a>
                                        </strong>
                                        <div class="product attribute sku">
                                            <strong class="type">Mã sản phẩm:</strong>
                                            <span class="value" itemprop="sku">1</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="col price" data-th="Price">
                                    <span class="price-excluding-tax" data-label="Excl. Tax">
                                        <span class="cart-price">
                                            <span class="price">3000 đ</span>
                                        </span>
                                    </span>
                                </td>
                                <td class="col qty" data-th="Qty">
                                    <div class="field qty">
                                        <span class="cart-price">
                                            <span class="price">1</span>
                                        </span>
                                    </div>
                                </td>
                                <td class="col subtotal" data-th="Tổng tiền">
                                    <span class="price-excluding-tax" data-label="Excl. Tax">
                                        <span class="cart-price">
                                            <span class="price">3000 đ</span>
                                        </span>
                                    </span>
                                </td>
                                <td class="col subtotal" data-th="Trạng thái">
                                   
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
            @include('user::components._inc_menu_user')
        </div>
    </main>
@stop
