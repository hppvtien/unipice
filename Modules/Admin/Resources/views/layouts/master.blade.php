<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />
    <!-- Title -->
    <title> Theme Admin </title>
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css_admin/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/brand/favicon.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('css_admin/admin_dashboard.css') }}">

    <link rel="stylesheet" href="{{ asset('css_admin/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css_admin/custom.css') }}">
    @if(session('toastr'))
    <script>
        var TYPE_MESSAGES = "{{ session('toastr.type') }}"
        var MESSAGE = "{{ session('toastr.message') }}"
    </script>
    @endif
    <script>
        var URL_UPLOAD = "{{ route('post_ajax_admin.uploads') }}"
    </script>
</head>

<body class="main-body app sidebar-mini">
    <!-- Start Switcher -->
    <!-- End Switcher -->
    <!-- Loader -->
    <!-- /Loader -->
    {{-- @if (permissionCheck($menus['route'],permissionShow(get_data_user('admins')))) --}}
    <!-- main-sidebar -->
    @include('admin::components._inc_sidebar')
    <!-- main-sidebar -->
    <!-- main-content -->
    <div class="main-content app-content">
        @include('admin::components._inc_header')
        <!-- container -->
        @yield('content')
        <!-- Container closed -->
    </div>
    <!-- main-content closed -->
    @include('admin::components._inc_sidebar_right')

    <!-- modal -->
    @include('admin::components._inc_footer')
    <!-- JQuery min js -->
    <script src="{{ asset('js_admin/jquery.min.js') }}"></script>

    <script src="{{ asset('js_admin/moment.js') }}"></script>
    <script src="{{ asset('js_admin/apexcharts.js') }}"></script>
    <script src="{{ asset('js_admin/index.js') }}"></script>
    <script src="{{ asset('js_admin/vector-map.js') }}"></script>
    <script src="{{ asset('js_admin/chartjs.js') }}"></script>
    <script src="{{ asset('js_admin/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js_admin/admin_dashboard.js') }}"></script>
    <script src="{{ asset('js_admin/select2.min.js') }}"></script>
    <script src="{{ asset('js_admin/custom.js') }}"></script>


    <script>
        $("#meta_title").keyup(function() {
            $("#count_title").text("Ký tự: " + ($(this).val().length) + " (Tiêu đề seo 50 - 70 ký tự)");
            if ($(this).val().length >= 50 && $(this).val().length <= 70) {
                $("#count_title").removeClass('text-danger').addClass('text-success')
            } else {
                $("#count_title").removeClass('text-success').addClass('text-danger')
            }
        });
        $("#meta_desscription").keyup(function() {
            $("#count_des").text("Ký tự: " + ($(this).val().length) + " (Mô tả seo từ 100 -> 150 ký tự)");
            if ($(this).val().length >= 100 && $(this).val().length <= 150) {
                $("#count_des").removeClass('text-danger').addClass('text-success')
            } else {
                $("#count_des").removeClass('text-success').addClass('text-danger')
            }
        });
    </script>
    <script src="{{ asset('plugin/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('plugin/ckfinder/ckfinder.js') }}"></script>
    @yield('scriptck')
</body>

</html>