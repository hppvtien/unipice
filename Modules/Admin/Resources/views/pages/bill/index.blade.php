@extends('admin::layouts.master')
@section('content')
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Tồn kho</h4>
                <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ index</span>
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
        <input class="form-control" id="search_k" type="hidden" data-url="{{ route('get_admin.bill.ajax_index') }}" placeholder="Tìm kiếm theo tên khách hàng" aria-label="Search">
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
    </div>
    <!-- breadcrumb -->
    <!-- row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive" id="show-search">
                        <table class="table mg-b-0 text-md-nowrap">
                            <thead>
                                <tr>
                                    <th rowspan="1"></th>
                                    <th rowspan="1"></th>
                                    <th colspan="3" class="text-center border-bottom border-left">Đầu kỳ</th>
                                    <th colspan="3" class="text-center border-bottom border-left">Trong kỳ</th>
                                    <th colspan="3" class="text-center border-bottom border-left  border-right">Cuối kỳ</th>

                                </tr>

                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border"></td>
                                    <td class="border"></td>
                                    <td class="font-weight-bold">Tổng tiền đầu kỳ:</td>
                                    <td colspan="2" class="border-right text-danger">{{ formatVnd($total_top) }}</td>
                                    <td class="font-weight-bold">Tổng tiền trong kỳ:</td>
                                    <td colspan="2" class="border-right text-danger">{{ formatVnd($total_mid) }}</td> 
                                    <td class="font-weight-bold">Tổng tiền cuối kỳ:</td>
                                    <td colspan="2" class="border-right text-danger">{{ formatVnd($total_bot) }}</td>
                                </tr>
                                <tr>
                                    <td class="border">ID</td>
                                    <td class="border">Tên sản phẩm</td>
                                    <td>Số lượng</td>
                                    <td>Giá</td>
                                    <td class="border-right">Tổng tiền</td>
                                    <td>Số lượng</td>
                                    <td>Giá</td>
                                    <td class="border-right">Tổng tiền</td>
                                    <td>Số lượng</td>
                                    <td>Giá</td>
                                    <td class="border-right">Tổng tiền</td>
                                </tr>
                                @foreach ($bill as $key => $item)
                                <tr>
                                    <td scope="row">{{ $item->id }}</td>
                                    <td scope="row">{{ getNameProduct($item->product_id) }}</td>
                                    <td scope="row">{{ $item->total_qty }}</td>
                                    <td scope="row">{{ formatVnd($item->price_lotproduct) }}</td>
                                    <td scope="row">{{ formatVnd($item->total_qty*$item->price_lotproduct) }}</td>
                                    <td scope="row">{{ $item->total_qty-$item->qty }}</td>
                                    <td scope="row">{{ formatVnd($item->price_lotproduct) }}</td>
                                    <td scope="row">{{ formatVnd(($item->total_qty - $item->qty)*$item->price_lotproduct) }}</td>
                                    <td scope="row">{{ $item->qty }}</td>
                                    <td scope="row">{{ formatVnd($item->price_lotproduct) }}</td>
                                    <td scope="row">{{ formatVnd($item->qty*$item->price_lotproduct) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
</div>
<div class="" id="myModal">


</div>
</div>


@stop