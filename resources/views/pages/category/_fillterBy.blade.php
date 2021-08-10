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

            <div data-drupal-facet-id="product_brand_plp" data-drupal-facet-alias="product_brand_plp" class="facet-inactive js-facets-checkbox-links m-accordion js-filter-accordion">
                <div class="m-accordion__title m-accordion__title--open js-accordion-trigger" aria-expanded="false">
                    <span class="m-accordion__title-label">Thương hiêu</span>
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
                                </span>
                            </a>
                            @if (checkParent($item->id) !=0)
                            <span class="facett-item__count" data-id="{{ $item->id }}"></span>
                            @else

                            @endif
                        </div>
                        <div class="m-catParent" id="m-catParent{{ $item->id }}">
                            @foreach(getCatParent($item->id) as $parentItem)
                            <div class="facet-item m-checkbox c-sidebar-filters__filter">
                                <a href="javascript:;" class="name-filler" rel="nofollow" data-url="http://127.0.0.1:8000/san-pham/gia-vi-hoan-chinh.html" data-slug-trade="thuong-hieu-01" data-drupal-facet-item-id="product-brand-plp-1171">
                                    <span class="m-checkbox__text-label facet-item__value">
                                        {{ $parentItem->name }}
                                    </span>
                                </a>
                            </div>
                            @endforeach
                        </div>
                        @empty @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
$(document).ready(function(){
  $(".facett-item__count").click(function(){
      let data_pid = $(this).attr('data-id'); 
    $("#m-catParent"+data_pid).toggle("fast").removeClass('span.facett-item__count::after');
  });
});
</script>