<nav class="responsive-tab style-2">

    <div class="row">
        @foreach ($menuBlog as $key => $item)
            <div class="col-md-3 cate_news" data-url="{{ $item->m_slug . '-m' }}" data-id="{{ $item->id }}"
                class="{{ \Request::segment(2) == $item->m_slug . '-m' ? 'active' : '' }}">
                <a id="cat_link{{ $item->id }}" class="link_cat <?php if ($key == 0) {
                    echo 'active';
                } else {
                    echo '';
                } ?>" href="<?php if ($key == 0) {
    echo $item->m_slug;
} else {
    echo 'javascript:;';
} ?>">{{ $item->m_name }}</a>
            </div>

        @endforeach

    </div>
</nav>
