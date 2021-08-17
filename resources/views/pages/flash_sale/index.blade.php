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
                                        <source media="(min-width: 1024px)" data-srcset="/storage/uploads/blogs-1440x380-1626419645.jpg" srcset="/storage/uploads/blogs-1440x380-1626419645.jpg">
                                        <img class=" lazyloaded" data-src="/storage/uploads/blogs-1440x380-1626419645.jpg" alt="blogs-1440x380-1626419645.jpg" src="/storage/uploads/blogs-1440x380-1626419645.jpg">
                                    </picture>

                                    <div class="c-page-header__content">
                                        <h1 class="c-page-header__headline">Danh sách các gói khuyến mãi của chúng tôi</h1>
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
                                                <a class="a-anchor" aria-current="page">Khuyến mại</a>
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="layout layout--onecol">
                            <div class="layout__region layout__region--content">
                                <div class="container">
                                    <h2 title="products" class="page_heading text-center font-weight-bold">
                                        Sản phẩm đang được khuyến mại
                                    </h2>
                                    <div class="row">
                                        @forelse ($uni_flashsale as $item)
                                        <div class="col-md-4 col-lg-3 col-sm-6 col-12 card-item">
                                            <div class="card">
                                                <a href="{{ getSlugFlashSale($item->slug) }}" title="{{ $item->meta_title }}">
                                                    <img class="card-img-top" src="{{ pare_url_file($item->thumbnail) }}" alt="{{ $item->meta_title }}">
                                                </a>
                                                <div class="card-body">
                                                    <h5 class="card-title-cd text-dark"><a class="card-title-cd" href="">{{ desscription_cut($item->name,36) }}</a></h5>
                                                    <p class="card-text">{{ desscription_cut($item->desscription,50) }}</p>
                                                    <p class="text-primary">Giá : {{ formatVnd($item->price) }}</p>                                 
                                                <a class="btn-km" href="{{ getSlugFlashSale($item->slug) }}" class="btn btn-primary">Xem Chi Tiết</a>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                            
                                        @endforelse
                                    </div>
                                </div>
                                <div class="banner-flash">
                                    <div class="c-page-header c-page-header--centered c-page-header--light">
                                        <picture class="c-page-header__image">
                                            <source media="(min-width: 1024px)" data-srcset="https://www.coopmarket.com/sites/default/files/styles/1440x380/public/acquiadam/2020-12/membership-hero-desktop.png?itok=aZRBseW2" srcset="https://www.coopmarket.com/sites/default/files/styles/1440x380/public/acquiadam/2020-12/membership-hero-desktop.png?itok=aZRBseW2">
                                            <img class=" lazyloaded" data-src="https://www.coopmarket.com/sites/default/files/styles/375x200/public/acquiadam/2020-12/membership-hero-mobile.png?itok=cl8ei1Nc" alt="" src="https://www.coopmarket.com/sites/default/files/styles/375x200/public/acquiadam/2020-12/membership-hero-mobile.png?itok=cl8ei1Nc">
                                        </picture>

                                        <div class="c-page-header__content">
                                            <h1 class="c-page-header__headline">Become an Associate Member</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <h3 title="products" class="page_heading text-center font-weight-bold km-fav">
                                        Sản phẩm được yêu thích nhất
                                        </h2>
                                        <div class="row">
                                            @forelse ($uni_product as $item)
                                            <div class="col-md-4 col-lg-3 col-sm-6 col-12 card-item">
                                                <div class="card">
                                                    <a href="">
                                                        <img class="card-img-top" src="{{ pare_url_file($item->thumbnail) }}" alt="Card image cap">
                                                    </a>
                                                    
                                                    <div class="card-body">
                                                        <h5 class="card-title-cd text-dark"><a class="card-title-cd" href="">{{ desscription_cut($item->name,36) }}</a></h5>
                                                        <p class="card-text">{{ desscription_cut($item->desscription,50) }}</p>
                                                        <p class="text-primary">Giá : {{ formatVnd($item->price) }}</p>
                                                        <a class="btn-km" href="{{ getSlugProduct($item->slug) }}" class="btn btn-primary">Xem Chi Tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                            @empty
                                                
                                            @endforelse
                                        </div>
                                </div>
                                <div class="container">
                                    <h3 title="products" class="page_heading text-center font-weight-bold km-fav">
                                        Bài viết liên quan
                                        </h2>
                                        <div class="row mb-2">
                                            @forelse ($uni_post as $item)
                                            <div class="col-md-6 col-12">
                                                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                                    <div class="card-body d-flex flex-column align-items-start">
                                                        <h3 class="mb-0">
                                                            <a class="text-dark title-post-km" href="{{ getSlugPost($item->slug) }}">{{ desscription_cut($item->name,40) }}</a>
                                                        </h3>
                                                        <div class="mb-1 text-muted">{{ $item->created_at }}</div>
                                                        <p class="card-text mb-auto">{{ desscription_cut($item->desscription,70) }}</p>
                                                        <a href="{{ getSlugPost($item->slug) }}">Xem chi tiết</a>
                                                    </div>
                                                    <img class="card-img-right flex-auto d-none d-md-block" alt="" src="/storage/uploads/icon-grocerysss-1627723174.jpg">
                                                </div>
                                            </div>
                                            @empty
                                                
                                            @endforelse
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