<form class="form-horizontal" autocomplete="off" method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Name <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" value="{{ old('p_name', $pages->p_name ?? '') }}" data-title-seo=".title_seo" data-slug=".slug" name="p_name">
                        @if ($errors->first('p_name'))
                        <span class="text-danger">{{ $errors->first('p_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Slug <span>(*)</span></label>
                        <input type="text" class="form-control slug" name="p_slug" value="{{ old('p_slug',$pages->p_slug ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="">Desscription <span>(*)</span> </label>
                        <input type="text" class="form-control keypress-count" name="p_desscription" value="{{ old('p_desscription', $pages->p_desscription ?? '') }}">
                        @if ($errors->first('p_desscription'))
                        <span class="text-danger">{{ $errors->first('p_desscription') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="">Style <span>(*)</span> </label>
                        <input type="text" class="form-control keypress-count" name="p_style" value="{{ old('p_style', $pages->p_style ?? '') }}">
                        @if ($errors->first('p_style'))
                        <span class="text-danger">{{ $errors->first('p_style') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="">Content </label>
                        <textarea name="p_content" id="article-ckeditor" cols="30" rows="5">{!! old('p_content',$pages->p_content ?? '') !!}</textarea>
                        @if ($errors->first('p_content'))
                        <span class="text-danger">{{ $errors->first('p_content') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Title SEO <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" value="{{ old('p_title_seo', $pages->p_title_seo ?? '') }}" name="p_title_seo">
                        @if ($errors->first('p_title_seo'))
                        <span class="text-danger">{{ $errors->first('p_title_seo') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="">Desscription SEO <span>(*)</span> </label>
                        <input type="text" class="form-control keypress-count" name="p_desscription_seo" value="{{ old('p_desscription_seo', $pages->p_desscription_seo ?? '') }}">
                        @if ($errors->first('p_desscription_seo'))
                        <span class="text-danger">{{ $errors->first('p_desscription_seo') }}</span>
                        @endif
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
                        <label for="exampleInputEmail1"> Banner </label>
                        <input type="hidden" name="d_avatar" value="{{ old('p_banner', $pages->p_banner ?? '') }}">
                        <input type="file" class="filepond" data-type="avatar" name="avatar">
                        <input type="hidden" name="p_banner" id="avatar_uploads">
                    </div>
                    @if(isset($pages->p_banner))
                    <p>
                        <img src="{{ pare_url_file($pages->p_banner) }}" alt="" style="width: 100%;height: auto">
                    </p>
                    @endif
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