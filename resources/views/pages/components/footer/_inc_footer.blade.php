@include('pages.components.follow-me')
<footer id="dk-footer" class="dk-footer">
    <div class="col-md-12 p-md-5 foooter_cach_le_duoi">
        <div class="row">
            <div class="col-md-12 col-lg-5 ">
                <div class="dk-footer-box-info">
                    <a href="/" class="footer-logo">
                        <img src="{{ pare_url_file($configuration->logo) }}" alt="Logo UniMall" class="img-fluid" style="width:40%">
                    </a>
                    <p class="footer-info-text">
                        {{ $configuration->	footer_description }}
                    </p>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="contact-icon">
                                <i class="fa fa-map-o" aria-hidden="true"></i>
                            </div>
                            <!-- End contact Icon -->
                            <div class="contact-info">
                                <a href="https://goo.gl/maps/QrCzDdS4gKivind79" rel="nofollow" target="blank">
                                    <p>{{ $configuration->address }}</p>
                                </a>
                            </div>
                            <!-- End Contact Info -->
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                        <div class="col-md-12">
                            <div class="contact-icon">
                                <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            </div>
                            <!-- End contact Icon -->
                            <div class="contact-info">

                                <p>{{ formatPhoneNumber($configuration->hotline) }}</p>
                            </div>
                            <!-- End Contact Info -->
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <div class="footer-social-link">
                        <h3>Theo Dõi Ngay</h3>
                        <ul>
                            <li>
                                <a  rel="nofollow" target="_blank" href="{{ $configuration->facebook }}">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a  rel="nofollow" target="_blank" href="{{ $configuration->twitter }}">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a  rel="nofollow" target="_blank" href="{{ $configuration->youtube }}">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a  rel="nofollow" target="_blank" href="{{ $configuration->instagram }}">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Social link -->
                </div>

            </div>
            <!-- End Col -->
            <div class="col-md-12 col-lg-7 footer_cach_top">

                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="footer-widget footer-left-widget">
                            <div class="section-heading">
                                <h3>Danh Mục Sản Phẩm</h3>
                                <span class="animate-border border-black"></span>
                            </div>
                            <ul>
                                
                                @forelse ($category_mn as $key => $item) 
                                <li>
                                    <a href="{{ getSlugCategory($item->slug) }}" >
                                        <img style="float: left;padding: 5px;" width="30px" src="{{ pare_url_file_product($item->icon_thumb) }}" alt="{{ $item->name }}">{{ $item->name }}
                                    </a>
                                </li>
                                @empty
                                @endforelse
                                <li>
                                    <a href="{{ route('get.flashsale') }}" >
                                        <img style="float: left;padding: 5px;" width="30px" src="/storage/uploads_Product/khuyen-mai-1627644111.png" alt="Khuyến mãi">Khuyến mãi
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Footer Widget -->
                    </div>
                    <!-- End col -->
                    <div class="col-md-12 col-lg-6">
                        <div class="footer-widget footer-left-widget">
                            <div class="section-heading">
                                <h3>Thông Tin Hữu Ích</h3>
                                <span class="animate-border border-black"></span>
                            </div>
                            <ul>
                                <li>
                                    <a href="{{ route('get_blog.home') }}" rel="nofollow">
                                        <img style="float: left;padding: 5px;" src="/images/icon_menu/blogging.png" alt="Blog" width="30px"> Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('get.spice_club') }}" rel="nofollow">
                                        <img style="float: left;padding: 5px;" src="/images/icon_menu/football-club.png" alt="Spice Club" width="30px"> Spice Club
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('get.find') }}" rel="nofollow">
                                        <img style="float: left;padding: 5px;" src="/images/icon_menu/location.png" alt="Tìm Cửa Hàng" width="30px"> Tìm Cửa Hàng
                                    </a>
                                </li>
                                <li>
                                    <a href="/bai-viet/chinh-sach-giao-hang" target="_blank" rel="nofollow">
                                        <img style="float: left;padding: 5px;" src="/images/icon_menu/shipping.png" alt="Chính Sách Giao Hàng" width="30px"> Chính Sách Giao Hàng
                                    </a>
                                </li>
                                <li>
                                    <a href="/bai-viet/chinh-sach-doi-tra" target="_blank" rel="nofollow">
                                        <img style="float: left;padding: 5px;" src="/images/icon_menu/exchange.png" alt="Chính Sách Đổi Trả" width="30px"> Chính Sách Đổi Trả
                                    </a>
                                </li>
                            </ul>
                            <div class="col-md-12 row"><img src="/images/icon_menu/pay_methods.png" alt=""></div>
                            <div class="col-md-12 row">
                                <div class="col-md-6 row">
                                    <img src="/images/icon_menu/bo_cong_thuong.png" alt="" class="can_tren_duoi">
                                </div>
                                <div class="col-md-6 row">
                                    <a  href="https://www.dmca.com/Protection/Status.aspx?ID=f09a95dc-40db-40a5-9296-92...ce.vn/" target="_blank" rel="nofollow "> <img src="https://unispice.vn/wp-content/uploads/2018/02/dmca_protected.png" alt="" class="can_tren_duoi can_tren_duoi2"></a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- End Col -->
                </div>
            </div>
            <!-- End Contact Info -->
        </div>
        <!-- End Contact Us -->
    </div>
    <!-- End Col -->
    </div>

    <!-- End Contact Row -->

    <!-- End Row -->
    </div>
    <!-- End Col -->
    </div>
    <!-- End Widget Row -->
    </div>
    <!-- End Contact Container -->


    <div class="copyright">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 col-xs-12 pt-lg-3 pl-md-5 padding_top_footer_1">
                    <ul class="menu_foooter_2">
                        <li>{!! $configuration->footer_bottom !!}</li>
                    </ul>
                </div>
                <div class="col-md-6 col-xs-12 pt-lg-3 pr-md-5">
                    <ul class="menu_foooter_1">
                        <li><a target="_blank" rel="nofollow" href="{{ route('get.thoa_thuan_su_dung') }}">Thỏa thuận sử dụng</a></li>
                        <li><a target="_blank" rel="nofollow" href="{{ route('get.chinh_sach_bao_mat') }}">Chính sách bảo mật</a></li>
                        <li><a target="_blank" rel="nofollow" href="{{ route('get.faq') }}">FAQ</a></li>
                    </ul>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Copyright Container -->
    </div>
    <!-- End Copyright -->
    <!-- Back to top -->
    <div id="back-to-top" class="back-to-top">
        <button class="btn btn-dark" title="Back to Top" style="display: block;">
                <i class="fa fa-angle-up"></i>
            </button>
    </div>
    <!-- End Back to top -->
</footer>

