    <form class="form-horizontal" autocomplete="off" method="POST" action="" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-8">
                <div class="card box-shadow-0">
                    <div class="card-body pt-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Name <span>(*)</span></label>
                            <input type="text" class="form-control" value="{{ old('name', $uni_product->name ?? '') }}" name="name">
                            @if($errors->first('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Địa chỉ <span>(*)</span></label>
                            <input type="text" class="form-control keypress-count" data-desscription-seo=".meta_desscription" name="desscription" value="{{ old('desscription', $uni_product->desscription ?? '') }}">
                            @if($errors->first('desscription'))
                            <span class="text-danger">{{ $errors->first('desscription') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Số điện thoại <span>(*)</span></label>
                            <input type="text" class="form-control content" name="content" value="{{ old('content', $uni_product->content ?? '') }}">
                            @if($errors->first('content'))
                            <span class="text-danger">{{ $errors->first('content') }}</span>
                            @endif
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Diện tịch <span>(*)</span></label>
                            <input type="text" class="form-control content" name="content" value="{{ old('content', $uni_product->content ?? '') }}">
                            @if($errors->first('content'))
                            <span class="text-danger">{{ $errors->first('content') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Mã số thuế <span>(*)</span></label>
                            <input type="text" class="form-control content" name="content" value="{{ old('content', $uni_product->content ?? '') }}">
                            @if($errors->first('content'))
                            <span class="text-danger">{{ $errors->first('content') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Album </label>
                            <input type="file" class="form-control" name="album[]" value="" multiple>
                        </div>
                        <input type="hidden" class="form-control" name="albumold" multiple value="{{ old('album', $uni_product->album ?? '') }}">
                        @if($uni_product)
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