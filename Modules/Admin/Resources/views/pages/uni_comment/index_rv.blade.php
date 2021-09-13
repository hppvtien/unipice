@extends('admin::layouts.master')
@section('content')
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Đánh giá</h4>
                <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Danh sách</span>
            </div>
        </div>
        <div class="my-auto">
            <div class="d-flex">
                <a class="btn btn-success" href="{{ route('file-export-review') }}">Xuất mail đánh giá</a>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
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
                                    <th style="width: 70%;">Nội dung đánh giá</th>
                                    <th >Sản phẩm</th>
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
                                            <h5>{{ $item->title }}</h5>
                                            <span class="page-title-seo title_seo">{{ $item->noi_dung_comment }}</span>
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
                                        <label class="switch">
                                            <input type="checkbox" class="v_status" data-url="{{ route('get_admin.uni_comment.editrv') }}" data-ckb="{{ $item->id }}" {{ $item->status == 1 ?'checked':'' }}>
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                    <td>
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