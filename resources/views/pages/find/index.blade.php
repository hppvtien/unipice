@extends('pages.layouts.app_master_frontend')
@section('contents')
<main role="main">
    <a id="main-content" tabindex="-1"></a>
    <div class="layout-content">
        <div class="region region-content">
            <div data-drupal-messages-fallback="" class="hidden"></div>
            <div>
                <article>
                    <div>
                        <div class="layout layout--onecol">
                            <div class="layout__region layout__region--content">
                                <div class="c-page-header c-page-header--light">
                                    <picture class="c-page-header__image">
                                        <source media="(min-width: 1024px)" data-srcset="/storage/uploads/frontier-prime-cuts-1440x660-1627696550.jpg" srcset="/storage/uploads/frontier-prime-cuts-1440x660-1627696550.jpg">
                                        <img class=" lazyloaded" data-src="/storage/uploads/frontier-prime-cuts-1440x660-1627696550.jpg" alt="Tìm cửa hàng cùng Unispice" src="/storage/uploads/frontier-prime-cuts-1440x660-1627696550.jpg">
                                    </picture>

                                    <div class="c-page-header__content">
                                        <h1 class="c-page-header__headline">Tìm cửa hàng cùng Unispice</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="layout layout--onecol">
                            <div class="layout__region layout__region--content">
                                <div data-block-plugin-id="system_breadcrumb_block">
                                    <nav class="m-breadcrumb" aria-label="Breadcrumb">
                                        <h2 class="visually-hidden">Breadcrumb</h2>
                                        <ol class="m-breadcrumb__list">
                                            <li class="m-breadcrumb__item">
                                                <a class="a-anchor" href="/">Home</a>
                                            </li>
                                            <li class="m-breadcrumb__item m-breadcrumb__item--active">
                                                <a class="a-anchor" aria-current="page">Tìm cửa hàng cùng Unispice</a>
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="layout layout--onecol">
                            <div class="layout__region layout__region--content">
                                <div class="views-element-container" data-block-plugin-id="views_block:taxonomy_term-block_story_block">
                                    <div class="views-element-container">
                                        <!-- EXPOSED -->
                                        <div class="layout layout--onecol">
                                            <div class="layout__region layout__region--content">
                                                <div class="views-element-container" data-block-plugin-id="views_block:listing_page_media_block_aligned-block_lp_media_block_aligned">
                                                    <div class="views-element-container">
                                                        <div class="c-media-block-aligned c-media-block-aligned--template- template-clp">
                                                            <div class="c-media-block-aligned__content-wrapper">
                                                                <div class="m-media-block-aligned">
                                                                    <div class="m-media-block-aligned__image-wrapper">
                                                                        <picture id="ren_map">
                                                                            <iframe rel="nofollow" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.9803660977477!2d106.6736626153527!3d20.912490499824253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7115f37d12fb%3A0xad7a0c64ee9d474c!2zQUVPTiBNQUxMIEjhuqNpIFBow7JuZyBMw6ogQ2jDom4!5e0!3m2!1svi!2s!4v1626491508777!5m2!1svi!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                                                        </picture>
                                                                    </div>
                                                                    <div class="m-media-block-aligned__content block-group-store">
                                                                        <div class="m-heading get-map-google">
                                                                            <div class="search-input">
                                                                                <div class="field email required">
                                                                                    <div class="control">
                                                                                        <input placeholder="Tìm kiếm..." name="search_name" id="search_name" type="text" class="" data-url="{{ route('get.find') }}">
                                                                                    </div>
                                                                                    <div class="c-filter-bar__sorting">
                                                                                        <div class="">
                                                                                            <select class="m-sort-by__select frontier-custom-sort search_province" data-url="{{ route('get.find') }}" id="order_by" name="search_province" aria-label="Search Province">
                                                                                                <option value="" selected>Chọn tỉnh thành</option>
                                                                                                @forelse ($uni_province as $item)
                                                                                                <option value="{{ $item }}">{{ $item }}</option>
                                                                                                @empty
                                                                                                    
                                                                                                @endforelse
                                                                                            </select>
                                                                                            <span class="m-sort-by__arrow"></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        
                                                                        </div>
                                                                        <div id="show-store">
                                                                            @forelse ($uni_store as $key => $item)
                                                                            <div class="m-heading get-map-google" data-lat="{{ $item->store_lat }}" data_lng="{{ $item->store_lng }}">
                                                                                <div class="m-heading__cta">
                                                                                    <h2 class="m-heading__headline heading_namestore">{{ $item->store_name }}</h2>
                                                                                    <p class="m-media-block-aligned__description">Địa chỉ: {{ $item->store_address }}</p>
                                                                                    <p class="m-media-block-aligned__description">Số điện thoại: {{ $item->store_phone }}</p>
                                                                                    <p class="go-map">Xem bản đồ</p>
                                                                                </div>
                                                                            </div>
                                                                            @empty
                                                                                
                                                                            @endforelse
                                                                        </div>
                                                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</main>
@stop