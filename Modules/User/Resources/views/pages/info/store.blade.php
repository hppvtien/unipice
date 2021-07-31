@extends('pages.layouts.app_master_frontend')
@section('contents')
    <main id="maincontent">

        <div class="columns">
            <div class="column main padding_css">
                <div class="block block-dashboard-info">
                    <div class="block-title"><strong>Thông tin tài khoản</strong></div>
                </div>
                <div class="block block-dashboard-info">
                    <form class="form form-shipping-address" id="co-store-form" action="{{ route('get_user.store.edit',['id' => get_data_user('web')]) }}" method="POST">
                        @csrf
                        <div id="shipping-new-address-form" class="fieldset address">
                            <div class="field _required" name="shippingAddress.firstname">
                                <div class="control">
                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                        <input class="a-text-input m-text-input__input" type="text" name="store_name" value="{{ old('store_name', $storeContent->store_name ?? '') }}"
                                             aria-required="true"
                                            aria-invalid="false" id="store_name">
                                        <label class="a-form-label m-text-input__label" for="store_name">
                                            <span>Tên đại lý</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="field _required" name="shippingAddress.firstname">
                                <div class="control">
                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                        <input class="a-text-input m-text-input__input" type="text" name="store_area" value="{{ old('store_area', $storeContent->store_area ?? '') }}"
                                             aria-required="true"
                                            aria-invalid="false" id="store_area">
                                        <label class="a-form-label m-text-input__label" for="store_area">
                                            <span>Diện tích</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="field _required" name="shippingAddress.firstname">
                                <div class="control">
                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                        <input class="a-text-input m-text-input__input" type="text" name="store_address" value="{{ old('store_address', $storeContent->store_address ?? '') }}"
                                             aria-required="true"
                                            aria-invalid="false" id="store_address">
                                        <label class="a-form-label m-text-input__label" for="store_address">
                                            <span>Địa chỉ</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="field _required" name="shippingAddress.firstname">
                                <div class="control">
                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                        <input class="a-text-input m-text-input__input" type="text" name="store_province" value="{{ old('store_province', $storeContent->store_province ?? '') }}"
                                             aria-required="true"
                                            aria-invalid="false" id="store_province">
                                        <label class="a-form-label m-text-input__label" for="store_province">
                                            <span>Thành phố</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="field _required" name="shippingAddress.telephone">
                                <div class="control _with-tooltip">
                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                        <input class="a-text-input m-text-input__input" type="text" name="store_phone" value="{{ old('store_phone', $storeContent->store_phone ?? '') }}"
                                            aria-required="true"
                                            aria-invalid="false" id="store_phone">
                                        <label class="a-form-label m-text-input__label" for="store_phone">
                                            <span>Số điện thoại</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="field _required" name="shippingAddress.telephone">
                                <div class="control _with-tooltip">
                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                        <input class="a-text-input m-text-input__input" type="text" name="store_taxcode" value="{{ old('store_taxcode', $storeContent->store_taxcode ?? '') }}"
                                            aria-required="true"
                                            aria-invalid="false" id="store_taxcode">
                                        <label class="a-form-label m-text-input__label" for="store_taxcode">
                                            <span>Mã số thuế</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="actions-toolbar">
                            <div class="primary">
                                <button type="submit" class="a-btn a-btn--primary js-store-user" title="Cập nhật đại lý">
                                    <span>Cập nhật</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @include('user::components._inc_menu_user')
        </div>
    </main>
@stop
