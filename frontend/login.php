<?php include 'include/header.php'; ?>
<main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
    <div class="page messages">
        <div data-placeholder="messages"></div>
        <div data-bind="scope: 'messages'">
            <!-- ko if: cookieMessages && cookieMessages.length > 0 -->
            <!-- /ko -->

            <!-- ko if: messages().messages && messages().messages.length > 0 -->
            <!-- /ko -->
        </div>

    </div>
    <div class="columns">
        <div class="column main"><input name="form_key" type="hidden" value="GXhjnhZzwPqQ9aXV">
            <div id="authenticationPopup" data-bind="scope:'authenticationPopup'" style="display: none;">
                <script>
                    window.authenticationPopup = {
                        "autocomplete": "off",
                        "customerRegisterUrl": "https:\/\/shop.coopmarket.com\/customer\/account\/create\/",
                        "customerForgotPasswordUrl": "https:\/\/shop.coopmarket.com\/customer\/account\/forgotpassword\/",
                        "baseUrl": "https:\/\/shop.coopmarket.com\/"
                    };
                </script>
                <!-- ko template: getTemplate() -->


                <!-- /ko -->

            </div>






            <div class="c-login">
                <div class="c-login__content">
                    <div class="login-container">
                        <div class="page-title-wrapper c-login__heading">
                            <h1 class="page-title">
                                <span class="base" data-ui-id="page-title-wrapper">Customer Login</span>
                            </h1>
                        </div>
                        <div class="c-login__block block-customer-login">
                            <h2 class="c-login__block-heading" id="block-customer-login-heading">Registered Customers</h2>
                            <div class="block-content" aria-labelledby="block-customer-login-heading">
                                <form class="form form-login" action="https://shop.coopmarket.com/customer/account/loginPost/" method="post" id="login-form" novalidate="novalidate">
                                    <input name="form_key" type="hidden" value="GXhjnhZzwPqQ9aXV">
                                    <fieldset class="fieldset login" data-hasrequired="* Required Fields">
                                        <div class="field note">If you have an account, sign in with your email address.</div>
                                        <div class="field email required">

                                            <div class="m-text-input m-text-input--placeholder-label control">
                                                <input name="login[username]" value="" autocomplete="off" id="email" type="email" class="a-text-input m-text-input__input input-text" title="Email" data-validate="{required:true, 'validate-email':true}" aria-required="true">
                                                <label class="a-form-label m-text-input__label label" for="email"><span>Email</span></label>
                                            </div>
                                        </div>
                                        <div class="field password required">
                                            <div class="m-text-input m-text-input--placeholder-label control">
                                                <input name="login[password]" type="password" autocomplete="off" class="a-text-input m-text-input__input input-text" id="pass" title="Password" data-validate="{required:true}" aria-required="true">
                                                <label for="pass" class="a-form-label m-text-input__label label"><span>Password</span></label>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="actions-toolbar">
                                        <div class="primary">
                                            <button type="submit" class="a-btn a-btn--primary login primary" name="send" id="send2">
                                                <span>Sign In</span></button>
                                        </div>
                                        <div class="secondary"><a class="a-btn a-btn--text action remind" href="https://shop.coopmarket.com/customer/account/forgotpassword/"><span>Forgot Your Password?</span></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <script>
                            require(['jquery', 'mage/validation'], function($) {
                                $('#login-form').on('submit', function() {
                                    if ($(this).validation('isValid')) {
                                        $('body').trigger('processStart');
                                    }
                                });
                            });
                        </script>

                        <div class="c-login__block block-new-customer">
                            <h2 class="c-login__block-heading" id="block-new-customer-heading">New Customers</h2>
                            <div class="block-content" aria-labelledby="block-new-customer-heading">
                                <p>Creating an account has many benefits: check out faster, keep more than one address, track orders and more.</p>
                                <div class="actions-toolbar">
                                    <div class="primary">
                                        <a href="https://shop.coopmarket.com/customer/account/create/" class="a-btn a-btn--primary create primary"><span>Create an Account</span></a>
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
<?php include 'include/footer.php'; ?>