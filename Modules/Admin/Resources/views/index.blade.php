@extends('admin::layouts.master')
@section('content')
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <div>
                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Trang chủ</h2>
            </div>
        </div>
        <div class="main-dashboard-header-right">

        </div>
    </div>
    <!-- /breadcrumb -->
    <!-- row -->
    <div class="row row-sm">
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-primary-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <a href="">
                            <h6 class="mb-3 tx-12 text-white">Khóa học</h6>
                        </a>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white">{{ count($course) }} khóa học</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-danger-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <a href="">
                            <h6 class="mb-3 tx-12 text-white">Đơn hàng hôm nay</h6>
                        </a>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white">{{ count($order) }} đơn hàng</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-success-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <a href="">
                            <h6 class="mb-3 tx-12 text-white">Bình luận</h6>
                        </a>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white">{{ count($vote) }} Bình luận</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-warning-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <a href="">
                            <h6 class="mb-3 tx-12 text-white">Bài viết</h6>
                        </a>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white">{{ count($article) }} bài viết</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-success-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <a href="">
                            <h6 class="mb-3 tx-12 text-white">Tin tuyển dụng</h6>
                        </a>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white">{{ count($article) }} tin tuyển dụng</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-warning-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <a href="">
                            <h6 class="mb-3 tx-12 text-white">eBook</h6>
                        </a>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white">{{ count($article) }} eBook</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-danger-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <a href="">
                            <h6 class="mb-3 tx-12 text-white">User</h6>
                        </a>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white">{{ count($article) }} User</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-primary-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <a href="">
                            <h6 class="mb-3 tx-12 text-white">Liên hệ</h6>
                        </a>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white">{{ count($article) }} Liên hệ</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-sm">

        <div class="col-md-12 col-lg-6 col-xl-6">
            <div class="card card-dashboard-eight pb-2">
                <h6 class="card-title">Khóa học mới nhất</h6>
                <div class="list-group">
                    @foreach($course_show as $item)
                    <div class="list-group-item border-top-0">
                        <p>{{ $item->c_name }}</p><span>{{ $item->id }}</span>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6 col-xl-6">
            <div class="card card-dashboard-eight pb-2">
                <h6 class="card-title">Bài viết mới nhất</h6>
                <div class="list-group">
                    @foreach($article_show as $item)
                    <div class="list-group-item border-top-0">
                        <i class="flag-icon flag-icon-us flag-icon-squared"></i>
                        <p>{{ $item->a_name }}</p><span>{{ $item->id }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    <div class="row row-sm row-deck">
        <div class="col-md-12 col-lg-4 col-xl-4">
            <div class="card card-dashboard-eight pb-2">
                <h6 class="card-title">Liên hệ mới nhất</h6>
                <div class="list-group">
                    @foreach($contact_show as $item)
                    <div class="list-group-item border-top-0">
                        <i class="flag-icon flag-icon-us flag-icon-squared"></i>
                        <p>{{ $item->name }}</p><span>{{ $item->phone }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-8 col-xl-8">
            <div class="card card-table-two">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mb-1">Đơn hàng mới nhất</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <div class="table-responsive country-table">
                    <table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
                        <thead>
                            <tr>
                                <th class="wd-lg-10p">ID</th>
                                <th class="wd-lg-55p tx-right">Thông Tin</th>
                                <th class="wd-lg-25p tx-right">MONEY</th>
                                <th class="wd-lg-25p tx-right">Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order_show as $item)
                            <tr>
                                <td class="tx-medium tx-inverse">{{ $item->id }}</td>
                                <td class="tx-right tx-medium tx-inverse">$658.20</td>
                                <td class="tx-right tx-medium tx-inverse">{{ $item->o_price }}</td>
                                <td class="tx-right tx-medium tx-inverse">Đơn mới</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-sm row-deck">
        <div class="col-md-12 col-lg-6 col-xl-6">
            <div class="card card-table-two">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mb-1">Tin tuyển dụng</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <div class="table-responsive country-table">
                    <table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
                        <thead>
                            <tr>
                                <th class="wd-lg-25p">ID</th>
                                <th class="wd-lg-25p">Name</th>
                                <th class="wd-lg-25p tx-right">Hạn hồ sơ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jobs_show as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td class="tx-right tx-medium tx-inverse">{{ $item->end_date }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6 col-xl-6">
            <div class="card card-dashboard-eight pb-2">
                <h6 class="card-title">EBook</h6>
                <div class="list-group">
                    @foreach($freebook_show as $item)
                    <div class="list-group-item border-top-0">
                        <i class="flag-icon flag-icon-us flag-icon-squared"></i>
                        <p>{{ $item->id }}</p><span>{{ $item->name }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
</div>
@endsection