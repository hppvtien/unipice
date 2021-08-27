@extends('admin::layouts.master')
@section('content')
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Page</h4>
                <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ index</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
                <a href="{{ route('get_admin.page.create') }}" class="btn btn-info  mr-2">Thêm mới <i class="la la-plus-circle"></i></a>
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
                                    <th>Discount</th>
                                    <th>Banner</th>
                                    <th>Style</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($pages as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>
                                        <a href="javascript:;" title="{{ $item->p_name }}">{{ $item->p_name }}</a>
                                    </td>
                                    <td>
                                        <a href="javascript:;" title="{{ $item->discount }}">{{ $item->discount }}</a>
                                    </td>
                                    <td>
                                        <a href="{{ $item->p_banner }}" target="_blank" style="width: 200px;height: 100px;display: inline-block">
                                            <img style="height: 100%;border-radius: 10px;border: 1px solid #dedede;width: 100%" src="/storage/uploads/{{ $item->p_banner }}" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:;" title="{{ $item->p_style }}">{{ $item->p_style }}</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('get_admin.page.edit', $item->id) }}" class="btn btn-xs btn-info"><i class="la la-edit"></i></a>
                                        <a href="{{ route('get_admin.page.delete', $item->id) }}" class="btn btn-xs js-delete btn-danger"><i class="la la-trash"></i></a>
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