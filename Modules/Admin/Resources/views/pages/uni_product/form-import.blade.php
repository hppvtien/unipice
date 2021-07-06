    <form class="form-horizontal" autocomplete="off" method="POST" action="" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-8">
                <div class="card box-shadow-0">
                    <div class="card-body pt-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Lô sản phẩm <span>(*)</span></label>
                            <ul class="list-group">
                                @foreach($uni_lotproduct as $item)
                                <li class="list-group-item" style="padding-left: 5%;">
                                    <input class="form-check-input" name="lotproduct_id" type="radio" value="{{ $item->id }}" aria-label="...">
                                    <span>{{ $item->lot_name }}</span>---<span>Số lượng lô hàng: {{ $item->lot_name }}</span>---<span>Số lượng lô hàng: {{ $item->exprixy }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Số lượng <span>(*)</span></label>
                            <input type="text" class="form-control keypress-count" name="qty" value="{{ old('qty', $uni_product->qty ?? '') }}">
                            @if($errors->first('qty'))
                            <span class="text-danger">{{ $errors->first('qty') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Giá Gốc <span>(*)</span></label>
                            <input type="text" class="form-control price" name="price" value="{{ old('price', $uni_product->price ?? '') }}">
                            @if($errors->first('price'))
                            <span class="text-danger">{{ $errors->first('price') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Giá bán lẻ <span>(*)</span></label>
                            <input type="text" class="form-control price_sale" name="price_sale" value="{{ old('price_sale', $uni_product->price_sale ?? '') }}">
                            @if($errors->first('price_sale'))
                            <span class="text-danger">{{ $errors->first('price_sale') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Giá sỉ <span>(*)</span></label>
                            <input type="text" class="form-control price_sale_store" name="price_sale_store" value="{{ old('price_sale_store', $uni_product->price_sale_store ?? '') }}">
                            @if($errors->first('price_sale_store'))
                            <span class="text-danger">{{ $errors->first('price_sale_store') }}</span>
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
            </div>
        </div>
    </form>