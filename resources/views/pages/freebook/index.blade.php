@extends('pages.layouts.app_home')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/frontend_dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/unistyle.css') }}">
@stop
@section('contents')
    @include('pages.freebook.include._inc_breadcrumb')
    <div class="uni-content">
        <div class="page-content-inner">
            <h1 class="uk-article-title"> Books </h1>
            <div class="mt-lg-5" uk-grid>
                <div class="uk-width-3-4@m">
                    <h2> Sách nổi bật </h2>
                    <div class="uk-position-relative" tabindex="-1" uk-slider="autoplay: true">
                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-child-width-1-3@s uk-grid">
                            @foreach ($book_hot as $key_hot => $item)
                                <li>
                                    <a href="book-description.html">
                                        <div class="book-card">
                                            <div class="book-cover">
                                                <img src="/storage/uploads/{{ $item->f_avatar }}" alt="">
                                            </div>
                                            <div class="book-content">
                                                <h5>{{ $item->name }}</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="uk-flex uk-flex-center mt-2">
                            <ul class="uk-slider-nav uk-dotnav"></ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-4@m">
                    <h3> Sách phổ biến</h3>
                    <div id="book-popular">
                        @foreach ($hot_down as $key_hot => $item)
                            <div class="book-popular-card">
                                <img src="/storage/uploads/{{ $item->f_avatar }}" alt="{{ $item->name }}"
                                    class="cover-img">
                                <div class="book-details">
                                    <a href="#">
                                        <h4>{{ $item->name }}</h4>
                                    </a>
                                    {{-- <p>Richard Ali </p> --}}
                                </div>
                                <a href="#"> <i class="icon-feather-bookmark icon-small"></i></a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <h2> Thư viện sách</h2>
            <div class="section-small">
                <div class="uk-child-width-1-5@m uk-child-width-1-3@s uk-child-width-1-2" uk-grid>
                    @foreach ($books as $key_hot => $item)
                        <div>
                            <a href="book-description.html" class="uk-text-bold">
                                <img src="/storage/uploads/{{ $item->f_avatar }}" class="mb-2 w-100 shadow rounded">
                                {{ $item->name }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- pagination-->
            {{ $books->render("pagination::bootstrap-4") }}
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
    <script src="{{ asset('js/unijs.js') }}"></script>
@stop
