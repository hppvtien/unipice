@extends('admin::layouts.master')
@section('content')
<style>
    #ren_map iframe {
        height: 500px;
    }
</style>
<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Cửa hàng</h4>
                <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Update</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
                <a href="{{ route('get_admin.uni_store.index') }}" class="btn btn-danger mr-2">Quay lại <i class="la la-undo"></i></a>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <!-- row -->
    <form class="form-horizontal" autocomplete="off" method="POST" action="" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-12">
                <div class="card box-shadow-0">
                    <div class="card-body pt-3">


                        <div class="row">
                            <div class="col-6">
                            <div class="form-group">
                                    <label for="exampleInputEmail1" class="required">Tên chủ <span>(*)</span></label>
                                    <input disabled type="text" class="form-control" value="{{ get_data_user_name('web') }}" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required">Tên cửa hàng <span>(*)</span></label>
                                    <input disabled type="text" class="form-control" value="{{ old('store_name', $uni_store->store_name ?? '') }}" name="store_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required">Số điện thoại <span>(*)</span></label>
                                    <input disabled type="text" class="form-control store_phone" name="store_phone" value="{{ old('store_phone', $uni_store->store_phone ?? '') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required">Địa chỉ <span>(*)</span></label>
                                    <input disabled type="text" class="form-control" name="store_address" value="{{ old('store_address', $uni_store->store_address ?? '') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required">Diện tịch <span>(*)</span></label>
                                    <input disabled type="text" class="form-control store_area" name="store_area" value="{{ old('store_area', $uni_store->store_area ?? '') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required">Mã số thuế <span>(*)</span></label>
                                    <input disabled type="text" class="form-control store_taxcode" name="store_taxcode" value="{{ old('store_taxcode', $uni_store->store_taxcode ?? '') }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="required">Google map <span>(*)</span></label>

                                    <div class="m-media-block-aligned__image-wrapper">
                                        <picture id="ren_map">
                                            {!! $uni_store->store_lat !!}
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh cửa hàng </label>
                        </div>
                        @if($uni_store)
                        <div class="row" style="border: 1px solid;padding-top:10px">
                            @forelse (json_decode($uni_store->store_album) as $key => $item)
                            <div class="col-3" data-rm="{{ $item }}" data-key="{{ $key }}" style="margin-bottom: 10px;position: relative; ">
                                <span class="close-img js-delete" data-url="{{ route('get_admin.uni_store.delete_album') }}" data-id="{{ $uni_store->id }}" album-data="{{ $item }}" style="position:absolute"><i class="la la-trash"></i></span>
                                <img src="/storage/uploads_store/{{ $item }}" class="card-img-top" alt="...">
                            </div>
                            @empty

                            @endforelse

                        </div>
                        @else
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@stop