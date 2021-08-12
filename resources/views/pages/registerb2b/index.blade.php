@extends('pages.layouts.app_master_frontend')
@section('contents')
    <main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="c-login__content" style="padding:0;margin-right:20px">
                        <div class="login-container">
                            <div class="page-title-wrapper c-login__heading">
                                <h1 class="page-title">
                                    <span class="base" data-ui-id="page-title-wrapper">Đăng Nhập B2B</span>
                                </h1>
                            </div>
                            <div class="c-login__block block-customer-login">
                                <h2 class="c-login__block-heading" id="block-customer-login-heading">Khách hàng đã đăng ký</h2>
                                <div class="block-content" aria-labelledby="block-customer-login-heading">
                                    <form class="form form-login" action="{{ route('post.login') }}" method="POST" id="formLogin" >
                                        @csrf
                                        <input name="form_key" type="hidden" value="1">
                                        <fieldset class="fieldsets login" data-hasrequired="* Required Fields">
                                            <div class="field note">Nếu bạn có tài khoản, Hãy đăng nhập bằng email của bạn.</div>
                                            <div class="field email required">
    
                                                <div class="m-text-input m-text-input--placeholder-label control">
                                                    <input name="email" id="email" type="email" class="a-text-input m-text-input__input input-text" title="Email"  >
                                                    <label class="a-form-label m-text-input__label label" for="email"><span>Email</span></label>
                                                </div>
                                            </div>
                                            <div class="field password required">
                                                <div class="m-text-input m-text-input--placeholder-label control">
                                                    <input name="password" type="password"  class="a-text-input m-text-input__input input-text" id="pass" title="Password" >
                                                    <label for="pass" class="a-form-label m-text-input__label label"><span>Mật khẩu</span></label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="actions-toolbar">
                                            <div class="primary">
                                                <button type="button" class="a-btn a-btn--primary login primary js-login" >
                                                    <span>Đăng nhập</span></button>
                                            </div>
                                            <div class="secondary"><a class="a-btn a-btn--text action remind" href="{{ route('get.forgetpassword') }}"><span>Quên mật khẩu?</span></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6"><div class="c-create-account__content" style="padding:0;margin-right:20px">
                    <div class="page-title-wrapper c-create-account__heading">
                        <h1 class="page-title">
                            <span class="base" data-ui-id="page-title-wrapper">Đăng ký tài khoản đại lý</span>
                        </h1>
                    </div>
                    <div class="form-create-account-box">
                        <form class="form create account form-create-account" action="{{ route('post.register.b2b') }}" method="POST" id="formRegister"  > 
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
                </div></div>
            </div>
        </div>

    </main>
@stop
