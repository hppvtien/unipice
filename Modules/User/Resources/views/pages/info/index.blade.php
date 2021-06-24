@extends('user::layouts.app_master_user')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
@stop
@section('content')
    <div class="container" id="pjax-pages-page">
        <div class="pages_user mt30">
            <div class="box">
                <div class="box-30">
                    <div class="box-dashboard-item">
                        @include('user::components._inc_avatar')
                    </div>
                </div>
                <div class="box-70" style="margin-left: 1rem">
                    <div class="update_info">
                        <div class="info_nav">
                            <a data-pjax href="{{ route('get_user.info') }}" class="active" title="Thông tin">Thông tin</a>
                            <a data-pjax href="{{ route('get_user.info.edit',['id' => get_data_user('web')]) }}" title="Cập nhật">Cập nhật</a>
                        </div>
                        <div class="info_content mt20">
                            @include('user::pages.info.include._inc_info')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
