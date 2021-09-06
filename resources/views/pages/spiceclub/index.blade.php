@section('css_js_spice_club')
    <link href="{{ asset('css/unimall1.css') }}" rel="stylesheet">
    <script src="{{ asset('css/css_js/bootstrap.bundle.min.js') }}"></script>
@stop

@extends('pages.layouts.app_master_frontend') @section('contents')

    <main id="main">
        <section id="about" class="about"
            style="background: url({{ pare_url_file($page->p_banner) }}) center center;">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="about-img">
                            <img src="{{ pare_url_file($content_page_1->thumbnail) }}"
                                alt="{{ $content_page_1->name }}">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h1 class="mau_chu">{{ $content_page_1->name }}</h1>
                        <p class="fst-italic">
                            {!! $content_page_1->content !!}
                        </p>
                    </div>
                </div>

            </div>
        </section>
        <section id="specials" class="specials p-5">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Lợi ích</h2>
                    <p>{{ $content_page_2->name }}</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab"
                                    href="#tab-1">{{ $content_page_3->name }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab"
                                    href="#tab-2">{{ $content_page_4->name }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab"
                                    href="#tab-3">{{ $content_page_5->name }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab"
                                    href="#tab-4">{{ $content_page_6->name }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab"
                                    href="#tab-5">{{ $content_page_7->name }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        {!! $content_page_3->content !!}
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ pare_url_file($content_page_3->thumbnail) }}"
                                            alt="{!! $content_page_3->content !!}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        {!! $content_page_4->content !!}
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ pare_url_file($content_page_4->thumbnail) }}"
                                            alt="{!! $content_page_4->content !!}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        {!! $content_page_5->content !!}
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ pare_url_file($content_page_5->thumbnail) }}"
                                            alt="{!! $content_page_5->content !!}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        {!! $content_page_6->content !!}
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ pare_url_file($content_page_6->thumbnail) }}"
                                            alt="{!! $content_page_6->content !!}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        {!! $content_page_7->content !!}
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ pare_url_file($content_page_7->thumbnail) }}"
                                            alt="{!! $content_page_7->content !!}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ======= Gallery Section ======= -->
        {{-- <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Hình Ảnh</h2>
          <p>Hội Viên Trong Spice Club</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4 cach_sat_le">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="https://technext.github.io/restaurantly/assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 cach_sat_le">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="https://technext.github.io/restaurantly/assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 cach_sat_le">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="https://technext.github.io/restaurantly/assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 cach_sat_le">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="https://technext.github.io/restaurantly/assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 cach_sat_le">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="https://technext.github.io/restaurantly/assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 cach_sat_le">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="https://technext.github.io/restaurantly/assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 cach_sat_le">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="https://technext.github.io/restaurantly/assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 cach_sat_le">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="https://technext.github.io/restaurantly/assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section> --}}

    </main><!-- End #main -->



    <main role="main">
        <a id="main-content" tabindex="-1"></a>
        <div class="layout-content">
            <div class="region region-content">
                <div data-drupal-messages-fallback class="hidden"></div>
                <div id="block-frontiercoop-market-content" data-block-plugin-id="system_main_block">
                    <div class="t-cms">
                        <div class="layout layout--onecol">
                            <div class="layout__region layout__region--content">
                                <div data-block-plugin-id="inline_block:page_header"
                                    data-inline-block-uuid="ffe67506-6bbc-48f0-86f5-de0bb60f15ca"
                                    class="c-page-header c-page-header--centered c-page-header--light">
                                    <picture class="c-page-header__image">
                                        <source media="(min-width: 1024px)"
                                            data-srcset="{{ pare_url_file($content_page_7->thumbnail) }}">
                                        <img class="lazyload"
                                            data-src="{{ pare_url_file($content_page_7->thumbnail) }}"
                                            alt="{!! $content_page_7->content !!}">
                                    </picture>
                                    <div class="c-page-header__content">
                                        <h1 class="c-page-header__headline">TRỞ THÀNH THÀNH VIÊN <br>SPICE CLUB</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="layout layout--onecol">
                            <div class="layout__region layout__region--content">
                                <div
                                    class="layout layout--onecol c-media-block-aligned c-media-block-aligned--2up c-media-block-aligned--colored-bg">
                                    <div class="t-membership-b2c__info-blocks">
                                        <div class="c-media-block-aligned__content-wrapper">
                                            <div data-block-plugin-id="inline_block:block_media_block_aligned"
                                                data-inline-block-uuid="c3d409b3-70e5-4d4c-80d9-73fee301834a"
                                                class="m-media-block-aligned m-media-block-aligned--bottom">
                                                <div class="m-media-block-aligned__image-wrapper">
                                                    <picture>
                                                        <source media="(min-width: 768px)"
                                                            data-srcset="{{ pare_url_file($content_page_8->thumbnail) }}">
                                                        <img class="lazyload"
                                                            data-src="{{ pare_url_file($content_page_8->thumbnail) }}"
                                                            alt="{{ $content_page_8->name }}">
                                                    </picture>
                                                </div>
                                                <div class="m-media-block-aligned__content">
                                                    <div class="m-heading ">
                                                        <h2 class="m-heading__headline">{{ $content_page_8->name }} </h2>
                                                        <div class="m-heading__cta">
                                                            <a href="{{ $content_page_8->url_but }}"><span
                                                                    class="m-heading__cta--text">{{ $content_page_8->name_but }}</span>
                                                                <span class="icon-arrow"></span></a>
                                                        </div>
                                                    </div>
                                                    {!! $content_page_8->content !!}
                                                </div>
                                            </div>
                                            <div data-block-plugin-id="inline_block:block_media_block_aligned"
                                                data-inline-block-uuid="839e46c5-43e7-4cbc-9f03-e9e1c3a2ab8e"
                                                class="m-media-block-aligned m-media-block-aligned--bottom">
                                                <div class="m-media-block-aligned__image-wrapper">
                                                    <picture>
                                                        <source media="(min-width: 768px)"
                                                            data-srcset="{{ pare_url_file($content_page_9->thumbnail) }}">
                                                        <img class="lazyload"
                                                            data-src="{{ pare_url_file($content_page_9->thumbnail) }}"
                                                            alt="{{ $content_page_9->name }}">
                                                    </picture>
                                                </div>
                                                <div class="m-media-block-aligned__content">
                                                    <div class="m-heading ">
                                                        <h2 class="m-heading__headline">{{ $content_page_9->name }}</h2>
                                                        <div class="m-heading__cta">
                                                            <a href="{{ $content_page_9->url_but }}"><span
                                                                    class="m-heading__cta--text">{{ $content_page_9->name_but }}</span>
                                                                <span class="icon-arrow"></span></a>
                                                        </div>
                                                    </div>
                                                    {!! $content_page_9->content !!}
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="layout layout--onecol">
                            <div class="layout__region layout__region--content">
                                <div class="t-membership-b2c__faq">
                                    <div class="layout layout--onecol c-faq-accordion">
                                        <div class="c-faq-accordion__heading">
                                            <h2 class="c-faq-accordion__title">Câu hỏi thường gặp</h2>
                                        </div>
                                        <div class="c-faq-accordion__list">
                                            <div data-block-plugin-id="inline_block:faq_question_block"
                                                data-inline-block-uuid="6f002023-75db-4344-aeeb-1d81a70a9db3"
                                                class="m-accordion m-accordion--expanded js-faq-accordion">
                                                <div class="m-accordion__title js-accordion-trigger m-accordion__title--open uni-m-accordion"
                                                    id="accordion-trigger-0" aria-expanded="true"
                                                    aria-controls="accordion-content-0">
                                                    <span class="m-accordion__title-label">{{ $content_page_10->name }}</span>
                                                </div>
                                                <div class="m-accordion__content m-accordion__content--open js-accordion-content"
                                                    id="accordion-content-0" aria-labelledby="accordion-trigger-0"
                                                    style="height: auto;">
                                                    <div class="m-accordion__content-inner js-accordion-content-inner">
                                                        <div
                                                            class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-visually_hidden">
                                                            <div class="field__label visually-hidden">Body</div>
                                                            <div class="field__item">
                                                                {!! $content_page_10->content !!}
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div data-block-plugin-id="inline_block:faq_question_block"
                                                data-inline-block-uuid="016c8120-8a79-42c8-8849-03156748c670"
                                                class="m-accordion m-accordion--expanded js-faq-accordion">


                                                <div class="m-accordion__title uni-m-accordion js-accordion-trigger"
                                                    id="accordion-trigger-0" aria-expanded="false"
                                                    aria-controls="accordion-content-0">
                                                    <span class="m-accordion__title-label">{{ $content_page_11->name }}</span>
                                                </div>
                                                <div class="m-accordion__content m-accordion__content--open js-accordion-content"
                                                    id="accordion-content-0" aria-labelledby="accordion-trigger-0">
                                                    <div class="m-accordion__content-inner js-accordion-content-inner">

                                                        <div
                                                            class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-visually_hidden">
                                                            <div class="field__label visually-hidden">Body</div>
                                                            <div class="field__item">
                                                                {!! $content_page_11->content !!}
                                                            </div>
                                                        </div>

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
                                <div data-block-plugin-id="inline_block:cta_banner"
                                    data-inline-block-uuid="728e2342-c0b1-413a-a643-7ad65411c78a"
                                    style="--illustration-top:url({{ pare_url_file($page->p_banner) }})"
                                    class="c-cta-banner c-cta-banner--torn-edge c-cta-banner--isLight c-cta-banner--illustrations c-cta-banner--bgImg">
                                    <div class="c-cta-banner__content">
                                        <span class="c-cta-banner__heading">Tham Gia Club Để Nhận Ưu Đãi!</span>
                                        <p class="c-cta-banner__subheading"></p>
                                        <a class="a-btn a-btn--primary" href="/dang-ky-spice-club">Đăng Ký</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="layout layout--onecol">
                            <div class="layout__region layout__region--content">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
