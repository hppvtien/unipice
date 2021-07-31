@include('pages.components.follow-me')
<footer id="dk-footer" class="dk-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="dk-footer-box-info">
                    <a href="index.html" class="footer-logo">
                        <img src="images/footer_logo.png" alt="footer_logo" class="img-fluid">
                    </a>
                    <p class="footer-info-text">
                        Công ty chúng tôi mang tầm cỡ quốc tế
                    </p>
                    <div class="footer-social-link">
                        <h3>Follow us</h3>
                        <ul>
                            <li>
                                <a href="{{ $configuration->facebook }}">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $configuration->twitter }}">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $configuration->youtube }}">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $configuration->instagram }}">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Social link -->
                </div>
                <!-- End Footer info -->
                <div class="footer-awarad">
                    <img src="images/icon/best.png" alt="">
                    <p>{{ $configuration->name }}</p>
                </div>
            </div>
            <!-- End Col -->
            <div class="col-md-12 col-lg-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-us padding-left-0">
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
                        </div>
                        <!-- End Contact Us -->
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6" style="margin-top: 20px;">
                        <div class="contact-us contact-us-last">
                            <div class="contact-icon">
                                <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            </div>
                            <!-- End contact Icon -->
                            <div class="contact-info">

                                <p>{{ $configuration->hotline }}</p>
                            </div>
                            <!-- End Contact Info -->
                        </div>
                        <!-- End Contact Us -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Contact Row -->
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="footer-widget footer-left-widget">
                            <div class="section-heading">
                                <h3>Giới Thiệu {{ $configuration->name }}</h3>
                                <span class="animate-border border-black"></span>
                            </div>
                            <ul>
                                <li>
                                    <a href="{{ route('get.about') }}">Giới Thiệu</a>
                                </li>
                                <li>
                                    <a href="#">Dịch Vụ</a>
                                </li>
                                <li>
                                    <a href="#">Các Đối Tác</a>
                                </li>
                                <li>
                                    <a href="#">Đội Ngũ</a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="{{ route('get.uni_contact') }}">Liên Hệ</a>
                                </li>
                                <li>
                                    <a href="{{ route('get.find') }}">Tìm Cửa Hàng</a>
                                </li>
                                <li>
                                    <a href="#">Chính Sách</a>
                                </li>
                                <li>
                                    <a href="#">Bảo Mật</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Footer Widget -->
                    </div>
                    <!-- End col -->
                    <div class="col-md-12 col-lg-6">
                        <div class="footer-widget">
                            <div class="section-heading">
                                <h3>Đăng Ký Ngay</h3>
                                <span class="animate-border border-black"></span>
                            </div>
                            <p class="color-p">
                                <!-- Don’t miss to subscribe to our new feeds, kindly fill the form below. -->
                                {{ $configuration->footer_bottom }}</p>
                            <form action="#">
                                <div class="form-row">
                                    <div class="col dk-footer-form">
                                        <input type="email" class="form-control" placeholder="Nhập địa chỉ email">
                                        <button type="submit">
                                                <i class="fa fa-send"></i>
                                            </button>
                                    </div>
                                </div>
                            </form>
                            <!-- End form -->
                        </div>
                        <!-- End footer widget -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Widget Row -->
    </div>
    <!-- End Contact Container -->


    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text_center">
                    <span>{{ $configuration->footer_bottom }}</span>
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