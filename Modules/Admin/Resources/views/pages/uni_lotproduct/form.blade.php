<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Name <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" data-title-seo=".meta_title" value="{{ old('lot_name', $lotproduct->lot_name ?? '') }}" data-slug=".slug" name="lot_name">
                        @if($errors->first('lot_name'))
                        <span class="text-danger">{{ $errors->first('lot_name') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Mã vạch <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" name="barcode" value="{{ old('barcode',$lotproduct->barcode ?? '') }}">
                    </div>
                    @if($errors->first('barcode'))
                    <span class="text-danger">{{ $errors->first('barcode') }}</span>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Mã lô <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" name="sku_lotproduct" value="{{ old('sku_lotproduct',$lotproduct->sku_lotproduct ?? '') }}">
                    </div>
                    @if($errors->first('sku_lotproduct'))
                    <span class="text-danger">{{ $errors->first('sku_lotproduct') }}</span>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Số lượng <span>(*)</span></label>
                        <input type="number" class="form-control keypress-count" name="qty" value="{{ old('qty',$lotproduct->qty ?? '') }}">
                    </div>
                    @if($errors->first('qty'))
                    <span class="text-danger">{{ $errors->first('qty') }}</span>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Hạn sử dụng <span>(*)</span></label>
                        <input type="date" class="form-control keypress-count" name="expiry_date" value="{{ old('expiry_date',$lotproduct->expiry_date ?? '') }}">
                    </div>
                    @if($errors->first('expiry_date'))
                    <span class="text-danger">{{ $errors->first('expiry_date') }}</span>
                    @endif
                    <div class="form-group">
                        
                        @foreach($uni_product as $product)
                        <label for="exampleInputEmail1" class="required">Sản phẩm <span>(*)</span></label>
                        <input type="checkbox" class="form-control keypress-count" name="product_id" value="{{ old('id',$product->id ?? '') }}">
                        @endforeach
                    </div>
                    @if($errors->first('product_id'))
                    <span class="text-danger">{{ $errors->first('product_id') }}</span>
                    @endif
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
                        <label for="exampleInputEmail1" class="required">Nhà cung cấp <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="supplier_id" class="form-control SlectBox SumoUnder" tabindex="-1">
                                @foreach ($uni_supplier as $supplier)
                                <option title="{{ $supplier->supplier }}" value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Kích thước <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="size" class="form-control SlectBox SumoUnder" tabindex="-1">
                                @foreach ($uni_size as $size)
                                <option title="{{ $size->name }}" value="{{ $size->id }}">{{ $size->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>