<div class="layout layout--onecol group-write">
    <div class="container" style="position: relative;">
        <div class="d-block group-btn">
            <div class="btn btn-comment">
                <button class="tablink" onclick="openPage('News', this, '#e88012')"><i class="fa fa-pencil"></i></i>Viết đánh giá</button>
            </div>
            <div class="btn btn-comment">
                <button class="tablink" onclick="openPage('question', this, '#e88012')"><i class="fa fa-comments"></i>Đặt câu hỏi</button>
            </div>
        </div>
        <div id="News" class="tabcontent not-padding"  style="display: block">
            <div class='rating-stars text-center'>
                <ul id='stars'>
                    <li class='star selected' title='Poor' data-value='1'>
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star selected' title='Fair' data-value='2'>
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star selected' title='Good' data-value='3'>
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star selected' title='Excellent' data-value='4'>
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star selected' title='WOW!!!' data-value='5'>
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                </ul>
                <p id="err-star" class="text-danger"></p>
            </div>
            <div class="">
                <div class="" id="review-box">
                    <div class="field email required">
                        <div class="m-text-input m-text-input--placeholder-label control group-cmt">
                            <input name="title_rv" id="title_rv" type="email" class="m-text-input__input input-text label-comt" title="Tiêu đề">
                            <label class="m-text-input__label label-lb" for="title_rv"><span>Tiêu đề</span></label>
                        </div>
                    </div>
                    <textarea id="noi_dung_commnet" class="form-control col-12" rows="2" placeholder="Hãy để lại bình luận của bạn...!"></textarea>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 col-12 group-name">
                            <div class="field email required">
                                <div class="m-text-input m-text-input--placeholder-label control group-cmt">
                                    <input name="name_rv" id="name_rv" type="email" class="m-text-input__input input-text label-comt" title="Name">
                                    <label class="m-text-input__label label-lb" for="name_rv"><span>Họ tên</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-12 group-name">
                            <div class="field email required">
                                <div class="m-text-input m-text-input--placeholder-label control group-cmt">
                                    <input name="phone_rv" id="phone_rv" type="email" class="m-text-input__input input-text label-comt" title="Phone">
                                    <label class="m-text-input__label label-lb" for="phone_rv"><span>Số điện thoại</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-12 group-name">
                            <div class="field email required">
                                <div class="m-text-input m-text-input--placeholder-label control group-cmt">
                                    <input name="email_rv" id="email_rv" type="email" class="m-text-input__input input-text label-comt" title="Email">
                                    <label class="m-text-input__label label-lb" for="email_rv"><span>Email</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-12 group-name">
                            <div class="field email required">
                                <div class="m-text-input m-text-input--placeholder-label control group-cmt">
                                    <button data-url="{{ route('get.product_comment',['slug'=>$slug]) }}" data-type="review" product_id="{{ $product->id }}" user_id="@php echo $user_id; @endphp" class="btn-comment-rv btn btn-sm btn-primary pull-right" type="button">
                                        <i class="fa fa-pencil fa-fw"></i> Gửi đánh giá</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="question" class="tabcontent not-padding">
            <div class="">
                <div>
                    <textarea id="noi_dung_question" class="form-control" rows="2" placeholder="Hãy để lại câu hỏi của bạn...!"></textarea>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 col-12 group-name">
                            <div class="field email required">
                                <div class="m-text-input m-text-input--placeholder-label control group-cmt">
                                    <input name="name_qs" id="name_qs" type="email" class="m-text-input__input input-text label-comt" title="Name">
                                    <label class="m-text-input__label label-lb" for="name_qs"><span>Họ tên</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-12 group-name">
                            <div class="field email required">
                                <div class="m-text-input m-text-input--placeholder-label control group-cmt">
                                    <input name="phone_qs" id="phone_qs" type="email" class="m-text-input__input input-text label-comt" title="Phone">
                                    <label class="m-text-input__label label-lb" for="phone_qs"><span>Số điện thoại</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-12 group-name">
                            <div class="field email required">
                                <div class="m-text-input m-text-input--placeholder-label control group-cmt">
                                    <input name="email_qs" id="email_qs" type="email" class="m-text-input__input input-text label-comt" title="Email">
                                    <label class="m-text-input__label label-lb" for="email_qs"><span>Email</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-12 group-name">
                            <div class="field email required">
                                <div class="m-text-input m-text-input--placeholder-label control group-cmt">
                                    <button data-url="{{ route('get.product_comment',['slug'=>$slug]) }}" data-type="question" product_id="{{ $product->id }}" user_id="@php echo $user_id; @endphp" class="btn-comment-qs btn btn-sm btn-primary pull-right" type="button">
                                        <i class="fa fa-pencil fa-fw"></i> Gửi câu hỏi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>