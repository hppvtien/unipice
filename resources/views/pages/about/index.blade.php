@section('js_about')
    <link href="{{ asset('css/unimall1.css') }}" rel="stylesheet">
    <script src="{{ asset('css/css_js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/css/revolution/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('/css/revolution/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('/css/revolution/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('/css/revolution/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('/css/revolution/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('/css/revolution/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('/css/revolution/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('/css/revolution/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('/css/revolution/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('/css/revolution/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('/css/revolution/revolution.extension.video.min.js') }}"></script>
    <script>
        jQuery("#rev_slider_2_1").show().revolution({
            sliderType: "standard",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 9000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                mouseScrollReverse: "default",
                onHoverStop: "off",
                arrows: {
                    style: "uranus",
                    enable: true,
                    hide_onmobile: false,
                    hide_onleave: false,
                    tmp: '',
                    left: {
                        h_align: "right",
                        v_align: "bottom",
                        h_offset: 80,
                        v_offset: 30
                    },
                    right: {
                        h_align: "right",
                        v_align: "bottom",
                        h_offset: 20,
                        v_offset: 30
                    }
                }
            },
            responsiveLevels: [1200, 992, 768, 576],
            visibilityLevels: [1200, 992, 768, 576],
            gridwidth: [1200, 992, 768, 576],
            gridheight: [868, 768, 960, 720],
            lazyType: "all",
            shadow: 0,
            spinner: "off",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "on",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "0",
            fullScreenOffset: "",
            disableProgressBar: "off",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
        });
    </script>
@endsection
@extends('pages.layouts.app_master_frontend') @section('contents')
    <main role="main">

        <div class="rev-slider-full">
            <div id="rev_slider_14_1_wrapper" class="rev_slider_wrapper fullscreen-container bg-primary"
                data-alias="gravitydesign1" data-source="gallery" style="padding:0px;">
                <div id="rev_slider_2_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">
                    <ul>
                        <li data-index="rs-7" data-responsive="on" data-transition="fade" data-slotamount="default"
                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                            data-masterspeed="300" data-thumb="{{ asset('/images/icon_menu/anh_nen_b2b.jpg') }}"
                            data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                            data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                            data-param9="" data-param10="" data-description=""
                            data-liquideffect='{"image":"{{ asset('/images/icon_menu/anh_nen_b2b.jpg') }}","imagesize":"external","autoplay":true,"scalex":4,"scaley":4,"speedx":0.5,"speedy":-0.5,"rotationx":0,"rotationy":0,"rotation":0,"transtime":2000,"easing":"Power3.easeOut","transcross":false,"transpower":false,"transitionx":0,"transitiony":0,"transpeedx":0,"transpeedy":0,"transrotx":0,"transroty":0,"transrot":0}'>
                            <video controls autoplay loop>
                                <source src="{{ asset('/images/icon_menu/video_about.mp4') }}" type="video/mp4">
                            </video>
                            <h1 class="tp-caption font-primary" id="slide-7-layer-13-1"
                                data-x="['left','left','middle','middle']" data-hoffset="['0','30','0','0']"
                                data-y="['middle','middle','top','top']" data-voffset="['-200','-200','80','20']"
                                data-fontsize="['54','54','54','40']" data-width="auto" data-height="auto"
                                data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-responsive="on"
                                data-frames='[{"delay":1200,"split":"words","splitdelay":0.05,"speed":1000,"split_direction":"forward","frame":"0","from":"x:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","split":"words","splitdelay":0.02,"speed":300,"split_direction":"backward","frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                style="z-index: 7; white-space: nowrap; font-size: 54px; line-height: 54px; letter-spacing: 0px; color:#fff">
                                {{ $content_page_1->name }}</h1>
                            <p class="tp-caption Restaurant-Description " id="slide-7-layer-13-2"
                                data-x="['left','left','middle','middle']" data-hoffset="['0','30','0','0']"
                                data-y="['middle','middle','top','top']" data-voffset="['-100','-100','180','80']"
                                data-fontsize="['18','18','18','18']" data-fontsize="['50','50','50','50']"
                                data-lineheight="['30','30','30','30']" data-fontweight="['700','700','700','700']"
                                data-width="['480','400','480','400']" data-height="auto"
                                data-visibility="['on', 'on', 'off', 'off']" data-type="text" data-responsive_offset="on"
                                data-frames='[{"delay":1500,"split":"words","splitdelay":0.05,"speed":1000,"split_direction":"forward","frame":"0","from":"x:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","split":"words","splitdelay":0.02,"speed":300,"split_direction":"backward","frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['left','left','center','center']"
                                style="z-index: 5; min-width: 480px; max-width: 480px; white-space: normal; letter-spacing: 0px; color:#fff">
                                {{ $content_page_1->desscription }}</p>
                            <a class="tp-caption rev-btn button button-large m-0 button-white fw-bold button-circle button-light"
                                href="{{ $content_page_1->url_but }}" target="_blank" id="slide-7-layer-13"
                                data-x="['left','left','middle','middle']" data-hoffset="['0','30','0','0']"
                                data-y="['middle','middle','bottom','bottom']" data-voffset="['200','200','30','0']"
                                data-textAlign="['center','center','center','center']" data-width="200" data-height="auto"
                                data-type="button" data-actions='' data-responsive_offset="off" data-responsive="off"
                                data-fontsize="['17', '17', '15', '15']" data-lineheight="['40', '40', '30', '30']"
                                data-frames='[{"delay":3000,"speed":1600,"frame":"0","from":"x:50px;z:0;rX:0;rY:0;rZ:0;sX:1.1;sY:1.1;skX:0;skY:0;opacity:0;fbr:100;","bgcolor":"#FFF","to":"o:1;fbr:100;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","bgcolor":"#FFF","to":"opacity:0;fbr:100;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"150","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;fbr:90%;","style":"c:#fff;"}]'
                                style="z-index: 9; background-color: #0b2d25; padding: 4px 28px; color:#fff; text-align: center;"><span>{{ $content_page_1->name_but }}</span>
                                <i class="icon-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="tp-bannertimer" style="height: 6px; background: rgba(255,255,255,0.15);"></div>
                </div>
            </div>
        </div>
        <section id="about" class="about uni-dang-ky-b2b ">
            <div class="content-inner can_trai_phai">
                <div class="container-fluid" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                            <div class="about-img">
                                <img src="{{ pare_url_file($content_page_1->thumbnail) }}"
                                    alt="{{ $content_page_1->name }}">
                            </div>
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1" data-aos="zoom-in" data-aos-delay="100">
                            <div class="about-img" style="padding: 50px;">
                            <h3>{{ $content_page_2->name }}</h3>
                            <p class="fst-italic">
                                {!! $content_page_2->content !!}
                            </p>
                        </div>
                        </div>
                        
                    </div>

                </div>
            </div>
        </section>

        @php
            $i = 0;
            $m = 0;
        @endphp
        <div class="section-full bg-white pizza-full-menu">
            <div class="bg-primary pizza-items"
                style="background-image:url({{ asset('/images/icon_menu/nen-menu.png') }})">
                <div class="container">
                    <ul class="nav nav-tabs pizza-items" id="myTab" role="tablist">
                        @foreach ($menu1 as $item)
                            <li class="nav-item item">
                                <a class="item-icon-box nav-link {{ $i == 0 ? 'active' : '' }} render-slug"
                                    data-slug="{{ getSlugCategory($item->slug) }}" id="pizza-tab{{ $item->id }}"
                                    data-toggle="tab" href="#pizza{{ $item->id }}" role="tab"
                                    aria-controls="pizza{{ $item->id }}" aria-selected="true">
                                    <i class="flaticon-pizza-slice"></i>
                                    <span>{{ $item->name }}</span>
                                </a>
                            </li>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="content-inner can_trai_phai">
                <div class="container-fluid tab-content" id="myTabContent">
                    @foreach ($menu1 as $item1)
                        <div class="row tab-pane fade {{ $m == 0 ? 'show active' : '' }}" id="pizza{{ $item1->id }}"
                            role="tabpanel" aria-labelledby="pizza{{ $item1->id }}-tab">

                            @foreach (get_product_cat($item1->id) as $value)
                                @foreach (get_product_id($value) as $value1)

                                    <div class="dz-col col m-b30 pt-5 pb-5 ">
                                        <div class="item-box shop-item style2">
                                            <div class="item-img">
                                                <img src="{{ pare_url_file($value1->thumbnail) }}"
                                                    alt="{{ $value1->name }}">
                                            </div>
                                            <div class="item-info text-center">
                                                <!--<h4 class="item-title"><a id="mau_about_link" href="#"></a></h4>-->
                                                <a href="{{ getSlugProduct($value1->slug) }}"
                                                    title="{{ $value1->name }}">
                                                    <p class="price text-primary">{{ $value1->name }}</p>
                                                </a>
                                                <div class="cart-btn"><a href="{{ getSlugProduct($value1->slug) }}"
                                                        class="btn btnhover radius-xl"><i class="ti-shopping-cart"></i> Xem
                                                        chi tiết</a></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                        @php
                            $m++;
                        @endphp
                    @endforeach
                </div>
                <div class="content-inner can_trai_phai text-center">
                    <a href="{{ getSlugCategory($menu1[0]->slug) }}" class="btn btn-info text-center show-more-about">Xem
                        thêm</a>
                </div>
            </div>

        </div>
        
        <section id="about" class="about uni-dang-ky-b2b ">
            <div class="content-inner can_trai_phai">
                <div class="container-fluid" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="zoom-in" data-aos-delay="100">
                            <div class="about-img" style="padding: 50px;">
                            <h3>{{ $content_page_3->name }}</h3>
                            <p class="fst-italic">
                                {!! $content_page_3->content !!}
                            </p>
                            <a class="a-btn a-btn--primary" href="{{ $content_page_3->url_but }}">{{ $content_page_3->name_but }}</a>
                        </div>
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="zoom-in" data-aos-delay="100">
                            <div class="about-img" style="padding: 50px;">
                            <h3 >{{ $content_page_4->name }}</h3>
                            <p class="fst-italic">
                                {!! $content_page_4->content !!}
                            </p>
                            <a class="a-btn a-btn--primary" href="{{ $content_page_4->url_but }}">{{ $content_page_4->name_but }}</a>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

       {{-- blog --}}
       <div class="layout__region layout__region--content ">
        <div class="layout layout--onecol">
            <div class="layout__region layout__region--content">
                <div class="c-media-block-aligned">
                    <div class="c-media-block-aligned__content-wrapper">
                        <div class="c-media-block-aligned m-media-block-aligned">
                            <div class="m-media-block-aligned__image-wrapper">
                                <picture>
                                    <source media="(min-width: 768px)"
                                        data-srcset="{{ pare_url_file($content_page_5->thumbnail) }}">
                                    <img class="lazyload"
                                        data-src="{{ pare_url_file($content_page_5->thumbnail) }}"
                                        alt="{{ $content_page_5->name }}">
                                </picture>
                            </div>

                            <div class="m-media-block-aligned__content">
                                <div class="m-heading ">
                                    <h2 class="m-heading__headline">{{ $content_page_5->name }}
                                    </h2>
                                    <div class="m-heading__cta">
                                        <a href="{{ $content_page_5->url_but }}"><span
                                                class="m-heading__cta--text">{{ $content_page_5->name_but }}</span>
                                            <span class="icon-arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container container-uni">
            <div class="pading-uni uni-magin-top-but">
                <div data-block-plugin-id="inline_block:heading"
                    data-inline-block-uuid="4d501cc7-7465-4b33-9a6e-cdf57fdc8e77" class="m-heading">
                    <h2 class="m-heading__headline">
                        Gia vị & Cuộc sống
                    </h2>
                </div>
                <div class="row">
                    @foreach ($blog_post as $item)
                        <div class="col-12 col-md-6 col-lg-3">
                            <a class="" href=" {{ getSlugPost($item->slug) }}"
                                title="{{ $item->name }}">
                                <div class="mt-3 mb-3 uni-blog-home-img">
                                    <picture>
                                        <source data-srcset="{{ pare_url_file($item->thumbnail) }}"
                                            srcset="{{ pare_url_file($item->thumbnail) }}">
                                        <img class=" ls-is-cached lazyloaded" data-src="" width="100%"
                                            alt="{{ $item->name }}">
                                    </picture>
                                    <div class="uni-blog-home">
                                        <p>{{ $item->name }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- blog --}}
    </main>
@stop
