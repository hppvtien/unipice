<form class="form-horizontal" autocomplete="off" method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Name <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count"
                            value="{{ old('name', $bank_info->name ?? '') }}"name="name">
                        @if ($errors->first('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Tài khoản <span>(*)</span></label>
                        <input type="text" class="form-control" name="account"
                            value="{{ old('account', $bank_info->account ?? '') }}">
                        @if ($errors->first('account'))
                            <span class="text-danger">{{ $errors->first('account') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Chủ thẻ <span>(*)</span></label>
                        <input type="text" class="form-control" name="master"
                            value="{{ old('master', $bank_info->master ?? '') }}">
                        @if ($errors->first('master'))
                            <span class="text-danger">{{ $errors->first('master') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Chi nhánh <span>(*)</span></label>
                        <input type="text" class="form-control" name="address"
                            value="{{ old('address', $bank_info->address ?? '') }}">
                        @if ($errors->first('address'))
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Hotline <span>(*)</span></label>
                        <input type="text" class="form-control" name="hotline"
                            value="{{ old('hotline', $bank_info->hotline ?? '') }}">
                            @if ($errors->first('hotline'))
                            <span class="text-danger">{{ $errors->first('hotline') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Email <span>(*)</span></label>
                        <input type="text" class="form-control" name="email"
                            value="{{ old('email', $bank_info->email ?? '') }}">
                            @if ($errors->first('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
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
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button"
                            aria-expanded="true">
                            <select name="status" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="Public" value="1">Public</option>
                                <option title="hide" value="0">Hide</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</form>
