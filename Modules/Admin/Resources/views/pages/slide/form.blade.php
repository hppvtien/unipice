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
                                <option title="Public" {{ $slide->s_type == 1 ? 'selected' : '' }} value="1">Banner header</option>
                                <option title="Public" {{ $slide->s_type == 2 ? 'selected' : '' }} value="2">Banner Home 1</option>
                                <option title="Public" {{ $slide->s_type == 3 ? 'selected' : '' }} value="3">Banner Home 2</option>
                                <option title="Public" {{ $slide->s_type == 4 ? 'selected' : '' }} value="4">Banner Home 3</option>
                                <option title="Public" {{ $slide->s_type == 5 ? 'selected' : '' }} value="5">Banner Home 4</option>
                                <option title="Public" {{ $slide->s_type == 6 ? 'selected' : '' }} value="6">Banner Post Category</option>
                                <option title="Public" {{ $slide->s_type == 7 ? 'selected' : '' }} value="7">Banner Post Single</option>
                                <option title="Public" {{ $slide->s_type == 8 ? 'selected' : '' }} value="8">Banner Product Category</option>
                                <option title="Public" {{ $slide->s_type == 9 ? 'selected' : '' }} value="9">Banner Product Single</option>
                                <option title="Public" {{ $slide->s_type == 10 ? 'selected' : '' }} value="10">Banner About</option>
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
                    @if(isset($slide->s_banner))
                    <p>
                        <img src="{{ pare_url_file($slide->s_banner) }}" alt="" style="width: 100%;height: auto">
                    </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>
