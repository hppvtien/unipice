@extends('user::pages.layout.app_master_user')
@section('content')
<main id="maincontent" class="">

    <div class="columns">
         @include('user::pages.component._inc_menu_user')

        <div class="column main padding_css">

            <div>
                <div class="c-filter-bar class_left">

                    <div class="c-filter-bar__sorting">
                        <div class="m-sort-by">
                            <select onchange="get_data1();" class="m-sort-by__select frontier-custom-sort" id="sort_by" name="sort_by" aria-label="Sort By">
                                <option value="0" selected="">Chọn Danh Mục Sản Phẩm</option>
                                @foreach ($category_menus as $l)
                                    <option value="{{ $l->id }}">{{ $l->name }}</option>
                                @endforeach
                            </select>
                            <span class="m-sort-by__arrow"></span>
                        </div>
                        <div class="m-sort-by">
                            <select onchange="get_data1();" class="m-sort-by__select frontier-custom-sort" id="order_by" name="order_by" aria-label="Order By">
                                <option value="0" selected="">Chọn Sắp Xếp</option>
                                <option value="desc" selected="">Tăng</option>
                                <option value="asc">Giảm</option>
                            </select>
                            <span class="m-sort-by__arrow"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="t-plp__grid js-plp-grid show-product" id="show-product">
                
                @foreach ($product_list as $value)
                <div class="loadmore1 t-plp__product margin_top_list" data-animate-grid-id="0.7226111054869209" style="transform-origin: 0px 0px;">
                    <div class="views-field views-field-search-api-rendered-item" style="transform-origin: 0px 0px;">
                        <span class="field-content">
                            <div data-product-name="{{ $value->name }}" data-product-sku="{{ $value->id }}" data-product-brand="frontiercoop_market" data-product-category="{{ get_category_id($value->id) }}" class="m-product-card">
                                <div class="m-product-card__content-wrapper">
                                    <a class="m-product-card__img-wrapper" href="san-pham-10" title="{{ $value->name }}">
                                        <img class="m-product-card__img ls-is-cached lazyloaded" data-src="{{ pare_url_file($value->thumbnail) }}" alt="{{ $value->name }}" src="{{ pare_url_file($value->thumbnail) }}">
                                    </a>
                                    <form class="m-product-card__add-to-cart">
                                        <button class="a-btn a-btn--primary m-product-card__add-to-cart-btn js-add-cart" type="button">Thêm Vào Giỏ</button>
                                        <button class="a-btn a-btn--primary m-product-card__add-to-cart-icon" type="&quot;submit&quot;">
                                        <span class="icon-add-to-cart"></span>
                                        </button>
                                    </form>
                                </div>
                                <div class="m-product-card__info">
                                    <div class="m-combined-product-name">
                                        <a class="m-combined-product-name__link" href="san-pham-10">
                                            <span class="a-folio">{{ $value->name }}</span>
                                            <span class="a-product-name">{{ desscription_cut($value->desscription, 55) }}</span>
                                        </a>
                                    </div>
                                    <div class="m-product-card__sku">SKU: {{ $value->id }} <span my-id="{{ $value->id }}" onclick="check_my_favorites_add(this);" class="icon-favorite  a-icon-text-btn__icon @php foreach ($my_favorites as  $l) {
                                        if($value->id == $l){
                                            echo 'red';
                                        }else {
                                            echo  '';
                                        }
                                    } @endphp" aria-hidden="true"></span></div>
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
            <div>
                <a href="#" id="loadMore">Xem Thêm</a>
            </div>
   

</main>

@stop

