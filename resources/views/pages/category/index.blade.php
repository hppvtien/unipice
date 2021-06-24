@extends('pages.layouts.app_home')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/frontend_dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('css/category.css') }}">
@stop
@section('contents')
@include('pages.category.include._inc_breadcrumb')
@include('pages.components._inc_fill_search')

<div class="page-content-adsmo">
    <div class="container">
        <div class="mt-lg-5" uk-grid>
            <div class="uk-width-1-4@m">
                <div class="sidebar-filter" uk-sticky="top:85 ;offset: 163; bottom: true ; media : @m">
                    <button class="btn-sidebar-filter" uk-toggle="target: .sidebar-filter; cls: sidebar-filter-visible">Filter </button>
                    <div class="sidebar-filter-contents">
                        @if(isset($category))
                        <section>

                            <ul class="b-s-category">
                                @foreach($categoryChild ?? [] as $item)
                                <li>
                                    <a href="{{ route('get.course.render',['slug' => $item->c_slug.'-c']) }}" title="{{ $item->c_name }}"><i class="{{ $category->c_icon }}"></i> {{ $item->c_name }}</a>
                                </li>
                                @endforeach
                            </ul>

                        </section>
                        @endif
                        @include('pages.components._inc_tags_hot')
                    </div>
                </div>
            </div>
            <div class="uk-width-expand@m">
                @if(isset($category))
                <div class="section-header mb-lg-3">
                    <div class="section-header-left">
                        <h1 class="uk-article-title"> {{ $category->c_name ?? "Tất cả khoá học"}} </h1>
                    </div>
                </div>
                @else

                @endif

                <div class="results mb10">
                    <b>{{ $courses->count() }}</b> khoá học
                </div>
                <div class="uk-child-width-1-3@m uniform uk-grid ">
                    @forelse($courses as $item)
                    @include('pages.components._inc_item_course',['course' => $item])
                    @empty
                    <p>Dữ liệu chưa được cập nhật</p>
                    @endforelse
                    <div class="clear"></div>
                </div>
                {{ $courses->render("pagination::bootstrap-4") }}
            </div>
        </div>
    </div>
</div>
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
<script src="{{ asset('js/category.js') }}"></script>
<script src="{{ asset('js/course.js') }}"></script>

@stop