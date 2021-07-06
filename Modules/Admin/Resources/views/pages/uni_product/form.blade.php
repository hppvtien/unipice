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
                        <input type="text" class="form-control content" name="content" value="{{ old('content', $uni_product->content ?? '') }}">
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
                    </div>
                    {{-- <div class="form-group">
                        <label for="exampleInputEmail1" class="required"> Lô sản phẩm <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="parent_i" class="form-control SlectBox SumoUnder " tabindex="-1">
                                @foreach($uni_lotproduct as $item)
                                <option value="{{ $item->id }}" {{ ($uni_product->parent_id ?? 0) == $item->id ? "selected" : "" }}>{{ $item->lot_name }}--(Trong kho còn: {{ $item->qty }} sản phẩm)</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Số lượng <span>(*)</span></label>
                        <input type="number" class="form-control keypress-count" name="qty" value="{{ old('qty', $uni_product->qty ?? '') }}">
                        @if($errors->first('qty'))
                        <span class="text-danger">{{ $errors->first('qty') }}</span>
                        @endif
                    </div> --}}
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required"> Thương hiệu <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="trade[]" class="form-control SlectBox SumoUnder " tabindex="-1">
                                @foreach($uni_trade as $item)
                                <option value="{{ $item->id }}" {{ ($uni_product->parent_id ?? 0) == $item->id ? "selected" : "" }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required"> Kích thước <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="size[]" class="form-control SlectBox SumoUnder " tabindex="-1">
                                @foreach($uni_size as $item)
                                <option value="{{ $item->id }}" {{ ($uni_product->parent_id ?? 0) == $item->id ? "selected" : "" }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required"> Màu sắc <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="color[]" class="form-control SlectBox SumoUnder " tabindex="-1">
                                @foreach($uni_color as $item)
                                    <option value="{{ $item->id }}" {{ ($uni_product->parent_id ?? 0) == $item->id ? "selected" : "" }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Sắp xếp <span>(*)</span></label>
                        <input type="number" class="form-control" name="order" value="{{ old('order', $uni_product->order ?? '0') }}">
                        <span class="d-block text-warning">Thứ thự được sắp xếp từ bé đến lớn</span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Album </label>
                        <input type="file" class="form-control" name="album[]" value="">
                    </div>
                    <input type="hidden" class="form-control" name="albumold" multiple value="{{ $uni_product->album }}">
                        @if ($uni_product)
                        <div class="row" style="border: 1px solid;padding-top:10px">
                            @foreach (json_decode($uni_product->album) as $item)
                                <div class="col-3" data-rm="{{ $item }}" style="margin-bottom: 10px;position: relative; ">
                                    <span class="close-img js-delete" data-url="{{ route('get_admin.uni_product.delete_album') }}" data-id="{{ $uni_product->id }}" album-data="{{ $item }}" style="position:absolute"><i class="la la-trash"></i></span>
                                    <img src="/storage/uploads_Product/{{ $item}}" class="card-img-top" alt="...">
                                </div> 
                            @endforeach     
                        </div>
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
                        <label for="exampleInputEmail1" class="required">Meta Title <span>(*)</span></label>
                        <input type="text" class="form-control meta_title" name="meta_title" value="{{ old('meta_title', $uni_product->meta_title ?? '') }}">
                        @if($errors->first('meta_title'))
                        <span class="text-danger">{{ $errors->first('meta_title') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Meta Description <span>(*)</span></label>
                        <input type="text" class="form-control meta_desscription" name="meta_desscription" value="{{ old('meta_desscription', $uni_product->meta_desscription ?? '') }}">
                        @if($errors->first('meta_desscription'))
                        <span class="text-danger">{{ $errors->first('meta_desscription') }}</span>
                        @endif
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
                                <option title="hide" value="0">No Active</option>
                                <option title="Public" value="1">Active</option>
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
                                <option title="hide" value="0">No Active</option>
                                <option title="Public" value="1">Active</option>
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
                                <option title="hide" value="0">No Active</option>
                                <option title="Public" value="1">Active</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Thumbnail </label>
                        <input type="file" class="filepond" data-type="avatar" name="avatar">
                        <input type="hidden" name="thumbnail" id="avatar_uploads">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
