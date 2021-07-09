<form class="form-horizontal" autocomplete="off" method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Name <span>(*)</span></label>
                        <input type="text" class="form-control" value="{{ old('store_name', $uni_store->store_name ?? '') }}" name="store_name">
                        @if($errors->first('store_name'))
                        <span class="text-danger">{{ $errors->first('store_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Địa chỉ <span>(*)</span></label>
                        <input type="text" class="form-control" name="store_address" value="{{ old('store_address', $uni_store->store_address ?? '') }}">
                        @if($errors->first('store_address'))
                        <span class="text-danger">{{ $errors->first('store_address') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Số điện thoại <span>(*)</span></label>
                        <input type="text" class="form-control store_phone" name="store_phone" value="{{ old('store_phone', $uni_store->store_phone ?? '') }}">
                        @if($errors->first('store_phone'))
                        <span class="text-danger">{{ $errors->first('store_phone') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Diện tịch <span>(*)</span></label>
                        <input type="text" class="form-control store_area" name="store_area" value="{{ old('store_area', $uni_store->store_area ?? '') }}">
                        @if($errors->first('store_area'))
                        <span class="text-danger">{{ $errors->first('store_area') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Mã số thuế <span>(*)</span></label>
                        <input type="text" class="form-control store_taxcode" name="store_taxcode" value="{{ old('store_taxcode', $uni_store->store_taxcode ?? '') }}">
                        @if($errors->first('store_taxcode'))
                        <span class="text-danger">{{ $errors->first('store_taxcode') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Album </label>
                        <input type="file" class="form-control" name="store_album[]" value="" multiple>
                    </div>
                    <input type="hidden" class="form-control" name="albumold" multiple value="{{ old('store_album', $uni_store->store_album ?? '') }}">
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
                            <select name="store_status" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="hide" value="0">No Active</option>
                                <option title="Public" value="1">Active</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Ảnh đại diện </label>
                        <input type="file" class="filepond" data-type="avatar" name="avatar">
                        <input type="hidden" name="store_thumbnail" id="avatar_uploads">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>