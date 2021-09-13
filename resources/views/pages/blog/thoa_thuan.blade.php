@extends('pages.layouts.app_master_frontend')
@section('contents')
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
                    <source media="(min-width: 1024px)" data-srcset="{{ pare_url_file($cat_ids->thumbnail) }}" srcset="{{ pare_url_file($cat_ids->thumbnail) }}">
                    <img class=" lazyloaded" data-src="{{ pare_url_file($cat_ids->thumbnail) }}" alt="{{ $cat_ids->thumbnail }}" src="{{ pare_url_file($cat_ids->thumbnail) }}">
                  </picture>

                  <div class="c-page-header__content">
                    <h1 class="c-page-header__headline">{{ $cat_ids->name}}</h1>
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
                        <a class="a-anchor" aria-current="page">{{ $cat_ids->name }}</a>
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
                    <div class="t-cms__content" id="show-product">
                      @forelse ($blog_posts as $key => $item)
                      
                      <div class="c-story-block {{ $key % 2 != 0 ? 'c-story-block--flipped':'' }}">
                        <div class="c-story-block__content-wrapper">
                          <div class="c-story-block__content">
                            <h2 class="c-story-block__headline">{{ $item->name }}</h2>
                            <p class="c-story-block__description">{{ $item->desscription }}</p>
                            <div class="c-story-block__cta">
                              <a class="a-btn a-btn--secondary" href="{{ getSlugPolice($item->slug) }}" title="{{ $item->name }}">Xem thêm</a>
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
