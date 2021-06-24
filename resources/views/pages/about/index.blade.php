@extends('pages.layouts.app_home')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/frontend_dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('css/unistyle.css') }}">
@stop
@section('contents')
@include('pages.about.include._inc_breadcrumb')
<div class="uni-content">
    <div class="nav-overlay uk-navbar-left uk-position-relative uk-flex-1 bg-grey uk-light p-2" hidden style="z-index: 10000;">
        <div class="uk-navbar-item uk-width-expand" style="min-height: 60px;">
            <form class="uk-search uk-search-navbar uk-width-1-1">
                <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
            </form>
        </div>
        <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
    </div>
    <div class="blog-article-single mt-9" data-src="{{ pare_url_file($pages->p_banner) }} " uk-img>
        <div class="container-small">
            <h1> {{ $pages->p_name }} </h1>
        </div>
    </div>

    <!-- Content
        ================================================== -->
    <div class="container p-0">
        <!-- Blog Post Content -->

        <div class="blog-article-content-read">
            <h2>
                {{ $pages->p_desscription }}
            </h2>
            {!! $pages->p_content !!}
        </div>     
    </div>
</div>
@include('pages.course.include._inc_popup_view_course')
@stop
@section('scripts')
<script>
    (function(window, document, undefined) {
        'use strict';
        if (!('localStorage' in window)) return;
        var nightMode = localStorage.getItem('gmtNightMode');
        if (nightMode) {
            document.documentElement.className += ' night-mode';
        }
    })(window, document);
    (function(window, document, undefined) {

        'use strict';

        // Feature test
        if (!('localStorage' in window)) return;

        // Get our newly insert toggle
        var nightMode = document.querySelector('#night-mode');
        if (!nightMode) return;

        // When clicked, toggle night mode on or off
        nightMode.addEventListener('click', function(event) {
            event.preventDefault();
            document.documentElement.classList.toggle('night-mode');
            if (document.documentElement.classList.contains('night-mode')) {
                localStorage.setItem('gmtNightMode', true);
                return;
            }
            localStorage.removeItem('gmtNightMode');
        }, false);

    })(window, document);
</script>
<script src="{{ asset('js/frontend_dashboard.js') }}"></script>
<script src="{{ asset('js/unijs.js') }}"></script>
@stop