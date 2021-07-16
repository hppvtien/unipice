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
 </head>

 <body>
 <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>
     <div id="wrapper" class="bg-white">
         @include('pages.components.headers._inc_header')
         @yield('content')
         @include('pages.components.footer._inc_footer')
     </div>
</div>
<script src="{{ asset('fontend_js/jquery.min.js') }}"></script>
    <script src="{{ asset('fontend_js/custom.js') }}"></script>
    <script src="{{ asset('js/frontends.js') }}"></script>
    <script src="{{ asset('fontend_js/unijs.js') }}"></script>
    <script type="text/javascript" async>
        ;
        (function(o, l, a, r, k, y) {
            if (o.olark) return;
            r = "script";
            y = l.createElement(r);
            r = l.getElementsByTagName(r)[0];
            y.async = 1;
            y.src = "//" + a;
            r.parentNode.insertBefore(y, r);
            y = o.olark = function() {
                k.s.push(arguments);
                k.t.push(+new Date)
            };
            y.extend = function(i, j) {
                y("extend", i, j)
            };
            y.identify = function(i) {
                y("identify", k.i = i)
            };
            y.configure = function(i, j) {
                y("configure", i, j);
                k.c[i] = j
            };
            k = y._ = {
                s: [],
                t: [+new Date],
                c: {},
                l: a
            };
        })
        (window, document, "static.olark.com/jsclient/loader.js");
        olark.configure('system.hb_primary_color', '#137F62');
        olark.configure('system.hb_custom_style', {
            general: {
                fonts: ['Montserrat', 'sans-serif'],
                corners: 'hard',
                secondaryColor: ''
            }
        });
        olark.identify('8164-882-10-5249');
    </script>
 </body>
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
 @yield('js')

 </html>