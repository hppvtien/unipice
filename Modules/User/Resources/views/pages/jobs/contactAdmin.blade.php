@extends('user::layouts.app_master_user')
@section('style')
<link rel="stylesheet" href="{{ asset('css/user.css') }}">
@stop
@section('content')
@include('user::components._inc_menu_user')
<div class="container" id="pjax-pages-page">
    <div class="pages_user mt20">
        <div class="card">
            <!-- Card header -->
            <div class="card-header actions-toolbar border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="d-inline-block mb-0">Bạn cần liên hệ Quản trị để đăng bài vì bạn đã đăng 10 bài</h4>
                    <div class="d-flex">
                        <a class="btn btn-primary" href="{{ route('get_user.jobs') }}" role="button">Quay lại</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@stop