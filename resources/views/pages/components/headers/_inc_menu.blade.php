<?php
$store = \DB::table('Uni_Store')->where('user_id', get_data_user('web'))->first();  
if ($store == null) { ?>
    <ul class="c-header__links">
        @forelse ($category_mn as $key => $item)
        <li class="c-header__link-item js-main-menu-panel">
            <button class="c-header__link js-main-menu-panel__trigger" type="button">
            <a href="/{{ getSlugCategory($item->slug) }}">
                <span class="c-header__link-text">{{ $item->name }}</span>
                </a>
            </button>
        </li>
        @empty
            
        @endforelse
        
    </ul>
<?php } else { ?>
    <ul class="c-header__links">
        <li class="c-header__link-item js-main-menu-panel">
    <button class="c-header__link js-main-menu-panel__trigger" type="button">
    <a href="/san-pham/gia-vi-hoan-chinh.html">
        <span class="c-header__link-text">Gia vị hoàn chỉnh</span>
        </a>
    </button>
</li>
        <li class="c-header__link-item js-main-menu-panel">
    <button class="c-header__link js-main-menu-panel__trigger" type="button">
    <a href="/san-pham/tra.html">
        <span class="c-header__link-text">Trà</span>
        </a>
    </button>
</li>
        <li class="c-header__link-item js-main-menu-panel">
    <button class="c-header__link js-main-menu-panel__trigger" type="button">
    <a href="/san-pham/gia-vi-muoi.html">
        <span class="c-header__link-text">Gia vị + muối</span>
        </a>
    </button>
</li>
        
        
</ul>
<?php }
?>
