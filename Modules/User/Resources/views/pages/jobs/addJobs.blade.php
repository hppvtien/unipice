@extends('user::layouts.app_master_user')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
@stop
@section('content')
    <div class="container" id="pjax-pages-page">
        
        <div class="pages_user mt30">
            <h2 class="text-center mt-5">Đăng tin tuyển dụng</h2>
            <div class="box">
                <div class="box-30">
                    <div class="box-dashboard-item">
                        @include('user::components._inc_avatar')
                    </div>
                </div>
                <div class="box-70 margin-left">
                    <div class="table">
                        @include('user::pages.jobs.form')
                    </div>
                </div>
            </div>
        </div>
    @stop
