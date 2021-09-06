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
                    <form action="{{ route('post.resetcodepassword',$reset_code) }}" method="POST" class="uk-child-width-1-1 uk-grid-small" uk-grid>
                        @csrf
                        <div>
                            <div class="uk-form-group">
                                <label class="uk-form-label"> Email đăng ký</label>
        
                                <div class="m-text-input m-text-input--placeholder-label control">
                                    <span class="uk-form-icon">
                                        <i class="icon-feather-mail"></i>
                                    </span>
                                    <input disabled  class="a-text-input m-text-input__input input-text" type="email" value="{{ old('user_re', $user_re->email ?? '') }}">
                                    <input name="re_email" class="uk-input" type="hidden" value="{{ old('user_re', $user_re->email ?? '') }}">
                                </div>
        
                            </div>
                        </div>
                       
                        <div class="uk-child-width-1-1">
                            <div class="uk-form-group">
                                <label class="uk-form-label"> Nhập mật khẩu mới</label>
                                <div class="uk-position-relative w-100">
                                    <span class="uk-form-icon">
                                        <i class="icon-feather-lock"></i>
                                    </span>
                                    <input name="re_password" id="re_password" class="uk-input" type="password" placeholder="********">
                                </div>
                                @if($errors->first('re_password'))
                                <span class="text-danger">{{ $errors->first('re_password') }}</span>
                                @endif
                            </div>
                        </div>
        
                        <div>
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
                        <p><img src="{{ asset('/images/icon_menu/anh_nen_register.jpg') }}" alt="Trang Đăng Ký - UniMall"></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </main>
@stop
