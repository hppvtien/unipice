@extends('blog::layouts.master')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/frontend_dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog_menu.css') }}">
@stop
@section('content')
    @include('blog::pages.menu.include._inc_breadcrumb')
    <div class="container">
        <h1 class="text-center mt-3 mb-3">{{ $menu->m_name }}</h1>
        <div class="uk-child-width-1-2@ uk-child-width-1-3@m uk-grid">
            @include('blog::components._inc_list_articles',['articles' => $articles])
        </div>
        {{ $articles->render("pagination::bootstrap-4") }}
    </div>
@endsection
