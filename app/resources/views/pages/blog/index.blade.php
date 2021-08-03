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
                        <a class="a-anchor" aria-current="page">Bài viết</a>
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
@stop