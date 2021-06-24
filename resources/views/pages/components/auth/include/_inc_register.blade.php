<div class="auth-form hide" data-type="register">
    <h4>Đăng ký</h4>
    <div class="right-content">
        @include('pages.components.auth.include._inc_social')
        <p class="mb10">- Hoặc đăng nhập bằng tài khoản Unimind -</p>
        <form action="{{ route('get.register') }}" method="POST" id="formRegister"> 
            @csrf
            <div class="form-group">
                <span class="icon icon-user"></span>
                <input type="text" name="name" class="form-control" placeholder="Name  của bạn">
            </div>
            <div class="form-group">
                <span class="icon icon-phone"></span>
                <input type="text" name="phone" class="form-control" placeholder="Phone  của bạn">
            </div>

            <div class="form-group">
                <span class="icon icon-mail"></span>
                <input type="email" name="email" class="form-control" placeholder="Email  của bạn">
            </div>
            <div class="form-group">
                <span class="icon icon-lock"></span>
                <input type="password" name="password" class="form-control" placeholder="******">
                <div class="password-show js-show-password"><i class="fa fa-eye"></i></div>
            </div>
            <div class="remember-login flex flex-jc-sb">
                <div>
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Ghi nhớ đăng nhập</label>
                </div>
                <a href="" class="forgot-psswrd" data-target="#k-popup-account-reset" data-toggle="modal" data-ajax="" data-push-state="false">Quên mật khẩu?</a>
            </div>
            <div id="js-success" >                 
            </div>
            <div class="form-group mt15">
                <button type="submit" class="btn btn-success w-100 js-register" style="border-radius: 5px;">Đăng ký</button>
            </div>
        </form>
    </div>
</div>
