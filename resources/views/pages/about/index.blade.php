@extends('pages.layouts.app_master_frontend') @section('contents')
<main role="main">
    <a id="main-content" tabindex="-1"></a>
    <div class="layout-content">
        <div class="region region-content">
            <div data-drupal-messages-fallback="" class="hidden"></div>
            <div id="block-frontiercoop-market-content" data-block-plugin-id="system_main_block">
                <div class="views-element-container">
                    <header>
                        <div about="/community/about" data-frontier-type="page_categories" id="taxonomy-term-1026" class="taxonomy-term vocabulary-page-categories">
                            <div class="content">
                                <div class="layout layout--onecol">
                                    <div class="layout__region layout__region--content">
                                        <div class="views-element-container" data-block-plugin-id="views_block:taxonomy_term_content-block_1">


                                            <div class="views-element-container">
                                                <div class="js-view-dom-id-56ce0377d15aca2f4d999ae137c17bddb6e14f38a572ffa5210aa0eb25728823">
                                                    <div class="views-row">
                                                        <div about="{{ $page->p_name }}" class="c-page-header c-page-header--light">
                                                            <picture class="c-page-header__image">
                                                                <source media="(min-width: 1024px)" data-srcset="{{ pare_url_file($page->p_banner) }}">
                                                                <img class=" lazyloaded" data-src="{{ pare_url_file($page->p_banner) }}" alt=" " src="{{ pare_url_file($page->p_banner) }}">
                                                            </picture>

                                                            <div class="c-page-header__content">

                                                                <h1 class="c-page-header__headline">{{ $page->p_name }}</h1>
                                                                <p class="c-page-header__description">{{ $page->p_title_seo }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="layout layout--onecol">
                                    <div class="layout__region layout__region--content">
                                        <div data-block-plugin-id="system_breadcrumb_block">
                                            <nav class="m-breadcrumb" aria-label="Breadcrumb">
                                                <ol class="m-breadcrumb__list">
                                                    <li class="m-breadcrumb__item">
                                                        <a class="a-anchor" href="/">Trang Chủ</a>
                                                    </li>
                                                    <li class="m-breadcrumb__item m-breadcrumb__item--active">
                                                        <a title="{{ $page->p_name }}" href="javascript:;" class="a-anchor" aria-current="page">{{ $page->p_name }}</a>
                                                    </li>
                                                </ol>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="layout layout--frontierbase_cmscontentcomponent layout--frontierbase_cmscontentcomponent--25-75">
                                    <div class="t-cms__with-nav">

                                        <div class="layout__region layout__region--first">
                                            <div data-block-plugin-id="menu_item_fields:page-categories-menu-co-op-marke">
                                                <div class="m-sidebar-nav">
                                                    <div class="m-accordion js-sidebar-nav-accordion js-accordion--mobile-only">
                                                        <div class="m-accordion__title js-accordion-trigger" id="accordion-trigger-0" aria-expanded="false" aria-controls="accordion-content-0">
                                                            <span class="m-accordion__title-label">Menu</span>
                                                        </div>
                                                        <div class="m-accordion__content js-accordion-content" id="accordion-content-0" aria-labelledby="accordion-trigger-0">
                                                            <div class="m-sidebar-nav__links m-accordion__content-inner js-accordion-content-inner">
                                                                @foreach ($menu as $menu)
                                                                <a class="m-sidebar-nav__link" title="{{ $menu->name }}" href="{{ getSlugCategory($menu->slug) }}">{{ $menu->name }}</a> @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="layout__region layout__region--second">
                                            <div class="views-element-container" data-block-plugin-id="views_block:taxonomy_term_content-block_3">
                                                <div class="views-element-container">
                                                    <div class="js-view-dom-id-da21b1b57e679e3378bf6c41b72ae5b74885a5ce872e3d44b72f98b5b26deae3">
                                                        <div class="views-row">
                                                            <div class="c-intro-block">
                                                                <h2 class="c-intro-block__heading">{{ $page->p_title_seo }}</h2>
                                                                <p class="c-intro-block__copy">{{ $page->p_desscription }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div id="share">
                                                <!-- facebook -->
                                                <a class="facebook" href="https://www.facebook.com/share.php?u=url&title=title" target="blank"><i class="fa fa-facebook"></i></a>
                                                <!-- twitter -->
                                                <a class="twitter" href="https://twitter.com/intent/tweet?status=title+url" target="blank"><i class="fa fa-twitter"></i></a>
                                                <!-- google plus -->
                                                <a class="googleplus" href="https://plus.google.com/share?url=url" target="blank"><i class="fa fa-google-plus"></i></a>
                                                <!-- linkedin -->
                                                <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=url&title=title&source=source" target="blank"><i class="fa fa-linkedin"></i></a>
                                                <!-- pinterest -->
                                                <a class="pinterest" href="https://pinterest.com/pin/create/bookmarklet/?media=media&url=url&is_video=false&description=title" target="blank"><i class="fa fa-pinterest-p"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="layout layout--onecol container">
                                    <div class="layout__region layout__region--content">
                                        <div class="views-element-container" data-block-plugin-id="views_block:taxonomy_term-block_story_block">
                                            <div class="views-element-container">
                                                <div class="t-cms__content ">
                                                    {!! $page->p_content !!}
                                                </div>
                                                <div class="t-plp__pagination">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="layout layout--onecol">
                                    <div class="layout__region layout__region--content">
                                        <div class="views-element-container non-visible" data-block-plugin-id="views_block:listing_page_media_block_aligned-block_lp_media_block_aligned">
                                            <div class="views-element-container">
                                                <div class="c-media-block-aligned c-media-block-aligned--template- template-clp">
                                                    <div class="c-media-block-aligned__content-wrapper">
                                                        <div class="m-media-block-aligned">
                                                            <div class="m-media-block-aligned__image-wrapper">
                                                                <picture>
                                                                    <source media="(min-width: 768px)" data-srcset="/sites/default/files/styles/720x550/public/acquiadam/2020-09/Frontier-our-growers.jpg?itok=itHFms3-">
                                                                    <img class="lazyload" data-src="/sites/default/files/styles/345x160/public/acquiadam/2020-09/Frontier-our-growers.jpg?itok=HWJa2CWN" alt=" ">
                                                                </picture>
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