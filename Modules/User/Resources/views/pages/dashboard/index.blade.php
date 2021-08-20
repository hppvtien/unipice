@extends('user::pages.layout.app_master_user')
@section('content')

<main id="maincontent" class="">

    <div class="columns">
        <div class="d-none d-md-block">
            @include('user::pages.component._inc_menu_user')
        </div>
        <div class="col-lg-12 d-lg-none d-block" style="padding-left: 0;padding-right:0">
            @include('user::pages.component._inc_menu_user')
        </div>
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
                            <span class="newsletter-label text-danger">Vui lòng cập nhật thông tin, Để hoàn tất thủ tục đăng ký</span> <br>
                            <span class="newsletter-label text-danger">Nếu bạn nhập thông tin rồi vui lòng chở để quản trị kiểm tra.</span>
                        </div>
                        <?php } ?>
                        
                        <div class="box-actions">
                            <a class="action edit a-anchor" href="{{ route('get_user.store.edit',['id' => get_data_user('web')]) }}"><span>Cập nhật đại lý</span></a>
                        </div>
                    </div>
                    @endif
                    @if(get_data_user('web','type') == 2)
                    
                        @if(!$uni_order_nap)
                        <div class="box box-newsletter">
                            <strong class="box-title">
                                <span class="text-primary">Tài khoản Spice Club</span>
                            </strong>
                            <div class="box-content">
                                <span class="text-strong gd-danger">Vui lòng nạp tiền, Để hoàn tất thủ tục đăng ký.</span> <br>
                            </div>
                            <div class="box-actions">
                                <a class="action edit a-anchor" href="{{ route('get.recharge') }}"><span>Nạp tiền</span></a>
                            </div>
                        </div>
                        @else
                            @if($uni_order_nap->status == 0 )
                            <div class="box box-newsletter">
                                <strong class="box-title">
                                    <span class="text-primary">Tài khoản Spice Club</span>
                                </strong>
                                <div class="box-content">
                                    <span class="text-strong gd-danger">Admin đã tiếp nhận, xin vui lòng đợi Admin duyệt</span><br>
                                    @if($uni_order_nap->type_pay == 1 )
                                    <span class="text-strong gd-danger">Hình thức thanh toán:
                                        Chuyển khoản<br>Tên tài khoản: NGUYEN VAN A<br>Số Tài khoản: 123456789
                                        </span>
                                     @endif
                                </div>
                            </div>
                            @elseif($uni_order_nap->status == 1)
                            <div class="box box-newsletter">
                                <strong class="box-title">
                                    <span class="text-primary">Tài khoản Spice Club</span>
                                </strong>
                                <div class="box-content">
                                    <span class="text-strong gd-danger">Admin đang xử lý</span>
                                </div>
                            </div>
                            @elseif($uni_order_nap->status == 2)
                            <div class="box box-newsletter">
                                <strong class="box-title">
                                    <span class="text-primary">Tài khoản Spice Club</span>
                                </strong>
                                <div class="box-content">
                                    <span class="text-strong alert-success">Tài khoản đã được: active</span><br>
                                    <span class="text-strong gd-danger">Ngày hết hạn: {{date_format(date_create($uni_order_nap->end_year),"d/m/Y") }}</span>
                                </div>
                            </div>
                            @elseif($uni_order_nap->status == 3 || $uni_order_nap->status == 4)
                            <div class="box box-newsletter">
                                <strong class="box-title">
                                    <span class="text-primary">Tài khoản Spice Club</span>
                                </strong>
                                <div class="box-content">
                                    <span class="text-strong gd-danger">Bạn đã quá hạn thanh toán xin vui lòng liên hệ để biết thêm chi tiết</span>
                                </div>
                            </div>
                            @elseif($uni_order_nap->status == 5)
                            <div class="box box-newsletter">
                                <strong class="box-title">
                                    <span class="text-primary">Tài khoản Spice Club</span>
                                </strong>
                                <div class="box-content">
                                    <span class="text-strong gd-danger">Tài khoản Spice Clup đã hết hạn xin vui lòng nạp tiền để nhận các ưu đã.</span> <br>
                                </div>
                                <div class="box-actions">
                                    <a class="action edit a-anchor" href="{{ route('get.recharge') }}"><span>Nạp tiền</span></a>
                                </div>
                            </div>
                            @endif
                        @endif

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
    

    </div>
</main>
@stop
