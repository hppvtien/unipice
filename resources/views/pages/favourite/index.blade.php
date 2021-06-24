@extends('pages.layouts.app_home')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/frontend_dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('css/category.css') }}">
@stop
@section('contents')
@include('pages.favourite.include._inc_breadcrumb')
@include('pages.components._inc_fill_search')
<div class="main-content mt20">
    <div class="container">
        <div class="box" id="box-fav">
            <div class="box-25 mr20">
                {{-- <section>
                    <div class="box-sidebar">
                        <h2 class="box-sidebar-title">{{ $category->c_name ?? "Tất cả khoá học"}}</h2>
                        <ul class="b-s-category">
                            
                        </ul>
                    </div>
                </section> --}}
                @include('pages.components._inc_tags_hot')
            </div>
            <div class="box-75 box-content">
                <div class="results mb10 mt10">
                    <b><?php echo count($favourites); ?></b> khoá học
                </div>
                <div class="lists ">
                    @forelse($favourites as $item)
                    @include('pages.category.include._item_course',['course' => $item])
                    @empty
                    <p>Dữ liệu chưa được cập nhật</p>
                    @endforelse
                    <div class="clear"></div>
                </div>
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