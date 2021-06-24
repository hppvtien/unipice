@if(count($articles) > 0)
@foreach($articles as $item)
<a href="{{ route('get_blog.render',['slug' => $item->a_slug.'-a']) }}" title="{{ $item->a_name }}" class="blog-post">
    <!-- Blog Post Thumbnail -->
    <div class="blog-post-thumbnail">
        <div class="blog-post-thumbnail-inner">
            <img src="{{ pare_url_file($item->a_avatar) }}" alt="{{ $item->a_name }}">
        </div>
    </div>
    <!-- Blog Post Content -->
    <div class="blog-post-content">
        <span class="blog-post-date">{{ $item->created_at }}</span>
        <h3>{{ $item->a_name }}</h3>
        <p>{{ $item->a_description }}</p>
    </div>
</a>
@endforeach
@else
<a href="javascript:;">
    Dữ liệu đang cập nhật !!!
</a>
@endif
