@extends('admin::layouts.master')
@section('content')
    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">Lô sản phẩm</h4>
                    <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Danh sách</span>
                </div>
            </div>
            <div class="d-flex my-xl-auto right-content">
                <div class="pr-1 mb-3 mb-xl-0">
                    <a href="{{ route('get_admin.uni_lotproduct.create') }}" class="btn btn-info  mr-2">Thêm mới <i class="la la-plus-circle"></i></a>
                </div>
            </div>
        </div>
        
        <!-- breadcrumb -->
        <!-- row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mg-b-0 text-md-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Lô sản phẩm</th>
                                        <th>Mã Lô</th>
                                        <th>Mã vạch</th>
                                        <th>Nhà sản xuất</th>
                                        <th>Số lượng</th>
                                        <th>Trọng lượng</th>
                                        <th>Hạn sử dụng</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @forelse($uni_lotproduct as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->lot_name }}</td>
                                        <td>{{ $item->sku_lotproduct }}</td>
                                        <td>{{ $item->barcode }}</td>
                                        <td>{{ get_data_table_name('uni_supplier',$item->supplier_id)->name }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>{{ get_size_name('uni_size',$item->size)->name }}</td>
                                        <td>{{ date("d-m-Y", strtotime($item->expiry_date)) }}</td>
                                        <td>
                                            <a href="{{ route('get_admin.uni_lotproduct.edit', $item->id) }}" class="btn btn-xs btn-info"><i class="la la-edit"></i></a>
                                            <a href="{{ route('get_admin.uni_lotproduct.delete', $item->id) }}" class="btn btn-xs js-delete btn-danger"><i class="la la-trash"></i></a>
                                        </td>
                                    </tr>
                                @empty

                                @endforelse
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
    </div>
@stop
