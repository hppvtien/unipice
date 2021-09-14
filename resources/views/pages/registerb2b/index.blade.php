@extends('pages.layouts.app_master_frontend') @section('contents')
<main id="maincontent">
    <div class="bg-contact2" style="background-image: url('{{ asset('/images/icon_menu/anh_nen_b2b.jpg') }}');">
        <div class="container-contact2">
            <div class="wrap-contact2">
                <div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Đăng Nhập B2B</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Đăng Ký B2B</a>
                                </div>
                            </nav>
                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="c-login__block block-customer-login">
                                        <h2 class="c-login__block-heading" id="block-customer-login-heading">Khách hàng đã đăng ký</h2>
                                        <div class="block-content" aria-labelledby="block-customer-login-heading">
                                            <form class="form form-login" action="{{ route('post.login') }}" method="POST" id="formLogin">
                                                @csrf
                                                <input name="form_key" type="hidden" value="1">
                                                <fieldset class="fieldsets login" data-hasrequired="* Required Fields">
                                                    <div class="field note">Nếu bạn có tài khoản, Hãy đăng nhập bằng email của bạn.</div>
                                                    <div class="field email required">

                                                        <div class="m-text-input m-text-input--placeholder-label control">
                                                            <input name="email" id="email" type="email" class="a-text-input m-text-input__input input-text" title="Email">
                                                            <label class="a-form-label m-text-input__label label" for="email"><span>Email</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="field password required">
                                                        <div class="m-text-input m-text-input--placeholder-label control">
                                                            <input name="password" type="password" class="a-text-input m-text-input__input input-text" id="pass" title="Password">
                                                            <label for="pass" class="a-form-label m-text-input__label label"><span>Mật khẩu</span></label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="actions-toolbar">
                                                    <div class="primary">
                                                        <button type="submit" class="a-btn a-btn--primary login primary js-login">
                                                                <span>Đăng nhập</span></button>
                                                    </div>
                                                    <div class="secondary"><a class="a-btn a-btn--text action remind" href="{{ route('get.forgetpassword') }}"><span>Quên mật khẩu?</span></a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="form-create-account-box">
                                        <form class="form create account form-create-account" action="{{ route('post.register.b2b') }}" method="POST" id="formRegister">
                                            @csrf
                                            <fieldset class="fieldsets create info">
                                                <div class="field field-name-firstname required">
                                                    <div class="m-text-input m-text-input--placeholder-label control">
                                                        <input type="text" id="name" name="name" value="" title="name" class="a-text-input m-text-input__input input-text required-entry">
                                                        <label class="a-form-label m-text-input__label label" for="firstname"><span>Họ và tên</span></label>
                                                    </div>
                                                </div>
                                                <div class="field field-name-firstname required">
                                                    <div class="m-text-input m-text-input--placeholder-label control">
                                                        <input type="text" id="phone" name="phone" value="" title="phone" class="a-text-input m-text-input__input input-text required-entry">
                                                        <label class="a-form-label m-text-input__label label" for="firstname"><span>Số điện thoại</span></label>
                                                    </div>
                                                </div>
                                                <div class="field field-name-firstname required">
                                                    <div class="m-text-input m-text-input--placeholder-label control">
                                                        <input type="text" id="address" name="address" value="" title="phone" class="a-text-input m-text-input__input input-text required-entry">
                                                        <label class="a-form-label m-text-input__label label" for="firstname"><span>Địa chỉ</span></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="fieldsets create account" data-hasrequired="* Required Fields">
                                                <div class="field required">
                                                    <div class="m-text-input m-text-input--placeholder-label control">
                                                        <input type="email" name="email" id="email_address" value="" title="Email" class="a-text-input m-text-input__input input-text">
                                                        <label for="email_address" class="a-form-label m-text-input__label label"><span>Email</span></label>
                                                    </div>
                                                </div>
                                                <div class="field password required">
                                                    <div class="m-text-input m-text-input--placeholder-label control">
                                                        <input type="password" name="password" id="password" title="Password" class="a-text-input m-text-input__input input-text">
                                                        <label for="password" class="a-form-label m-text-input__label label"><span>Mật khẩu</span></label>
                                                    </div>
                                                </div>
                                                <div class="field confirmation required">
                                                    <div class="m-text-input m-text-input--placeholder-label control">
                                                        <input type="password" name="password_confirmation" title="Confirm Password" id="password-confirmation" class="a-text-input m-text-input__input input-text">
                                                        <label for="password-confirmation" class="a-form-label m-text-input__label label"><span>Nhập lại mật khẩu</span></label>
                                                    </div>
                                                </div>
                                                <div class="m-checkbox field choice become_associate_member">
                                                    <input type="checkbox" title="Become An Associate Member" value="" id="associate_member_requestww" class="m-checkbox__input checkbox">
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
                                                    <a class="a-btn a-btn--text action back" href="{{ route('get.login') }}"><span>Quay lại</span></a>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@stop