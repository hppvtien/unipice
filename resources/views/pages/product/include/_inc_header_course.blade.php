<div class="course-details-wrapper topic-1 uk-light">
    <div class="container p-sm-0">
        <div uk-grid>
            <div class="uk-width-2-3@m info">
                <div class="course-details">
                    <h1> {{ $courseDetail->c_name }}</h1>
                    <p> {{ $courseDetail->c_description_seo }}</p>
                    <div class="course-details-info mt-4">
                        <ul>
                            <li>
                                <div class="star-rating"><span class="avg"> 4.9 </span> <span
                                    class="star"></span><span class="star"></span><span
                                    class="star"></span><span class="star"></span><span class="star"></span>
                                </div>
                            </li>
                            <li> 
                                <span><i class="icon-feather-users"></i> {{ $courseDetail->c_total_pay }} học viên</span>
                                <span><i class="fa fa-play-circle"></i> {{ $courseDetail->c_total_time }} bài học</span>
                                <span><i class="fa fa-clock"></i> {{ $courseDetail->c_total_time }} giờ</span>
                            </li>
                        </ul>
                    </div>
                    <p class="flex flex-jc-sb">
                        <span class="w-50"><i class="fa fa-link mr5" style="width: 15px"></i>Trình độ : Chuyên sâu</span>
                        <span class="w-50"><i class="fa fa-usb mr5" style="width: 15px"></i> Sở hữu mãi</span>
                    </p>
                    <p class="flex flex-jc-sb">
                        <span class="w-50" style="text-align: left"><i class="fa fa-windows mr5" style="width: 15px"></i>Xem được trên máy tính, điện thoại</span>
                        <span class="w-50" style="text-align: left"><i class="fa fa-graduation-cap mr5" style="width: 15px"></i> Cấp chứng nhận hoàn thành</span>
                    </p>
                </div>
                <nav class="responsive-tab style-5">
                    <ul
                        uk-switcher="connect: #course-intro-tab ;animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">
                        <li><a href="#">Nội dung</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Bài tập</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Đánh giá</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>