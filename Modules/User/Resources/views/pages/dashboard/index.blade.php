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
                            <p class="newsletter-label text-dark">
                                <span class="text-primary">Tên khách hàng: </span>{{ get_data_user('web','name') }}<br>
                            </p>
                            <p class="newsletter-label text-dark">
                                <span class="text-primary">Email: </span>{{ get_data_user('web','email') }}<br>
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
                                <p class="newsletter-label text-dark"> <span class="text-primary"> Khách hàng:</span> {{ getNameStore(get_data_user('web')) }}</p>                             
                                <p class="newsletter-label text-dark"> <span class="text-primary"> Trạng thái tài khoản:</span> {{ getDataStore(get_data_user('web'))->store_status == 1 ? 'Đã kích hoạt':'Chưa kích hoạt'; }}</p>
                                <p class="newsletter-label text-dark"> <span class="text-primary"> Loại tài khoản:</span> {{ getDataStore(get_data_user('web'))->type_store }}</p>
                                <p class="newsletter-label text-dark"> <span class="text-primary"> Số điểm:</span> {{ getDataStore(get_data_user('web'))->poin_store }}</p>
                            </div>
                        <?php } else { ?>
                            <div class="box-content">
                            <p class="newsletter-label text-dark"> <span class="text-primary"> Trạng thái tài khoản:</span> Chưa kích hoạt</p>
                            <p class="text-strong ">Để tài khoản đại lý của bạn được kích hoạt, vui lòng hoàn tất việc<a  href="{{ route('get_user.store.edit',['id' => get_data_user('web')]) }}"><span class="text-strong gd-danger">HOÀN THIỆN HỒ SƠ ĐẠI LÝ</span></a></p>
                            <p class="text-strong ">Tài khoản của bạn sẽ hoạt động được khi admin hoàn tất thủ tục kiểm duyệt thông tin của bạn.</p>
                            <div><span class="text-primary"><i class="fa fa-phone-square"></i> Hotline:</span><a class="action edit a-anchor" href="tel:0356105899">0356.105.899</a></div>
                            <div><span class="text-primary"><i class="fa fa-envelope"></i> Email:</span><a class="action edit a-anchor" href="mailto:hotro@unimall.vn">hotro@unimall.vn</a></div>
                        </div>
                        <?php } ?>
                        <?php if(checkUid(get_data_user('web'))){ ?>
                        <div class="box-actions">
                            <a class="a-btn a-btn--primary" href="{{ route('get_user.store.edit',['id' => get_data_user('web')]) }}"><span>Hoàn tất thông tin đại lý</span></a>
                        </div>
                        <?php } ?>
                    </div>
                    @endif
                    @if(get_data_user('web','type') == 2)
                    
                        @if(!$uni_order_nap)
                        <div class="box box-newsletter">
                            <strong class="box-title">
                                <span class="text-primary">Tài khoản Spice Club</span>
                            </strong>
                            <div class="box-content">
                                <span class="text-strong gd-danger">Hệ thống đã tiếp nhận yêu cầu đăng ký tài khoản từ Quý khách.</span> <br>
                                <span class="text-strong ">Quý khách vui lòng nạp tiền để hệ thống kích hoạt tài khoản thành viên “Spice Club” cho quý khách.</span><br>
                            </div>
                            <div class="box-actions">
                                <a class="a-btn a-btn--primary" href="{{ route('get.recharge') }}"><span>Nạp tiền</span></a>
                            </div>
                        </div>
                        @else
                            @if($uni_order_nap->status == 0 )
                            <div class="box box-newsletter">
                                <strong class="box-title">
                                    <span class="text-primary">Tài khoản Spice Club</span>
                                </strong>
                                <div class="box-content">
                                    <span class="text-strong ">Hệ thống đã tiếp nhận yêu cầu đăng ký tài khoản từ Quý khách.</span><br>
                                    <span class="text-strong ">Quý khách vui lòng nạp tiền để hệ thống kích hoạt tài khoản thành viên “Spice Club” cho quý khách.</span><br>
                                    @if($uni_order_nap->type_pay == 1 )
                                    <span class="text-strong ">Hình thức thanh toán:
                                        Chuyển khoản<br>Ngân Hàng Thương Mại Á Châu (ACB)<br>Chi Nhánh Thủy Nguyên – Hải Phòng<br>Số tài Khoản: 888 666 888 68<br>Chủ tài khoản: Vũ Mạnh Điều
                                        </span><br>
                                        <span class="text-strong gd-danger">Nội dung chuyển khoản: Thanh toan don hang #SC{{$uni_order_nap->id}} email {{get_data_user('web','email')}}</span><br>
                                        <span class="text-strong gd-danger">Trân trọng cảm ơn Quý khách!</span>
                                     @endif
                                </div>
                            </div>
                            @elseif($uni_order_nap->status == 1)
                            <div class="box box-newsletter">
                                <strong class="box-title">
                                    <span class="text-primary">Tài khoản Spice Club</span>
                                </strong>
                                <div class="box-content">
                                    <span class="text-strong ">Hệ thống đã nhận được thông tin thanh toán của Quý khách.</span><br>
                                    <span class="text-strong ">Quý khách vui lòng đợi hệ thống kích hoạt tài khoản thành viên “Spice Club” cho quý khách.</span><br>
                                    <span class="text-strong gd-danger">Trân trọng cảm ơn Quý khách!</span>
                                </div>
                            </div>
                            @elseif($uni_order_nap->status == 2)
                            <div class="box box-newsletter">
                                <strong class="box-title">
                                    <span class="text-primary">Tài khoản Spice Club</span>
                                </strong>
                                <div class="box-content">
                                    <span class="text-strong">Kính chào Quý khách: {{get_data_user('web','name')}}</span><br>
                                    <span class="text-strong">Quý khách đã thanh toán thành công phí thành viên của Spice Club !</span><br>
                                    <span class="text-strong">Lệ phí thành viên đã nạp: {{ formatVnd($uni_order_nap->price_nap) }} </span><br>
                                    <span class="text-strong">Giá trị tài khoản thành viên “Spice Club”: từ {{date_format(date_create($uni_order_nap->created_at),"d/m/Y") }} đến {{date_format(date_create($uni_order_nap->end_year),"d/m/Y") }}</span>
                                </div>
                            </div>
                            @elseif($uni_order_nap->status == 3)
                            <div class="box box-newsletter">
                                <strong class="box-title">
                                    <span class="text-primary">Tài khoản Spice Club</span>
                                </strong>
                                <div class="box-content">
                                    <span class="text-strong ">Kính chào Quý khách: {{get_data_user('web','name')}}</span><br>
                                    <span class="text-strong gd-danger">Chúng tôi rất tiếc phải huỷ mã đơn số: #SC{{$uni_order_nap->id}} của quý khách, vì lý do không nhận được thanh toán lệ phí nạp tiền.</span>
                                    <span class="text-strong">Để biết thêm chi tiết xin vui lòng liên hệ</span>
                                    <div><span class="text-primary"><i class="fa fa-phone-square"></i> Hotline:</span><a class="action edit a-anchor" href="tel:0356105899">0356.105.899</a></div>
                                    <div><span class="text-primary"><i class="fa fa-envelope"></i> Email:</span><a class="action edit a-anchor" href="mailto:hotro@unimall.vn">hotro@unimall.vn</a></div>
                                    <span class="text-strong">Hoặc thực hiện nạp một mã đơn mới.</span>
                                    <div class="box-actions">
                                        <a class="a-btn a-btn--primary" href="{{ route('get.recharge') }}"><span>Nạp tiền</span></a>
                                    </div>
                                </div>
                            </div>
                            @elseif($uni_order_nap->status == 4)
                            <div class="box box-newsletter">
                                <strong class="box-title">
                                    <span class="text-primary">Tài khoản Spice Club</span>
                                </strong>
                                <div class="box-content">
                                    <span class="text-strong ">Kính chào Quý khách: {{get_data_user('web','name')}}</span><br>
                                    <span class="text-strong gd-danger"> Hệ thống xin thông báo tài khoản quý khách đã hết hạn nhận được các ưu đãi của Spice Club xin vui lòng gia hạn thêm.</span> <br>
                                    <span class="text-strong gd-danger">Trân trọng cảm ơn Quý khách!</span>
                                </div>
                                <div class="box-actions">
                                    <a class="a-btn a-btn--primary" href="{{ route('get.recharge.up') }}"><span>Gia hạn</span></a>
                                </div>
                            </div>
                            @endif
                        @endif

                    @endif
                </div>
               
            </div>
            
        </div>
    </div>
</main>
@stop
