@extends('pages.layouts.app_master_frontend') @section('contents')
<main id="maincontent" class="page-main">
    <a id="contentarea" tabindex="-1"></a>
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
                        <li class="nav item"><a href="{{ route('get_user.productlist') }}">List Sản Phẩm</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="column main">
            <div>
                <div class="c-filter-bar class_left">

                    <div class="c-filter-bar__sorting">
                        <div class="m-sort-by">
                            <select class="m-sort-by__select frontier-custom-sort" id="sort_by" name="sort_by" aria-label="Sort By">
                                <option value="0" selected="">Chọn Danh Mục Sản Phẩm</option>
                                @foreach ($category_menu as $l)
                                    <option value="{{ $l->id }}">{{ $l->name }}</option>
                                @endforeach
                            </select>
                            <span class="m-sort-by__arrow"></span>
                        </div>
                        <div class="m-sort-by">
                            <select class="m-sort-by__select frontier-custom-sort" id="order_by" name="order_by" aria-label="Order By">
                                <option value="0" selected="">Chọn Sắp Xếp</option>
                                <option value="1" selected="">Tăng</option>
                                <option value="2">Giảm</option>
                            </select>
                            <span class="m-sort-by__arrow"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="t-plp__grid js-plp-grid show-product" id="show-product">
                @foreach ($product_list as $value)
                <div class="t-plp__product margin_top_list" data-animate-grid-id="0.7226111054869209" style="transform-origin: 0px 0px;">
                    <div class="views-field views-field-search-api-rendered-item" style="transform-origin: 0px 0px;">
                        <span class="field-content">
                            <div data-product-name="{{ $value->name }}" data-product-sku="{{ $value->id }}" data-product-brand="frontiercoop_market" data-product-category="\Accessories\Home and Pet\Kitchen and Dining\Food Storage and Containers" class="m-product-card">
                                <div class="m-product-card__content-wrapper">
                                    <a class="m-product-card__img-wrapper" href="san-pham-10" title="{{ $value->name }}">
                                        <img class="m-product-card__img ls-is-cached lazyloaded" data-src="https://wall.vn/wp-content/uploads/2020/03/hinh-nen-dep-may-tinh-1.jpg" alt="{{ $value->name }}" src="https://wall.vn/wp-content/uploads/2020/03/hinh-nen-dep-may-tinh-1.jpg">
                                    </a>
                                    <form class="m-product-card__add-to-cart">
                                        <button class="a-btn a-btn--primary m-product-card__add-to-cart-btn" type="submit">Thêm Vào Giỏ</button>
                                        <button class="a-btn a-btn--primary m-product-card__add-to-cart-icon" type="&quot;submit&quot;">
                                        <span class="icon-add-to-cart"></span>
                                        </button>
                                    </form>
                                </div>
                                <div class="m-product-card__info">
                                    <div class="m-combined-product-name">
                                        <a class="m-combined-product-name__link" href="san-pham-10">
                                            <span class="a-folio">{{ $value->name }}</span>
                                            <span class="a-product-name">{{ Str::limit($value->desscription, 55) }}</span>
                                        </a>
                                    </div>
                                    <div class="m-product-card__sku">SKU: {{ $value->id }}</div>
                                    <div class="m-price-lockup m-product-card__price">
                                        <span class="m-price-lockup__price" style="display: none">
                                            <span class="a-price"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="m-product-card__cta"></div>
                            </div>
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
    <div class="t-plp__grid js-plp-grid">
    </div>
    <div class="t-plp__media-block" data-animate-grid-id="0.7649058207806405" style="transform-origin: 0px 0px;">
        <div class="t-plp__pagination">
            <div class="m-pagination">
                <ul class="m-pagination__list">
                    @if ($current_page > 1 && $total_page > 1)
                    <li class="m-pagination__list-item">
                        <a class="m-pagination__link" href="{{ route('get_user.productlist', ['page'=>$current_page-1]) }}" title="Current page" aria-current="page">Prev</a>
                    </li>
                    @endif 
                    @for ($i = 1; $i <= $total_page; $i++)
                        @if ($i==$current_page) 
                        <li class="m-pagination__list-item m-pagination__list-item--active">
                        <a class="m-pagination__link" href="#" title="Go to page {{ $i }}">{{ $i }}</a>
                        </li>
                        @else 
                        <li class="m-pagination__list-item">
                            <a class="m-pagination__link" href="{{ route('get_user.productlist', ['page'=>$i]) }}" title="Go to page {{ $i }}">{{ $i }}</a>
                        </li>
                        @endif
                    @endfor
                    @if ($current_page < $total_page && $total_page > 1)
                        <li class="m-pagination__list-item">
                            <a class="m-pagination__link" href="{{ route('get_user.productlist', ['page'=>$current_page+1]) }}" title="Go to page next">Next</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>

</main>
@stop