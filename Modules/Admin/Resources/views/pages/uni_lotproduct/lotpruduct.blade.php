@extends('admin::layouts.master')
@section('content')
    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">Nhập lô sản phẩm {{ $uni_product->name}}</h4>
                </div>
            </div>
            <div class="d-flex my-xl-auto right-content">
                <div class="pr-1 mb-3 mb-xl-0">
                    <a href="{{ route('get_admin.uni_product.index') }}" class="btn btn-danger mr-2">Quay lại <i class="la la-undo"></i></a>
                    <a href="{{ route('get_admin.uni_product.import', $uni_product->id) }}" class="btn btn-success mr-2">Xuất lô <i class="la la-file-import"></i></a>
                </div>
            </div>
        </div>
<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-9">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Tên lô sản phẩm <span>(*)</span></label>
                        <input type="text" class="form-control" data-title-seo=".meta_title" value="{{ old('lot_name', $lotproduct->lot_name ?? '') }}" data-slug=".slug" name="lot_name">
                        @if($errors->first('lot_name'))
                        <span class="text-danger">{{ $errors->first('lot_name') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Mã vạch <span>(*)</span></label>
                        <input type="text" class="form-control" name="barcode" value="{{ old('barcode',$lotproduct->barcode ?? '') }}">
                    </div>
                    @if($errors->first('barcode'))
                    <span class="text-danger">{{ $errors->first('barcode') }}</span>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Mã lô <span>(*)</span></label>
                        <input type="number" class="form-control" name="sku_lotproduct" value="{{ old('sku_lotproduct',$lotproduct->sku_lotproduct ?? '') }}">
                    </div>
                    @if($errors->first('sku_lotproduct'))
                    <span class="text-danger">{{ $errors->first('sku_lotproduct') }}</span>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Số thùng <span>(*)</span></label>
                        <input type="number" class="form-control" name="qty_box" value="{{ old('qty_box',$lotproduct->qty_box ?? '') }}">
                    </div>
                    @if($errors->first('qty_box'))
                    <span class="text-danger">{{ $errors->first('qty_box') }}</span>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Số lượng / thùng <span>(*)</span></label>
                        <input type="number" class="form-control" name="size_box" value="{{ old('size_box',$lotproduct->size_box ?? '') }}">
                    </div>
                    @if($errors->first('size_box'))
                    <span class="text-danger">{{ $errors->first('size_box') }}</span>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Giá nhập / sản phẩm <span>(*)</span></label>
                        <input type="number" class="form-control" name="price_lotproduct" value="{{ old('price_lotproduct',$lotproduct->price_lotproduct ?? '') }}">
                    </div>
                    @if($errors->first('price_lotproduct'))
                    <span class="text-danger">{{ $errors->first('price_lotproduct') }}</span>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Hạn sử dụng <span>(*)</span></label>
                        <input type="date" class="form-control" name="expiry_date" value="{{ old('expiry_date',$lotproduct->expiry_date ?? '') }}">
                    </div>
                    @if($errors->first('expiry_date'))
                    <span class="text-danger">{{ $errors->first('expiry_date') }}</span>
                    @endif

                    @if($errors->first('product_id'))
                    <span class="text-danger">{{ $errors->first('product_id') }}</span>
                    @endif
                </div>
            </div>
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="bg-primary">
                        <h3 class="text-light">Lịch sử nhập lô {{ $uni_product->name}}</h3>
                    </div>
                    <div class="form-group">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên Lô</th>
                                    <th scope="col">Trọng lượng</th>
                                    <th scope="col">Tổng số lượng</th>
                                    <th scope="col">Xuất hàng</th>
                                    <th scope="col">Còn lại</th>
                                    <th scope="col">Giá nhập vào</th>
                                    <th scope="col">Ngày nhập</th>
                                    <th scope="col">Hạn sử dụng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($uni_lotproduct as $key => $item)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{ $item->lot_name }}</td>
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
                        </table>
                    </div>
                </div></div>
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
                        <label for="exampleInputEmail1" class="required">Trọng lượng <span>(*)</span></label>
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
</div>
@stop
