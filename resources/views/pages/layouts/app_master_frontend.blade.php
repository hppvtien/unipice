<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
    {!! SEO::generate() !!}
    <link rel="icon" href="{{ asset('img/brand/favicon.png') }}" type="image/x-icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @if(session('toastr'))
    <script>
        var TYPE_MESSAGES = "{{ session('toastr.type') }}"
        var MESSAGE = "{{ session('toastr.message') }}"
    </script>
    @endif
    <link rel="stylesheet" href="{{ asset('css/frontends.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ducanh.css') }}">
</head>

<body>
    <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>
        <div class="layout-container">
            @include('pages.components.headers._inc_header')
            @yield('contents')
            @include('pages.components.footer._inc_footer')
        </div>
    </div>

    <!-- <script src="https://www.coopmarket.com/sites/default/files/js/js_4e1EHEQaAQ0l19WVSnwlvDtYVVkiTDW1ktKsaMmVO6g.js"></script> -->

    <script src="{{ asset('fontend_js/jquery.min.js') }}"></script>
    <script src="{{ asset('fontend_js/custom.js') }}"></script>
    <script src="{{ asset('js/frontends.js') }}"></script>
    <script src="{{ asset('fontend_js/unijs.js') }}"></script>
  

</body>

</html>