@extends('pages.layouts.app_master_frontend')
@section('contents')

<script>
    function get_product_sale(get_id) {
        var get_id = $(get_id).attr("data-id-sale");
        var get_total_price = $('#hihihihi').attr('gia');
        $.get("{{ route('get_user.get_product_flash_sale') }}", {
                get_id: get_id,
                get_total_price: get_total_price
            })
            .done(function(data) {
                $("#exampleModalLong .modal-body").html(data);
            });
    }
</script>
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
        overflow: scroll;
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

    a.a-btn.a-btn--primary.action.primary.checkout {
        color: #fff;
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

    tbody.cart.item tr td {
        vertical-align: inherit;
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
            <span class="base" data-ui-id="page-title-wrapper">Giỏ hàng</span>
        </h1>
    </div>
    <div class="page messages">
        <div data-placeholder="messages"></div>
    </div>
    <div class="columns">
        <div class="column main"><input name="form_key" type="hidden" value="GXhjnhZzwPqQ9aXV">
            <div class="cart-container">

                <div class="cart-summary"><strong class="summary title">Thông tin chi phí</strong>
                    <div id="block-shipping" class="block shipping active" data-collapsible="true" role="tablist">
                        <div class="title" data-role="title" aria-controls="block-summary" role="tab" aria-selected="false" aria-expanded="false" tabindex="0">
                            <h2 id="block-shipping-heading" class="cart-accordion-title">
                                Thông tin vận chuyển và thuế
                            </h2>
                        </div>
                    </div>
                    <div id="cart-totals" class="cart-totals">
                        <!-- ko template: getTemplate() -->
                        <div class="table-wrapper">
                            <table class="data table totals">
                                <tbody>
                                    <tr class="totals sub">
                                        <th class="mark" scope="row">Tổng tiền</th>
                                        <td class="amount">
                                            <span class="price" data-th="Subtotal">{{ \Cart::subtotal(0,0,'.') }} đ</span>
                                        </td>
                                    </tr>
                                    {{-- <tr class="totals sub">
                                        <th class="mark" scope="row">VAT</th>
                                        <td class="amount">
                                            <span class="price" data-th="Subtotal" id="total_vat_product">{{ formatVnd(subtotalTax(\Cart::content())) }} </span>
                                        </td>
                                    </tr> --}}
                                    @if (get_data_user('web','type') == 2 && checkUidSpiceClubPay(get_data_user('web')))
                                    <tr class="totals sub">
                                        <th class="mark" scope="row">Ưu đãi SpiceClub</th>
                                        <td class="amount">
                                            <span class="price" data-th="discounttotal">-{{ formatVnd((int)Cart::total(0,0,'')*(getDiscount()[0])/100) }}</span>
                                        </td>
                                    </tr>
                                    @else

                                    @endif

                                    <tr class="grand totals">
                                        <th class="mark" scope="row">
                                            <strong>Tổng (tạm tính)</strong>
                                        </th>
                                        <td class="amount" data-th="Order Total">
                                            @if (get_data_user('web','type') == 2 && checkUidSpiceClubPay(get_data_user('web')))
                                            <strong><span class="price">{{ formatVnd(((int)Cart::subtotal(0,0,'') - (int)Cart::total(0,0,'')*(getDiscount()[0])/100)) }}</span></strong>
                                            @else
                                            <strong><span class="price">{{ formatVnd((int)Cart::subtotal(0,0,'')) }}</span></strong>
                                            @endif

                                        </td>
                                    </tr>
                                    <tr class="grand totals">
                                        <th colspan="2" class="title ">
                                          <i> Tổng đơn hàng đã bao gồm VAT (nếu có). </i>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /ko -->

                    </div>

                    <ul class="checkout methods items checkout-methods-items">
                        <li class="item">
                            <a href="{{ route('get_user.pay') }}" type="button" data-role="proceed-to-checkout" title="Proceed to Checkout on Co-Op Market" class="a-btn a-btn--primary action primary checkout">
                                <span>Tiến hành thanh toán</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <form action="{{ route('get_user.updatecart') }}" method="get" id="form-validate" class="form form-cart">
                    <div class="table-responsive">
                        <table id="shopping-cart-table" class="cart items data table cart-table">
                            <caption class="table-caption">Thông tin giỏ hàng</caption>
                            <thead>
                                <tr>
                                    <th scope="col"><span>Sản phẩm</span></th>
                                    <th scope="col"><span>Đơn giá</span></th>
                                    <th scope="col"><span>Số lượng</span></th>
                                    <th scope="col"><span>Tổng tiền</span></th>
                                    <th scope="col"><span></span></th>
                                </tr>
                            </thead>
                            <tbody class="cart item">
                                @forelse ($listCarts as $key => $item)
                                <tr>
                                    <td data-th="Item" class="">
                                        <a href="{{ $item->slug }}" title="{{ $item->name }}" tabindex="-1" class="product-item-photo">
                                            <span class="product-image-container" style="width:110px;">
                                                <span class="product-image-wrapper" style="padding-bottom: 90%;">
                                                    <img class="product-image-photo" src="{{ $item->options->images }}" max-width="100%" max-height="100%" alt="{{ $item->name }}">
                                                </span>
                                            </span> <br>
                                            <span class="font-weight-bold">{{ $item->name }}</span> <br>
                                            @if($item->options->sale != 'combo')
                                            <span>Khối lượng:  <b>{{ getSizeName($item->weight) }} / {{ getSizeNameType(round($item->weight,0)) }}</b></span>
                                            @endif
                                        </a>
                                    </td>
                                    <td data-th="Price">
                                        <span class="price-excluding-tax" data-label="Excl. Tax">
                                            <span class="cart-price">
                                                <span class="price" id="hihihihi" gia="{{ $item->price }}">{{ formatVnd($item->price) }}

                                                </span>

                                            </span>
                                        </span>
                                    </td>
                                    <input  class="input-text product_vat" type="hidden" value="{{ $item->options->product_vat * $item->price/100 }}">
                                    <td data-th="Qty">
                                        <div class="field qty">
                                            <div class="control qty" style="padding: 0!important">
                                                <label for="cart-{{ $item->id }}-{{ $item->weight }}-qty" style="display:flex">
                                                    <input id="cart-{{ $item->id }}-{{ $item->weight }}-qty" style="width: 4.5em;padding: 5px 0px!important;height: 30px;text-align: center;" data-row="{{ $item->rowId }}"
                                                    class="input-text qty update-qty" data-size="{{ $item->weight }}"
                                                    name="cart[qty][{{ $item->rowId }}][]" item-id="{{ $item->id }}" data-qty="{{ $item->qty }}" value="{{ $item->qty }}" type="number" size="4" min="{{ checkUid(get_data_user('web')) != null ? get_min_box($item->id):''  }}"
                                                    data-price="{{ $item->price }}" data-image="{{ $item->options->images }}" data-store="{{ $item->options->sale }}" max="100" step="any" title="Qty">
                                                </label>
                                                <div class="text-danger" id="text-qtyerr{{ $item->id }}"></div>
                                                <input type="hidden" value="{{ $item->rowId }}" name="cart[rowid][]">
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th="Tổng tiền">
                                        <span class="price-excluding-tax" data-label="Excl. Tax">
                                            <span class="cart-price">
                                                <span class="price" id="price{{ $item->id }}">{{ formatVnd($item->price * $item->qty)}}</span>
                                            </span>
                                        </span>
                                    </td>
                                    <td data-th="Xóa sản phẩm">
                                        <button style="width: 20px;height: 20px;padding: 0;background: red;" data-row="{{ $item->rowId }}" type="button" data-url="{{ route('get_user.deletecart') }}" name="remove_cart_action" title="Remove Shopping Cart" class="a-btn a-btn--primary action remove remove_cart_action">
                                            <span>x</span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4"></td>
                                </tr>
                                @empty

                                @endforelse
                                <tr>
                                    <td colspan="5" style="padding-right: 0" class="border-bottom-0 border-left-0 border-right-0">
                                        <button type="submit" class="btn btn-info float-right" id="update-cart" style="margin-left:10px">Cập nhật giỏ hàng</button>
                                        <button type="button" class="btn btn-info float-right" data-type="del_cart" id="delete-all-cart" data-url="{{ route('get_user.deleteAllCart') }}"><i class="fa fa-spinner-third"></i>Xóa toàn bộ giỏ hàng</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="cart main actions">
                        <div class="cart-actions">
                            <a href="{{ route('get.all_product') }}" type="button" name="update_cart_action" title="Update Shopping Cart" class="a-btn a-btn--primary action update update_cart_action">
                                <span>Tiếp tục mua hàng</span>
                            </a>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</main>

<div class="modal fade show close-btn-ud" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-modal="true" style="padding-right: 17px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header btn-danger">
                <h5 class="modal-title text-white" id="exampleModalLabel">UNIMALL</h5>
                <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Chắc chắn bạn muốn thay đổi không ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-success" id="save-qty-product">Thay đổi</button>
            </div>
        </div>
    </div>
</div>

@stop
