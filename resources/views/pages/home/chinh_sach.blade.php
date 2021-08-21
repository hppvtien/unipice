@extends('pages.layouts.app_master_frontend') @section('contents')
<main role="main">
    <a id="main-content" tabindex="-1"></a>
    <div class="layout-content">
        <div class="region region-content">
            <div data-drupal-messages-fallback class="hidden"></div>
            <div id="block-frontiercoop-market-content" data-block-plugin-id="system_main_block">
                <div class="views-element-container">
                    <header>
                        <div data-frontier-type="products_categories" id="taxonomy-term-521" class="taxonomy-term vocabulary-products-categories">
                            <div class="content">
                                <div class="layout layout--onecol">
                                    <div class="layout__region layout__region--content">
                                        <div data-block-plugin-id="entity_view:taxonomy_term">
                                            <div class="c-page-header c-page-header--light">
                                                <picture class="c-page-header__image">
                                                    <source media="(min-width: 1024px)" data-srcset="{{ pare_url_file($page_chinh_sach->p_banner) }}">
                                                    <img class="lazyload" data-src="{{ pare_url_file($page_chinh_sach->p_banner) }}" alt="{{ $page_chinh_sach->p_name }}">
                                                </picture>
                                                <div class="c-page-header__content">
                                                    <h1 class="c-page-header__headline">
                                                        <div class="field field--name-name field--type-string field--label-hidden field__item">{{ $page_chinh_sach->p_name }}</div>
                                                    </h1>
                                                </div>
                                            </div>
                                
                                        </div>
                                    </div>
                                </div>
                                <div class="layout layout--onecol">
                                    <div class="layout__region layout__region--content">
                                        <div class="t-plp__container js-plp-container">
                                            {!! $page_chinh_sach->p_content !!}
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