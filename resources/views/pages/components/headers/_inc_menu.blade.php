<ul class="menu">
    @forelse ($category_mn as $key => $item) @if ($item->parent_id == 0)
    <li class="mega-drop-down">
        <a href="{{ getSlugCategory($item->slug) }}" id="{{ getActive(getSlugCategory($item->slug)) == true ? 'ul_li_active':'' }}"><img style="float: left;padding: 5px;" width="45px" src="{{ pare_url_file_product($item->icon_thumb) }}" alt=""><span> {{ $item->name }}</span></a>

        <ul class="sub-menu col-md-12">
        @forelse (getCatParent($item->id) as $vl)
            <li id="menu-item-626" class="menu-item menu-item-type-post_type menu-item-object-static_block menu-item-626">
                <div class="yamm-content">
                    <section class="kc-elm kc-css-3629547 kc_row" id="bo_padding">
                        <div class="kc-row-container kc-container">
                            <div class="kc-wrap-columns">
                                <div class="kc-elm kc-css-2137457 kc_col-sm-3 kc_column kc_col-sm-3">
                                    <div class="kc-col-container">
                                        <div class="widget widget_nav_menu kc-elm kc-css-527118">
                                            <div class="menu-pages-menu-1-container">
                                                <ul id="menu-pages-menu-5" class="menu">
                                                    
                                                    <li class="nav-title menu-item menu-item-type-custom menu-item-object-custom menu-item-569">
                                                        <a href="{{ getSlugCategory($vl->slug) }}" class="m-menu-media-card   ">
                                                            <div class="m-menu-media-card__img-wrapper">
                                                                <img class="m-menu-media-card__img ls-is-cached lazyloaded" data-src="/storage/uploads_Product/icon-bath-and-body-1627701283.jpg" alt="{{ $vl->name }}" src="{{ pare_url_file_product($vl->thumbnail) }}">
                                                            </div>

                                                            <div class="m-menu-media-card__label">
                                                                <span class="m-menu-media-card__label-text">
                                                                    <div class="field field--name-name field--type-string field--label-hidden field__item">{{ $vl->name }}</div>
                                                              </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </li>
            @empty @endforelse
        </ul>
    </li>
   
    @endif @empty @endforelse
    <li class="mega-drop-down">
        <a href="{{ route('get.flashsale') }}" id="{{ getActive('khuyen-mai') == true ? 'ul_li_active':'' }}"><img style="float: left;padding: 5px;" width="45px" src="/storage/uploads_Product/khuyen-mai-1627644111.png" alt=""><span> Khuyến mãi</span></a>
    </li>

</ul>

