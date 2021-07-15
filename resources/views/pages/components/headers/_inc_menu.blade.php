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