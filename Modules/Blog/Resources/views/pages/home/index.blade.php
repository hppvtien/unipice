@extends('blog::layouts.master')
@section('style')

<link rel="stylesheet" href="{{ asset('css/frontend_dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('css/blog_home.css') }}">
@stop
@section('content')
@include('blog::pages.home.include._inc_breadcrumb')
<div class="uni-content">
    <div class="page-content-inner">
        <h1 class="text-center"> Góc kiến thức </h1>
        <h2 class="mt-2 mb-3"> Bài viết nổi bật </h2>
        @include('blog::pages.home.include.inc_blog_banner',['articlesHotOne' => $articlesHotOne])
        <h2 class="mt-5 mb-0"> Danh mục bài viết </h2>
        <div class="section-header mb-lg-3">
            <div class="section-header-left">
                @include('blog::components._inc_blog_menu')
            </div>
        </div>
        <div class="uk-grid-large uk-grid" uk-grid="">
            <div class="uk-width-expand uk-first-column">
                <div id="blog-cat">
                    @if(count($articlesHotOne) > 0)
                    @foreach($articlesHotOne as $item)
                    <a href="{{ route('get_blog.render',['slug' => $item->a_slug.'-a']) }}" title="{{ $item->a_name }}" class="blog-post">
                        <!-- Blog Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                            <div class="blog-post-thumbnail-inner">
                                <img src="{{ pare_url_file($item->a_avatar) }}" alt="{{ $item->a_name }}">
                            </div>
                        </div>
                        <!-- Blog Post Content -->
                        <div class="blog-post-content">
                            <span class="blog-post-date">{{ date_format($item->created_at,"d/m/Y") }}</span>
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
                </div>
                <!-- Blog Post -->
            </div>
            <div class="uk-width-1-3@s">
                <h3> Tags </h3>
                <div uk-margin="">
                    @foreach($tag_home as $item)
                    <a href="#" class="btn btn-small btn-light uk-first-column">{{ $item->t_name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $('document').ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.cate_news').on('click', function() {
            let cat_ID = $(this).attr('data-id');
            let cat_url = '{{ route("get_blog.cat_news") }}' + '/' + $(this).attr('data-url');
            $(this).parent().find('.active').removeClass('active');
            $('#cat_link'+cat_ID).addClass('active');
            $.ajax({
                url: cat_url,
                type: "post",
                dataType: "html",
                data: {
                    cat_ID: cat_ID
                },
                success: function(data) {
                    $('#blog-cat').html(data);
                },
            });
        });
    });
    </script>
@stop