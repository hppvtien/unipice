@forelse($articles ?? [] as $item)
    <div class="uk-first-column">
        <a href="{{ route('get_blog.render',['slug' => $item->a_slug.'-a']) }}" title="{{ $item->a_name }}" class="blog-post blog-post-card">
            <div class="blog-post-thumbnail">
                <div class="blog-post-thumbnail-inner">
                    <img src="{{ pare_url_file($item->a_avatar)  }}" alt="{{ $item->a_name }}">
                </div>
            </div>
            <div class="blog-post-content">            
                <h3>{{ $item->a_name }}</h3>
                <p>{{ $item->a_description }}</p>
            </div>
            <div class="blog-post-footer">
                <div class="blog-post-content-info">
                    <span class="blog-post-info-tag btn btn-soft-primary"><i class="fa fa-calendar"></i> {{ date_format($item->created_at,"d/m/Y") }}</span>
                    <span class="blog-post-info-date">Xem thêm <i class="fa fa-caret-right"></i></span>
                </div>
            </div>
        </a>
    </div>          
    @empty
        <p>Dữ liệu đang được cập nhật</p>
@endforelse
