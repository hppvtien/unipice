@extends('pages.layouts.app_master_frontend')
@section('contents')
    <main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
        <div class="c-forgot-password">
            <div class="c-forgot-password__content" style="padding:0;margin-right:20px">
                <div class="form-password-forget-box">
                    <div class="page-title-wrapper c-forgot-password__heading">
                        <h1 class="page-title">
                            <span class="base" data-ui-id="page-title-wrapper">Quên mật khẩu?</span>
                        </h1>
                    </div>
                    <form class="form password forget"
                        action="{{ route('post.forgetpassword') }}" method="POST"
                        id="formforget" >
                        @csrf
                        <fieldset class="fieldsets" data-hasrequired="* Required Fields">
                            <div class="field note">Vui lòng điền email của bạn dưới đây để nhận liên kết đặt lại mật khẩu.
                            </div>
                            <div class="field email required">
                                <div class="m-text-input m-text-input--placeholder-label control">
                                    <input type="email" name="emails" alt="email" id="email_address"
                                        class="a-text-input m-text-input__input input-text" value="">
                                    <label for="email_address"
                                        class="a-form-label m-text-input__label label"><span>Email</span></label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="actions-toolbar">
                            <div class="primary">
                                <button type="submit" class="a-btn a-btn--primary submit primary">
                                    <span>Đặt lại mật khẩu</span></button>
                            </div>
                            <div class="secondary">
                                <a class="a-btn a-btn--text action back"
                                    href="{{ route('get.login') }}"><span>Quay lại</span></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="c-forgot-password__image">
                <div data-content-type="row" data-appearance="full-bleed" data-enable-parallax="0" data-parallax-speed="0.5"
                    data-background-images="{}" data-background-type="image" data-video-loop="true"
                    data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src=""
                    data-element="main"
                    style="justify-content: flex-start; display: flex; flex-direction: column; background-position: left top; background-size: cover; background-repeat: no-repeat; background-attachment: scroll; border-style: none; border-width: 1px; border-radius: 0px; margin: 0px; padding: 0px;">
                    <div data-content-type="text" data-appearance="default" data-element="main"
                        style="border-style: none; border-width: 1px; border-radius: 0px; margin: 0px; padding: 0px;">
                        <p><img src="{{ asset('/images/icon_menu/anh_nen_register.jpg') }}" alt="Trang Đăng Nhập - UniMall"></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </main>
@stop
