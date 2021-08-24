<div class="sidebar sidebar-main">
    <div class="block block-collapsible-nav">

        <div id="sidebar" style="background-image: url({{asset('assets/images/bg_1.jpg')}});">
            <div class="p-4">
                <h1><a href="{{ route('get_user.dashboard') }}" class="logo"> Tài Khoản</a></h1>
                <ul class="list-unstyled components mb-5">
                    <li class=""><a href="{{ route('get_user.dashboard') }}">Thông tin tài khoản</a></li>  
                    <li class=""><a href="{{ route('get_user.myfavorites') }}">Sản Phẩm Yêu Thích</a></li>
                   
                   <?php 
                    if(checkUid(get_data_user('web')) != null){ ?>
                            <li class=""><a href="{{ route('get_user.my_flash_sale') }}">Danh Sách Gói Combo</a></li>
                    <?php } else { 
                        echo '';
                    }
                    ?>
                    <li class=""><a href="{{ route('get_user.list_order') }}">Đơn hàng</a></li> 
                    @if(get_data_user('web','type') == 2)
                    <li class=""><a href="{{ route('get_user.spice_club') }}">Thành viên Spice Club</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>

