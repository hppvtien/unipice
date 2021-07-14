<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Name <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" value="{{ old('s_name',$slide->s_name ?? '') }}" data-title-seo=".title_seo" data-slug=".slug" name="s_name" >
                        @if($errors->first('s_name'))
                            <span class="text-danger">{{ $errors->first('s_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="">Link </label>
                        <input type="text" class="form-control keypress-count" name="s_link" value="{{ old('s_link',$slide->s_link ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="">Description </label>
                        <input type="text" class="form-control keypress-count" name="s_desscription" value="{{ old('s_desscription',$slide->s_desscription ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Status <span>(*)</span></label>
                        <div class="SumoSelect sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="s_type" class="form-control SlectBox SumoUnder" onclick="console.log($(this).val())" onchange="console.log('change is firing')" tabindex="-1">
                                <option title="Public" value="1">Banner header</option>
                                <option title="Public" value="2">Banner Home 1</option>
                                <option title="Public" value="3">Banner Home 2</option>
                                <option title="Public" value="4">Banner Home 3</option>
                                <option title="Public" value="5">Banner Home 4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Sort <span>(*)</span></label>
                        <input type="number"  class="form-control"  name="s_sort" value="{{ old('s_sort', $slide->s_sort ?? '0') }}">
                        <span class="d-block text-warning">Thứ thự được sắp xếp từ bé đến lớn</span>
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
                        <div class="SumoSelect sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="s_status" class="form-control SlectBox SumoUnder" onclick="console.log($(this).val())" onchange="console.log('change is firing')" tabindex="-1">
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
                        <label for="exampleInputEmail1"> Banner </label>
                        <input type="hidden" name="avatar" value="{{ old('s_banner', $slide->s_banner ?? '') }}">
                        <input type="file" data-type="avatar" class="filepond" name="avatar">
                        <input type="hidden" name="s_banner" id="avatar_uploads">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
