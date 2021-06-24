<!-- Login modal embedded in page -->
<div id="" class="modal modal-customer modal-auth js-popup-auth">
    <div class="box">
        <div class="box-50 auth-left flex">
            <div class="inner">
                <h4>Bạn chưa có tài khoản</h4>
                <p class="mt10 mb10">Unimind, Digital Marketing</p>
                <a href="" style="padding: 0.3rem 5rem" class="btn btn-pink btn-radius js-render-form" data-type="register">Đăng ký</a>
            </div>
        </div>
        <div class="box-50 auth-right" >
            @include('pages.components.auth.include._inc_login')
            @include('pages.components.auth.include._inc_register')
        </div>
    </div>
</div>
