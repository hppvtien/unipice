@extends('admin::layouts.master')
@section('content')
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">User</h4>
                <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ index</span>
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
                                    <th>Name</th>
                                    <th>Tên cửa hàng</th>
                                    <th>Cấp bậc</th>
                                    <th>Tổng điểm</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>{{ $item->name }}</td>
                                    @if(get_id_store($item->id))
                                    <td><a href=" {{ route('get_admin.uni_store.edit', get_id_store($item->id)) }}">{{ get_data_store($item->id) }}</a></td>
                                    @else
                                    <td>Đại lý chưa cập nhật thông tin</td>
                                    @endif
                                    <td>{{ getTypeStore($item->id) }}</td>
                                    <td>{{ getPoinStore($item->id) }}</td>
                                    <td>{{ $item->store_name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>
                                        <a href="{{ route('get_admin.user.edit', $item->id) }}" class="btn btn-xs btn-info"><i class="la la-edit"></i></a>
                                        <a href="{{ route('get_admin.user.movetrash', $item->id) }}" class="btn btn-xs btn-danger"><i class="la la-trash"></i></a>
                                    </td>
                                    </td>
                                </tr>
                                @endforeach
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