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
                    <source media="(min-width: 1024px)" data-srcset="{{ pare_url_file($slide->s_banner) }}" srcset="{{ pare_url_file($slide->s_banner) }}">
                    <img class=" lazyloaded" data-src="{{ pare_url_file($slide->s_banner) }}" alt="{{ $slide->s_banner }}" src="{{ pare_url_file($slide->s_banner) }}">
                  </picture>
                  <div class="c-page-header__content">
                    <h1 class="c-page-header__headline">{{ $blog_post->name }}</h1>
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
                      <li class="m-breadcrumb__item">
                        <a class="a-anchor" href="{{ getSlugPostCate($current_cate->slug) }}">{{ $current_cate->name }}</a>
                      </li>
                      <li class="m-breadcrumb__item m-breadcrumb__item--active">
                        <a class="a-anchor" aria-current="page">{{ desscription_cut($blog_post->name,30) }}</a>
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
                              <a class="m-sidebar-nav__link name-filler" href="{{ getSlugPostCate($item->slug) }}" data-url="{{ route('get_blog.home') }}" data-slug-cat="{{ $item->slug }}">{{ $item->name }}</a>
                            </span>
                          </div>
                          @empty

                          @endforelse

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                    
                    <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-visually_hidden">
                      <div class="field__label visually-hidden">Body</div>
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
                      <div class="field__item">
                        
                        <p>{{ $blog_post->desscription }}</p>
                        {!! $blog_post->content !!}
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