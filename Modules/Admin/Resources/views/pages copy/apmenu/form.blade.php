<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Name <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" value="{{ old('name',$jobs->name ?? '') }}" data-title-seo=".title_seo" data-slug=".slug" name="name">
                        @if($errors->first('name')) 
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Slug <span>(*)</span></label>
                        <input type="text" class="form-control slug" name="slug" value="{{ old('slug',$jobs->slug ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="">Desscription </label>
                        <textarea  class="form-control keypress-count" name="desscription" cols="10" rows="3">{{ old('desscription',$jobs->desscription ?? '') }}</textarea>
                        @if($errors->first('desscription'))
                        <span class="text-danger">{{ $errors->first('desscription') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="">Content </label>
                        <textarea name="content" id="article-ckeditor" cols="30" rows="5">{!! old('content',$jobs->content ?? '') !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="">Phone </label>
                        <input type="text" class="form-control keypress-count" name="phone" value="{{ old('phone',$jobs->phone ?? '') }}">
                    </div>
                    @if($errors->first('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="">Email </label>
                        <input type="text" class="form-control keypress-count" name="email" value="{{ old('email',$jobs->email ?? '') }}">
                    </div>
                    @if($errors->first('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="">Address </label>
                        <input type="text" class="form-control keypress-count" name="address" value="{{ old('address',$jobs->address ?? '') }}">
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
                        <label for="exampleInputEmail1"> Hạn nộp CV <span>(*)</span></label>
                        <input type="date" class="form-control keypress-count" name="end_date" value="{{ old('end_date',$jobs->end_date ?? '') }}">
                    </div>
                    @if($errors->first('end_date'))
                    <span class="text-danger">{{ $errors->first('end_date') }}</span>
                    @endif
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Status <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="status" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="Public" value="1" {{ ($jobs->status ?? 0) == 1 ? 'selected' : '' }}>Active</option>
                                <option title="hide" value="0" {{ ($jobs->status ?? 0) == 0 ? 'selected' : '' }}>No Active</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label class="" for="exampleInputEmail1"> Hot Job </label>
                        <div class="form-group">
                            <label class="box-checkbox"> Nổi bật
                                <input type="radio" name="is_hot" {{ ($jobs->is_hot ?? 0) == 1 ? 'checked' : '' }} value="1">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="box-checkbox"> Không nổi bật
                                <input type="radio" name="is_hot" {{ ($jobs->is_hot ?? 0) ==  0 ? 'checked' : '' }} value="0">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@section('scriptck')
<script src="{{ asset('plugin/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('plugin/ckfinder/ckfinder.js') }}"></script>
<script type="text/javascript">
    CKEDITOR.replace('article-ckeditor', {
        filebrowserBrowseUrl: "{{ asset('ckfinder/ckfinder.html') }}",
        filebrowserImageBrowseUrl: "{{ asset('/plugin/ckfinder/ckfinder.html?type=Images') }}",
        filebrowserFlashBrowseUrl: "{{ asset('/plugin/ckfinder/ckfinder.html?type=Flash') }}",
        filebrowserUploadUrl: "{{ asset('/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}",
        filebrowserImageUploadUrl: "{{ asset('/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}",
        filebrowserFlashUploadUrl: "{{ asset('/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}",
    });
</script>
@stop