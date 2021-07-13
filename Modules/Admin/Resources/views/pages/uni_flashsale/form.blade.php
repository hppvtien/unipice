<form class="form-horizontal" autocomplete="off" method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Name <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" data-title-seo=".meta_title" value="{{ old('name', $uni_flashsale->name ?? '') }}" data-slug=".slug" name="name">
                        @if($errors->first('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Slug <span>(*)</span></label>
                        <input type="text" class="form-control slug" name="slug" value="{{ old('slug', $uni_flashsale->slug ?? '') }}">
                        @if($errors->first('slug'))
                        <span class="text-danger">{{ $errors->first('slug') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Description <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" data-desscription-seo=".meta_desscription" name="desscription" value="{{ old('desscription', $uni_flashsale->desscription ?? '') }}">
                        @if($errors->first('desscription'))
                        <span class="text-danger">{{ $errors->first('desscription') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Số lượng <span>(*)</span></label>
                        <input type="number" class="form-control keypress-count" name="qty" value="{{ old('qty', $uni_flashsale->qty ?? '') }}">
                        @if($errors->first('qty'))
                        <span class="text-danger">{{ $errors->first('qty') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Content <span>(*)</span></label>
                        <textarea name="content" class="form-control" id="article-ckeditor" cols="30" rows="10">{{ old('content',$uni_flashsale->content ?? '') }}</textarea>
                        @if($errors->first('content'))
                        <span class="text-danger">{{ $errors->first('content') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0">
                <div class="card-header">
                    <h4 class="card-title mb-1 text-danger">Danh sách sản phẩm trong COMBO</h4>
                </div>
                <div class="card-body pt-3">
                    <div class="form-group">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Sản Phẩm</th>
                                    <th scope="col">Số lượng có sẵn</th>
                                    <th scope="col">Giá bán hiện tại</th>
                                    <th scope="col">Số lượng sale</th>
                                    <th scope="col">Giá sale</th>
                                    <th scope="col">Tổng tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($uni_product as $key => $item)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td class="text-center">
                                        <div class="form-group">
                                            <input class="form-check-input" data-sub="" data-key = {{ $key }} require type="checkbox" name="product_sale[{{ $key }}]['id']" id="inlineCheckbox{{ $key }}" value="{{ $item->id }}">
                                            <label class="form-check-label" for="inlineCheckbox{{ $key }}">{{ $item->name }}</label>
                                        </div>
                                    </td>
                                    <td>{{ $item->qty }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>
                                        <div class="form-group">
                                            <input type="number" class="form-control keypress-count" id="qty_sale_{{ $key }}" data-key = {{ $key }} name="product_sale[{{ $key }}]['qty_sale']" value="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="number" class="form-control keypress-count" id="price_sale_{{ $key }}" data-key = {{ $key }}  name="product_sale[{{ $key }}]['price_sale']" value="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="number" class="form-control keypress-count price_subtotal" id="price_subtotal_{{ $key }}" data-key = {{ $key }} readonly="readonly" name="product_sale[{{ $key }}]['price_subtotal']" value="">
                                        </div>
                                    </td>
                                </tr>
                                @empty

                                @endforelse
                                <tr class="bg-black">
                                    <td colspan="6" class="text-info">Tổng tiền combo</td>
                                    <td class="text-info">
                                    <div class="form-group">
                                            <input type="number" class="form-control price_all_subtotal" id="price_all_subtotal" name="product_sale[{{ $key }}]['price_all_subtotal']" value="" readonly="readonly">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0">
                <div class="card-header">
                    <h4 class="card-title mb-1">SEO <a href="" class="js-action-seo" style="float: right"><i class="la la-edit"></i> Edit</a></h4>
                    <div class="view-seo">
                        <a href="" class="view-seo-title meta_title">
                            {{ old('meta_title', $uni_flashsale->meta_title ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}
                        </a>
                        <p class="view-seo-slug slug">
                            {{ old('slug', $uni_flashsale->slug ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}
                        </p>
                        <p class="mb-2 view-seo-description meta_desscription">
                            {{ old('meta_desscription', $uni_flashsale->meta_desscription ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}

                        </p>
                    </div>
                </div>
                <div class="card-body pt-3 box-seo hide">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Meta Title <span>(*)</span></label>
                        <input type="text" class="form-control meta_title" name="meta_title" value="{{ old('meta_title', $uni_flashsale->meta_title ?? '') }}">
                        @if($errors->first('meta_title'))
                        <span class="text-danger">{{ $errors->first('meta_title') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Meta Description <span>(*)</span></label>
                        <input type="text" class="form-control meta_desscription" name="meta_desscription" value="{{ old('meta_desscription', $uni_flashsale->meta_desscription ?? '') }}">
                        @if($errors->first('meta_desscription'))
                        <span class="text-danger">{{ $errors->first('meta_desscription') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Meta keyword <span>(*)</span></label>
                        <input type="text" class="form-control meta_keyword" name="meta_keyword" value="{{ old('meta_keyword', $uni_flashsale->meta_keyword ?? '') }}">
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
                        <label for="exampleInputEmail1">Thumbnail </label>
                        <input type="file" class="filepond" data-type="avatar" name="avatar">
                        <input type="hidden" name="thumbnail" id="avatar_uploads">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>