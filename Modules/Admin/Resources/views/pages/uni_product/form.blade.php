<form class="form-horizontal" autocomplete="off" method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Name <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" data-title-seo=".meta_title" value="{{ old('name', $uni_product->name ?? '') }}" data-slug=".slug" name="name">
                        @if($errors->first('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Slug <span>(*)</span></label>
                        <input type="text" class="form-control slug" name="slug" value="{{ old('slug', $uni_product->slug ?? '') }}">
                        @if($errors->first('slug'))
                        <span class="text-danger">{{ $errors->first('slug') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Description <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" data-desscription-seo=".meta_desscription" name="desscription" value="{{ old('desscription', $uni_product->desscription ?? '') }}">
                        @if($errors->first('desscription'))
                        <span class="text-danger">{{ $errors->first('desscription') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Content <span>(*)</span></label>
                        <textarea name="content" class="form-control" id="article-ckeditor" cols="30" rows="10">{{ old('content',$uni_product->content ?? '') }}</textarea>
                        @if($errors->first('content'))
                        <span class="text-danger">{{ $errors->first('content') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required"> Danh mục sản phẩm <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="category[]" class="form-control  SumoUnder js-select2" tabindex="-1" multiple>
                                @foreach($uni_category as $category)
                                <option title="{{ $category->name }}" {{ in_array($category->id, $categoryOld) ? "selected" : "" }} value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @if($errors->first('category'))
                        <span class="text-danger">{{ $errors->first('category') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required"> Tags <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="tags[]" class="form-control  SumoUnder js-select2" tabindex="-1" multiple>
                                @foreach($uni_tag as $tag)
                                <option title="{{ $tag->name }}" {{ in_array($tag->id, $tagOld) ? "selected" : "" }} value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @if($errors->first('tags'))
                        <span class="text-danger">{{ $errors->first('tags') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required"> Thương hiệu <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="trade[]" class="form-control SlectBox SumoUnder " tabindex="-1">
                                @foreach($uni_trade as $item)
                                <option value="{{ $item->id }}" {{ ($tradeOld[0] ?? 0) == $item->id ? "selected" : "" }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @if($errors->first('trade'))
                        <span class="text-danger">{{ $errors->first('trade') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required"> Kích thước <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="size[]" class="form-control SlectBox SumoUnder " tabindex="-1">
                                @foreach($uni_size as $item)
                                <option value="{{ $item->id }}" {{ ($sizeOld[0] ?? 0) == $item->id ? "selected" : "" }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @if($errors->first('size'))
                        <span class="text-danger">{{ $errors->first('size') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required"> Màu sắc <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="color[]" class="form-control SlectBox SumoUnder " tabindex="-1">
                                @foreach($uni_color as $item)
                                <option value="{{ $item->id }}" {{ ($colorOld[0] ?? 0) == $item->id ? "selected" : "" }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @if($errors->first('color'))
                        <span class="text-danger">{{ $errors->first('color') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Sắp xếp <span>(*)</span></label>
                        <input type="number" class="form-control" name="order" value="{{ old('order', $uni_product->order ?? '0') }}">
                        <span class="d-block text-warning">Thứ thự được sắp xếp từ bé đến lớn</span>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required">Số lượng trong thùng<span>(*)</span></label>
                                    <input type="number" class="form-control" name="qty_in_box" value="{{ old('qty_in_box', $uni_product->qty_in_box ?? '0') }}">
                                    <span class="d-block text-warning">Số lượng trên một thùng</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required">Số lượng thùng tối thiểu để được giá đại lý <span>(*)</span></label>
                                    <input type="number" class="form-control" name="min_box" value="{{ old('min_box', $uni_product->min_box ?? '0') }}">
                                    <span class="d-block text-warning">Số lượng thùng tối thiểu để được giá đại lý</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required">Giá bán lẻ<span>(*)</span></label>
                                    <input type="number" class="form-control" name="view_price" value="{{ old('qty_in_box', $uni_product->view_price ?? '0') }}">
                                    <span class="d-block text-warning">Giá bán cho khách hàng mua lẻ</span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required">Giá bán sale <span>(*)</span></label>
                                    <input type="number" class="form-control" name="view_price_sale" value="{{ old('min_box', $uni_product->view_price_sale ?? '0') }}">
                                    <span class="d-block text-warning">Giá sale cho khách hàng mua lẻ</span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required">Giá bán đại lý<span>(*)</span></label>
                                    <input type="number" class="form-control" name="view_price_sale_store" value="{{ old('min_box', $uni_product->view_price_sale_store ?? '0') }}">
                                    <span class="d-block text-warning">Giá bán cho khách hàng đại lý</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Album </label>
                        <input type="file" class="form-control" name="album[]" value="" multiple>
                    </div>
                    <input type="hidden" class="form-control" name="albumold" value="{{ old('album', $uni_product->album ?? '') }}">
                    @if ($uni_product)
                    <div class="row" style="border: 1px solid;padding-top:10px">
                        @forelse (json_decode($uni_product->album) as $item)
                        <div class="col-3" data-rm="{{ $item }}" style="margin-bottom: 10px;position: relative; ">
                            <span class="close-img js-delete" data-url="{{ route('get_admin.uni_product.delete_album') }}" data-id="{{ $uni_product->id }}" album-data="{{ $item }}" style="position:absolute"><i class="la la-trash"></i></span>
                            <img src="/storage/uploads_Product/{{ $item }}" class="card-img-top" alt="...">
                        </div>
                        @empty
                        @endforelse

                    </div>
                    @else
                    @endif

                </div>
            </div>
            <div class="card  box-shadow-0">
                <div class="card-header">
                    <h4 class="card-title mb-1">SEO <a href="" class="js-action-seo" style="float: right"><i class="la la-edit"></i> Edit</a></h4>
                    <div class="view-seo">
                        <a href="" class="view-seo-title meta_title">
                            {{ old('meta_title', $uni_product->meta_title ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}
                        </a>
                        <p class="view-seo-slug slug">
                            {{ old('slug', $uni_product->slug ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}
                        </p>
                        <p class="mb-2 view-seo-description meta_desscription">
                            {{ old('meta_desscription', $uni_product->meta_desscription ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}

                        </p>
                    </div>
                </div>
                <div class="card-body pt-3 box-seo hide">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Tiêu đề SEO<span>(*)</span></label>
                        <input type="text" class="form-control meta_title" name="meta_title" id="meta_title" value="{{ old('meta_title', $uni_product->meta_title ?? '') }}">
                        @if($errors->first('meta_title'))
                        <span class="text-danger">{{ $errors->first('meta_title') }}</span><br>
                        @endif
                        <span class="text-danger" id="count_title"></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Mô tả SEO <span>(*)</span></label>
                        <input type="text" class="form-control meta_desscription" name="meta_desscription" id="meta_desscription" value="{{ old('meta_desscription', $uni_product->meta_desscription ?? '') }}">
                        @if($errors->first('meta_desscription'))
                        <span class="text-danger">{{ $errors->first('meta_desscription') }}</span><br>
                        @endif
                        <span class="text-danger" id="count_des"></span>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Meta keyword <span>(*)</span></label>
                        <input type="text" class="form-control meta_keyword" name="meta_keyword" value="{{ old('meta_keyword', $uni_product->meta_keyword ?? '') }}">
                        @if($errors->first('meta_keyword'))
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
                        <label for="exampleInputEmail1"> Status <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="status" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="hide" {{ ($uni_product->status ?? 0) == 0 ? 'selected' : '' }} value="0">No Active</option>
                                <option title="Public" {{ ($uni_product->status ?? 1) == 1 ? 'selected' : '' }} value="1">Active</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Sản phẩm nổi bật <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="is_hot" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="hide" {{ ($uni_product->is_hot ?? 0) == 0 ? 'selected' : '' }} value="0">No Active</option>
                                <option title="Public" {{ ($uni_product->is_hot ?? 1) == 1 ? 'selected' : '' }} value="1">Active</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Sản phẩm mới thử nghiệm <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="is_feauture" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="hide" {{ ($uni_product->is_feauture ?? 0) == 0 ? 'selected' : '' }} value="0">No Active</option>
                                <option title="Public" {{ ($uni_product->is_feauture ?? 1) == 1 ? 'selected' : '' }} value="1">Active</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Thumbnail </label>
                        <input type="hidden" name="delete_thumbnail" value="{{ old('meta_keyword', $uni_product->thumbnail ?? '') }}">
                        <input type="file" class="filepond" data-type="avatar" name="avatar">
                        <input type="hidden" name="thumbnail" id="avatar_uploads">
                    </div>
                    @if(isset($uni_product->thumbnail))
                    <p>
                        <img src="{{ pare_url_file($uni_product->thumbnail) }}" alt="" style="width: 100%;height: auto">
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