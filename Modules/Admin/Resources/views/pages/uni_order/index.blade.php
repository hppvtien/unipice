@extends('admin::layouts.master')
@section('content')
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between row">
        <div class="my-auto md-form form-sm form-2 pl-0 col-1">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Đơn hàng</h4>
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
        <div class="input-group md-form form-sm form-2 pl-0 col-3" style="margin: auto;">
            <input class="form-control" id="search_k" type="text" data-url="{{ route('get_admin.uni_order.search_ajax') }}" placeholder="Tìm kiếm theo tên khách hàng" aria-label="Search">
            <div class="input-group-append">
                <span class="input-group-text amber lighten-3"><i class="fas fa-search text-grey" aria-hidden="true"></i></span>
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
                    <div class="table-responsive" id="show-search">
                        <table class="table mg-b-0 text-md-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Khách hàng</th>
                                    <th>Mã đơn</th>
                                    <th>CODE</th>
                                    <th>Thanh toán</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày đặt</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($uni_order as $key => $item)

                                <tr>
                                    <th scope="row">{{ $key +1 }}</th>
                                    <td>
                                        <p><span>Họ tên: </span> <span class="text-success">{{ $item->user->name ?? "[N\A]" }}</span></p>
                                        <p><span>Email: </span> <span class="text-success">{{ $item->user->email ?? "[N\A]" }}</span></p>
                                    </td>
                                    <td>
                                        <p>{{ $item->code_invoice ?? "[N\A]" }}</p>
                                    </td>
                                    <td>
                                        {{ $item->t_code ?? "[N\A]" }}
                                    </td>
                                    <td>
                                        {{ config('cart.pay_type')[$item->type_pay]['name'] }}
                                    </td>
                                    <td>
                                        <b>{{ formatVnd($item->total_money) }}</b>
                                    </td>
                                    <td>
                                        <span class="badge {{ $item->getStatus($item->status)['class']  }}">{{ $item->getStatus($item->status)['name']  }}</span>
                                    </td>
                                    <td>
                                        {{ $item->created_at }}
                                    </td>

                                    <td>
                                        <a href="{{ route('get_admin.uni_order.edit', $item->id) }}" class="btn btn-xs btn-info"><i class="la la-edit"></i></a>
                                        <a href="{{ route('get_admin.uni_order.movetrash', $item->id) }}" class="btn btn-xs btn-danger"><i class="la la-trash"></i></a>
                                    </td>
                                </tr>
                                @empty
                                @endforelse

                            </tbody>

                        </table>

                    </div>
                    <div>
                        {!! $uni_order->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
</div>
@stop
