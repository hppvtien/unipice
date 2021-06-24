@extends('pages.layouts.app_home')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/frontend_dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('css/unistyle.css') }}">
@stop
@section('contents')
@include('pages.jobs.include._inc_breadcrumb')
<style>
    .card.card-jobs {
        margin-top: 20px;
    }

    table.table-jobs {
        min-width: 600px;
        color: #292621;
    }

    .table-jobs thead>tr>th {
        background: #122a67;
        color: #f2f2f2;
        padding: 15px;
        font-size: 15px;
        text-transform: uppercase;
    }

    .table-jobs tbody.list>tr>th {
        padding: 15px;
        font-size: 15px;
    }

    .page-content-inner {
        padding: 0;
    }

    a.more-jobs {
        border: 1px solid #122a67;
        padding: 10px;
    }

    a.more-jobs:hover {
        border: 1px solid #122a67;
        padding: 10px;
        background: #122a67;
        color: #f2f2f2;
        transition: 0.2s;
    }

    .desscription_job h3 {
        color: #C8A457;
        font-size: 16px;
        font-weight: 600;
    }

    .job_item {
        margin: 20px 0;
    }

    span.hot_jobs {
        background-color: #C8A457;
        text-transform: uppercase;
        color: #fff;
        border-radius: 20px;
        margin-right: 10px;
        font-size: 12px;
        padding: 4px 5px;
        font-weight: 600;
    }

    .desscription_job p>i {
        margin-right: 10px;
    }

    a.link_url_job::after {
        content: "";
        width: 50%;
        height: 1px;
        background-color: #cbcbcb;
        margin: auto;
    }
</style>
<div class="uni-content">
    <div class="page-content-inner">
        <!-- Intro banner container  -->
        <h1 class="mt-5 mb-10 uk-article-title text-center">Tin tuyển dụng, việc làm tốt nhất</h1>
        <div class="card card-jobs">
            <div class="row">
                @foreach ($jobs as $key => $item)
                <div class="col-md-4 col-sm-4 col-12 job_item mb10">
                    <a href="{{ route('get.jobsdetail', $item->slug) }}" class="row no-gutters link_url_job">
                        <div class="col-4 logo_job">
                            <img src="{{ pare_url_file($item->j_avatar,'storage/uploads_job') }}" alt="">
                        </div>
                        <div class="col-8 desscription_job">
                            <h3><span class="hot_jobs">Hot</span>{{ desscription_cut($item->name,20) }}</h3>
                            <p>{{ desscription_cut($item->desscription,60) }}</p>
                            <p><i class="fa fa-map-marker"></i>{{ $item->address }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

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