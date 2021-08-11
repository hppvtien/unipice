<div class="t-plp__filters js-filters">
    <div class="c-sidebar-filters">
        <div class="c-sidebar-filters__close-filters">
            <!-- BASE -->
            <button class="a-icon-text-btn  a-icon-text-btn--icon-only js-close-filters" type="button">
                <span class="icon-close a-icon-text-btn__icon" aria-hidden="true"></span>
                <span class="a-icon-text-btn__label">Ẩn bộ lọc</span>
            </button>
            <!-- /BASE -->
        </div>
        <div class="c-sidebar-filters__heading">
            <p class="c-sidebar-filters__title">Lọc với:</p>
        </div>
        <div class="c-sidebar-filters__list">
            <div data-drupal-facet-id="product_categories" data-drupal-facet-alias="product_categories" class="facet-inactive js-facets-checkbox-links m-accordion js-filter-accordion">
                <div class="bg-dark text-white m-accordion__title m-accordion__title--open js-accordion-trigger">
                    <span class="text-white px-3 m-accordion__title-label">Danh mục gia vị</span>
                </div>
                <div class="m-accordion__content m-accordion__content--open js-accordion-content">
                    <div class="m-accordion__content-inner js-accordion-content-inner js-frontier-facet">
                        @forelse ($category_mn as $key => $item)
                        <div class="facet-item m-checkbox c-sidebar-filters__filter">
                            <a href="javascript:;" class="name-filler parent-name" rel="nofollow" data-url="{{ route('get.fillter',$category->slug) }}" data-slug-cat="{{ $item->slug }}">
                                <span class="m-checkbox__text-label facet-item__value" id="facet-item{{ $item->id }}">
                                    {{ $item->name }}
                                </span>
                            </a>
                            @if (checkParent($item->id) !=0)
                            <span class="show-catp" data-id="{{ $item->id }}">
                                <i id="togle-idc{{ $item->id }}" class="fa fa-chevron-down"></i>
                            </span>
                            @else

                            @endif
                        </div>
                        <div class="m-catParent" id="m-catParent{{ $item->id }}">
                            @foreach(getCatParent($item->id) as $parentItem)
                            <div class="facet-item m-checkbox c-sidebar-filters__filter">
                                <a href="/{{ getSlugCategory($parentItem->slug) }}" class="name-filler name-parent"  rel="nofollow" data-url="{{ route('get.fillter',$parentItem->slug) }}" data-slug-cat="{{ $parentItem->slug }}">
                                    <h2 class="px-4 m-checkbox__text-label facet-item__value">
                                        {{ $parentItem->name }}
                                    </h2>
                                </a>
                            </div>
                            @endforeach
                        </div>
                        @empty @endforelse
                    </div>
                </div>
            </div>
            <div class="facet-inactive js-facets-checkbox-links m-accordion js-filter-accordion">
                <div class="bg-dark text-white m-accordion__title m-accordion__title--open js-accordion-trigger" aria-expanded="false">
                    <span class="text-white px-3 m-accordion__title-label">Thương hiêu</span>
                </div>
                <div class="m-accordion__content m-accordion__content--open js-accordion-content">
                    <div class="m-accordion__content-inner js-accordion-content-inner js-frontier-facet">
                        @forelse ($trade as $key => $item)
                        <div class="facet-item m-checkbox c-sidebar-filters__filter">
                            <a href="javascript:;" class="name-filler" rel="nofollow" data-url="{{ route('get.fillter',$category->slug) }}" data-slug-trade="{{ $item->slug }}" data-drupal-facet-item-id="product-brand-plp-1171">
                                <span class="m-checkbox__text-label facet-item__value">
                                    {{ $item->name }}
                                </span>
                            </a>
                        </div>
                        @empty @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<head>