@extends('admin::layouts.master')
@section('content')
    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">Jobs</h4>
                    <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ index</span>
                </div>
            </div>
            <div class="d-flex my-xl-auto right-content">
                <div class="pr-1 mb-3 mb-xl-0">
                    <a href="{{ route('get_admin.jobs.create') }}" class="btn btn-info  mr-2">Thêm mới <i class="la la-plus-circle"></i></a>
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
                                        <th>Desscription</th>
                                        <th>Status</th>
                                        <th>Hot Job</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($jobs as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>
                                            <a href="javascript:;" title="{{ $item->name }}">{{ $item->name }}</a>
                                        </td>
                                        <td>
                                            <a href="javascript:;" title="{{ $item->desscription }}">{{ $item->desscription }}</a>
                                        </td>
                                        <td><span class="badge badge-info">{{ $item->status == 1 ? 'Active':'Not-Active' }}</span></td>
                                        <td><span class="badge badge-info">{{ $item->is_hot == 1 ? 'Active':'Not-Active' }}</span></td>
                                        <td>
                                            <a href="{{ route('get_admin.jobs.edit', $item->id) }}" class="btn btn-xs btn-info"><i class="la la-edit"></i></a>
                                            <a href="{{ route('get_admin.jobs.delete', $item->id) }}" class="btn btn-xs js-delete btn-danger"><i class="la la-trash"></i></a>
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
