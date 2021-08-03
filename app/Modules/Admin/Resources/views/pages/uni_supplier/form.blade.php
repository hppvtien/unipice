<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Name <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" data-title-seo=".meta_title" value="{{ old('name', $supplier->name ?? '') }}" data-slug=".slug" name="name">
                        @if($errors->first('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Tax Code <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" name="tax_code" value="{{ old('tax_code',$supplier->tax_code ?? '') }}">
                    </div>
                    @if($errors->first('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Phone <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" name="phone" value="{{ old('phone',$supplier->phone ?? '') }}">
                    </div>
                    @if($errors->first('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Email <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" name="email" value="{{ old('email',$supplier->email ?? '') }}">
                    </div>
                    @if($errors->first('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Address <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" name="address" value="{{ old('address',$supplier->address ?? '') }}">
                    </div>
                    @if($errors->first('address'))
                        <span class="text-danger">{{ $errors->first('address') }}</span>
                    @endif

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
                                <option title="Public" value="1">Public</option>
                                <option title="hide" value="0">Hide</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Avatar </label>
                        <input type="file" class="filepond" data-type="avatar" name="avatar">
                        <input type="hidden" name="avatar" id="avatar_uploads">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>