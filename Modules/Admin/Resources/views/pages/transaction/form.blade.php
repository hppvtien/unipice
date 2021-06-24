<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Nguời mua <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" disabled data-title-seo=".title_seo" value="{{ old('t_user_id', $transaction->t_user_id ?? '') }}" name="t_user_id">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Nguời chốt <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" disabled data-title-seo=".title_seo" value="{{ old('t_admin_id', $transaction->t_admin_id ?? '') }}" name="t_admin_id">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Ghi chú người mua <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" disabled data-title-seo=".title_seo" value="{{ old('t_note', $transaction->t_note ?? '') }}" name="t_note">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Số điện thoại <span>(*)</span></label>
                        <input type="number" class="form-control keypress-count" disabled data-title-seo=".title_seo" value="{{ old('t_phone', $transaction->t_phone ?? '') }}" name="t_phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Kiểu thanh toán <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" disabled data-title-seo=".title_seo" value="{{ old('t_type_pay', $transaction->t_type_pay ?? '') }}" name="t_type_pay">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Ngày tạo đơn <span>(*)</span></label>
                        <input type="datetime" class="form-control keypress-count" disabled data-title-seo=".title_seo" value="{{ old('created_at', $transaction->created_at ?? '') }}" name="created_at">
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
                            <select name="t_status" class="form-control SlectBox SumoUnder" tabindex="-1">
                                @foreach($status as $key => $item)
                                    <option title="Public" value="{{ $key }}" {{ $transaction->t_status == $key ? "selected" : "" }}>{{ $item['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
