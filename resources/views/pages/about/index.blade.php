@section('js_about')
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
        <div id="rev_slider_14_1_wrapper" class="rev_slider_wrapper fullscreen-container bg-primary" data-alias="gravitydesign1" data-source="gallery" style="padding:0px;">
            <div id="rev_slider_2_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">
                <ul>
                    <li  data-index="rs-7" data-responsive="on" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ asset('/images/icon_menu/anh_nen_b2b.jpg') }}"
                        data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""
                        data-liquideffect='{"image":"{{ asset('/images/icon_menu/anh_nen_b2b.jpg') }}","imagesize":"external","autoplay":true,"scalex":4,"scaley":4,"speedx":0.5,"speedy":-0.5,"rotationx":0,"rotationy":0,"rotation":0,"transtime":2000,"easing":"Power3.easeOut","transcross":false,"transpower":false,"transitionx":0,"transitiony":0,"transpeedx":0,"transpeedy":0,"transrotx":0,"transroty":0,"transrot":0}'>
                        <video controls autoplay loop >
                            <source src="{{ asset('/images/icon_menu/video_about.mp4') }}" type="video/mp4">
                          </video> 
                        <h1 class="tp-caption font-primary" id="slide-7-layer-13-1" data-x="['left','left','middle','middle']" data-hoffset="['0','30','0','0']" data-y="['middle','middle','top','top']" data-voffset="['-200','-200','80','20']" data-fontsize="['54','54','54','40']"
                            data-width="auto" data-height="auto" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-responsive="on" data-frames='[{"delay":1200,"split":"words","splitdelay":0.05,"speed":1000,"split_direction":"forward","frame":"0","from":"x:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","split":"words","splitdelay":0.02,"speed":300,"split_direction":"backward","frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" style="z-index: 7; white-space: nowrap; font-size: 54px; line-height: 54px; letter-spacing: 0px; color:#fff">{{ $content_page_1->name}}</h1>
                        <p class="tp-caption Restaurant-Description " id="slide-7-layer-13-2" data-x="['left','left','middle','middle']" data-hoffset="['0','30','0','0']" data-y="['middle','middle','top','top']" data-voffset="['-100','-100','180','80']" data-fontsize="['18','18','18','18']" data-fontsize="['50','50','50','50']"
                            data-lineheight="['30','30','30','30']" data-fontweight="['700','700','700','700']" data-width="['480','400','480','400']" data-height="auto" data-visibility="['on', 'on', 'off', 'off']" data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":1500,"split":"words","splitdelay":0.05,"speed":1000,"split_direction":"forward","frame":"0","from":"x:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","split":"words","splitdelay":0.02,"speed":300,"split_direction":"backward","frame":"999","to":"auto:auto;fb:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['left','left','center','center']" style="z-index: 5; min-width: 480px; max-width: 480px; white-space: normal; letter-spacing: 0px; color:#fff">{{ $content_page_1->desscription}}</p>
                        <a class="tp-caption rev-btn button button-large m-0 button-white fw-bold button-circle button-light" href="{{ $content_page_1->url_but}}" target="_blank" id="slide-7-layer-13" data-x="['left','left','middle','middle']" data-hoffset="['0','30','0','0']"
                            data-y="['middle','middle','bottom','bottom']" data-voffset="['200','200','30','0']" data-textAlign="['center','center','center','center']" data-width="200" data-height="auto" data-type="button" data-actions='' data-responsive_offset="off" data-responsive="off" data-fontsize="['17', '17', '15', '15']"
                            data-lineheight="['40', '40', '30', '30']" data-frames='[{"delay":3000,"speed":1600,"frame":"0","from":"x:50px;z:0;rX:0;rY:0;rZ:0;sX:1.1;sY:1.1;skX:0;skY:0;opacity:0;fbr:100;","bgcolor":"#FFF","to":"o:1;fbr:100;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","bgcolor":"#FFF","to":"opacity:0;fbr:100;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"150","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;fbr:90%;","style":"c:#fff;"}]'
                            style="z-index: 9; background-color: #0b2d25; padding: 4px 28px; color:#fff; text-align: center;"><span>{{ $content_page_1->name_but}}</span> <i class="icon-angle-right"></i>
								</a>
                    </li>
                </ul>
                <div class="tp-bannertimer" style="height: 6px; background: rgba(255,255,255,0.15);"></div>
            </div>
        </div>
    </div>
    <div class="section-full bg-white">

        <div class="row manu-box-reverse sp0">
            <div class="col-lg-6 p-lg-5 pading_about">
                <div class="menu-box">
                    <div class="section-head style-2">
                        <h2 class="title">{{ $content_page_2->name}}</h2>
                    </div>
                    <p>{!! $content_page_2->content !!}</p>
                </div>
            </div>
            <div class="col-lg-6 p-lg-5 pading_about">
                <img src="{{ pare_url_file($content_page_2->thumbnail) }}" alt="{{ $content_page_2->name}}" class="img-cover" width="100%" />
            </div>
        </div>
    </div>
    @php
        $i = 0;
        $m = 0;
    @endphp
    <div class="section-full bg-white pizza-full-menu">
        <div class="bg-primary pizza-items" style="background-image:url({{ asset('/images/icon_menu/nen-menu.png') }})">
            <div class="container">
                <ul class="nav nav-tabs pizza-items" id="myTab" role="tablist">
                    @foreach ($menu1 as $item)
                    <li class="nav-item item">
                        <a class="item-icon-box nav-link {{ $i==0 ? 'active' : '' }}" id="pizza-tab{{ $item->id }}" data-toggle="tab" href="#pizza{{ $item->id }}" role="tab" aria-controls="pizza{{ $item->id }}" aria-selected="true">
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
        <div class="content-inner can_trai_phai" >
            <div class="container-fluid tab-content" id="myTabContent">
                @foreach ($menu1 as $item1)
                <div class="row tab-pane fade {{ $m==0 ? 'show active' : '' }}" id="pizza{{ $item1->id }}" role="tabpanel" aria-labelledby="pizza{{ $item1->id }}-tab">
                    @foreach (get_product_cat($item1->id) as $value)
                        @foreach (get_product_id($value) as $value1)
                        <div class="dz-col col m-b30 pt-5 pb-5 ">
                            <div class="item-box shop-item style2">
                                <div class="item-img">
                                    <img src="{{ pare_url_file($value1->thumbnail) }}" alt="{{ $value1->name }}">
                                </div>
                                <div class="item-info text-center">
                                    <!--<h4 class="item-title"><a id="mau_about_link" href="#"></a></h4>-->
                                    <h5 class="price text-primary">{{ $value1->name }}</h5>
                                    <div class="cart-btn"><a href="{{ getSlugProduct($value1->slug) }}" class="btn btnhover radius-xl"><i class="ti-shopping-cart"></i> Xem Thêm</a></div>
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
        </div>
    </div>
</main>
@stop