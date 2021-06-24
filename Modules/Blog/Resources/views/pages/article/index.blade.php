@extends('blog::layouts.master')
@section('style')
<link rel="stylesheet" href="{{ asset('css/frontend_dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('css/blog_article.css') }}">
@stop
@section('content')
@include('blog::pages.article.include._inc_breadcrumb')
<div class="container">
    <div class="box">
        <div class="box-70">
            <div class="content-article mt20">
                <div><img src="{{ pare_url_file($article->a_avatar)  }}" alt="{{ $article->a_name }}"></div>
                <h1>{{ $article->a_name }}</h1>
                <div class="info-auth flex flex-jc-sb mr-5 ml-1 mt-2">
                    @if(isset($article->menu))
                    <p class="info-by-category">
                        <a href="{{ route('get_blog.render',['slug' => $article->menu->m_slug.'-m']) }}" title="{{ $article->menu->m_name }}">{{ $article->menu->m_name }}</a>
                    </p>
                    @endif
                    <p><i class="fa fa-calendar"></i><b> {{ date_format($article->created_at,"d/m/Y") }}</b></p>
                </div>
                <div class="content-text mt-3">{!! $article->a_content !!}</div>
                <div class="mt-5">
                    <div class="uk-card-default rounded px-3 pb-md-3 uk-flex uk-flex-between@m uk-flex-middle" uk-toggle="cls: uk-flex uk-flex-between@m uk-flex-middle; mode: media; media: @m">
                        <div class="user-details-card">
                            <div class="user-details-card-avatar">
                                <img src="../unimind/assets/images/avatar-2.jpg" alt="">
                            </div>
                            <div class="user-details-card-name">
                                Tác giả <span> Unimind <span> </span> </span>
                            </div>
                        </div>
                        <div>
                            <strong class="mx-3 uk-visible@s"> Chia sẻ </strong>
                            <a href="#" class="btn btn-facebook  rounded-circle btn-icon-only transition-3d-hover">
                                <span class="btn-inner--icon">
                                    <i class="icon-brand-facebook-f"></i>
                                </span>
                            </a>
                            <a href="#" class="btn btn-twitter rounded-circle btn-icon-only transition-3d-hover">
                                <span class="btn-inner--icon">
                                    <i class="icon-brand-twitter"></i>
                                </span>
                            </a>
                            <a href="#" class="btn btn-google-plus rounded-circle btn-icon-only transition-3d-hover">
                                <span class="btn-inner--icon">
                                    <i class="icon-brand-google-plus-g"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="heading-h3 mt-5">Bài viết liên quan</h3>
            <div class="uk-child-width-1-2@ uk-child-width-1-3@m uk-grid">
                @include('blog::components._inc_list_articles',['articles' => $articlesRelate])
            </div>
        </div>
        <div class="box-30 ml15 mt-3 ">
            <div id="book-popular">
                @foreach($books as $item)
                <div class="book-popular-card">
                    <img src="{{ pare_url_file($article->f_avatar)  }}" alt="{{ $item->name }}" class="cover-img">
                    <div class="book-details">
                        <a href="#">
                            <h4>{{ $item->name }}</h4>
                        </a>

                    </div>
                    <a href="#"> <i class="icon-feather-bookmark icon-small"></i></a>
                </div>
                @endforeach

            </div>
            @include('blog::components._inc_sidebar',['tag_home' => $tag_home])
        </div>
    </div>
</div>
@endsection