@extends('admin::layouts.master')
@section('content')
    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">Bình luận</h4>
                    <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Danh sách</span>
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
                                        <th>Nội dung Câu Hỏi</th>
                                        <th>Trạng thái</th>
                                        <th>Ngày bình luận</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @forelse($uni_comment as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->noi_dung_question }}</td>
                                        <td>
                                            <span class="badge {{ $item->status == 1 ? 'badge-success':'badge-danger' }}">{{ $item->status == 1 ? 'Active':'Not-Active' }}</span>
                                        </td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <a href="{{ route('get_admin.uni_comment.edit', $item->id) }}" class="btn btn-xs btn-info"><i class="la la-edit"></i></a>
                                            <a href="{{ route('get_admin.uni_comment.delete', $item->id) }}" class="btn btn-xs js-delete btn-danger"><i class="la la-trash"></i></a>
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
