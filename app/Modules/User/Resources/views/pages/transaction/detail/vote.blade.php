@extends('user::layouts.app_master_user')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_dashboard.css') }}">
@stop
@section('content')
    @include('user::components._inc_menu_user')
    <div class="container" id="pjax-pages-page">
        <div class="pages_user mt20">
            <div class="box-tab">
                @include('user::pages.transaction.detail.include._inc_tab_nav',['idTransaction' => $idTransaction])
                <div class="tab-content">
                    <div class="tab-content-item" id="pjax-pages-page-tab">
                        <div class="block-reviews">
                            <form action="" method="POST">
                                @csrf
                                <div class="mb10 flex flex-a-c">
                                    <p style="margin-bottom: 0">
                                        <span>Chọn đánh giá của bạn</span>
                                        <span id="ratings">
                                        @for($i = 1 ; $i <= 5 ; $i ++)
                                                <i class="fa fa-star active" data-i="{{ $i }}"></i>
                                            @endfor
                                        </span>
                                    </p>
                                    <p class="reviews-text" id="reviews-text"> <span>Rất tốt</span></p>
                                </div>
                                <textarea name="content_review" id="rv_content" cols="30" rows="5" placeholder="Cảm nghĩ của bạn về khoá học này"></textarea>
                                <input type="hidden" name="review" id="review_value" value="5">
                                <button type="submit" class="btn btn-pink btn-radius mt10">Gửi đánh giá</button>
                            </form>
                            <div class="lists-vote mt10 mb10">
                                 <div class="lists">
                                     @foreach($votes as $item)
                                         <div class="item-1 item flex">
                                             <div class="item-avatar">
                                                 <a href="">
                                                     <img src="{{ pare_url_file($item->user->avatar ?? '') }}" alt="">
                                                 </a>
                                                 @if($item->created_at)
                                                    <p>{{ $item->created_at->format('d/m/Y') ?? "[N\A]" }}</p>
                                                 @else
                                                     <p>"[N\A]"</p>
                                                 @endif
                                             </div>
                                             <div class="item-info">
                                                 <p>
                                                     <span><b>{{ $item->user->name ?? "[N\A]" }}</b></span>
                                                     <span>
                                                    @for($i = 1 ; $i <= 5; $i ++)
                                                         <i class="fa fa-star {{ $item->v_number >= $i  ? 'active' : '' }}"></i>
                                                     @endfor
                                                </span>
                                                 </p>
                                                 <p>{{ $item->v_content }}</p>
                                             </div>
                                         </div>
                                     @endforeach
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
