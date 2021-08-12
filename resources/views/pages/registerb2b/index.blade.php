@extends('pages.layouts.app_master_frontend') @section('contents')
<main id="maincontent">
    <div class="bg-contact2" style="background-image: url('https://colorlib.com/etc/cf/ContactFrom_v2/images/bg-01.jpg');">
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
                                                        <button type="button" class="a-btn a-btn--primary login primary js-login">
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



<style>
    .bg-contact2 {
        width: 100%;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover
    }
    
    .container-contact2 {
        width: 100%;
        min-height: 100vh;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding: 15px;
        background: #db1563;
        background: -webkit-linear-gradient(45deg, rgba(20, 255, 0, 0.8), rgba(255, 2, 2, 0.8));
        background: -o-linear-gradient(45deg, rgba(20, 255, 0, 0.8), rgba(255, 2, 2, 0.8));
        background: -moz-linear-gradient(45deg, rgba(20, 255, 0, 0.8), rgba(255, 2, 2, 0.8));
        background: linear-gradient(45deg, rgba(20, 255, 0, 0.8), rgba(255, 2, 2, 0.8));
    }
    
    .wrap-contact2 {
        width: 790px;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        padding: 72px 55px 90px
    }
    
    .wrap-input2 {
        width: 100%;
        position: relative;
        border-bottom: 2px solid #adadad;
        margin-bottom: 37px
    }
    
    .input2 {
        display: block;
        width: 100%;
        font-family: Poppins-Regular;
        font-size: 15px;
        color: #555;
        line-height: 1.2
    }
    
    .focus-input2 {
        position: absolute;
        display: block;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none
    }
    
    .focus-input2::before {
        content: "";
        display: block;
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 2px;
        -webkit-transition: all .4s;
        -o-transition: all .4s;
        -moz-transition: all .4s;
        transition: all .4s;
        background: #db1563;
        background: -webkit-linear-gradient(45deg, rgba(20, 255, 0, 0.8), rgba(255, 2, 2, 0.8));
        background: -o-linear-gradient(45deg, rgba(20, 255, 0, 0.8), rgba(255, 2, 2, 0.8));
        background: -moz-linear-gradient(45deg, rgba(20, 255, 0, 0.8), rgba(255, 2, 2, 0.8));
        background: linear-gradient(45deg, rgba(20, 255, 0, 0.8), rgba(255, 2, 2, 0.8));
    }
    
    .focus-input2::after {
        content: attr(data-placeholder);
        display: block;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        font-family: Poppins-Regular;
        font-size: 13px;
        color: #999;
        line-height: 1.2;
        -webkit-transition: all .4s;
        -o-transition: all .4s;
        -moz-transition: all .4s;
        transition: all .4s
    }
    
    input.input2 {
        height: 45px
    }
    
    input.input2+.focus-input2::after {
        top: 16px;
        left: 0
    }
    
    textarea.input2 {
        min-height: 115px;
        padding-top: 13px;
        padding-bottom: 13px
    }
    
    textarea.input2+.focus-input2::after {
        top: 16px;
        left: 0
    }
    
    .input2:focus+.focus-input2::after {
        top: -13px
    }
    
    .input2:focus+.focus-input2::before {
        width: 100%
    }
    
    .has-val.input2+.focus-input2::after {
        top: -13px
    }
    
    .has-val.input2+.focus-input2::before {
        width: 100%
    }
    
    .container-contact2-form-btn {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding-top: 13px
    }
    
    .wrap-contact2-form-btn {
        display: block;
        position: relative;
        z-index: 1;
        border-radius: 2px;
        width: auto;
        overflow: hidden;
        margin: 0 auto
    }
    
    .contact2-form-bgbtn {
        position: absolute;
        z-index: -1;
        width: 300%;
        height: 100%;
        background: #db1563;
        background: -webkit-linear-gradient(45deg, rgba(20, 255, 0, 0.8), rgba(255, 2, 2, 0.8));
        background: -o-linear-gradient(45deg, rgba(20, 255, 0, 0.8), rgba(255, 2, 2, 0.8));
        background: -moz-linear-gradient(45deg, rgba(20, 255, 0, 0.8), rgba(255, 2, 2, 0.8));
        background: linear-gradient(45deg, rgba(20, 255, 0, 0.8), rgba(255, 2, 2, 0.8));
        top: 0;
        left: -100%;
        -webkit-transition: all .4s;
        -o-transition: all .4s;
        -moz-transition: all .4s;
        transition: all .4s
    }
    
    .contact2-form-btn {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 20px;
        min-width: 244px;
        height: 50px;
        font-family: Poppins-Medium;
        font-size: 16px;
        color: #fff;
        line-height: 1.2
    }
    
    .wrap-contact2-form-btn:hover .contact2-form-bgbtn {
        left: 0
    }
    
    @media(max-width:576px) {
        .wrap-contact2 {
            padding: 72px 15px 90px
        }
    }
    
    .validate-input {
        position: relative
    }
    
    .alert-validate::before {
        content: attr(data-validate);
        position: absolute;
        max-width: 70%;
        background-color: #fff;
        border: 1px solid #c80000;
        border-radius: 2px;
        padding: 4px 25px 4px 10px;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        right: 0;
        pointer-events: none;
        font-family: Poppins-Regular;
        color: #c80000;
        font-size: 13px;
        line-height: 1.4;
        text-align: left;
        visibility: hidden;
        opacity: 0;
        -webkit-transition: opacity .4s;
        -o-transition: opacity .4s;
        -moz-transition: opacity .4s;
        transition: opacity .4s
    }
    
    .alert-validate::after {
        content: "\f12a";
        font-family: FontAwesome;
        display: block;
        position: absolute;
        color: #c80000;
        font-size: 16px;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        right: 8px
    }
    
    .alert-validate:hover:before {
        visibility: visible;
        opacity: 1
    }
    
    @media(max-width:992px) {
        .alert-validate::before {
            visibility: visible;
            opacity: 1
        }
    }
    /* Tabs*/
    
    section {
        padding: 60px 0;
    }
    
    section .section-title {
        text-align: center;
        color: #007b5e;
        margin-bottom: 50px;
        text-transform: uppercase;
    }
    
    #tabs {
        background: #007b5e;
        color: #eee;
    }
    
    #tabs h6.section-title {
        color: #eee;
    }
    
    #tabs .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        color: #0b2d25;
        background-color: transparent;
        border-color: transparent transparent #f3f3f3;
        font-weight: bold;
    }
    
    #tabs .nav-tabs .nav-link {
        border: none;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
        color: #eee;
        font-size: 20px;
    }
    
    .nav-tabs .nav-link {
        border: none;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
    }
    
    #nav-profile-tab {
        color: #0b2d25;
    }
    
    #nav-home-tab {
        color: #0b2d25;
    }
</style>

@stop