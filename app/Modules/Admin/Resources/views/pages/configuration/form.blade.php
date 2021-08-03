<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <h4 class="card-title pt-3 pl-3 mb-1">Thông tin cơ bản</h4>
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Tên công ty <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('name', $configuration->name ?? '') }}" name="name" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Địa chỉ <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('address', $configuration->address ?? '') }}" name="address" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Tax ID <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('tax_id', $configuration->tax_id ?? '') }}" name="tax_id" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Email <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('email', $configuration->email ?? '') }}" name="email" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Hotline <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('hotline', $configuration->hotline ?? '') }}" name="hotline" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Hotline khiếu nại <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('hotline_rp', $configuration->hotline_rp ?? '') }}" name="hotline_rp" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Facebook <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('facebook', $configuration->facebook ?? '') }}" name="facebook" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Youtube <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('youtube', $configuration->youtube ?? '') }}" name="youtube" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Twitter <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('twitter', $configuration->twitter ?? '') }}" name="twitter" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Instagram <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('instagram', $configuration->instagram ?? '') }}" name="instagram" >
                    </div>

                </div>
            </div>
            <div class="card  box-shadow-0">
                <h4 class="card-title pt-3 pl-3 mb-1">Footer</h4>
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Mô tả Unimind <span>(*)</span></label>
                        <textarea name="footer_description" class="form-control" id="" cols="30" rows="3">{!! old('footer_description', $configuration->footer_description ?? '') !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Content <span>(*)</span></label>
                        <textarea name="footer_bottom" class="form-control" id="" cols="30" rows="3">{!! old('footer_bottom', $configuration->footer_bottom ?? '') !!}</textarea>
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
                        <label for="exampleInputEmail1"> Logo </label>
                        <input type="hidden" name="d_avatar" value="{{ old('logo', $configuration->logo ?? '') }}">                       
                        <input type="file" class="filepond" data-type="avatar" name="avatar">
                        <input type="hidden" name="logo" id="avatar_uploads">
                    </div>
                    @if(isset($configuration->logo))
                        <p>
                            <img src="{{ pare_url_file($configuration->logo) }}" alt="" style="width: 100%;height: auto">
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>
