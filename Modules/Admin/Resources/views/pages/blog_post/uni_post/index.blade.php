@extends('admin::layouts.master')
@section('content')
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Bài viết</h4>
                <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ index</span>
            </div>
        </div>
        <div class="input-group md-form form-sm form-2 pl-0 w-50">
            <input class="form-control my-0 py-1 amber-border" id="search_k" type="text" data-url="{{ route('get_admin.post.search_ajax') }}" placeholder="Tìm kiếm theo tên" aria-label="Search">
            <div class="input-group-append">
                <span class="input-group-text amber lighten-3" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
                <a href="{{ route('get_admin.post.create') }}" class="btn btn-info  mr-2">Thêm mới <i class="la la-plus-circle"></i></a>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <!-- row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive" id="show-search">
                        <table class="table mg-b-0 text-md-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>SEO</th>
                                    <th>Trạng thái</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($uni_post as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>
                                        <div class="existed-seo-meta">
                                            <h5>{{ $item->name }}</h5>
                                            <span class="page-title-seo title_seo">{{ $item->meta_title }}</span>
                                            <div class="page-url-seo ws-nm">
                                                <p><span class="slug">{{ $item->slug }}</span></p>
                                            </div>
                                            <div class="ws-nm">
                                                <span style="color: #70757a;">{{ $item->created_at }} - </span>
                                                <span class="page-description-seo description_seo">{{ $item->meta_desscription }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge {{ $item->status == 1 ? 'badge-success':'badge-danger'; }}">{{ $item->status == 1 ? 'Active':'Not-Active' }}</span></td>
                                    <td>
                                        <a href="{{ route('get_admin.post.edit', $item->id) }}" class="btn btn-xs btn-info"><i class="la la-edit"></i></a>
                                        <a href="{{ route('get_admin.post.delete', $item->id) }}" class="btn btn-xs js-delete btn-danger"><i class="la la-trash"></i></a>
                                    </td>
                                </tr>
                                @empty
                                <p>Dữ liệu chưa cập nhật</p>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div>
                        {!! $uni_post->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
</div>
@stop