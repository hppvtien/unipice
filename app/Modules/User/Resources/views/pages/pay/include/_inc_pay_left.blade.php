<div class="pay-left">
    <h3 class="pay-title">Chọn phương thức thanh toán</h3>
    <div class="lists lists-payments">
        @foreach (config('cart.pay_type') as $key => $item)
            <div class="item item-2">
                <label class="box-checkbox js-pay-type">
                    <input type="radio" name="type_pay" {{ $key == 0 ? 'checked' : '' }} value="{{ $item['type'] }}">
                    <b>{{ $item['name'] }}</b>
                    <span class="checkmark"></span>
                </label>
            </div>
        @endforeach
    </div>

    <div style="clear: both"></div>
    <h3 class="pay-title mt15">Thông tin khách hàng</h3>
    <div class="lists lists-info">
        <div class="item item-1">
            <input type="hidden" class="form-control" name="method_invoice" id="method_invoice"
                value="#00<?php echo rand(1000, 9999); ?>">
            <div class="form-group">
                <input type="email" name="method_email" class="form-control" placeholder="Email của bạn"
                    value="{{ get_data_user('web', 'email') }}">
            </div>
            <div class="form-group">
                <input type="phone" name="method_phone" class="form-control" placeholder="Số điện thoại của bạn"
                    value="{{ get_data_user('web', 'phone') }}">
            </div>
            <div class="form-group">
                <div class="">
                    <input type="text" required class="form-control" required name="method_address" id="method_address"
                        placeholder="Vui lòng nhập địa chỉ">
                        <div class="text-danger method_address" ></div>
                </div>
            </div>
            <div class="form-group">
                <input type="text" name="method_customer" class="form-control" placeholder="Họ tên của bạn"
                    value="{{ get_data_user('web', 'name') }}">
            </div>

            <div class="add-form-company row item-1 mr-0 ml-0">

            </div>
            <div class="form-group row">
                <div class="col-6">
                    <input checked class="form-check-input company_us" type="radio" name="group_buy" id="inlineRadio1"
                        value="0">
                    <label class="form-check-label ml20" for="inlineRadio1">Cá nhân</label>
                </div>
                <div class="col-6">
                    <input class="form-check-input company_us" type="radio" name="group_buy" id="company_us" value="1">
                    <label class="form-check-label ml20" for="inlineRadio2">Tổ chức</label>
                </div>
            </div>
        </div>
    </div>
</div>
