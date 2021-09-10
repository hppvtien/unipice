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