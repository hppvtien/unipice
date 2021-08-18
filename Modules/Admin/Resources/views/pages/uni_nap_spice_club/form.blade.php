<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                  
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Khách hàng <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" disabled data-title-seo=".title_seo" value="{{ old('customer_name', $uni_order->name ?? '') }}" name="customer_name">
                    </div>    
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Số điện thoại <span>(*)</span></label>
                        <input type="number" class="form-control keypress-count" disabled data-title-seo=".title_seo" value="{{ old('phone', $uni_order->phone ?? '') }}" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Kiểu thanh toán <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" disabled data-title-seo=".title_seo" value="{{ config('cart.pay_type')[$uni_order->type_pay]['name'] }}" name="type_pay">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Ngày tạo đơn <span>(*)</span></label>
                        <input type="datetime" class="form-control keypress-count" disabled data-title-seo=".title_seo" value="{{ old('created_at', $uni_order->created_at ?? '') }}" name="created_at">
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
