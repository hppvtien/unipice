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





                                                    <!-- EXPOSED -->

                                                    <!-- EXPOSED -->


                                                    <div class="views-row">











                                                        <div about="{{ $title_page }}" class="c-page-header c-page-header--light">


                                                            <picture class="c-page-header__image">
                                                                <source media="(min-width: 1024px)" data-srcset="{{ $banner }}?itok=4LYpCdp1" srcset="{{ $banner }}?itok=4LYpCdp1">
                                                                <img class=" lazyloaded" data-src="{{ $banner }}?itok=w16f3fH1" alt=" " src="{{ $banner }}?itok=w16f3fH1">
                                                            </picture>

                                                            <div class="c-page-header__content">

                                                                <h1 class="c-page-header__headline">{{ $title_page }}</h1>
                                                                <p class="c-page-header__description">{{ $des }}</p>
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
                                                <h2 class="visually-hidden">Breadcrumb</h2>
                                                <ol class="m-breadcrumb__list">
                                                    <li class="m-breadcrumb__item">
                                                        <a class="a-anchor" href="/">Trang Chủ</a>
                                                    </li>
                                                    <li class="m-breadcrumb__item m-breadcrumb__item--active">
                                                        <a title="{{ $title_page }}" href="{{ $link_url }}" class="a-anchor" aria-current="page">{{ $title_page }}</a>
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

                                            <div data-block-plugin-id="block_content:53bc7c81-0e01-4b09-a795-90903d87dc57" class="t-cms__links">



                                                <a class="c-product-overview__link a-anchor a-anchor--social-sharing" href="http://pinterest.com/pin/create/button/?url={{ $link_url }}" target="_blank">
                                                    <span class="icon-pinterest  a-icon-text-btn__icon" aria-hidden="true"></span>
                                                </a>
                                                <a class="c-product-overview__link a-anchor a-anchor--social-sharing" href="https://www.facebook.com/sharer/sharer.php?u={{ $link_url }}" target="_blank">
                                                    <span class="icon-facebook  a-icon-text-btn__icon" aria-hidden="true"></span>
                                                </a>
                                                <a class="c-product-overview__link a-anchor a-anchor--social-sharing" href="http://twitter.com/share?text=&amp;url={{ $link_url }}" target="_blank">
                                                    <span class="icon-twitter  a-icon-text-btn__icon" aria-hidden="true"></span>
                                                </a>
                                                <a class="c-product-overview__link a-anchor a-anchor--social-sharing" href="mailto:?subject=Lorem%20ipsum&amp;body={{ $link_url }}" target="_blank">
                                                    <span class="a-icon-text-btn__icon" aria-hidden="true">
                                                        <img src="/themes/custom/frontierbase/dist/frontiercoop/images/email.svg" alt="Email icon" height="25" width="25">
                                                    </span>
                                                </a>


                                            </div>

                                            <div class="views-element-container" data-block-plugin-id="views_block:taxonomy_term_content-block_3">


                                                <div class="views-element-container">
                                                    <div class="js-view-dom-id-da21b1b57e679e3378bf6c41b72ae5b74885a5ce872e3d44b72f98b5b26deae3">





                                                        <!-- EXPOSED -->

                                                        <!-- EXPOSED -->


                                                        <div class="views-row">






                                                            <div class="c-intro-block">


                                                                <h2 class="c-intro-block__heading">{{ $title1 }}</h2>


                                                                <p class="c-intro-block__copy">{{ $des }}</p>
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
                                        <div class="views-element-container" data-block-plugin-id="views_block:taxonomy_term-block_story_block">


                                            <div class="views-element-container">




                                                <!-- EXPOSED -->

                                                <!-- EXPOSED -->


                                                <div class="t-cms__content ">
                                                    @php $i=0 @endphp @foreach ($post_9 as $post_9)
                                                    <div class="@if($i%2 == 0) c-story-block @else c-story-block c-story-block--flipped @endif">
                                                        <div class="c-story-block__content-wrapper">
                                                            <div class="c-story-block__content">
                                                                <h2 class="c-story-block__headline">{{ $post_9->name }}</h2>
                                                                <p class="c-story-block__description">{{ $post_9->desscription }}</p>
                                                                <div class="c-story-block__cta">
                                                                    <a class="a-btn a-btn--secondary" href="{{ getSlugPost($post_9->slug) }}">Xem Thêm</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="c-story-block__image-wrapper">
                                                            <picture>
                                                                <source media="(min-width: 768px)" data-srcset="{{ pare_url_file($post_9->thumbnail) }}?itok=-RT5lIfV" srcset="{{ pare_url_file($post_9->thumbnail) }}?itok=-RT5lIfV">
                                                                <img class=" lazyloaded" data-src="{{ pare_url_file($post_9->thumbnail) }}?itok=-RT5lIfV" alt="{{ $post_9->name }}" src="{{ pare_url_file($post_9->thumbnail) }}?itok=-RT5lIfV">
                                                            </picture>
                                                        </div>
                                                    </div>
                                                    @php $i++ @endphp @endforeach
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

                    <!-- EXPOSED -->

                    <!-- EXPOSED -->








                </div>

            </div>

        </div>

    </div>


</main>
@stop