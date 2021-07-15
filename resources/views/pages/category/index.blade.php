@extends('pages.layouts.app_master_frontend')
@section('contents')
<main role="main">
    <a id="main-content" tabindex="-1"></a>
    <div class="layout-content">
        <div class="region region-content">
            <div data-drupal-messages-fallback class="hidden"></div>
            <div id="block-frontiercoop-market-content" data-block-plugin-id="system_main_block">
                <div class="views-element-container">
                    <header>
                        <div about="/{{ $category->name }}" data-frontier-type="products_categories" id="taxonomy-term-521" class="taxonomy-term vocabulary-products-categories">
                            <div class="content">
                                <div class="layout layout--onecol">
                                    <div class="layout__region layout__region--content">
                                        <div data-block-plugin-id="entity_view:taxonomy_term">
                                            <div about="/{{ $category->name }}" class="c-page-header c-page-header--light">
                                                <picture class="c-page-header__image">
                                                    <source media="(min-width: 1024px)" data-srcset="{{ pare_url_file($category->banner) }}">
                                                    <img class="lazyload" data-src="{{ pare_url_file($category->banner) }}" alt="{{ $category->name }}">
                                                </picture>
                                                <div class="c-page-header__content">
                                                    <h1 class="c-page-header__headline">
                                                        <div class="field field--name-name field--type-string field--label-hidden field__item">{{ $category->name }}</div>
                                                    </h1>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="layout layout--onecol">
                                    <div class="layout__region layout__region--content">
                                        <div class="views-element-container" data-block-plugin-id="views_block:page_listing_page_recipe_products_-product_listing_page">
                                            <div class="views-element-container">
                                                <div class="t-plp js-plp" id="js-plp">
                                                    <div class="t-plp__nav">
                                                        <nav class="m-breadcrumb" aria-label="Breadcrumb">
                                                            <h2 class="visually-hidden">Breadcrumb</h2>
                                                            <ol class="m-breadcrumb__list">
                                                                <li class="m-breadcrumb__item">
                                                                    <a class="a-anchor" href="/">Home</a>
                                                                </li>
                                                                <li class="m-breadcrumb__item m-breadcrumb__item--active">
                                                                    <a class="a-anchor" aria-current="page">{{ $category->name }}</a>
                                                                </li>
                                                            </ol>
                                                        </nav>
                                                        <div class="t-plp__filter-bar js-filter-bar">
                                                            <div class="c-filter-bar">
                                                                <button class="c-filter-bar__filter-btn a-icon-text-btn a-icon-text-btn--icon-right js-toggle-filters" type="button">
                                                                    <span class="icon-filters a-icon-text-btn__icon" aria-hidden="true"></span>
                                                                    <span class="a-icon-text-btn__label">
                                                                        <span class="c-filter-bar__label--show">Show Filters</span>
                                                                        <span class="c-filter-bar__label--hide">Hide Filters</span>
                                                                    </span>
                                                                </button>
                                                                <div class="c-filter-bar__sorting">
                                                                    <div class="m-sort-by">
                                                                        <label class="m-sort-by__label" for="sort_by">Sort By</label>
                                                                        <select class="m-sort-by__select frontier-custom-sort" id="sort_by" name="sort_by" aria-label="Sort By">
                                                                            <option value="price" selected>Price</option>
                                                                            <option value="name">Name</option>
                                                                        </select>
                                                                        <span class="m-sort-by__arrow"></span>
                                                                    </div>
                                                                    <div class="m-sort-by">
                                                                        <label class="m-sort-by__label" for="sort_order">Order By</label>
                                                                        <select class="m-sort-by__select frontier-custom-sort" id="order_by" name="order_by" aria-label="Order By">
                                                                            <option value="asc" selected>Asc</option>
                                                                            <option value="desc">Desc</option>
                                                                        </select>
                                                                        <span class="m-sort-by__arrow"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="t-plp__quick-filters js-mobile-quick-filters">
                                                        </div>
                                                    </div>
                                                    <div class="t-plp__container js-plp-container">
                                                        <div class="t-plp__filters js-filters">
                                                            <div class="c-sidebar-filters">
                                                                <div class="c-sidebar-filters__close-filters">
                                                                    <!-- BASE -->
                                                                    <button class="a-icon-text-btn  a-icon-text-btn--icon-only js-close-filters" type="button">
                                                                        <span class="icon-close a-icon-text-btn__icon" aria-hidden="true"></span>
                                                                        <span class="a-icon-text-btn__label">Hide filters</span>
                                                                    </button>
                                                                    <!-- /BASE -->
                                                                </div>
                                                                <div class="c-sidebar-filters__heading">
                                                                    <p class="c-sidebar-filters__title">Filters by:</p>
                                                                </div>
                                                                <div class="c-sidebar-filters__list">

                                                                    <div data-drupal-facet-id="product_brand_plp" data-drupal-facet-alias="product_brand_plp" class="facet-inactive js-facets-checkbox-links m-accordion js-filter-accordion">
                                                                        <div class="m-accordion__title m-accordion__title--open js-accordion-trigger">
                                                                            <span class="m-accordion__title-label">Thương hiêu</span>
                                                                        </div>
                                                                        <div class="m-accordion__content m-accordion__content--open js-accordion-content">
                                                                            <div class="m-accordion__content-inner js-accordion-content-inner js-frontier-facet">
                                                                                @forelse ($trade as $key => $item)
                                                                                <div class="facet-item m-checkbox c-sidebar-filters__filter">
                                                                                    <a href="javascript:;" class="name-filler" rel="nofollow" data-url="{{ route('get.fillter',$category->slug) }}" data-slug-trade="{{ $item->slug }}" data-drupal-facet-item-id="product-brand-plp-1171">
                                                                                        <span class="m-checkbox__text-label facet-item__value">
                                                                                            {{ $item->name }}
                                                                                            <span class="facet-item__count"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                                @empty

                                                                                @endforelse
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-drupal-facet-id="product_categories" data-drupal-facet-alias="product_categories" class="facet-inactive js-facets-checkbox-links m-accordion js-filter-accordion">
                                                                        <div class="m-accordion__title m-accordion__title--open js-accordion-trigger">
                                                                            <span class="m-accordion__title-label">Danh mục gia vị</span>
                                                                        </div>
                                                                        <div class="m-accordion__content m-accordion__content--open js-accordion-content">
                                                                            <div class="m-accordion__content-inner js-accordion-content-inner js-frontier-facet">
                                                                                @forelse ($categories as $key => $item)
                                                                                <div class="facet-item m-checkbox c-sidebar-filters__filter">
                                                                                    <a href="javascript:;" class="name-filler" rel="nofollow" data-url="{{ route('get.fillter',$category->slug) }}" data-slug-cat="{{ $item->slug }}">
                                                                                        <span class="m-checkbox__text-label facet-item__value">
                                                                                            {{ $item->name }}
                                                                                            <span class="facet-item__count"></span>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                                @empty

                                                                                @endforelse
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="t-plp__grid js-plp-grid show-product" id="show-product">
                                                            @forelse ($product as $key => $item)
                                                            <div class="t-plp__product" data-animate-grid-id="0.7226111054869209" style="transform-origin: 0px 0px;">
                                                                <div class="views-field views-field-search-api-rendered-item" style="transform-origin: 0px 0px;"><span class="field-content">
                                                                        <div data-product-name="{{ $item->name }}" data-product-sku="{{ $item->id }}" data-product-brand="frontiercoop_market" data-product-category="\Accessories\Home and Pet\Kitchen and Dining\Food Storage and Containers" class="m-product-card">
                                                                            <div class="m-product-card__content-wrapper">
                                                                                <a class="m-product-card__img-wrapper" href="{{ $item->slug }}" title="{{ $item->name }}">
                                                                                    <img class="m-product-card__img ls-is-cached lazyloaded" data-src="{{ pare_url_file_product($item->thumbnail) }}" alt="{{ $item->name }}" src="{{ pare_url_file_product($item->thumbnail) }}">
                                                                                </a>
                                                                                <form class="m-product-card__add-to-cart">
                                                                                    <button class="a-btn a-btn--primary m-product-card__add-to-cart-btn" type="submit">Add to cart</button>
                                                                                    <button class="a-btn a-btn--primary m-product-card__add-to-cart-icon" type="&quot;submit&quot;">
                                                                                        <span class="icon-add-to-cart"></span>
                                                                                    </button>
                                                                                </form>
                                                                            </div>
                                                                            <div class="m-product-card__info">
                                                                                <div class="m-combined-product-name">
                                                                                    <a class="m-combined-product-name__link" href="{{ $item->slug }}">
                                                                                        <span class="a-folio">
                                                                                            {{ $item->name }}
                                                                                        </span>
                                                                                        <span class="a-product-name">
                                                                                            {{ desscription_cut($item->desscription,60) }}
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="m-product-card__sku">SKU: {{ $item->id }}</div>
                                                                                <div class="m-price-lockup m-product-card__price">
                                                                                    <span class="m-price-lockup__price" style="display: none">

                                                                                        <span class="a-price">
                                                                                            {{ $item->price_sale }}
                                                                                        </span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="m-product-card__cta"></div>
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            @empty
                                                            @endforelse
                                                        </div>
                                                        <div class="t-plp__grid js-plp-grid">
                                                        </div>
                                                        <div class="t-plp__media-block" data-animate-grid-id="0.7649058207806405" style="transform-origin: 0px 0px;">
                                                            <div class="t-plp__pagination">
                                                                <div class="m-pagination">
                                                                    <ul class="m-pagination__list">
                                                                        <li class="m-pagination__list-item m-pagination__list-item--active">
                                                                            <a class="m-pagination__link" href="?sort_by=search_api_relevance&amp;sort_order=ASC&amp;page=0" title="Current page" aria-current="page">1</a>
                                                                        </li>
                                                                        <li class="m-pagination__list-item">
                                                                            <a class="m-pagination__link" href="?sort_by=search_api_relevance&amp;sort_order=ASC&amp;page=1" title="Go to page 2">2</a>
                                                                        </li>
                                                                        <li class="m-pagination__list-item">
                                                                            <a class="m-pagination__link" href="?sort_by=search_api_relevance&amp;sort_order=ASC&amp;page=2" title="Go to page 3">3</a>
                                                                        </li>
                                                                        <li class="m-pagination__list-item">
                                                                            <a class="m-pagination__link" href="?sort_by=search_api_relevance&amp;sort_order=ASC&amp;page=3" title="Go to page 4">4</a>
                                                                        </li>
                                                                        <li class="m-pagination__list-item">
                                                                            <a class="m-pagination__link" href="?sort_by=search_api_relevance&amp;sort_order=ASC&amp;page=4" title="Go to page 5">5</a>
                                                                        </li>
                                                                        <li class="m-pagination__list-item">
                                                                            <a class="m-pagination__link" href="?sort_by=search_api_relevance&amp;sort_order=ASC&amp;page=5" title="Go to page 6">6</a>
                                                                        </li>
                                                                        <li class="m-pagination__list-item">
                                                                            <a class="m-pagination__link" href="?sort_by=search_api_relevance&amp;sort_order=ASC&amp;page=6" title="Go to page 7">7</a>
                                                                        </li>
                                                                        <li class="m-pagination__list-item">
                                                                            <a class="m-pagination__link" href="?sort_by=search_api_relevance&amp;sort_order=ASC&amp;page=7" title="Go to page 8">8</a>
                                                                        </li>
                                                                        <li class="m-pagination__list-item">
                                                                            <a class="m-pagination__link" href="?sort_by=search_api_relevance&amp;sort_order=ASC&amp;page=8" title="Go to page 9">9</a>
                                                                        </li>
                                                                        <li class="m-pagination__list-item">
                                                                            <a class="m-pagination__link m-pagination__link--next" aria-label="Next" href="?sort_by=search_api_relevance&amp;sort_order=ASC&amp;page=1">
                                                                                <span class="icon-arrow-right"></span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
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
                    </header>
                </div>
            </div>
        </div>
    </div>
</main>
@stop