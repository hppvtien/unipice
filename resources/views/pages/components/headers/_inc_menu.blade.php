
    <ul class="menu">
        @forelse ($category_mn as $key => $item)
        <li class="menu-item {{ getActive(getSlugCategory($item->slug)) == true ? '1111111':'222222222' }}">
            <a href="/{{ getSlugCategory($item->slug) }}"><img style="float: left;padding: 5px;" width="45px" src="{{ pare_url_file_product($item->icon_thumb) }}" alt=""><span> {{ $item->name }}</span></a>
        </li>
        @empty
            
        @endforelse
        
    </ul>






    