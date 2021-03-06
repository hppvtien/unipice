<form class="form-horizontal" autocomplete="off" method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Danh mục bài viết <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" data-title-seo=".meta_title"
                            value="{{ old('name', $postcategory->name ?? '') }}" data-slug=".slug" name="name">
                        @if ($errors->first('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Slug <span>(*)</span></label>
                        <input type="text" class="form-control slug" name="slug"
                            value="{{ old('slug', $postcategory->slug ?? '') }}">
                        @if ($errors->first('slug'))
                            <span class="text-danger">{{ $errors->first('slug') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Mô tả <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count"
                            data-desscription-seo=".meta_desscription" name="desscription"
                            value="{{ old('desscription', $postcategory->desscription ?? '') }}">
                        @if ($errors->first('desscription'))
                            <span class="text-danger">{{ $errors->first('desscription') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Nội dung <span>(*)</span></label>
                        <input type="text" class="form-control content" name="content"
                            value="{{ old('content', $postcategory->content ?? '') }}">
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
                                @foreach ($uni_postcategory as $item)
                                    <option value="{{ $item->id }}"
                                        {{ ($postcategory->parent_id ?? 0) == $item->id ? 'selected' : '' }}>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Sắp xếp <span>(*)</span></label>
                        <input type="number" class="form-control" name="order"
                            value="{{ old('order', $postcategory->order ?? '0') }}">
                        <span class="d-block text-warning">Thứ thự được sắp xếp từ bé đến lớn</span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ảnh  </label>
                        <input type="file" class="form-control" name="banner" value="">
                    </div>
                    <input type="hidden" class="form-control" name="bannerold"
                        value="{{ old('banner', $postcategory->banner ?? '') }}">
                </div>
            </div>
            <div class="card  box-shadow-0">
                <div class="card-header">
                    <h4 class="card-title mb-1">SEO <a href="" class="js-action-seo" style="float: right"><i
                                class="la la-edit"></i> Edit</a></h4>
                    <div class="view-seo">
                        <a href="" class="view-seo-title meta_title">
                            {{ old('meta_title', $postcategory->meta_title ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}
                        </a>
                        <p class="view-seo-slug slug">
                            {{ old('slug', $postcategory->slug ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}
                        </p>
                        <p class="mb-2 view-seo-description meta_desscription">
                            {{ old('meta_desscription', $postcategory->meta_desscription ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}

                        </p>
                    </div>
                </div>
                <div class="card-body pt-3 box-seo hide">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Tiêu đề
                            SEO<span>(*)</span></label>
                        <input type="text" class="form-control meta_title" name="meta_title" id="meta_title"
                            value="{{ old('meta_title', $postcategory->meta_title ?? '') }}">
                        @if ($errors->first('meta_title'))
                            <span class="text-danger">{{ $errors->first('meta_title') }}</span><br>
                        @endif
                        <span class="text-danger" id="count_title"></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Mô tả SEO
                            <span>(*)</span></label>
                        <input type="text" class="form-control meta_desscription" name="meta_desscription"
                            id="meta_desscription"
                            value="{{ old('meta_desscription', $postcategory->meta_desscription ?? '') }}">
                        @if ($errors->first('meta_desscription'))
                            <span class="text-danger">{{ $errors->first('meta_desscription') }}</span><br>
                        @endif
                        <span class="text-danger" id="count_des"></span>
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
                                <option title="hide" value="0" {{ ($postcategory->status ?? 0) == 0 ? 'selected' : '' }}>No Active</option>
                                <option title="Public" value="1" {{ ($postcategory->status ?? 0) == 1 ? 'selected' : '' }}>Active</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Ảnh </label>
                        <input type="hidden" name="delete_thumbnail"
                            value="{{ old('delete_thumbnail', $postcategory->thumbnail ?? '') }}">
                        <input type="file" class="filepond" data-type="avatar" name="avatar">
                        <input type="hidden" name="thumbnail" id="avatar_uploads">
                        <span class="d-block text-warning">Kích thước 1440px X 380px</span>
                    </div>
                    @if (isset($postcategory->thumbnail))
                        <p>
                            <img src="{{ pare_url_file($postcategory->thumbnail) }}" alt=""
                                style="width: 100%;height: auto">
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>
