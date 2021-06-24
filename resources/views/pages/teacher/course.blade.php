@extends('pages.layouts.app_home')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/teacher.css') }}">   
    <link rel="stylesheet" href="{{ asset('css/frontend_dashboard.css') }}">
@stop
@section('contents')
    @include('pages.teacher.include._inc_breadcrumb')
    @include('pages.teacher.include._inc_header',['teacher' => $teacher])
    @include('pages.teacher.include._inc_content',['teacher' => $teacher,'tags' => $tags ?? []])
    @include('pages.teacher.include._inc_course',['courses' => $courses])
@stop

@section('scripts')
<script>
    (function (window, document, undefined) {
        'use strict';
        if (!('localStorage' in window)) return;
        var nightMode = localStorage.getItem('gmtNightMode');
        if (nightMode) {
            document.documentElement.className += ' night-mode';
        }
    })(window, document);


    (function (window, document, undefined) {

        'use strict';

        // Feature test
        if (!('localStorage' in window)) return;

        // Get our newly insert toggle
        var nightMode = document.querySelector('#night-mode');
        if (!nightMode) return;

        // When clicked, toggle night mode on or off
        nightMode.addEventListener('click', function (event) {
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
    <script src="{{ asset('js/teacher.js') }}"></script>
    <script src="{{ asset('js/frontend_dashboard.js') }}"></script>
@stop