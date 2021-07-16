@extends('blog::layouts.master')
@section('style')

<link rel="stylesheet" href="{{ asset('css/frontend_dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('css/blog_home.css') }}">
@stop
@section('content')
<!-- @include('blog::pages.home.include._inc_breadcrumb') -->
<main role="main">
  <a id="main-content" tabindex="-1"></a>
  <div class="layout-content">
    <div class="region region-content">
      <div data-drupal-messages-fallback="" class="hidden"></div>
      <div id="block-frontiercoop-market-content" data-block-plugin-id="system_main_block">
        <article data-history-node-id="330491" role="article" about="/co-op-market-blog" data-frontier-type="page">
          <div>
            <div class="layout layout--onecol">
              <div class="layout__region layout__region--content">
                <div class="c-page-header c-page-header--light">
                  <picture class="c-page-header__image">
                    <source media="(min-width: 1024px)" data-srcset="{{ pare_url_file($slide->s_banner) }}" srcset="{{ pare_url_file($slide->s_banner) }}">
                    <img class=" lazyloaded" data-src="{{ pare_url_file($slide->s_banner) }}" alt="{{ $slide->s_banner }}" src="{{ pare_url_file($slide->s_banner) }}">
                  </picture>

                  <div class="c-page-header__content">
                    <h1 class="c-page-header__headline">Tin tức cùng Unispice</h1>
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
                        <a class="a-anchor" aria-current="page">{{ $current_cate->name }}</a>
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
            <div class="layout layout--frontierbase_cmscontentcomponent layout--frontierbase_cmscontentcomponent--25-75">
              <div class="t-cms__with-nav">
                <div class="layout__region layout__region--first">
                  <div class="m-sidebar-nav">
                    <div class="m-accordion js-sidebar-nav-accordion js-accordion--mobile-only">
                      <div class="m-accordion__title js-accordion-trigger" id="accordion-trigger-0" aria-expanded="false" aria-controls="accordion-content-0">
                        <span class="m-accordion__title-label">Menu</span>
                      </div>
                      <div class="m-accordion__content js-accordion-content" id="accordion-content-0" aria-labelledby="accordion-trigger-0">
                        <div class="m-sidebar-nav__links m-accordion__content-inner js-accordion-content-inner">
                          @forelse ($post_category as $key => $item)
                          <div>
                            <span>
                              <a class="m-sidebar-nav__link name-filler" href="javascript:;" data-url="{{ route('get_blog.home') }}" data-slug-cat="{{ $item->slug }}">{{ $item->name }}</a>
                            </span>
                          </div>
                          @empty

                          @endforelse

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="layout__region layout__region--second">
                  <div data-block-plugin-id="block_content:6ff1ff1c-0107-49ed-a41f-063a6fef942e" class="t-cms__links">
                    <a class="c-product-overview__link a-anchor a-anchor--social-sharing" href="http://pinterest.com/pin/create/button/?url=https://www.coopmarket.com/community/co-op-market-blogs/food&amp;media=&quot;&quot;" target="_blank">
                      <span class="icon-pinterest  a-icon-text-btn__icon" aria-hidden="true"></span>
                    </a>
                    <a class="c-product-overview__link a-anchor a-anchor--social-sharing" href="https://www.facebook.com/sharer/sharer.php?u=https://www.coopmarket.com/community/co-op-market-blogs/food" target="_blank">
                      <span class="icon-facebook  a-icon-text-btn__icon" aria-hidden="true"></span>
                    </a>
                    <a class="c-product-overview__link a-anchor a-anchor--social-sharing" href="http://twitter.com/share?text=&amp;url=https://www.coopmarket.com/community/co-op-market-blogs/food" target="_blank">
                      <span class="icon-twitter  a-icon-text-btn__icon" aria-hidden="true"></span>
                    </a>
                    <a class="c-product-overview__link a-anchor a-anchor--social-sharing" href="mailto:?subject=Lorem%20ipsum&amp;body=Lorem%20ipsum%20https%3A%2F%2Fwww.coopmarket.com%2Fcommunity%2Fco-op-market-blogs%2Ffood." target="_blank">
                      <span class="a-icon-text-btn__icon" aria-hidden="true">
                        <img src="https://www.coopmarket.com/themes/custom/frontierbase/dist/frontiercoop/images/email.svg" alt="Email icon" height="25" width="25">
                      </span>
                    </a>
                    <a href="/" class="a-anchor js-favorite">Add to Favorites</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="layout layout--onecol">
              <div class="layout__region layout__region--content">
                <div class="views-element-container" data-block-plugin-id="views_block:taxonomy_term-block_story_block">
                  <div class="views-element-container">
                    <!-- EXPOSED -->
                    <div class="t-cms__content" id="show-product">
                      @forelse ($blog_post as $key => $item)
                      
                      <div class="c-story-block {{ $key % 2 != 0 ? 'c-story-block--flipped':'' }}">
                        <div class="c-story-block__content-wrapper">
                          <div class="c-story-block__content">
                            <h2 class="c-story-block__headline">{{ $item->name }}</h2>
                            <p class="c-story-block__description">{{ $item->desscription }}</p>
                            <div class="c-story-block__cta">
                              <a class="a-btn a-btn--secondary" href="{{ getSlugPost($item->slug) }}" title="{{ $item->name }}">Read More</a>
                            </div>
                          </div>
                        </div>

                        <div class="c-story-block__image-wrapper">
                          <picture>
                            <source media="(min-width: 768px)" data-srcset="{{ pare_url_file($item->thumbnail) }}" srcset="{{ pare_url_file($item->thumbnail) }}">
                            <img class=" lazyloaded" data-src="{{ pare_url_file($item->thumbnail) }}" alt="{{ $item->name }}" src="{{ pare_url_file($item->thumbnail) }}">
                          </picture>
                        </div>
                      </div>
                      @empty
                          
                      @endforelse
                    </div>
                    <div class="t-plp__pagination">
                      <div class="m-pagination">
                        <ul class="m-pagination__list">
                          <li class="m-pagination__list-item m-pagination__list-item--active">
                            <a class="m-pagination__link" href="?page=0" title="Current page" aria-current="page">1</a>
                          </li>
                          <li class="m-pagination__list-item">
                            <a class="m-pagination__link" href="?page=1" title="Go to page 2">2</a>
                          </li>
                          <li class="m-pagination__list-item">
                            <a class="m-pagination__link" href="?page=2" title="Go to page 3">3</a>
                          </li>
                          <li class="m-pagination__list-item">
                            <a class="m-pagination__link m-pagination__link--next" aria-label="Next" href="?page=1">
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
        </article>
      </div>
    </div>
  </div>
</main>
@endsection
@section('js')

@stop
