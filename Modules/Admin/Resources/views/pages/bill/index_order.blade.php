@extends('admin::layouts.master')
@section('content')
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between row">
        <div class="my-auto md-form form-sm form-2 pl-0 col-1">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Doanh thu</h4>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content col-2">
            <div>
                <select name="range_date" id="range_date" class="form-control">
                    <option title="7 ngày gần nhất" value="" selected>Khoảng thời gian</option>
                    <option title="7 ngày gần nhất" value="7">7 ngày gần nhất</option>
                    <option title="30 ngày gần nhất" value="30">30 ngày gần nhất</option>
                    <option title="6 tháng gần nhất" value="180">6 Tháng gần nhất</option>
                    <option title="1 năm gần nhât" value="365">1 năm gần nhât</option>
                </select>
            </div>
        </div>
        <input class="form-control" id="search_k" type="hidden" data-url="{{ route('get_admin.bill.search_ajax') }}" placeholder="Tìm kiếm theo tên khách hàng" aria-label="Search">
        <div class="md-form form-sm form-2 pl-0 col-3" style="margin: auto;">
            <div class="form-group">
                <label for="exampleInputEmail1" class="required">Từ ngày <span>(*)</span></label>
                <input type="date" class="form-control keypress-count" value="" name="from_date">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="required">Tới ngày <span>(*)</span></label>
                <input type="date" class="form-control keypress-count" value="" name="to_date">
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content col-2">
            <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                <select name="type_pay" id="type_pay" class="form-control" tabindex="-1">
                    <option title="Phương thức thanh toán" disabled selected>Chọn phương thức thanh toán</option>
                    <option title="Chuyển khoản" value="1">Chuyển khoản</option>
                    <option title="COD" value="2">COD</option>
                    <option title="Momo" value="3">Momo</option>
                    <option title="VnPay" value="4">VnPay</option>
                </select>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <!-- row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        Tổng doanh thu: <span class="text-danger">{{ formatVnd($order_total) }}</span>
                    </div>
                    <div class="table-responsive">
                        <span id="show-search"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
</div>
@stop