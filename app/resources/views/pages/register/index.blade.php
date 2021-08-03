@extends('pages.layouts.app_master_frontend')
@section('contents')
    <main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
        <div class="columns">
            <div class="column main"><input name="form_key" type="hidden" value="kvxXZOrq8kWkV0FM">
                <div class="c-create-account">
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
                    <div class="c-create-account__image">
                        <div data-content-type="row" data-appearance="full-bleed" data-enable-parallax="0"
                            data-parallax-speed="0.5" data-background-images="{}" data-background-type="image"
                            data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true"
                            data-video-fallback-src="" data-element="main"
                            style="justify-content: flex-start; display: flex; flex-direction: column; background-position: left top; background-size: cover; background-repeat: no-repeat; background-attachment: scroll; border-style: none; border-width: 1px; border-radius: 0px; margin: 0px; padding: 0px;">
                            <div data-content-type="text" data-appearance="default" data-element="main"
                                style="border-style: none; border-width: 1px; border-radius: 0px; margin: 0px; padding: 0px;">
                                <p><img src="https://shop.coopmarket.com/media/wysiwyg/hero/contact-us-hero.png" alt=""></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
