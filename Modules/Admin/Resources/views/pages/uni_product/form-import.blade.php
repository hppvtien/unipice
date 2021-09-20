<style>
    h3.h3-title {
        text-transform: uppercase;
        font-size: 18px;
        text-align: center;
        padding: 8px 0;
    }
</style>
@if (count($uni_lotproduct) != 0)
<form class="form-horizontal" autocomplete="off" method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-10">
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
                                    <th scope="col">Trọng lượng</th>
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
                                            <input require data-lotid="{{ $item->key_lot }}" data-size={{ $item->size }} class="form-check-input {{ $item->key_lot != 0 ? 'lot_product':''  }}" {{ $item->status == 0 ? 'disabled':'' }} type="radio" name="lotproduct_id" lot-key="{{ $key }}" product-id="{{ $item->product_id }}" id="inlineCheckbox{{ $item->id }}" value="{{ $item->id }}">
                                            <label class="form-check-label" for="inlineCheckbox{{ $item->id }}">{{ $item->lot_name }}</label>
                                        </div>
                                    </td>
                                    <td>{{ get_data_table_name('uni_product',$item->product_id)->name }}</td>
                                    <td>{{ getSizeName($item->size) }}</td>
                                    <td>{{ $item->total_qty }}</td>
                                    <td>{{ $item->total_export }}</td>
                                    <td>{{ $item->qty }}</td>
                                    <td>{{ formatVnd($item->price_lotproduct) }}</td>
                                    <td>@if($item->created_at)
                                        <p>{{ $item->created_at->format('Y/m/d') ?? "[N\A]" }}</p>
                                        @else
                                        <p>"[N\A]"</p>
                                        @endif
                                    </td>
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
                        <h3 class="text-light h3-title">Số lượng xuất bán</h3>
                    </div>
                    <input type="hidden" name="product_size" id="product_size_lot" value="">
                    <input type="hidden" name="product_id" value="{{ old('product_id', $uni_lotproduct[0]->product_id ?? '') }}">

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Số lượng <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" name="qty" value="{{ old('qty', $uni_product->qty ?? '') }}">
                            @if($errors->first('qty'))
                                <span class="text-danger">{{ $errors->first('qty') }}</span>
                            @endif
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <h2>
                            Lịch sử nhập số lượng bán sản phẩm {{ $uni_product_import->name }}
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
                                    <th scope="col">Trọng lượng tịnh</th>
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
                                        <span class="text-success">{{ getSizeName($item->product_size) }}</span>
                                    </td>
                                    <td>@if($item->created_at)
                                        <p>{{ $item->created_at->format('Y/m/d') ?? "[N\A]" }}</p>
                                        @else
                                        <p>"[N\A]"</p>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <div>
                            <button class="btn btn-info"><i class="la la-save"></i> Save</button>
                            <button class="btn btn-success"><i class="la la-check-circle"></i>Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@else
<h3>Trong kho hiện tại không có lô sản phẩm nào</h3>
@endif