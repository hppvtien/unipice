<div class="layout layout--onecol group-view">
    <div class="container">
        <div class="d-block float-left padding-top10">
            <div class="btn btn-comment">
                <button class="tablink" onclick="openPageTwo('view_review', this, '#e88012')">Đánh giá</button>
            </div>
            <div class="btn btn-comment">
                <button class="tablink" id="defaultOpen" onclick="openPageTwo('view_question', this, '#e88012')">Câu hỏi</button>
            </div>
        </div>

        <div id="view_review" class="tabcontents not-padding">
            <div class="">
                <div>
                    <div>
                        @foreach ($noi_dung_comment as $item)
                        <div class="media-block">
                            <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
                            <div class="media-body">
                                <div class="mar-btm">
                                    <a href="#" class="btn-link text-semibold media-heading box-inline">{{ $item->name }}</a>

                                </div>
                                <p class="margin-left1">{{ $item->noi_dung_comment }}</p>

                                <hr>
                            </div>
                        </div>
                        @endforeach
                        <!--===================================================-->
                        <!-- End Newsfeed Content -->
                    </div>
                </div>
            </div>
        </div>
        <div id="view_question" class="tabcontents not-padding">

            <!-- Newsfeed Content -->
            <!--===================================================-->
            @foreach ($noi_dung_question as $item)
            <div class="media-block">
                <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
                <div class="media-body">
                    <div class="mar-btm">
                        <a href="javascript:;" class="btn-link text-semibold media-heading box-inline">{{ $item->name }}</a>
                    </div>
                    <p class="margin-left1">{{ $item->noi_dung_question }}</p>
                    <div class="answer-gr">
                        <div class="mar-btm">
                            <a href="javascript:;" class="btn-link text-semibold media-heading box-inline">Unimall</a>
                        </div>
                        <p class="margin-left1">{{ $item->noi_dung_answer }}</p>
                    </div>

                    <hr>
                </div>
            </div>
            @endforeach
            <!--===================================================-->
            <!-- End Newsfeed Content -->
        </div>
    </div>
</div>