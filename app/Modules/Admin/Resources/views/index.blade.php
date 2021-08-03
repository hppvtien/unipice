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
                                <td class="tx-right tx-medium tx-inverse">{{ $item->price }}</td>
                                <td class="tx-right tx-medium tx-inverse">Đơn mới</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
    <!-- /row -->
</div>
@endsection