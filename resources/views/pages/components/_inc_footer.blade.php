<footer>
    <div class="footer-top">
        <div class="container">
            <div class="lists lists-mb">
                <div class="item item-4">
                    <h4 class="title">KẾT NỐI VỚI ADSMO</h4>
                    <p class="item-social">
                        <a href="" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="" class="google"><i class="fa fa-google"></i></a>
                    </p>
                    <p class="item-contact">
                        <span>Hotline</span>
                        <a href="">{{ $configuration->hotline ?? '0356.105.488' }}</a>
                    </p>
                    <p class="item-contact">
                        <span>Email</span>
                        <a href="">{{ $configuration->email ?? 'tlead01@gmail.com' }}</a>
                    </p>
                </div>
                <div class="item-4 item">
                    <h4 class="title">THÔNG TIN ADSMO</h4>
                    <ul>
                        <li><a href="">Danh sách khoá học</a></li>
                        <li><a href="">Câu hỏi thường gặp</a></li>
                    </ul>
                </div>
                <div class="item-4 item">
                    <h4 class="title">VỀ ADSMO</h4>
                    <ul>
                        <li><a href="">Danh sách khoá học</a></li>
                        <li><a href="">Câu hỏi thường gặp</a></li>
                    </ul>
                </div>
                <div class="item-4 item">
                    <h4 class="title">Page Facebook</h4>
                </div>
                <div style="clear: both"></div>
            </div>
        </div>
    </div>
    <div class="footer-button">
        <span>Copyright © 2021 <a href="">Admin</a>. Designed by <a href="https://adsmo.vn">ADSMO</a> </span>
        <div class="container">{!! nl2br($configuration->footer_bottom ?? '') !!}</div>
    </div>
</footer>
