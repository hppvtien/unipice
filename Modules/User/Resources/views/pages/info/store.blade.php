@extends('user::pages.layout.app_master_user')
@section('content')
<main id="maincontent">

    <div class="columns">
        <div class="column main padding_css">
            <div class="block block-dashboard-info">
                <div class="block-title"><strong>Thông tin tài khoản</strong></div>
            </div>
            <div class="block block-dashboard-info">

                <form class="form form-shipping-address" id="co-store-form" action="{{ route('get_user.store.edit',get_data_user('web')) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div id="shipping-new-address-form" class="fieldset address">
                        <div class="field _required" name="shippingAddress.firstname">
                            <div class="control">
                                <div class="m-text-input m-text-input--placeholder-label  ">
                                    <input class="a-text-input m-text-input__input" type="text" name="store_name" value="{{ old('store_name', $storeContent->store_name ?? '') }}" aria-required="true" aria-invalid="false" id="store_name">
                                    @if($errors->first('store_name'))
                                    <span class="text-danger">{{ $errors->first('store_name') }}</span>
                                    @endif
                                    <label class="a-form-label m-text-input__label text-f20" for="store_name">
                                        <span>Tên cửa hàng hoặc tên doanh nghiệp *</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="field _required" name="shippingAddress.firstname">
                            <div class="control">
                                <div class="m-text-input m-text-input--placeholder-label  ">
                                    <input class="a-text-input m-text-input__input" type="text" name="store_area" value="{{ old('store_area', $storeContent->store_area ?? '') }}" aria-required="true" aria-invalid="false" id="store_area">
                                    @if($errors->first('store_area'))
                                    <span class="text-danger">{{ $errors->first('store_area') }}</span>
                                    @endif
                                    <label class="a-form-label m-text-input__label text-f20" for="store_area">
                                        <span>Diện tích *</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="field _required" name="shippingAddress.firstname">
                            <div class="control">
                                <div class="m-text-input m-text-input--placeholder-label  ">
                                    <input class="a-text-input m-text-input__input" type="text" name="store_address" value="{{ old('store_address', $storeContent->store_address ?? '') }}" aria-required="true" aria-invalid="false" id="store_address">
                                    @if($errors->first('store_address'))
                                    <span class="text-danger">{{ $errors->first('store_address') }}</span>
                                    @endif
                                    <label class="a-form-label m-text-input__label text-f20" for="store_address">
                                        <span>Địa chỉ *</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="field _required" name="shippingAddress.firstname">
                            <div class="control">
                                <div class="m-text-input m-text-input--placeholder-label  ">
                                    <input class="a-text-input m-text-input__input" type="text" name="store_province" value="{{ old('store_province', $storeContent->store_province ?? '') }}" aria-required="true" aria-invalid="false" id="store_province">
                                    @if($errors->first('store_province'))
                                    <span class="text-danger">{{ $errors->first('store_province') }}</span>
                                    @endif
                                    <label class="a-form-label m-text-input__label text-f20" for="store_province">
                                        <span>Thành phố *</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="field _required" name="shippingAddress.telephone">
                            <div class="control _with-tooltip">
                                <div class="m-text-input m-text-input--placeholder-label  ">
                                    <input class="a-text-input m-text-input__input" type="text" name="store_phone" value="{{ old('store_phone', $storeContent->store_phone ?? '') }}" aria-required="true" aria-invalid="false" id="store_phone">
                                    @if($errors->first('store_phone'))
                                    <span class="text-danger">{{ $errors->first('store_phone') }}</span>
                                    @endif
                                    <label class="a-form-label m-text-input__label text-f20" for="store_phone">
                                        <span>Số điện thoại *</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="field _required" name="shippingAddress.telephone">
                            <div class="control _with-tooltip">
                                <div class="m-text-input m-text-input--placeholder-label  ">
                                    <input class="a-text-input m-text-input__input" type="text" name="store_taxcode" value="{{ old('store_taxcode', $storeContent->store_taxcode ?? '') }}" aria-required="true" aria-invalid="false" id="store_taxcode">
                                    @if($errors->first('store_taxcode'))
                                    <span class="text-danger">{{ $errors->first('store_taxcode') }}</span>
                                    @endif
                                    <label class="a-form-label m-text-input__label text-f20" for="store_taxcode">
                                        <span>Mã số thuế</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="field _required" name="shippingAddress.album">
                            <div class="control _with-tooltip">
                                <div class="m-text-input m-text-input--placeholder-label  ">
                                    <input class="a-text-input m-text-input__input" type="file" name="store_album[]" multiple="multiple" value="" aria-required="true" aria-invalid="false" id="store_album">
                                    @if($errors->first('store_album[]'))
                                    <span class="text-danger">{{ $errors->first('store_album[]') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- <input type="hidden" class="form-control" name="albumold[]" multiple value="{{ old('store_album', $storeContent->store_album ?? '') }}"> -->
                        @if($storeContent->store_album)
                        <div class="row" style="padding-top:10px">
                            @forelse (json_decode($storeContent->store_album) as $key => $item)
                            <div class="col-md-3 col-4" data-rm="{{ $item }}" data-key="{{ $key }}" style="margin-bottom: 10px;position: relative;border:1px solid #f2f2f2">
                                <span class="close-img js-delete" data-url="{{ route('get_admin.uni_store.delete_album') }}" data-id="{{ $storeContent->id }}" album-data="{{ $item }}" style="position:absolute"><i class="la la-trash"></i></span>
                                <img src="/storage/uploads_store/{{ $item }}" class="card-img-top" alt="...">
                            </div>
                            @empty

                            @endforelse

                        </div>
                        @else
                        @endif

                    </div>
                    <div class="actions-toolbar">
                        <div class="primary">
                            <button type="submit" class="a-btn a-btn--primary" title="Cập nhật đại lý">
                                <span>Cập nhật</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @include('user::pages.component._inc_menu_user')
    </div>
</main>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.js-store-user').on('click', function() {
        let method_invoice = $("input[name='album[]']").val();
        console.log(method_invoice);
        $.ajax({
            url: "{{ route('get_user.store.edit',get_data_user('web')) }}",
            type: "post",
            dataType: "text",
            data: {
                method_invoice: method_invoice
            },
            success: function(result) {
                let tiencss = $('#myModal').html(result);
            },
            error: function(result) {
                console.log(result, +'ssssss');
                // $('#result').html(result);
            }
        });
    });
    //  -->
<!-- </script> -->
@stop