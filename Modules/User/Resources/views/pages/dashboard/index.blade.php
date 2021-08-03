@extends('user::pages.layout.app_master_user')
@section('content')

<main id="maincontent" class="">

    <div class="columns">
        <div class="column main padding_css">

            <input name="form_key" type="hidden" value="ti05PgAwYARp0X1u">
            <div class="block block-dashboard-info">
                <div class="block-title"><strong>Thông tin tài khoản</strong></div>
               
                <div class="block-content">
                    @if(get_data_user('web'))
                    <div class="box box-information">
                        <strong class="box-title text-primary">
                            <span>Thông tin liên lạc</span>
                        </strong>
                        <div class="box-content">
                            <p>
                                <span class="text-info">Tên khách hàng: </span>{{ get_data_user('web','name') }}<br>
                                <span class="text-info">Email: </span>{{ get_data_user('web','email') }}<br>
                            </p>
                        </div>
                        <div class="box-actions">
                            <a class="action edit a-anchor" href="{{ route('get_user.info.edit',['id' => get_data_user('web')]) }}">
                                <span>Sửa thông tin tài khoản</span>
                            </a>
                            <a href="{{ route('get.forgetpassword') }}" class="action change-password a-anchor">
                                Thay đổi mật khẩu</a>
                        </div>
                    </div>
                    @endif
                    @if(get_data_user('web','type') == 1)
                    <div class="box box-newsletter">
                        <strong class="box-title">
                            <span class="text-primary">Thông tin đại lý</span>
                        </strong>
                        <?php if(checkUid(get_data_user('web'))){ ?>
                            <div class="box-content">
                                <span class="newsletter-label text-success">Khách hàng: {{ getNameStore(get_data_user('web')) }}</span> <br>
                            </div>
                        <?php } else { ?>
                            <div class="box-content">
                            <span class="newsletter-label text-danger">Vui lòng cập nhật thông tin.</span> <br>
                            <span class="newsletter-label text-danger">Để hoàn tất thủ tục đăng ký.</span>
                        </div>
                        <?php } ?>
                        
                        <div class="box-actions">
                            <a class="action edit a-anchor" href="{{ route('get_user.store.edit',['id' => get_data_user('web')]) }}"><span>Cập nhật đại lý</span></a>
                        </div>
                    </div>
                    @endif
                </div>
               
            </div>
            <div class="block block-dashboard-addresses">
                <div class="block-title">
                    <strong>Địa chỉ giao hàng</strong>
                </div>
                <div class="block-content">
                    <div class="box box-billing-address">
                        <strong class="box-title">
                            <span class="text-primary">Địa chỉ giao hàng mặc định</span>
                        </strong>
                        <div class="box-content">
                            <address>
                                Bạn chưa có địa chỉ giao hàng mặc định. </address>
                        </div>
                    </div>
                    <div class="box box-shipping-address">
                        <strong class="box-title">
                            <span class="text-primary">Địa chỉ giao hàng mặc định</span>
                        </strong>
                        <div class="box-content">
                            <address>
                                Bạn chưa đặt địa chỉ giao hàng mặc định. </address>
                        </div>
                        <div class="box-actions">
                            <a class="action edit a-anchor" href="#" data-ui-id="default-shipping-edit-link"><span>Danh sách địa chỉ</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @include('user::pages.component._inc_menu_user')

    </div>
</main>
@stop
