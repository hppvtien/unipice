@extends('admin::layouts.master')
@section('content')
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between row">

        <div class="d-block my-xl-auto right-content col-3">
            <div class="form-group">
                <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                    <label for="exampleInputEmail1" class="required">Khoảng thời gian <span>(*)</span></label>
                    <select name="range_date" id="range_date" class="form-control" tabindex="-1">
                        <option title="7 ngày gần nhất" value="" selected>Khoảng thời gian</option>
                        <option title="7 ngày gần nhất" value="7">7 ngày gần nhất</option>
                        <option title="30 ngày gần nhất" value="30">30 ngày gần nhất</option>
                        <option title="6 tháng gần nhất" value="180">6 Tháng gần nhất</option>
                        <option title="1 năm gần nhât" value="365">1 năm gần nhât</option>
                    </select>
                </div>
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
        <div class="d-block my-xl-auto right-content col-3">
            <div class="form-group">
                <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                    <label for="exampleInputEmail1" class="required">Chọn phương thức thanh toán <span>(*)</span></label>
                    <select name="type_pay" id="type_pay" class="form-control" tabindex="-1">
                        <option title="Phương thức thanh toán" disabled selected>Chọn phương thức thanh toán</option>
                        <option title="Chuyển khoản" value="1">Chuyển khoản</option>
                        <option title="COD" value="2">COD</option>
                        <option title="Momo" value="3">Momo</option>
                        <option title="VnPay" value="4">VnPay</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                    <label for="exampleInputEmail1" class="required">Trạng thái đơn hàng <span>(*)</span></label>
                    <select name="pay_status" id="pay_status" class="form-control" tabindex="-1">
                        <option title="Trạng thái" disabled selected>Trạng thái đơn hàng</option>
                        <option title="Public" value="0">Tiếp nhận</option>
                        <option title="Public" value="1">Kiểm tra và gửi hàng</option>
                        <option title="Public" value="2">Hoàn thành</option>
                        <option title="Public" value="3">Đã hủy</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content col-12">
            <input class="form-control" id="search_k" type="hidden" data-url="{{ route('get_admin.bill.search_ajax') }}" placeholder="Tìm kiếm theo tên khách hàng" aria-label="Search">
        </div>
        <div class="my-auto md-form form-sm form-2 pl-0 col-12">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Doanh thu</h4>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <!-- row -->
    <div class="row bg-white pt-3" id="show-search">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        Tổng doanh thu: <span class="text-danger">{{ formatVnd($order_total) }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Bán lẻ</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Đại lý</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">SpiceClub</a>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <p><button class="btn bg-light">Tổng doanh thu: <span class="text-danger">{{ formatVnd($order_total_notstore) }}</span></button></p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr class="bg-primary font-weight-bold text-light">
                                <th scope="row">#</th>
                                <td>Mã đơn hàng</td>
                                <td>Tổng tiền</td>
                                <td>Kiểu sản phẩm</td>
                                <td>Ngày tạo</td>
                            </tr>
                            @forelse ($order_store as $key => $item )
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="javascript:;" data-toggle="modal" data-target="#exampleModa{{ $item->id }}">{{ $item->code_invoice }}</a></td>
                                <td>{{ formatVnd($item->total_money) }}</td>
                                <td><span class="{{ $item->combo_id == 0 ? 'bg-success' : 'bg-info' }} text-light p-2">{{ $item->combo_id == 0 ? 'Sản phẩm' : 'FlashSale' }}</span></td>
                                <td>{{ $item->updated_at }}</td>
                            </tr>
                            <div class="modal fade" id="exampleModa{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Đơn hàng:{{ $item->code_invoice }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-1">
                                                <div class="text-center p-2">#</div>
                                            </div>
                                            <div class="col-5">
                                                <div class="text-center p-2">Tên sản phẩm</div>
                                            </div>
                                            <div class="col-3">
                                                <div class="text-center p-2">Đơn giá</div>
                                            </div>
                                            <div class="col-3">
                                                <div class="text-center p-2">Số lượng</div>
                                            </div>
                                            <div class="col-12 row">
                                                <?php $sttcart = 1; ?>
                                                @foreach (json_decode($item->cart_info) as $value)
                                                    <div class="col-1 text-center">{{ $sttcart++ }}</div>
                                                    <div class="col-5 text-center">{{ $value->name }}</div>
                                                    <div class="col-3 text-center">{{ formatVnd($value->price) }}</div>
                                                    <div class="col-3 text-center">{{ $value->qty }}</div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <tr>
                                <th colspan="4" scope="row">Dữ liệu đang cập nhật</th>
                            </tr>
                            @endforelse
                        </table>
                        </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <p><button class="btn bg-light">Tổng doanh thu: <span class="text-danger">{{ formatVnd($order_total_store) }}</span></button></p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr class="bg-primary font-weight-bold text-light">
                        <th scope="row">#</th>
                        <td>Mã đơn hàng</td>
                        <td>Tổng tiền</td>
                        <td>Kiểu sản phẩm</td>
                        <td>Ngày tạo</td>
                    </tr>
                    @forelse ($order_notstore as $key => $item )
                    <tr>
                        <th scope="row">1</th>
                        <td><a href="javascript:;" data-toggle="modal" data-target="#exampleModa{{ $item->id }}">{{ $item->code_invoice }}</a></td>
                        <td>{{ formatVnd($item->total_money) }}</td>
                        <td><span class="{{ $item->combo_id == 0 ? 'bg-success' : 'bg-info' }} text-light p-2">{{ $item->combo_id == 0 ? 'Sản phẩm' : 'FlashSale' }}</span></td>
                        <td>{{ $item->updated_at }}</td>
                    </tr>
                    <div class="modal fade" id="exampleModa{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Đơn hàng:{{ $item->code_invoice }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body row">
                                    <div class="col-1">
                                        <div class="text-center p-2">#</div>
                                    </div>
                                    <div class="col-5">
                                        <div class="text-center p-2">Tên sản phẩm</div>
                                    </div>
                                    <div class="col-3">
                                        <div class="text-center p-2">Đơn giá</div>
                                    </div>
                                    <div class="col-3">
                                        <div class="text-center p-2">Số lượng</div>
                                    </div>
                                    <div class="col-12 row">
                                        <?php $sttcart = 1; ?>
                                        @foreach (json_decode($item->cart_info) as $value)
                                            <div class="col-1 text-center">{{ $sttcart++ }}</div>
                                            <div class="col-5 text-center">{{ $value->name }}</div>
                                            <div class="col-3 text-center">{{ formatVnd($value->price) }}</div>
                                            <div class="col-3 text-center">{{ $value->qty }}</div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <tr>
                        <th colspan="4" scope="row">Dữ liệu đang cập nhật</th>
                    </tr>
                    @endforelse
                </table>
            </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"><p><button class="btn bg-light">Tổng doanh thu: <span class="text-danger">{{ formatVnd($order_total_spice) }}</span></button></p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr class="bg-primary font-weight-bold text-light">
                                <th scope="row">#</th>
                                <td>Mã đơn hàng</td>
                                <td>Tổng tiền</td>
                                <td>Kiểu sản phẩm</td>
                                <td>Ngày tạo</td>
                            </tr>
                            @forelse ($order_spice as $key => $item )
                            <tr>
                                <th scope="row">1</th>
                                <td><a href="javascript:;" data-toggle="modal" data-target="#exampleModa{{ $item->id }}">{{ $item->code_invoice }}</a></td>
                                <td>{{ formatVnd($item->total_money) }}</td>
                                <td><span class="{{ $item->combo_id == 0 ? 'bg-success' : 'bg-info' }} text-light p-2">{{ $item->combo_id == 0 ? 'Sản phẩm' : 'FlashSale' }}</span></td>
                                <td>{{ $item->updated_at }}</td>
                            </tr>
                            <div class="modal fade" id="exampleModa{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Đơn hàng:{{ $item->code_invoice }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="col-1">
                                                <div class="text-center p-2">#</div>
                                            </div>
                                            <div class="col-5">
                                                <div class="text-center p-2">Tên sản phẩm</div>
                                            </div>
                                            <div class="col-3">
                                                <div class="text-center p-2">Đơn giá</div>
                                            </div>
                                            <div class="col-3">
                                                <div class="text-center p-2">Số lượng</div>
                                            </div>
                                            <div class="col-12 row">
                                                <?php $sttcart = 1; ?>
                                                @foreach (json_decode($item->cart_info) as $value)
                                                    <div class="col-1 text-center">{{ $sttcart++ }}</div>
                                                    <div class="col-5 text-center">{{ $value->name }}</div>
                                                    <div class="col-3 text-center">{{ formatVnd($value->price) }}</div>
                                                    <div class="col-3 text-center">{{ $value->qty }}</div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <tr>
                                <th colspan="4" scope="row">Dữ liệu đang cập nhật</th>
                            </tr>
                            @endforelse
                        </table>
                    </div></div>
              </div>
        </div>
    </div>
    <!-- row closed -->
</div>
@stop
