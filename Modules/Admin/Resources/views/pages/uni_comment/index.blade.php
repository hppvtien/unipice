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
                                        <th style="width: 70%;">Nội dung Câu Hỏi</th>
                                        <th>Sản phẩm</th>
                                        <th>Trạng thái</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @forelse($uni_comment as $key => $item)
                                    <tr>
                                        <th scope="row">{{ $key+1 }}</th>
                                        <td>
                                            <div class="existed-seo-meta">
                                                <h5>{{ $item->noi_dung_question }}</h5>
                                                <div class="page-url-seo ws-nm">
                                                    <p><span class="slug"><i class="fa fa-user-circle" ></i> {{ $item->name }}</span> <span class="slug"><i class="fa fa-envelope" ></i> <a href="mailto:{{ $item->email }}">{{ $item->email }}</a></span> <span class="slug"><i class="fa fa-phone"></i> <a href="tel:{{ $item->phone }}">{{ $item->phone }}</a></span></p>
                                                </div>
                                                <div class="ws-nm">
                                                    <span style="color: #70757a;"><i class="fa fa-calendar"></i> {{ $item->created_at }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{ getProductById($item->product_id) }}" target="blank">{{ getNameProduct($item->product_id) }}</a>
                                        </td>
                                        <td>
                                            <span class="badge {{ $item->status == 1 ? 'badge-success':'badge-danger' }}">{{ $item->status == 1 ? 'Đã trả lời':'Chưa trả lời' }}</span>
                                        </td>
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
                        <div>
                            {!! $uni_comment->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
    </div>
@stop
