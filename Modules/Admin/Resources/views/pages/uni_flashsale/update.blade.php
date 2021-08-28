@extends('admin::layouts.master')
@section('content')
    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto"> SALE OFF</h4>
                    <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Edit</span>
                </div>
            </div>
            <div class="d-flex my-xl-auto right-content">
                <div class="pr-1 mb-3 mb-xl-0">
                    <a href="{{ route('get_admin.uni_flashsale.index') }}" class="btn btn-danger mr-2">Quay lại <i class="la la-undo"></i></a>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->
        <!-- row -->
        @include('admin::pages.uni_flashsale.form')
    </div>
    <div id="popup-div"></div>
    <style>
    span.close-img {
        position: absolute;
        width: 20px;
        height: 20px;
        color: #fff;
        background: red;
        text-align: center;
        font-size: 14px;
        right: 10%;
        top: 5%;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
@stop
