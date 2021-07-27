<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Nguời mua <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" disabled data-title-seo=".title_seo" value="{{ old('user_id', $uni_order->user_id ?? '') }}" name="user_id">
                    </div>
                   
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Khách hàng <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" disabled data-title-seo=".title_seo" value="{{ old('customer_name', $uni_order->customer_name ?? '') }}" name="customer_name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Mã số thuế <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" disabled data-title-seo=".title_seo" value="{{ old('taxcode', $uni_order->taxcode ?? '') }}" name="taxcode">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Ghi chú người mua <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" disabled data-title-seo=".title_seo" value="{{ old('pay_note', $uni_order->pay_note ?? '') }}" name="pay_note">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Số điện thoại <span>(*)</span></label>
                        <input type="number" class="form-control keypress-count" disabled data-title-seo=".title_seo" value="{{ old('phone', $uni_order->phone ?? '') }}" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Kiểu thanh toán <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" disabled data-title-seo=".title_seo" value="{{ old('type_pay', $uni_order->type_pay ?? '') }}" name="type_pay">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Kiểu thanh toán <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" disabled data-title-seo=".title_seo" value="{{ old('type_pay', $uni_order->type_pay ?? '') }}" name="type_pay">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Ngày tạo đơn <span>(*)</span></label>
                        <input type="datetime" class="form-control keypress-count" disabled data-title-seo=".title_seo" value="{{ old('created_at', $uni_order->created_at ?? '') }}" name="created_at">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Chi tiết đơn hàng <span>(*)</span></label>
                        
                        <div class="table-responsive">
                            <table class="table mg-b-0 text-md-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Giá</th>
                                        <th>Hình ảnh</th>
                                        <th>Tổng tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse(json_decode($uni_order->cart_info) as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>
                                            <p><span class="text-success">{{ $item->name }}</span></p>
                                        </td>
                                        <td>
                                            {{ $item->qty }}
                                        </td>
                                        <td>
                                            {{ $item->price }}
                                        </td>
                                        <td>
                                            {{ $item->options->images }}
                                        </td>
                                        <td>
                                            {{ $item->subtotal }}
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                                <tr class="bg-primary">
                                    <td colspan="5"><span class="text-light">Giảm giá</span></td>
                                    <td colspan="5"><span class="text-light">{{ $uni_order->product_sale ?? 0 }}</span></td>
                                </tr>
                                <tr class="bg-primary">
                                    <td colspan="5"><span class="text-light">Tổng tiền</span></td>
                                    <td colspan="5"><span class="text-light">{{ $uni_order->total_money }}</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Action <span>(*)</span></label>
                        <div>
                            <button class="btn btn-info"><i class="la la-save"></i> Save</button>
                            <button class="btn btn-success"><i class="la la-check-circle"></i> Save & Edit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Status <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="status" class="form-control SlectBox SumoUnder" tabindex="-1">
                                @foreach($status as $key => $item)
                                    <option title="Public" value="{{ $key }}" {{ $uni_order->status == $key ? "selected" : "" }}>{{ $item['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
