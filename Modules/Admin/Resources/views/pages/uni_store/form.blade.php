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
                        <label for="exampleInputEmail1" class="required"><span> Tỉnh - Thành Phố ( VD: Hải Phòng, Hà Nội, Quảng Ninh ) (*)</span></label>
                        <input type="text" class="form-control" name="store_province" value="{{ old('store_province', $uni_store->store_province ?? '') }}">
                        @if($errors->first('store_province'))
                        <span class="text-danger">{{ $errors->first('store_province') }}</span>
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
                        <label for="exampleInputEmail1" class="required">Tọa độ (lat) <span>(*)</span></label>
                        <input type="text" class="form-control store_lat" name="store_lat" value="{{ old('store_lat', $uni_store->store_lat ?? '') }}">
                        @if($errors->first('store_lat'))
                        <span class="text-danger">{{ $errors->first('store_lat') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Tọa độ (lng) <span>(*)</span></label>
                        <input type="text" class="form-control store_lng" name="store_lng" value="{{ old('store_lng', $uni_store->store_lng ?? '') }}">
                        @if($errors->first('store_lng'))
                        <span class="text-danger">{{ $errors->first('store_lng') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hình ảnh cửa hàng </label>
                        <input type="file" class="form-control" name="store_album[]" value="" multiple>
                    </div>
                    <input type="hidden" class="form-control" name="albumold" multiple value="{{ old('store_album', $uni_store->store_album ?? '') }}">
                    @if($uni_store->store_album != NULL)
                        <div class="row" style="border: 1px solid;padding-top:10px">
                            @forelse (json_decode($uni_store->store_album) as $key => $item)
                            <div class="col-3" data-rm="{{ $item }}" data-key="{{ $key }}" style="margin-bottom: 10px;position: relative; ">
                                <span class="close-img js-delete" data-url="{{ route('get_admin.uni_store.delete_album') }}" data-id="{{ $uni_store->id }}" album-data="{{ $item }}" style="position:absolute"><i class="la la-trash"></i></span>
                                <img src="/storage/uploads_store/{{ $item }}" class="card-img-top" alt="...">
                            </div>
                            @empty
                            @endforelse
                        </div>
                        @else
                        @endif
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
                        <label for="exampleInputEmail1"> Trạng thái <span>(*)</span></label> 
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="store_status" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="hide" value="0" {{ ($uni_store->store_status ?? 0) == 0 ? 'selected' : '' }}>Không duyệt</option>
                                <option title="Public" value="1" {{ ($uni_store->store_status ?? 0) == 1 ? 'selected' : '' }}>Đã duyệt</option>
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