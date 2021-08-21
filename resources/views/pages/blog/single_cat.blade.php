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
                    <img class=" lazyloaded" data-src="{{ pare_url_file($slide->s_banner) }}" alt="{{ $slide->s_name }}" src="{{ pare_url_file($slide->s_banner) }}">
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
            <div class="layout layout--onecol">
              <div class="container row">
                  <!-- EXPOSED -->
                  <div class="col-md-2 d-none d-lg-block">
                    @foreach ($post_category as $item)
                    <div class="mt-3 mb-3">
                      <a href="{{ route('get_blog.single_cat', ['slug' => $item->slug]) }}" style="color: #000"> <i class="fa fa-fan"></i>{{ $item->name }}</a>
                    </div>
                    @endforeach
                    
                  </div>
                  <div class="col-md-10" id="show-product" style="background-color: #fff">
                    @forelse ($blog_post as $key => $item)
                    
                    <div class="c-story-block {{ $key % 2 != 0 ? 'c-story-block--flipped':'' }}">
                      <div class="col-md-6">
                        <div class="c-story-block__content">
                          <h2 class="c-story-block__headline">{{ $item->name }}</h2>
                          <p class="c-story-block__description">{{ $item->desscription }}</p>
                          <div class="c-story-block__cta">
                            <a class="a-btn a-btn--secondary" href="{{ getSlugPost($item->slug) }}" title="{{ $item->name }}">Read More</a>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6" style="background-image: url({{ pare_url_file($item->thumbnail) }});height: 500px;background-position: center;background-repeat: no-repeat;background-size: cover;">
                        
                      </div>
                    </div>
                    @empty
                        
                    @endforelse
                  </div>
                  <div class="col-md-2 d-lg-none d-md-block">
                    @foreach ($post_category as $item)
                    <div class="mt-3 mb-3">
                      <a href="{{ route('get_blog.single_cat', ['slug' => $item->slug]) }}" style="color: #000"> <i class="fa fa-fan"></i>{{ $item->name }}</a>
                    </div>
                    @endforeach
                    
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
