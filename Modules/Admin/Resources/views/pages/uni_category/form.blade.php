<form class="form-horizontal" autocomplete="off" method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Tên danh mục<span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" data-title-seo=".meta_title"
                            value="{{ old('name', $uni_cate->name ?? '') }}" data-slug=".slug" name="name">
                        @if ($errors->first('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Slug <span>(*)</span></label>
                        <input type="text" class="form-control slug" name="slug"
                            value="{{ old('slug', $uni_cate->slug ?? '') }}">
                        @if ($errors->first('slug'))
                            <span class="text-danger">{{ $errors->first('slug') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Mô tả <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count"
                            data-desscription-seo=".meta_desscription" name="desscription"
                            value="{{ old('desscription', $uni_cate->desscription ?? '') }}">
                        @if ($errors->first('desscription'))
                            <span class="text-danger">{{ $errors->first('desscription') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Nội dung <span>(*)</span></label>
                        <textarea name="content" class="form-control content" id="article-ckeditor" cols="30"
                            rows="10">{{ old('content', $uni_cate->content ?? '') }}</textarea>
                        @if ($errors->first('content'))
                            <span class="text-danger">{{ $errors->first('content') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Kế thừa <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button"
                            aria-expanded="true">
                            <select name="parent_id" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="ROOT" value="0">__ROOT__</option>
                                @foreach ($uni_category as $item)
                                    <option value="{{ $item->id }}"
                                        {{ ($uni_cate->parent_id ?? 0) == $item->id ? 'selected' : '' }}>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Sắp xếp <span>(*)</span></label>
                        <input type="number" class="form-control" name="order"
                            value="{{ old('order', $uni_cate->order ?? '0') }}">
                        <span class="d-block text-warning">Thứ thự được sắp xếp từ bé đến lớn</span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Hình ảnh icon <span>(*)</span></label>
                        <input type="file" class="form-control" name="icon_thumb" value="">
                        <span class="d-block text-warning">Kích thước 228px X 228px</span>
                    </div>
                    @if (isset($uni_cate->icon_thumb))
                    <p>
                        <img src="{{ pare_url_file_product($uni_cate->icon_thumb) }}" alt=""
                            style="width: 10%;height: auto;background: #0b2d25;">
                    </p>
                @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Hình ảnh thumbnail trang chủ
                            <span>(*)</span></label>
                        <input type="file" class="form-control" name="thumbnail" value="">
                        <span class="d-block text-warning">Kích thước 228px X 228px</span>
                    </div>
                    @if (isset($uni_cate->thumbnail))
                    <p>
                        <img src="{{ pare_url_file_product($uni_cate->thumbnail) }}" alt=""
                            style="width: 10%;height: auto;">
                    </p>
                @endif
                </div>
            </div>
            <div class="card  box-shadow-0">
                <div class="card-header">
                    <h4 class="card-title mb-1">SEO <a href="" class="js-action-seo" style="float: right"><i
                                class="la la-edit"></i> Edit</a></h4>
                    <div class="view-seo">
                        <a href="" class="view-seo-title meta_title">
                            {{ old('meta_title', $uni_cate->meta_title ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}
                        </a>
                        <p class="view-seo-slug slug">
                            {{ old('slug', $uni_cate->slug ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}
                        </p>
                        <p class="mb-2 view-seo-description meta_desscription">
                            {{ old('meta_desscription', $uni_cate->meta_desscription ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}

                        </p>
                    </div>
                </div>
                <div class="card-body pt-3 box-seo hide">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Tiêu đề SEO <span>(*)</span></label>
                        <input type="text" class="form-control meta_title" name="meta_title" id="meta_title"
                            value="{{ old('meta_title', $uni_cate->meta_title ?? '') }}">
                        @if ($errors->first('meta_title'))
                            <span class="text-danger">{{ $errors->first('meta_title') }}</span>
                        @endif
                        <span class="text-danger" id="count_title"></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Mô tả SEO <span>(*)</span></label>
                        <input type="text" class="form-control meta_desscription" name="meta_desscription"
                            id="meta_desscription"
                            value="{{ old('meta_desscription', $uni_cate->meta_desscription ?? '') }}">
                        @if ($errors->first('meta_desscription'))
                            <span class="text-danger">{{ $errors->first('meta_desscription') }}</span>
                        @endif
                        <span class="text-danger" id="count_des"></span>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Từ khóa <span>(*)</span></label>
                        <input type="text" class="form-control meta_keyword" name="meta_keyword"
                            value="{{ old('meta_keyword', $uni_cate->meta_keyword ?? '') }}">
                        @if ($errors->first('meta_keyword'))
                            <span class="text-danger">{{ $errors->first('meta_keyword') }}</span>
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
                        <label for="exampleInputEmail1"> Trạng thái <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button"
                            aria-expanded="true">
                            <select name="status" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="hide" {{ ($uni_cate->status ?? 0) == 0 ? 'selected' : '' }} value="0">
                                    No Active</option>
                                <option title="Public" {{ ($uni_cate->status ?? 1) == 1 ? 'selected' : '' }}
                                    value="1">Active</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ảnh </label>
                        <input type="hidden" name="delete_thumbnail"
                            value="{{ old('delete_thumbnail', $uni_cate->banner ?? '') }}">
                        <input type="file" class="filepond" data-type="avatar" name="avatar">
                        <input type="hidden" name="banner" id="avatar_uploads">
                        <span class="d-block text-warning">Kích thước 1440px X 380px</span>
                    </div>
                    @if (isset($uni_cate->banner))
                        <p>
                            <img src="{{ pare_url_file($uni_cate->banner) }}" alt=""
                                style="width: 100%;height: auto">
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