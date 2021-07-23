@extends('pages.layouts.app_master_frontend')
@section('contents')
<main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
    <div class="columns">
        <div class="column main"><input name="form_key" type="hidden" value="GXhjnhZzwPqQ9aXV">
            <div class="c-login">
                <div class="c-login__content" style="padding:0;margin-right:20px">
                    <div class="login-container">
                        <div class="page-title-wrapper c-login__heading">
                            <h1 class="page-title">
                                <span class="base" data-ui-id="page-title-wrapper">Đăng nhập khách hàng</span>
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

                        <div class="c-login__block block-new-customer">
                            <h2 class="c-login__block-heading" id="block-new-customer-heading">Khách hàng mới</h2>
                            <div class="block-content" aria-labelledby="block-new-customer-heading">
                                <p>Tạo tài khoản có nhiều lợi ích: Thanh toán nhanh hơn, theo dõi đơn đặt hàng và hơn thế nữa.</p>
                                <div class="actions-toolbar">
                                    <div class="primary">
                                        <a href="{{ route('get.register') }}" class="a-btn a-btn--primary create primary"><span>Tạo tài khoản khách hàng</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-login__image">
                    <div data-content-type="row" data-appearance="full-bleed" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="main" style="justify-content: flex-start; display: flex; flex-direction: column; background-position: left top; background-size: cover; background-repeat: no-repeat; background-attachment: scroll; border-style: none; border-width: 1px; border-radius: 0px; margin: 0px; padding: 0px;">
                        <div data-content-type="text" data-appearance="default" data-element="main" style="border-style: none; border-width: 1px; border-radius: 0px; margin: 0px; padding: 0px;">
                            <p><img src="https://shop.coopmarket.com/media/wysiwyg/hero/contact-us-hero.png" alt=""></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@stop
