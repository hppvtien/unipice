@extends('pages.layouts.app_master_frontend') @section('contents')
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
                          <div class="container">
                            <div class="col-md-12 row">
                              <div class="col-md-12 col-lg-6">
                                <nav aria-label="Breadcrumb"  class="mt-lg-5 mb-lg-5 pt-lg-3">
                                 
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
                              <div class="col-md-12 col-lg-6">
                                <div id="share2" class="mt-lg-5 mb-lg-5 pl-lg-5">

                                  <!-- facebook -->
                                  <a class="facebook" href="https://www.facebook.com/share.php?u=url&title=title" target="blank" rel="nofollow"><i class="fa fa-facebook"></i></a>

                                  <!-- twitter -->
                                  <a class="twitter" href="https://twitter.com/intent/tweet?status=title+url" target="blank" rel="nofollow"><i class="fa fa-twitter"></i></a>

                                  <!-- google plus -->
                                  <a class="googleplus" href="https://plus.google.com/share?url=url" target="blank" rel="nofollow"><i class="fa fa-google-plus"></i></a>

                                  <!-- linkedin -->
                                  <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=url&title=title&source=source" target="blank" rel="nofollow"><i class="fa fa-linkedin"></i></a>

                                  <!-- pinterest -->
                                  <a class="pinterest" href="https://pinterest.com/pin/create/bookmarklet/?media=media&url=url&is_video=false&description=title" target="blank" rel="nofollow"><i class="fa fa-pinterest-p"></i></a>

                              </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="layout layout--onecol">
                            <div class="container">
                                <div class="col-md-12">
                                  <p>{{ $blog_post->desscription }}</p>
                                      {!! $blog_post->content !!}
                                </div>

                                

                                <!--<div class="col-md-12">
                                          <div class="col-md-12 bootstrap snippets">
                                              <div class="panel">
                                                  <div class="panel-body">
                                                      <textarea id="noi_dung_commnet" class="form-control" rows="2" placeholder="What are you thinking?"></textarea>
                                                      <div class="mar-top clearfix">
                                                          <button onclick="add_comment_user_blog(this);" blog_id="{{ $blog_post_id }}" user_id="{{ $user_ids }}" class="btn btn-sm btn-primary pull-right" type="submit"><i class="fa fa-pencil fa-fw"></i> Share</button>
                                                          <a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" href="#"></a>
                                                          <a class="btn btn-trans btn-icon fa fa-camera add-tooltip" href="#"></a>
                                                          <a class="btn btn-trans btn-icon fa fa-file add-tooltip" href="#"></a>
                                                      </div>
              
                                                      <script>
                                                          function add_comment_user_blog(id){
                                                              var user_id = $(id).attr('user_id');
                                                              var blog_id = $(id).attr('blog_id');
                                                              var noi_dung_commnet = $('#noi_dung_commnet').val();
              
                                                              $.post( "{{ route('get_blog.add_comment_post',['slug'=>$slug]) }}", { user_id: user_id, blog_id: blog_id, noi_dung_commnet: noi_dung_commnet })
                                                                          .done(function( data ) {
                                                                              alert(data);
                                                                              location.reload();  
                                                                      });
                                                             
                                                          }
                                                      </script>
              
                                                  </div>
                                              </div>
                                              <div class="panel">
                                                  <div class="panel-body">

                                                  </div>
                                              </div>
                                          </div>
                                      </div>-->
                            </div>
                        </div>

                        <div class="layout layout--onecol">
                          <div class="c-categories-slider layout layout--onecol not-padding-top" style="background-color: #fff">

                            <div class="layout__region layout__region--heading">
                                <div class="c-categories-slider__heading-wrapper layout-builder__add-block">
                    
                    
                                    <div class="m-heading">
                                        <h3 class="m-heading__headline">
                                            Tin Tức Liên Quan
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="layout__region layout__region--content" >
                                <div class="container">
                                  <div class="row">
                                    @foreach ($blog_post1 as $item)
                                    <div class="col-lg-3">
                                      <a class="" href="san-pham-01">
                                        <div class="mt-3 mb-3">
                                            <picture>
                                                <source data-srcset="{{ pare_url_file($item->thumbnail) }}">
                                                <img class="lazyload" data-src="" width="100%">
                                            </picture>
                                            <div class="m-category-card__caption mt-2">
                                                <span style="font-size: 15px">{{ desscription_cut($item->name,30) }}</span>
                                            </div>
                                        </div>
                                    </a>
                                    </div>
                                    @endforeach
                                  </div>
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