@extends('admin::layouts.master')
@section('content')
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Trang chủ</h2>
                <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Danh sách</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
                <button type="button" id="update-status" class="btn btn-info mr-2">Cập nhật trạng thái <i class="la la-plus-circle"></i></button>
            </div>
        </div>
    </div>
    <!-- /breadcrumb -->
    <!-- row -->
    <div class="row row-sm">
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-primary-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-12 text-white">Đơn hàng hôm nay</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white">{{ countOrder(0) }}</h4>
                                <p class="mb-0 tx-12 text-white op-7">So với hôm qua</p>
                            </div>
                            <span class="float-right my-auto ml-auto">
                                <i class="fas fa-arrow-circle-{{ (countOrder(0) - countOrder(1))>0 ? 'up':'down'; }} text-white"></i>
                                <span class="text-white op-7"> {{ countOrder(0) - countOrder(1)>0 ? '-':'+'; }}{{ (countOrder(0) - countOrder(1)) }}</span>
                            </span>
                        </div>
                    </div>
                </div>
                <span id="compositeline" class="pt-1">{{ countOrder(7).','.countOrder(6).','.countOrder(5).','.countOrder(4).','.countOrder(3).','.countOrder(2).','.countOrder(1).','.countOrder(0)}}</span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-danger-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-12 text-white">Số người truy cập hôm nay</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white">100.111</h4>
                                <p class="mb-0 tx-12 text-white op-7">So với hôm qua</p>
                            </div>
                            <span class="float-right my-auto ml-auto">
                                <i class="fas fa-arrow-circle-down text-white"></i>
                                <span class="text-white op-7"> -230</span>
                            </span>
                        </div>
                    </div>
                </div>
                <span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-success-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-12 text-white">Khách hàng yêu cầu liên hệ</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white">100</h4>
                                <p class="mb-0 tx-12 text-white op-7">So với hôm qua</p>
                            </div>
                            <span class="float-right my-auto ml-auto">
                                <i class="fas fa-arrow-circle-{{ (countContact(0) - countContact(1))>0 ? 'up':'down'; }} text-white"></i>
                                <span class="text-white op-7"> {{ countContact(0) - countContact(1)>0 ? '-':'+'; }}{{ (countContact(0) - countContact(1)) }}</span>
                            </span>
                        </div>
                    </div>
                </div>
                <span id="compositeline3" class="pt-1">{{ countContact(7).','.countContact(6).','.countContact(5).','.countContact(4).','.countContact(3).','.countContact(2).','.countContact(1).','.countContact(0)}}</span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-warning-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-12 text-white">Sản phẩm đã bán</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white">8200</h4>
                                <p class="mb-0 tx-12 text-white op-7">So với tuần trước</p>
                            </div>
                            <span class="float-right my-auto ml-auto">
                                <i class="fas fa-arrow-circle-up text-white"></i>
                                <span class="text-white op-7"> +152</span>
                            </span>
                        </div>
                    </div>
                </div>
                <span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
            </div>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                    <div class="d-flex justify-content-between">
                        <h4 id="view_chrt" class="card-title mb-0">Xem theo trạng thái đơn hàng</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <p class="tx-12 text-muted mb-0">Trạng thái đơn hàng tiếp nhận, thành công và hủy đơn.</p>
                </div>
                <div class="card-body">
                    <div class="total-revenue">
                        <div>
                            <h4>{{ count($order) }}</h4>
                            <label><span class="bg-primary"></span>Tiếp nhận</label>
                        </div>
                        <div>
                            <h4>{{ count($order_pendding) }}</h4>
                            <label><span class="bg-warning"></span>Kiểm tra và gửi hàng</label>
                        </div>
                        <div>
                            <h4>{{ count($order_success) }}</h4>
                            <label><span class="bg-success"></span>Hoàn thành</label>
                        </div>
                        <div>
                            <h4>{{ count($order_cancel) }}</h4>
                            <label><span class="bg-danger"></span>Hủy đơn</label>
                        </div>
                    </div>
                    <div id="bar" class="sales-bar mt-4"></div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="row row-sm row-deck">
    <div class="col-md-12 col-lg-4 col-xl-4">
            <div class="card card-table-two">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mb-1">Đại lý hàng đầu</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <span class="tx-12 tx-muted mb-3 ">Đại lý có số lượng mua lớn</span>
                <div class="table-responsive country-table">
                    <table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
                        <thead>
                            <tr>
                                <th class="wd-lg-25p">Tên đại lý</th>
                                <th class="wd-lg-25p tx-right">Trạng thái</th>
                                <th class="wd-lg-25p tx-right">Tổng điểm</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($uni_store as $key => $item)
                            <tr>
                                <td class="tx-right tx-medium tx-inverse">{{ $item->store_name }}</td>
                                <td class="tx-right tx-medium tx-inverse"> {{ $item->type_store }}</td>
                                <td class="tx-right tx-medium tx-danger">{{ $item->poin_store }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
                                <th class="wd-lg-25p">Ngày tạo</th>
                                <th class="wd-lg-25p tx-right">Mã đơn</th>
                                <th class="wd-lg-25p tx-right">Tên khách hàng</th>
                                <th class="wd-lg-25p tx-right">Phương thức thanh toán</th>
                                <th class="wd-lg-25p tx-right">Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order_new as $key => $item)
                            <tr>
                                <td>{{ $item->created_at }}</td>
                                <td class="tx-right tx-medium tx-inverse">{{ $item->code_invoice }}</td>
                                <td class="tx-right tx-medium tx-inverse">{{ $item->customer_name }}</td>
                                <td class="tx-right tx-medium tx-inverse"> {{ config('cart.pay_type')[$item->type_pay]['name'] }}</td>
                                <td class="tx-right tx-medium tx-danger">{{ $item->total_money }}</td>
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