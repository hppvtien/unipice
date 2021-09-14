@extends('pages.layouts.app_master_frontend')
@section('contents')
    <main id="maincontent" >
        <div class="container">
            <div class="col-md-12  row  mt-4 pt-4 pb-4">
                <div class="col-md-6">
                    <input name="form_key" type="hidden" value="kvxXZOrq8kWkV0FM">
                    <div class="c-create-account__content" style="padding:0;margin-right:20px">
                        <div class="page-title-wrapper c-create-account__heading">
                            <h1 class="page-title">
                                <span class="base" data-ui-id="page-title-wrapper">Đăng ký tài khoản</span>
                            </h1>
                        </div>
                        <div class="form-create-account-box">
                            <form class="form create account form-create-account" action="{{ route('post.register') }}" method="POST" id="formRegister"  > 
                                @csrf
                                <fieldset class="fieldsets create info">
                                    <div class="field field-name-firstname required">
                                        <div class="m-text-input m-text-input--placeholder-label control">
                                            <input type="text" id="name" name="name" value="" title="name"
                                                class="a-text-input m-text-input__input input-text required-entry">
                                            <label class="a-form-label m-text-input__label label"
                                                for="firstname"><span>Họ và tên</span></label>
                                        </div>
                                    </div>
                                    <div class="field field-name-firstname required">
                                        <div class="m-text-input m-text-input--placeholder-label control">
                                            <input type="text" id="phone" name="phone" value="" title="phone"
                                                class="a-text-input m-text-input__input input-text required-entry">
                                            <label class="a-form-label m-text-input__label label"
                                                for="firstname"><span>Số điện thoại</span></label>
                                        </div>
                                    </div>
                                    <div class="field field-name-firstname required">
                                        <div class="m-text-input m-text-input--placeholder-label control">
                                            <input type="text" id="address" name="address" value="" title="phone" class="a-text-input m-text-input__input input-text required-entry">
                                            <label class="a-form-label m-text-input__label label" for="firstname"><span>Địa chỉ</span></label>
                                        </div>
                                    </div>
                                    <div class="m-checkbox field choice become_associate_member">
                                        <input type="checkbox" name="type"
                                            title="Become An Associate Member" value="1" id="associate_member_request"
                                            class="m-checkbox__input checkbox">
                                        <label for="associate_member_request" class="label">
                                            <div class="m-checkbox__square"></div>
                                            <span class="m-checkbox__text-label">Trở thành đại lý phân phối</span>
                                        </label>
                                    </div>
                                </fieldset>
                                <fieldset class="fieldsets create account" data-hasrequired="* Required Fields">
                                    <div class="field required">
                                        <div class="m-text-input m-text-input--placeholder-label control">
                                            <input type="email" name="email" id="email_address" 
                                                value="" title="Email" class="a-text-input m-text-input__input input-text">
                                            <label for="email_address"
                                                class="a-form-label m-text-input__label label"><span>Email</span></label>
                                        </div>
                                    </div>
                                    <div class="field password required">
                                        <div class="m-text-input m-text-input--placeholder-label control">
                                            <input type="password" name="password" id="password" title="Password"
                                                class="a-text-input m-text-input__input input-text">
                                            <label for="password"
                                                class="a-form-label m-text-input__label label"><span>Mật khẩu</span></label>
                                        </div>
                                    </div>
                                    <div class="field confirmation required">
                                        <div class="m-text-input m-text-input--placeholder-label control">
                                            <input type="password" name="password_confirmation" title="Confirm Password"
                                                id="password-confirmation"
                                                class="a-text-input m-text-input__input input-text">
                                            <label for="password-confirmation"
                                                class="a-form-label m-text-input__label label"><span>Nhập lại mật khẩu</span></label>
                                        </div>
                                    </div>
                                    <div class="m-checkbox field choice become_associate_member">
                                        <input type="checkbox" name=""
                                            title="Become An Associate Member" value="" id="associate_member_requestww"
                                            class="m-checkbox__input checkbox">
                                        <label for="associate_member_requestww" class="label">
                                            <div class="m-checkbox__square"></div>
                                            <span class="m-checkbox__text-label">Tôi đồng ý với <span><a class="d-inline police-rg" href="{{ route('get.thoa_thuan_su_dung') }}">Điều khoản sử dụng</a></span></span>
                                        </label>
                                        <p class="warning-err font_chu_mau_do"></p>
                                    </div>
                                </fieldset>
                                <div class="actions-toolbar">
                                    <div class="primary">
                                        <button type="submit" class="a-btn a-btn--primary submit js-register" title="Create an Account">
                                            <span>Đăng ký</span></button>
                                    </div>
                                    <div class="secondary">
                                        <a class="a-btn a-btn--text action back"
                                            href="{{ route('get.login') }}"><span>Quay lại</span></a>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5 d-none d-md-block mb-4" style="background: #fff url({{ asset('/images/icon_menu/anh_nen_register.jpg') }}) no-repeat top">
                </div>
                
            </div>
        </div>
    </main>
@stop
