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
                                        <h1 class="c-page-header__headline">{{ $uni_flashsale->name }}</h1>
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
                                                <a href="{{ route('get.flashsale') }}" class="a-anchor">Khuyến mại</a>
                                            </li>
                                            <li class="m-breadcrumb__item m-breadcrumb__item--active">
                                                <a class="a-anchor" aria-current="page">{{ $uni_flashsale->name }}</a>
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="layout layout--onecol">
                            <div class="layout__region layout__region--content">
                                <div class="container">
                                    <p title="products" class="page_heading">
                                        Chi tiết gói sale: {{ $uni_flashsale->name }}
                                    </p>
                                    <p title="products" class="page_heading font-weight-nomal">
                                        Mô tả: {!! $uni_flashsale->content !!}
                                    </p>
                                    <div class="row group-sale mt-5 mb-5 p-5">
                                        <h3 class="title-product-sale">Sản phẩm trong gói sale</h3>

                                        @forelse (json_decode($uni_flashsale->info_sale) as $key => $item)
                                        <div class="col-md-4 col-lg-4 col-sm-6 col-12 card-item">
                                            <div class="card">
                                                <span id="star6"><span class="number-prd">{{ $key+1 }}</span></span>
                                                <a href="{{ getSlugProduct(getSlugProductById($item->id)) }}" title="{{ getNameProduct($item->id) }}">
                                                    <img class="card-img-top" src="{{ pare_url_file(getThumbProduct($item->id)) }}" alt="{{ getNameProduct($item->id) }}">
                                                </a>
                                                <div class="card-body">
                                                    <h5 class="card-title-cd text-dark"><a class="card-title-cd name-total-sale" href="{{ getSlugProduct(getSlugProductById($item->id)) }}">{{ getNameProduct($item->id) }}</a></h5>
                                                    <p class="text-primary">Số lượng sản phẩm : {{ $item->qty_sale }}</p>
                                                    <?php if (checkUid(get_data_user('web')) != null) { ?>
                                                        <p class="text-primary">{{ 'Giá bán: '.formatVnd(getPriceById($item->id) * $item->qty_sale) }} <span class="font_chu_mau_do">(Tiết kiệm: -{{ 100-round($item->price_sale*100/getPriceById($item->id)) }}% )</span></p>
                                                        <p class="text-primary font-weight-bold price-total-sale">{{ 'Chỉ còn: '.formatVnd($item->price_subtotal) }}</p>
                                                        <?php } elseif (checkUid(get_data_user('web')) == null) { ?>
                                                        <?php if ($uni_flashsale->is_flash == 0) { ?>
                                                            <p class="text-primary">{{ 'Giá bán: '.formatVnd(getPriceById($item->id) * $item->qty_sale) }} <span class="font_chu_mau_do">(Tiết kiệm: -{{ 100-round($item->price_sale*100/getPriceById($item->id)) }}% )</span></p>
                                                            <p class="text-primary price-total-sale">{{ 'Chỉ còn: '.formatVnd($item->price_subtotal) }}</p>
                                                        <?php } else { ?>
                                                            <p class="text-primary"></p>
                                                        <?php } ?>
                                                    <?php } ?>

                                                </div>
                                            </div>
                                        </div>
                                        @empty

                                        @endforelse
                                        <?php if (checkUid(get_data_user('web')) != null) { ?>
                                            <button class=" w-25 text-center mx-auto btn-add-cart-sale a-btn a-btn--primary m-product-card__add-to-cart-btn {{ get_data_user('web') != null ? 'js-add-cart':'' }}" data-target="{{ get_data_user('web') == null ? '.login-js' :'' }}" data-toggle="{{ get_data_user('web') == null ? 'modal' :'' }}" data-url="{{ route('get_user.cart.add',['id' => $uni_flashsale->id,'type' => 'combo']) }}" data-uid="{{ get_data_user('web') }}" data-id="{{ $uni_flashsale->id }}" type="button" type="button">Mua ngay</button>
                                        <?php } else {  ?>
                                            @if ($uni_flashsale->is_flash == 0 && get_data_user('web') != null)
                                            <button class=" w-25 text-center mx-auto btn-add-cart-sale" class="a-btn a-btn--primary m-product-card__add-to-cart-btn" type="button">Liên hệ</button>
                                            @else
                                            <button class=" w-25 text-center mx-auto btn-add-cart-sale redect-b2b" data-url = "{{ route('get.register.b2b') }}"  class="a-btn a-btn--primary m-product-card__add-to-cart-btn {{ get_data_user('web') != null ? 'js-add-cart':'' }}" data-url="{{ route('get_user.cart.add',['id' => $uni_flashsale->id,'type' => 'combo']) }}" data-uid="{{ get_data_user('web') }}" data-id="{{ $uni_flashsale->id }}" type="button" type="button">Mua ngay</button>

                                            @endif
                                        <?php } ?>

                                    </div>
                                </div>

                                <div class="container">
                                    <h3 title="products" class="page_heading text-center font-weight-bold km-fav mt-5">
                                        Các gói Sale được yêu thích nhất
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
                                                        <?php if (checkUid(get_data_user('web')) == null && $item->is_flash == 0) { ?>
                                                        <p class="text-primary price-total-sale">Giá : {{ formatVnd($item->price) }}</p>
                                                        <?php } else { echo '<p class = "price-total-sale"></p>'; } ?>
                                                        <a class="btn-km" href="{{ getSlugFlashSale($item->slug) }}" class="btn btn-primary">Xem Chi Tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                            @empty

                                            @endforelse
                                        </div>
                                </div>
                                <div class="container">
                                    <h3 title="products" class="page_heading text-center font-weight-bold km-fav mt-5">
                                        Bài viết liên quan
                                        </h2>
                                        <div class="row mb-5">
                                            @forelse ($uni_post as $item)
                                            <div class="col-md-6 col-12">
                                                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                                    <div class="card-body d-flex flex-column align-items-start info-group-post">
                                                        <h3 class="mb-0 h3-post-sile-sale">
                                                            <a class="text-dark title-post-km" href="{{ getSlugPost($item->slug) }}">{{ desscription_cut($item->name,40) }}</a>
                                                        </h3>
                                                        <div class="mb-1 text-muted">{{ $item->created_at }}</div>
                                                        <p class="card-text mb-auto p-post-sile-sale">{{ desscription_cut($item->desscription,60) }}</p>
                                                    </div>
                                                    <img class="card-img-right flex-auto d-md-block img-post-salesigle" alt="" src="/storage/uploads/icon-grocerysss-1627723174.jpg">
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