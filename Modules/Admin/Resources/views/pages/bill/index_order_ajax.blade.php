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
