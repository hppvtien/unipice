<style>
    li.select2-selection__choice {
    padding-left: 20px!important;
}

span.select2-selection__choice__remove {
    color: #fff!important;
    opacity: 1;
    font-size: 20px!important;
    top: -5px!important;
}
</style>
<form class="form-horizontal" autocomplete="off" method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-9">
            <div class="card box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Tên sản phẩm <span>(*)</span></label>
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
                        <label for="exampleInputEmail1" class="required">Mô tả <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" data-desscription-seo=".meta_desscription" name="desscription" value="{{ old('desscription', $uni_product->desscription ?? '') }}">
                        @if($errors->first('desscription'))
                        <span class="text-danger">{{ $errors->first('desscription') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Nội dung<span>(*)</span></label>
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
                    <div class="row">
                        <div class="col-6">
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
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">VAT <span>(*)</span></label>
                                <input type="number" class="form-control keypress-count" value="{{ old('product_vat', $uni_product->product_vat ?? '') }}" name="product_vat">
                                @if($errors->first('product_vat'))
                                <span class="text-danger">{{ $errors->first('product_vat') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>




                    {{-- <div class="form-group">
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
            </div> --}}
            <div class="form-group">
                <label for="exampleInputEmail1" class="required">Sắp xếp <span>(*)</span></label>
                <input type="number" class="form-control" name="order" value="{{ old('order', $uni_product->order ?? '0') }}">
                <span class="d-block text-warning">Thứ thự được sắp xếp từ bé đến lớn</span>
            </div>



            <div class="form-group">
                <label for="exampleInputEmail1">Album ảnh</label>
                <input type="file" class="form-control" name="album[]" value="" multiple>
            </div>
            <input type="hidden" class="form-control" name="albumold" value="{{ old('album', $uni_product->album ?? '') }}">
            @if ($uni_product)
            <div class="row" style="padding-top:10px; margin-bottom: 10px;">
                @forelse (json_decode($uni_product->album) as $item)
                <div class="col-2" data-rm="{{ $item }}" style="margin-bottom: 10px;position: relative; ">
                    <span class="close-img js-delete" data-url="{{ route('get_admin.uni_product.delete_album') }}" data-id="{{ $uni_product->id }}" album-data="{{ $item }}" style="position:absolute"><i class="la la-trash"></i></span>
                    <img src="/storage/uploads_Product/{{ $item }}" class="card-img-top" alt="...">
                </div>
                @empty
                @endforelse

            </div>
            @else
            @endif

            <div class="form-group">
                <label for="exampleInputEmail1" class="required"> Trọng lượng <span>(*)</span></label>
                <div class="SumoSelect js-sumo-select sumo_somename" id="js-select2" tabindex="0" role="button" aria-expanded="true">
                    <select name="size[]" id="select2-weight" class="form-control SumoUnder js-select2" tabindex="-1" multiple>
                        @foreach($uni_size as $size)
                        <option title="{{ $size->name }}" {{ in_array($size->id, $sizeOld) ? "selected" : "" }} value="{{ $size->id }}">{{ $size->name }}</option>
                        @endforeach
                    </select>
                </div>
                @if($errors->first('size'))
                <span class="text-danger">{{ $errors->first('size') }}</span>
                @endif
            </div>
            <div class="form-group ">
                @foreach($data_size as $key => $v_size)
                <div class="row" style="padding: 20px 0px 20px;
                border-bottom: 1px solid #e8e7e7;">
                    <div class="col-10">
                        <h5 class="btn-info text-center w-25 mx-auto" style="padding: 5px;margin-top:10px">Trọng lượng: {{ getSizeName($v_size->size_id) }}</h5>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Giá bán lẻ</div>
                                        </div>
                                        <input type="text" name="size_price[{{ $v_size->size_id }}]" class="form-control" id="inlineForm{{ $v_size->id }}" placeholder="Giá bán lẻ" value="{{ $v_size->price }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Giá bán sale</div>
                                        </div>
                                        <input type="text" name="size_price_sale[{{ $v_size->size_id }}]" class="form-control" id="inlineForm{{ $v_size->id }}" placeholder="Giá bán sale" value="{{ $v_size->price_sale }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Giá bán đại lý</div>
                                        </div>
                                        <input type="text" name="size_price_sale_store[{{ $v_size->size_id }}]" class="form-control" id="inlineForm{{ $v_size->id }}" placeholder="Giá bán đại lý" value="{{ $v_size->price_sale_store }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required">Số lượng sản phẩm / thùng<span>(*)</span></label>
                                    <input type="number" class="form-control" name="qty_in_box[{{ $v_size->size_id }}]" id="inlineForm{{ $v_size->id }}" value="{{ $v_size->qty_in_box }}">
                                    <span class="d-block text-warning">Số lượng trên một thùng</span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required">Số lượng thùng tối thiểu để được giá đại lý <span>(*)</span></label>
                                    <input type="number" class="form-control" name="min_box[{{ $v_size->size_id }}]" id="inlineForm{{ $v_size->id }}" value="{{ $v_size->min_box }}">
                                    <span class="d-block text-warning">Số lượng thùng tối thiểu để được giá đại lý</span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ảnh</label>
                                    <input type="file" class="form-control" name="image[{{ $v_size->size_id }}]" value="{{ old('image', $v_size->image ?? '') }}">
                                    <input type="hidden" name="image[{{ $v_size->size_id }}]" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2" style="margin-bottom: 10px;position: relative; ">
                        <img src="{{ pare_url_file_product($v_size->image) }}" class="card-img-top" alt="...">
                    </div>
                </div>
                @endforeach
            </div>
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

    <div class="col-lg-3">
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
                    <label for="exampleInputEmail1">Ảnh</label>
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