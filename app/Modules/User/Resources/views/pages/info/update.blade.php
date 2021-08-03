@extends('user::pages.layout.app_master_user')
@section('content')
    <main id="maincontent">

        <div class="columns">
            <div class="column main padding_css">
                <div class="block block-dashboard-info">
                <div class="page-title-wrapper">
                    <div class="block-title"><strong>Thông tin tài khoản</strong></div>
                </div>
                </div>
                <div class="block block-dashboard-info">
                    <form class="form form-shipping-address" id="co-shipping-form" action="{{ route('get_user.info.edit',['id' => get_data_user('web')]) }}" method="POST">
                        @csrf
                        <div id="shipping-new-address-form" class="fieldset address">
                            <div class="field _required" name="shippingAddress.firstname">
                                <div class="control">
                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                        <input class="a-text-input m-text-input__input" type="text" name="name" 
                                            value="{{ get_data_user('web', 'name') }}" aria-required="true"
                                            aria-invalid="false" id="G11F99D">
                                        <label class="a-form-label m-text-input__label" for="G11F99D">
                                            <span>Họ và tên</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="field email required">

                                <div class="m-text-input m-text-input--placeholder-label control">
                                    <input name="email" id="email" type="email" disabled='disabled'
                                        class="a-text-input m-text-input__input input-text" title="Email"
                                        value="{{ get_data_user('web', 'email') }}">
                                    <label class="a-form-label m-text-input__label label"
                                        for="email"><span>Email</span></label>
                                </div>
                            </div>
                            <div class="field _required" name="shippingAddress.telephone">
                                <div class="control _with-tooltip">
                                    <div class="m-text-input m-text-input--placeholder-label  ">
                                        <input class="a-text-input m-text-input__input" type="text" name="phone"
                                            value="{{ get_data_user('web', 'phone') }}" aria-required="true"
                                            aria-invalid="false" id="CNBP3U7">
                                        <label class="a-form-label m-text-input__label" for="CNBP3U7">
                                            <span>Số điện thoại</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="control">
                                <div class="field _required">
                                    <div class="control">
                                        <div class="m-text-input m-text-input--placeholder-label  ">
                                            <input class="a-text-input m-text-input__input" type="text" name="address"
                                                value="{{ get_data_user('web', 'address') }}" aria-required="true"
                                                aria-invalid="false" id="SAIFHCQ">
                                            <label class="a-form-label m-text-input__label" data-bind="attr: { for: uid }"
                                                for="SAIFHCQ">
                                                <span>Địa chỉ</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="actions-toolbar">
                            <div class="primary">
                                <button type="submit" class="a-btn a-btn--primary " >
                                    <span>Cập nhật</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @include('user::pages.component._inc_menu_user')
        </div>
    </main>
@stop
