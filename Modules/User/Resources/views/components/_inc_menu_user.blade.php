<div class="sidebar sidebar-main">
    <div class="block block-collapsible-nav">
        <div class="title block-collapsible-nav-title">
            <strong>
                Tài khoản của tôi
            </strong>
        </div>
        <div class="content block-collapsible-nav-content" id="block-collapsible-nav">
            <ul class="nav items">
                <li class="nav item"><a href="{{ route('get_user.transaction') }}">Đơn hàng</a></li>
                <li class="nav item"><a href="#">My Wish List</a></li>
                <li class="nav item"><a href="#">Địa chỉ</a></li>                   
                <li class="nav item"><a href="#">Thông tin tài khoản</a></li>
                <li class="nav item"><a href="#">Đăng ký nhận tin</a></li>
                <li class="nav item"><a href="{{ route('get_user.myfavorites') }}">Sản Phẩm Yêu Thích</a></li>
                <li class="nav item"><a href="{{ route('get_user.productlist') }}">List Sản Phẩm</a></li>
            
            </ul>
        </div>
    </div>
</div>