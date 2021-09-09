@extends('pages.layouts.app_master_frontend') @section('contents')
<main id="maincontent" class="can_le">
    <div class="columns">
        <div class="column"><input name="form_key" type="hidden" value="km16CTJGtrby3Kv1">
            <div class="container">
                <div class="col-md-12 mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="page-title-wrapper c-contact-information__heading">
                                <h1 class="page-title">
                                    <span class="base" data-ui-id="page-title-wrapper">{{ $info['name'] }}</span>
                                </h1>
                            </div>
                            <div data-content-type="row" data-appearance="full-bleed" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="main" style="justify-content: flex-start; display: flex; flex-direction: column; background-position: left top; background-size: cover; background-repeat: no-repeat; background-attachment: scroll; border-style: none; border-width: 1px; border-radius: 0px; margin: 0px; padding: 0px;">
                                <div data-content-type="html" data-appearance="default" data-element="main" style="border-style: none; border-width: 1px; border-radius: 0px; margin: 0px; padding: 0px;" data-decoded="true">
                                    <div class="c-contact-information__block">
                                        <h2 class="c-contact-information__block-heading">
                                            Liên Hệ Chúng Tôi Ngay
                                        </h2>
                                        <p>
                                            {{ $info['footer_description'] }}
                                        </p>
                                    </div>

                                    <div class="c-contact-information__block">
                                        <h2 class="c-contact-information__block-heading">
                                            Địa Chỉ
                                        </h2>
                                        <p>
                                            {{ $info['hotline'] }}
                                        </p>
                                        <p>
                                            {{ $info['email'] }}
                                        </p>
                                        <p>
                                            {{ $info['address'] }}
                                        </p>

                                    </div>

                                    <div class="c-contact-information__block" id="menu1abcd">
                                        <h2 class="c-contact-information__block-heading">
                                            Mạng Xã Hội
                                        </h2>
                                        <div class="link_share_contact">

                                            <!-- facebook -->
                                            <a class="facebook" href="{{ $info['facebook'] }}" target="blank" rel="nofollow"><i class="fa fa-facebook"></i></a>

                                            <!-- twitter -->
                                            <a class="twitter" href="{{ $info['twitter'] }}" target="blank" rel="nofollow"><i class="fa fa-twitter"></i></a>

                                            <!-- google plus -->
                                            <a class="googleplus" href="https://plus.google.com/share?url=url" target="blank" rel="nofollow"><i class="fa fa-google-plus"></i></a>

                                            <!-- linkedin -->
                                            <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=url&title=title&source=source" target="blank" rel="nofollow"><i class="fa fa-linkedin"></i></a>

                                            <!-- pinterest -->
                                            <a class="pinterest" href="https://pinterest.com/pin/create/bookmarklet/?media=media&url=url&is_video=false&description=title" target="blank" rel="nofollow"><i class="fa fa-pinterest-p"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="background: #0b2d25;">
                            <img id="VISFXT1" style="width: 100%; height: auto;margin-top: 20%;" src="{{ pare_url_file($info['logo']) }}" alt="{{ $info['name'] }}">
                        </div>
                    </div>
                </div>


            </div>
            <div class="t-contact-us__form">
                <div class="c-contact-form">
                    <h2 class="c-contact-form__heading">Gửi Phản Hồi</h2>

                    <form class="c-contact-form__form form contact" id="contact-form" method="post" data-hasrequired="* Required Fields" novalidate="novalidate">
                        @csrf
                        <div class="c-contact-form__fields fieldset">
                            <div class="c-contact-form__field c-contact-form__field--name field name required">
                                <div class="m-text-input m-text-input--placeholder-label control">
                                    <input name="name" id="name" title="Họ và tên(*)" value="" class="a-text-input m-text-input__input input-text" type="text" data-validate="{required:true}" aria-required="true">
                                    <label class="a-form-label m-text-input__label label" for="name"><span>Họ và tên(*)</span></label>
                                </div>
                                <span class="font_chu_mau_do error-input" id="name_contact"></span>
                            </div>
                            <div class="c-contact-form__field c-contact-form__field--email field email required">
                                <div class="m-text-input m-text-input--placeholder-label control">
                                    <input name="email" id="emailuni" title="E-Mail(*)" value="" class="a-text-input m-text-input__input input-text" type="email" data-validate="{required:true, 'validate-email':true}" aria-required="true">
                                    <label class="a-form-label m-text-input__label label" for="email"><span>E-mail(*)</span></label>

                                </div>
                                <span class="font_chu_mau_do error-input" id="email_contact"></span>
                            </div>
                            <div class="c-contact-form__field c-contact-form__field--phone field telephone">
                                <div class="m-text-input m-text-input--placeholder-label control">
                                    <input name="phone" id="telephone" title="Phone Number(*)" value="" class="a-text-input m-text-input__input input-text" type="tel">
                                    <label class="a-form-label m-text-input__label label" for="telephone"><span>Số điện thoại(*)</span></label>
                                </div>
                                <span class="font_chu_mau_do error-input" id="phone_contact"></span>
                            </div>
                            <div class="c-contact-form__field c-contact-form__field--subject field subject required">
                                <div class="m-select-menu m-select-menu--hidden-label control">
                                    <select name="subject" id="subject" title="Subject" class="a-select-menu m-select-menu__select validate-select" aria-required="true">
                                        @foreach($subject as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                    @endforeach
                                    </select>
                                    <label class="a-form-label m-select-menu__label label" for="subject"><span>Subject</span></label>
                                    <span class="m-select-menu__arrow"></span>
                                </div>
                            </div>
                            <div class="c-contact-form__field c-contact-form__field--message field comment required">
                                <div class="m-textarea m-textarea--placeholder-label control">
                                    <textarea name="message" id="comment" title="Message" class="a-textarea m-textarea__input input-text" cols="5" rows="3" data-validate="{required:true}" aria-required="true"></textarea>
                                    <label class="a-form-label m-textarea__label label" for="comment"><span>Nội dung(*)</span></label>
                                </div>
                                <span class="font_chu_mau_do error-input" id="message_contact"></span>
                            </div>
                        </div>
                        <div class="actions-toolbar">
                            <div class="c-contact-form__submit primary">
                                <input type="hidden" name="hideit" id="hideit" value="">
                                <input type="hidden" name="source" id="source" value="UniMall">
                                <button  data-url="{{ route('post.uni_contact') }}" id="submit-form-contact" type="button" title="Submit" class="a-btn a-btn--primary action submit primary">
                                    <span>Gửi phản hồi</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@stop