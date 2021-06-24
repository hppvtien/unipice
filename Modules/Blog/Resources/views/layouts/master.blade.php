 
<!doctype html>
<html lang="en">
    <head>
        {!! SEO::generate() !!}
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
        <link rel="icon" href="{{ asset('img/brand/favicon.png') }}" type="image/x-icon"/>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>
            var URL_SOCIAL = '{{ route("post.social") }}'
        </script>
        @yield('style')
    </head>
    <body>
        <div id="wrapper" class="bg-white">
            @include('pages.components.headers._inc_header_dt')
            @yield('content')
            @include('pages.components.footer._inc_footer')
        </div>
    </body>
    <script src="{{ asset('js/user.js') }}"></script>
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
    <script src="{{ asset('js/frontend_dashboard.js') }}"></script>
    @yield('js')
</html>
