    <style>
        h3.h3-title {
            text-transform: uppercase;
            font-size: 18px;
            text-align: center;
            padding: 8px 0;
        }
    </style>
    <form class="form-horizontal" autocomplete="off" method="POST" action="" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="card box-shadow-0">
                    <div class="card-body pt-3">
                        <div class="bg-info">
                            <h3 class="text-light h3-title">Thông tin Lô sản phẩm</h3>
                        </div>
                        <div class="form-group">
                            <table class="table table-striped table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tên Lô</th>
                                        <th scope="col">Sản Phẩm</th>
                                        <th scope="col">Tổng số lượng</th>
                                        <th scope="col">Xuất hàng</th>
                                        <th scope="col">Còn lại</th>
                                        <th scope="col">Giá nhập vào</th>
                                        <th scope="col">Ngày nhập</th>
                                        <th scope="col">Hạn sử dụng</th>
                                    </tr>
                                </thead>
                                <tbody class="gr_sele">
                                    @foreach($uni_lotproduct as $key => $item)                                    
                                    <tr>
                                        <th scope="row">{{ $key+1 }}</th>
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input require data-lotid="{{ $item->key_lot }}" class="form-check-input {{ $item->key_lot != 0 ? 'lot_product':''  }}" {{ $item->status == 0 ? 'disabled':'' }} type="radio" name="lotproduct_id" lot-key="{{ $key }}"
                                                product-id="{{ $item->product_id }}" id="inlineCheckbox{{ $item->id }}" value="{{ $item->id }}">
                                                <label class="form-check-label" for="inlineCheckbox{{ $item->id }}">{{ $item->lot_name }}</label>
                                            </div>
                                        </td>
                                        <td>{{ get_data_table_name('uni_product',$item->product_id)->name }}</td>
                                        <td>{{ $item->total_qty }}</td>
                                        <td>{{ $item->total_export }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>{{ formatVnd($item->price_lotproduct) }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->expiry_date }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                @if($errors->first('lotproduct_id'))
                                <span class="text-danger">{{ $errors->first('lotproduct_id') }}</span>
                                @endif
                            </table>
                        </div>
                        <div class="bg-primary">
                            <h3 class="text-light h3-title">Thông tin nhập sản phẩm</h3>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Số lượng <span>(*)</span></label>
                            <input type="text" class="form-control keypress-count" name="qty" value="{{ old('qty', $uni_product->qty ?? '') }}">
                            @if($errors->first('qty'))
                            <span class="text-danger">{{ $errors->first('qty') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Giá bán lẻ <span>(*)</span></label>
                            <input type="text" class="form-control price_a" name="price" value="{{ old('price', $uni_product->price ?? '') }}">
                            @if($errors->first('price'))
                            <span class="text-danger">{{ $errors->first('price') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Giá sale <span>(*)</span></label>
                            <input type="text" class="form-control price_sale" name="price_sale" value="{{ old('price_sale', $uni_product->price_sale ?? '') }}">
                            @if($errors->first('price_sale'))
                            <span class="text-danger">{{ $errors->first('price_sale') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Giá bán đại lý <span>(*)</span></label>
                            <input type="text" class="form-control price_sale_store" name="price_sale_store" value="{{ old('price_sale_store', $uni_product->price_sale_store ?? '') }}">
                            @if($errors->first('price_sale_store'))
                            <span class="text-danger">{{ $errors->first('price_sale_store') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card  box-shadow-0 ">
                    <div class="card-body pt-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Action <span>(*)</span></label>
                            <div>
                                <button class="btn btn-info"><i class="la la-save"></i> Save</button>
                                <button class="btn btn-success"><i class="la la-check-circle"></i> Save & Edit</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>
                                Lịch sử nhập sản phẩm để bán
                            </h2>
                        </div>
                        <div class="form-group">
                            <table class="table table-striped table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tên Lô</th>
                                        <th scope="col">Sản Phẩm</th>
                                        <th scope="col">Số lượng nhập</th>
                                        <th scope="col">Giá Sản phẩm</th>
                                        <th scope="col">Ngày nhập</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($import_history as $key => $item)
                                    <tr>
                                        <th scope="row">{{ $key+1 }}</th>
                                        <td>
                                            {{ get_data_table_name('uni_lotproduct',$item->lotproduct_id)->lot_name }}
                                        </td>
                                        <td>{{ get_data_table_name('uni_product',$item->product_id)->name }}</td>
                                        <td>{{ $item->inventory }}</td>
                                        <td>
                                            <span>Giá bán lẻ: <span class="text-success">{{ formatVnd($item->price) }} </span></span> <br>
                                            <span>Giá bán sale: <span class="text-success">{{ formatVnd($item->price_sale) }}</span></span> <br>
                                            <span>Giá bán Đại lý: <span class="text-success">{{ formatVnd($item->price_sale_store) }}</span></span>
                                        </td>
                                        <td>{{ $item->created_at }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                              
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("input.lot_product").not(':first').attr( "disabled", "disabled" );
        });
   
</script>