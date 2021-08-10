@extends('pages.layouts.app_master_frontend') @section('contents')
<main role="main">
    <a id="main-content" tabindex="-1"></a>
    <div class="layout-content">
        <div class="region region-content">
            <div data-drupal-messages-fallback class="hidden"></div>
            <div id="block-frontiercoop-market-content">
                <article>
                    <div>
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
                                                <a class="a-anchor" href="/{{ getSlugCategory($cat_data->slug) }}">{{ $cat_data->name }}</a>
                                            </li>
                                            <li class="m-breadcrumb__item">
                                                <a class="a-anchor" href="{{ getSlugProduct($product->slug) }}"> {{ $product->name }} </a>
                                            </li>
                                        </ol>
                                    </nav>

                                </div>
                            </div>
                        </div>
                        <div class="layout layout--onecol">
                            <div class="layout__region layout__region--content">
                                <div>
                                    <div class="c-product-overview">
                                        <div class="c-product-overview__content-wrapper">
                                            <div class="m-product-gallery glide">
                                                <div class="m-product-gallery__track glide__track" data-glide-el="track">
                                                    <ul class="m-product-gallery__slides glide__slides">
                                                        @forelse (json_decode($product->album) as $key => $item)
                                                        <li class="m-product-gallery__slide glide__slide">
                                                            <div class="m-product-gallery__img-wrapper">
                                                                <img class="lazyload m-product-gallery__img" data-src="{{ pare_url_file_product($item) }}" alt="{{ $product->name }}" data-zoom="{{ pare_url_file_product($item) }}">
                                                        </li>
                                                        @empty @endforelse

                                                    </ul>
                                                </div>
                                                <div class="a-carousel-indicator glide__arrows m-product-gallery__controls" data-glide-el="controls">
                                                    <button class="a-carousel-indicator__arrow a-carousel-indicator__arrow--left" type="button" aria-label="Prev" data-glide-dir="<">
                                                        <span class="icon-arrow-left"></span>
                                                    </button>

                                                    <div class="a-carousel-indicator__bullets glide__bullets" data-glide-el="controls[nav]">
                                                        <button class="a-carousel-indicator__bullet " type="button" aria-label="Go to slide 0" data-glide-dir="=0" data-slide-number="0">
                                                        </button>
                                                    </div>

                                                    <button class="a-carousel-indicator__arrow a-carousel-indicator__arrow--right" type="button" aria-label="Next" data-glide-dir=">">
                                                        <span class="icon-arrow-right"></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="c-product-overview__info">
                                                <div class="c-product-overview__content">
                                                    <div class="m-product-overview">
                                                        <div class="m-product-overview__name-wrapper">

                                                            <div class="m-combined-product-name">
                                                                <h1 class="m-combined-product-name__h1">
                                                                    <span class="a-product-name">
                                                                        {{ $product->name }}
                                                                    </span>
                                                                </h1>
                                                            </div>
                                                            <!-- FC-2249:: Remove markup that should only be available to authenticated users -->
                                                        </div>
                                                        <div class="m-product-card__sku">
                                                            <span> SKU: {{ $product->id }}</span>
                                                            <span> <img src="{{ asset('img/brand/star_5.png') }}" alt=""> ({{ countReview($product->id) }} đánh giá)</span>
                                                        </div>
                                                        <div role="article" class="m-product-overview__price-wrapper d-block">
                                                            <div class="m-price-lockup">

                                                                <span class="m-price-lockup__price">
                                                                    <span class="a-product-name a-title-des">
                                                                        Mô tả về sản phẩm: </br>
                                                                    </span>
                                                                    <span class="a-folio">
                                                                        {{ $product->desscription }}
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <!-- /TODO :: ADD RATING -->
                                                        <div role="article" class="m-product-overview__price-wrapper d-block">
                                                            <div class="m-price-lockup d-block">
                                                                <span class="m-price-lockup__price d-block">
                                                                    <?php if (checkUid(get_data_user('web')) != null) { ?>
                                                                        <span class="g-price">
                                                                            {{ formatVnd($product->view_price) }}
                                                                        </span>
                                                                        <span class="text-danger paid-save">
                                                                        (Tiết kiệm: {{ 100-round($product->view_price_sale_store*100/$product->view_price) }}% )
                                                                        </span>
                                                                        <br>
                                                                        <span class="a-price price-single">
                                                                            Giá: {{ $product->view_price_sale_store == null ? 'liên hệ': formatVnd($product->view_price_sale_store) }}
                                                                        </span>
                                                                        <?php if ($product->qty) { ?>
                                                                            <span class="a-price text-success sigle float-right"><i class="fa fa-check" aria-hidden="true"></i>Còn hàng</span>
                                                                        <?php } else { ?>
                                                                            <span class="text-dark float-right"><i class="fa fa-warning" aria-hidden="true"></i>Hết hàng!</span>
                                                                        <?php } ?>
                                                                        <div role="article" class="m-product-overview__price-wrapper">
                                                                            <div class="m-price-lockup">
                                                                                <span class="m-price-lockup__price">
                                                                                    <span class="a-qty">
                                                                                        SL/ Thùng: {{ $product->qty_in_box == null ? 'Đang cập nhật' : $product->qty_in_box.' hộp' }}
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div role="article" class="m-product-overview__price-wrapper">
                                                                            <div class="m-price-lockup">
                                                                                <span class="m-price-lockup__price">
                                                                                    <span class="a-qty">
                                                                                        Số lượng mua tối thiểu: {{ $product->min_box == null ? 'Đang cập nhật' : $product->min_box.' hộp' }}
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div role="article" class="m-product-overview__price-wrapper">
                                                                            <div class="m-price-lockup">
                                                                                <span class="m-price-lockup__price">
                                                                                    <span class="a-qty">
                                                                                        Giá: {{ $product->view_price_sale_store == null ? 'Đang cập nhật' : formatVnd($product->qty_in_box * $product->view_price_sale_store) }}/thùng
                                                                                    </span>
                                                                                </span>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <span class="m-product-overview__price-wrapper d-block">
                                                                            <span class="a-folio trade-name">
                                                                                {{ $trade_name }}
                                                                            </span>
                                                                        </span>
                                                                    <?php } else { ?>
                                                                        
                                                                        <span class="g-price">
                                                                            {{ formatVnd($product->view_price) }}
                                                                        </span>
                                                                        <span class="text-danger paid-save">
                                                                            (Tiết kiệm: {{ 100-round($product->view_price_sale*100/$product->view_price) }}% )
                                                                        </span>
                                                                        <br>
                                                                        <span class="a-price price-single">
                                                                            Giá: {{ formatVnd($product->view_price_sale) }}
                                                                        </span>
                                                                        <?php if ($product->qty) { ?>
                                                                            <span class="a-price text-success sigle"><i class="fa fa-check" aria-hidden="true"></i>Còn hàng</span>
                                                                        <?php } else { ?>
                                                                            <span class="text-dark float-right"><i class="fa fa-warning" aria-hidden="true"></i>Hết hàng!</span>
                                                                        <?php } ?>
                                                                        <br>
                                                                        <span class="m-product-overview__price-wrapper d-block">
                                                                            <span class="a-folio trade-name">
                                                                                {{ $trade_name }}
                                                                            </span>
                                                                        </span>
                                                                        <span class="row">
                                                                            <div class="buttons_added col-12 text-center">
                                                                                <input class="minus is-form" type="button" value="-">
                                                                                <input aria-label="quantity" class="input-qty update-qty" id="js-qty{{ $product->id }}" max="10" min="1" name="qty-user" type="number" value="1">
                                                                                <input class="plus is-form" type="button" value="+">
                                                                            </div>
                                                                        </span>
                                                                    <?php } ?>
                                                                </span>
                                                                <!--</span>-->
                                                            </div>
                                                        </div>

                                                        <form class="m-product-overview__add-to-cart">
                                                        </form>
                                                    </div>
                                                    <div id="row" style="margin-bottom: 30px;">
                                                        <div class="m-product-card__content-wrapper row">
                                                            <?php if($product->qty != null){ ?>
                                                                <?php if (checkUid(get_data_user('web')) != null) { ?>
                                                                    <div class="m-product-card__add-to-cart col-md-6 col-lg-6 col-12" style="opacity: 1;display:block;position: unset;pointer-events: auto;">
                                                                        <button style="padding: 16px 10px;display:block;width:100%;margin-bottom:10px" class="a-btn a-btn--primary m-product-card__add-to-cart-btn js-add-cart" data-min-box="{{ $product->min_box }}" data-qtyinbox="{{ $product->qty_in_box }}" data-url="{{ route('get_user.cart.add',['id' => $product->id,'type' => 'single']) }}" data-uid="{{ get_data_user('web') }}" type="button">Thêm giỏ hàng</button>
                                                                    </div>
                                                                <?php } else { ?>
                                                                    <div class="m-product-card__add-to-cart col-md-6 col-lg-6 col-12" style="opacity: 1;display:block;position: unset;pointer-events: auto;">
                                                                        <button style="padding: 16px 10px;display:block;width:100%;margin-bottom:10px" data-target="{{ get_data_user('web') ==null ? '.login-js' :'' }}" data-toggle="{{ get_data_user('web') == null ? 'modal' :'' }}" class="a-btn a-btn--primary m-product-card__add-to-cart-btn {{ get_data_user('web') != null ? 'js-add-cart':'' }}" data-url="{{ route('get_user.cart.add',['id' => $product->id,'type' => 'single']) }}" data-uid="{{ get_data_user('web') }}" data-id="{{ $product->id }}" type="button">
                                                                            Thêm giỏ hàng
                                                                        </button>
                                                                    </div>
                                                                <?php } ?>
                                                            <?php } else { ?>
                                                                <div class="m-product-card__add-to-cart col-md-6 col-lg-6 col-12" style="opacity: 1;display:block;position: unset;pointer-events: auto;">
                                                                    <a href="{{ route('get.uni_contact') }}" class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn contact-btn" type="button">Liên hệ</a>
                                                                </div>
                                                                <?php } ?>
                                                            
                                                            <div class="m-product-card__add-to-cart col-md-6 col-lg-6 col-12" style="opacity: 1;display:block;position: unset;pointer-events: auto;">
                                                                <button style="display:block;width:100%;margin-bottom:10px" class="a-btn a-btn--primary m-product-card__add-to-cart-btn " data-target="{{ get_data_user('web') ==null ? '.login-js' :'' }}" data-toggle="{{ get_data_user('web') == null ? 'modal' :'' }}" data-uid="{{ get_data_user('web') != null ? get_data_user('web') : 0 }}" {{ get_data_user('web') !=null ? get_data_user('web') : 0 }} onclick="{{ get_data_user('web') !=null ? 'check_my_favorites_add(this)' : 'unset' }};" data-url="{{ route('get_user.cart.add',['id' => $product->id,'type' => 'single']) }}" data-uid="{{ get_data_user('web') }}" data-id="{{ $product->id }}" type="button">Yêu thích</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Review :: this should be removed -->
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
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="layout layout--onecol">
                            <div class="col-md-12 container">
                                <div class="row">
                                    <div class="col-md-4 col-lg-4 col-12">
                                        <button id="defaultOpen" class="tablink " onclick="openPage('Home', this, '#e88012')">Chi Tiết</button>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-12">
                                        <button class="tablink" onclick="openPage('News', this, '#e88012')">Đánh Giá</button>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-12">
                                        <button class="tablink" onclick="openPage('question', this, '#e88012')">Đặt câu hỏi</button>
                                    </div>
                                </div>
                                <div id="Home" class="tabcontent">
                                    {!! $product->content !!}
                                </div>

                                <div id="News" class="tabcontent">
                                    <div class="">
                                        <div class="row" id="review-box">
                                            <textarea id="noi_dung_commnet" class="form-control col-12" rows="2" placeholder="Hãy để lại bình luận của bạn...!"></textarea>
                                            <div class="mar-top clearfix col-md-4 col-lg-4 col col-12 btn-submitrv">
                                                <button token="{{ csrf_token() }}" data-type="review" onclick="add_comment_user(this);" product_id="{{ $product->id }}" user_id="@php echo $user_id; @endphp" class="btn btn-sm btn-primary pull-right" type="submit"><i class="fa fa-pencil fa-fw"></i> Bình Luận</button>
                                            </div>
                                        </div>
                                        <div>

                                            <div>
                                                <!-- Newsfeed Content -->
                                                <!--===================================================-->
                                                @foreach ($noi_dung_comment as $item)
                                                <div class="media-block">
                                                    <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
                                                    <div class="media-body">
                                                        <div class="mar-btm">
                                                            <a href="#" class="btn-link text-semibold media-heading box-inline">{{ $item->name }}</a>

                                                        </div>
                                                        <p class="margin-left1">{{ $item->noi_dung_comment }}</p>

                                                        <hr>
                                                    </div>
                                                </div>
                                                @endforeach


                                                <!--===================================================-->
                                                <!-- End Newsfeed Content -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="question" class="tabcontent">
                                    <div class="">
                                        <div>
                                            <div class="field email required">
                                                <div class="m-text-input m-text-input--placeholder-label control group-cmt">
                                                    <input name="title" id="title" type="email" class="m-text-input__input input-text label-comt" title="Tiêu đề">
                                                    <label class="m-text-input__label label-lb" for="title"><span>Tiêu đề</span></label>
                                                </div>
                                            </div>

                                            <textarea id="noi_dung_question" class="form-control" rows="2" placeholder="Hãy để lại câu hỏi của bạn...!"></textarea>
                                            <div class="row">
                                                <div class="col-md-6 col-lg-4 col-12 group-name">
                                                    <div class="field email required">
                                                        <div class="m-text-input m-text-input--placeholder-label control group-cmt">
                                                            <input name="name" id="name" type="email" class="m-text-input__input input-text label-comt" title="Name">
                                                            <label class="m-text-input__label label-lb" for="name"><span>Họ tên</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-12 group-name">
                                                    <div class="field email required">
                                                        <div class="m-text-input m-text-input--placeholder-label control group-cmt">
                                                            <input name="phone" id="phone" type="email" class="m-text-input__input input-text label-comt" title="Phone">
                                                            <label class="m-text-input__label label-lb" for="Phone"><span>Số điện thoại</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-12 group-name">
                                                    <div class="field email required">
                                                        <div class="m-text-input m-text-input--placeholder-label control group-cmt">
                                                            <input name="email" id="email" type="email" class="m-text-input__input input-text label-comt" title="Email">
                                                            <label class="m-text-input__label label-lb" for="email"><span>Email</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-12 group-name">
                                                    <div class="field email required">
                                                        <div class="m-text-input m-text-input--placeholder-label control group-cmt">
                                                            <button token="{{ csrf_token() }}" data-type="question" onclick="add_comment_user(this);" product_id="{{ $product->id }}" user_id="@php echo $user_id; @endphp" class="btn btn-sm btn-primary pull-right" type="submit"><i class="fa fa-pencil fa-fw"></i> Gửi câu hỏi</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <!-- Newsfeed Content -->
                                                <!--===================================================-->
                                                @foreach ($noi_dung_question as $item)
                                                <div class="media-block">
                                                    <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
                                                    <div class="media-body">
                                                        <div class="mar-btm">
                                                            <a href="javascript:;" class="btn-link text-semibold media-heading box-inline">{{ $item->name }}</a>
                                                        </div>
                                                        <p class="margin-left1">{{ $item->noi_dung_question }}</p>
                                                        <div class="answer-gr">
                                                            <div class="mar-btm">
                                                                <a href="javascript:;" class="btn-link text-semibold media-heading box-inline">Unimall</a>
                                                            </div>
                                                            <p class="margin-left1">{{ $item->noi_dung_answer }}</p>
                                                        </div>

                                                        <hr>
                                                    </div>
                                                </div>
                                                @endforeach
                                                <!--===================================================-->
                                                <!-- End Newsfeed Content -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="non-visible layout layout--onecol">
                        <div class="c-categories-slider layout layout--onecol">

                            <div class="layout__region layout__region--heading">
                                <div class="c-categories-slider__heading-wrapper layout-builder__add-block">


                                    <div class="m-heading">
                                        <h2 class="m-heading__headline">
                                            Sản phẩm Yêu Thích
                                        </h2>
                                    </div>


                                </div>
                            </div>
                            <div class="layout__region layout__region--content">
                                <div class="c-categories-slider__container js-swiper-container">
                                    <ul class="c-categories-slider__slider js-swiper-wrapper">
                                        @forelse ($product_fav as $key => $item)
                                        <li class="c-categories-slider__item js-swiper-slide">
                                            <a class="m-category-card m-category-card--bordered" href="{{ $item->slug }}">
                                                <div class="m-category-card__image-wrapper">
                                                    <picture>
                                                        <source media="(min-width: 768px)" data-srcset="{{ pare_url_file($item->thumbnail) }}">
                                                        <img class="lazyload" data-src="{{ pare_url_file($item->thumbnail) }}" alt="{{ pare_url_file($item->thumbnail) }}">
                                                    </picture>
                                                    <div class="m-category-card__caption">
                                                        <span class="m-category-card__caption-text">{{ $item->name }}</span>
                                                    </div>
                                                    <div class="m-category-card__caption">
                                                        <p>{{ desscription_cut($item->desscription,60) }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        @empty @endforelse
                                    </ul>
                                    <div class="a-carousel-indicator a-carousel-indicator--no-bullets a-carousel-indicator--arrows c-categories-slider__arrows">
                                        <button class="a-carousel-indicator__arrow a-carousel-indicator__arrow--left js-swiper-button-prev" type="button" aria-label="Prev">
                                            <span class="icon-arrow-left"></span>
                                        </button>
                                        <button class="a-carousel-indicator__arrow a-carousel-indicator__arrow--right js-swiper-button-next" type="button" aria-label="Next">
                                            <span class="icon-arrow-right"></span>
                                        </button>
                                    </div>
                                    <div class="c-products-slider__scrollbar">
                                        <div class="a-slider-scrollbar">
                                            <div class="a-slider-scrollbar__inner js-swiper-scrollbar">

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="layout layout--onecol">
                        <div class="layout__region layout__region--content">
                            <div data-block-plugin-id="inline_block:media_block" data-inline-block-uuid="ee168006-3fe9-4f1c-bbc5-ba42ddc90f9a" class="c-media-block c-media-block--template-">
                                <div class="c-media-block__image-wrapper">
                                    <picture>
                                        <source media="(min-width: 768px)" data-srcset="{{ pare_url_file($slides_home_four1->s_banner) }}" srcset="{{ pare_url_file($slides_home_four1->s_banner) }}">
                                        <img class=" lazyloaded" data-src="{{ pare_url_file($slides_home_four1->s_banner) }}" alt=" " src="{{ pare_url_file($slides_home_four1->s_banner) }}">
                                    </picture>
                                </div>

                                <div class="c-media-block__content">
                                    <div class="c-media-block__headline">Baking soda baths are a great way to detox. Check out the benefits of baking soda baths and how to do one at home!</div>


                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="non-visible layout layout--onecol">
                        <div class="c-categories-slider layout layout--onecol">

                            <div class="layout__region layout__region--heading">
                                <div class="c-categories-slider__heading-wrapper layout-builder__add-block">


                                    <div class="m-heading">
                                        <h2 class="m-heading__headline">
                                            Sản phẩm liên quan
                                        </h2>
                                    </div>


                                </div>
                            </div>
                            <div class="layout__region layout__region--content">
                                <div class="c-categories-slider__container js-swiper-container">
                                    <ul class="c-categories-slider__slider js-swiper-wrapper">
                                        @forelse ($product_related as $key => $item)
                                        <li class="c-categories-slider__item js-swiper-slide">
                                            <a class="m-category-card m-category-card--bordered" href="{{ $item->slug }}">
                                                <div class="m-category-card__image-wrapper">
                                                    <picture>
                                                        <source media="(min-width: 768px)" data-srcset="{{ pare_url_file($item->thumbnail) }}">
                                                        <img class="lazyload" data-src="{{ pare_url_file($item->thumbnail) }}" alt="{{ pare_url_file($item->thumbnail) }}">
                                                    </picture>
                                                    <div class="m-category-card__caption">
                                                        <span class="m-category-card__caption-text">{{ $item->name }}</span>
                                                    </div>
                                                    <div class="m-category-card__caption">
                                                        <p>{{ desscription_cut($item->desscription,60) }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        @empty @endforelse

                                    </ul>
                                    <div class="a-carousel-indicator a-carousel-indicator--no-bullets a-carousel-indicator--arrows c-categories-slider__arrows">
                                        <button class="a-carousel-indicator__arrow a-carousel-indicator__arrow--left js-swiper-button-prev" type="button" aria-label="Prev">
                                            <span class="icon-arrow-left"></span>
                                        </button>
                                        <button class="a-carousel-indicator__arrow a-carousel-indicator__arrow--right js-swiper-button-next" type="button" aria-label="Next">
                                            <span class="icon-arrow-right"></span>
                                        </button>
                                    </div>
                                    <div class="c-products-slider__scrollbar">
                                        <div class="a-slider-scrollbar">
                                            <div class="a-slider-scrollbar__inner js-swiper-scrollbar">

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
                    <div class="views-element-container" data-block-plugin-id="views_block:product_detail_page_shop_the_recipe_carousel-block_shop_the_recipe_card">
                        <div class="views-element-container">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </article>
    </div>
    </div>
    </div>

    <script>
        function openPage(pageName, elmnt, color) {
            // Hide all elements with class="tabcontent" by default */
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {

                tabcontent[i].style.display = "none";
            }

            // Remove the background color of all tablinks/buttons
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";


            }

            // Show the specific tab content
            document.getElementById(pageName).style.display = "block";

            // Add the specific color to the button used to open the tab content
            elmnt.style.backgroundColor = color;


        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();

        function add_comment_user(id) {
            var user_id = $(id).attr('user_id');
            var type_question = $(id).attr('data-type');
            var product_id = $(id).attr('product_id');
            var token = $(id).attr('token');
            var noi_dung_commnet = $('#noi_dung_commnet').val();
            var noi_dung_question = $('#noi_dung_question').val();
            var title_question = $('#title').val();
            var name_question = $('#name').val();
            var phone_question = $('#phone').val();
            var email_question = $('#email').val();

            $.post("{{ route('get.product_comment',['slug'=>$slug]) }}", {
                    token: token,
                    user_id: user_id,
                    product_id: product_id,
                    noi_dung_commnet: noi_dung_commnet,
                    noi_dung_question: noi_dung_question,
                    type_question: type_question,
                    name_question: name_question,
                    phone_question: phone_question,
                    title_question: title_question,
                    email_question: email_question
                })
                .done(function(data) {
                    // console.log(data);
                    location.reload();
                });
        }
    </script>

</main>
@stop