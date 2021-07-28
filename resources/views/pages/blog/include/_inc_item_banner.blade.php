@if(isset($article) && $article)
    <div class="item">
        <a href="{{ route('get_blog.render',['slug' => $article->a_slug.'-a']) }}" title="{{ $article->a_name }}" class="thumb">
            <div class="uni-image">
                <img src="{{ pare_url_file($article->a_avatar) }}" alt="{{ $article->a_name }}">
                <div class="uni-badget">
                    <p class="flex flex-jc-sb pl10 pr10">
                        <span><i class="fa fa-calendar"></i> {{ $article->created_at->format("d/m/Y") }}</span>
                        <span>Xem thêm <i class="fa fa-caret-right"></i></span>
                    </p>
                </div>
            </div>          
        </a>
        <div class="info">
            <a href="{{ route('get_blog.render',['slug' => $article->a_slug.'-a']) }}" title="{{ $article->a_name }}">
            <h3>{{ $article->a_name }}</h3>
        </a>
        </div>
    </div>
@endif
