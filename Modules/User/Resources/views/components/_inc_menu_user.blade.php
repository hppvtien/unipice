<div class="sidebar sidebar-main">
    <div class="block block-collapsible-nav">
        <div class="title block-collapsible-nav-title">
            <strong>
                Tài khoản của tôi
            </strong>
        </div>
        <div class="content block-collapsible-nav-content" id="block-collapsible-nav">
            <ul class="nav items">
                <li class="nav item"><a href="{{ route('get_user.transaction') }}">Đơn hàng của tôi</a></li>
                <li class="nav item"><a href="{{ route('get_user.dashboard') }}">Thông tin tài khoản</a></li>
                <li class="nav item"><a href="#">Đăng ký nhận tin</a></li>
                <li class="nav item"><a href="{{ route('get_user.myfavorites') }}">Sản Phẩm Yêu Thích </a></li>
                @php
                  $store = DB::table('Uni_Store')->where('user_id', get_data_user('web'))->first();           
                @endphp
                @if($store->user_id == get_data_user('web') && $store->store_status == 1)
                <li class="nav item"><a href="{{ route('get_user.productlist') }}">List Sản Phẩm</a></li>
                @endif
            
            </ul>
        </div>
    </div>
</div>