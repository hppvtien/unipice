<style>
    .text-wrap .example .form-group {
        margin-bottom: 1rem;
    }

    .tab-course-content .lists .item {
        border: 1px solid #dedede;
        margin-bottom: 10px;
        padding: 10px;
    }

    .tab-course-content .lists .item p {
        margin-bottom: 0.2rem;
    }

    .tab-course-content .lists .item p:last-child span {
        font-size: 13px;
        color: #031b4e;
        font-weight: 700;
    }

</style>
<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="text-wrap">
                    <div class="example">
                        <div class="panel panel-primary tabs-style-1">

                            <div class="tab-content">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required">Tiêu đề <span>(*)</span></label>
                                    <input type="text" class="form-control keypress-count"
                                        value="{{ old('name', $uni_post->name ?? '') }}" data-title-seo=".meta_title"
                                        data-slug=".slug" name="name">
                                    @if ($errors->first('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required">Slug <span>(*)</span></label>
                                    <input type="text" class="form-control slug" name="slug"
                                        value="{{ old('slug', $uni_post->slug ?? '') }}">
                                    @if ($errors->first('slug'))
                                        <span class="text-danger">{{ $errors->first('slug') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required">Mô tả
                                        <span>(*)</span></label>
                                    <input type="text" class="form-control keypress-count"
                                        data-desscription-seo=".meta_desscription" name="desscription"
                                        value="{{ old('desscription', $uni_post->desscription ?? '') }}">
                                    @if ($errors->first('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="required"> Tags
                                                <span>(*)</span></label>
                                            <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0"
                                                role="button" aria-expanded="true">
                                                <select name="tags[]" class="form-control  SumoUnder js-select2"
                                                    tabindex="-1" multiple>
                                                    @foreach ($uni_tag as $tag)
                                                        <option title="{{ $tag->name }}"
                                                            {{ in_array($tag->id, $tagOld) ? 'selected' : '' }}
                                                            value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @if ($errors->first('tags'))
                                            <span class="text-danger">{{ $errors->first('tags') }}</span>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="required">Danh mục bài viết
                                                <span>(*)</span></label>
                                            <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0"
                                                role="button" aria-expanded="true">
                                                <select name="category_id" class="form-control SlectBox SumoUnder"
                                                    tabindex="-1">
                                                    @foreach ($uni_postcategory as $category)
                                                        <option title="{{ $category->name }}"
                                                            {{ old('category_id', $uni_post->category_id ?? 0) == $category->id ? 'selected' : '' }}
                                                            value="{{ $category->id }}">{{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @if ($errors->first('category_id'))
                                                <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required"> Nội dung <span>(*)</span></label>
                                    <textarea name="content" class="form-control" id="article-ckeditor" cols="30"
                                        rows="10">{{ old('content', $uni_post->content ?? '') }}</textarea>
                                    @if ($errors->first('content'))
                                        <span class="text-danger">{{ $errors->first('content') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required">Thứ tự <span>(*)</span></label>
                                    <input type="number" class="form-control order" name="order"
                                        value="{{ old('order', $uni_post->order ?? '') }}">
                                    @if ($errors->first('order'))
                                        <span class="text-danger">{{ $errors->first('order') }}</span>
                                    @endif
                                </div>
                                <div class="card  box-shadow-0">
                                    <div class="card-header">
                                        <h4 class="card-title mb-1">SEO <a href="" class="js-action-seo" style="float: right"><i
                                                    class="la la-edit"></i> Edit</a></h4>
                                        <div class="view-seo">
                                            <a href="" class="view-seo-title meta_title">
                                                {{ old('meta_title', $uni_post->meta_title ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}
                                            </a>
                                            <p class="view-seo-slug slug">
                                                {{ old('slug', $uni_post->slug ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}
                                            </p>
                                            <p class="mb-2 view-seo-description meta_desscription">
                                                {{ old('meta_desscription', $uni_post->meta_desscription ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}
                    
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-body pt-3 box-seo hide">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="required">Tiêu đề SEO <span>(*)</span></label>
                                            <input type="text" class="form-control meta_title" name="meta_title" id="meta_title"
                                                value="{{ old('meta_title', $uni_post->meta_title ?? '') }}">
                                            @if ($errors->first('meta_title'))
                                                <span class="text-danger">{{ $errors->first('meta_title') }}</span>
                                            @endif
                                            <span class="text-danger" id="count_title"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="required">Mô tả SEO <span>(*)</span></label>
                                            <input type="text" class="form-control meta_desscription" name="meta_desscription"
                                                id="meta_desscription"
                                                value="{{ old('meta_desscription', $uni_post->meta_desscription ?? '') }}">
                                            @if ($errors->first('meta_desscription'))
                                                <span class="text-danger">{{ $errors->first('meta_desscription') }}</span>
                                            @endif
                                            <span class="text-danger" id="count_des"></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <label for="exampleInputEmail1"> Trạng thái <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button"
                            aria-expanded="true">
                            <select name="status" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="hide" value="0" {{ ($uni_post->status ?? 0) == 0 ? 'selected' : '' }}>No Active</option>
                                <option title="Public" value="1" {{ ($uni_post->status ?? 0) == 1 ? 'selected' : '' }}>Active</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Ảnh </label>
                        <input type="hidden" name="delete_thumbnail" value="{{ old('delete_thumbnail', $uni_post->thumbnail ?? '') }}">
                        <input type="file" class="filepond" data-type="avatar" name="avatar">
                        <input type="hidden" name="thumbnail" id="avatar_uploads">
                    </div>
                    @if(isset($uni_post->thumbnail))
                    <p>
                        <img src="{{ pare_url_file($uni_post->thumbnail) }}" alt="" style="width: 100%;height: auto">
                    </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>
@section('scriptck')
<script>
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
