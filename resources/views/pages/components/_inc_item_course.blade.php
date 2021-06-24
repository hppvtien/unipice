<style>
    .course-card-body a>h2{
        font-size: 20px;
    }
</style>
<div class="uni-item">
    <div class="course-card-thumbnail ">
        <a href="{{ route('get.course.render', ['slug' => $course->c_slug . '-cr']) }}"
            title="{{ $course->c_name }}">
            <img src="{{ pare_url_file($course->c_avatar) }}" alt="{{ $course->c_name }}">
        </a>
        <span class="play-button-trigger"></span>
    </div>
    <div class="course-card-body">
        <a href="{{ route('get.course.render', ['slug' => $course->c_slug . '-cr']) }}"
            title="{{ $course->c_name }}">
        <h2>{{ $course->c_name }}</h2>
    </a>

        <div class="course-card-info">
            <div>
                <span class="catagroy">Giáo viên:
                    {{ $course->teacher->t_name ?? '[N\A]' }}</span>
            </div>
         
        </div>
        <div class="star-rating">
            <span class="avg"> {{ $course->c_total_evaluate ?? 0 }} </span>
            <span class="star"></span>
            <span class="star"></span>
            <span class="star"></span>
            <span class="star"></span>
            <span class="star"></span>
            <span><i class="fa fa-play-circle"></i>
                {{ $course->video_count ?? 0 }}</span>
        </div>
        
        <div class="course-card-footer">
            <h5> <i class="fa fa-money"></i>
                @if ($course->c_price > 0)
                    <span class="price">{{ number_format($course->c_price, 0, ',', '.') }}
                        đ</span>
                @else
                    <span class="price">Miễn phí</span>
                @endif
            </h5>
            <h5>
                <a href="{{ route('get.course.render', ['slug' => $course->c_slug . '-cr']) }}"
                    title="{{ $course->c_name }}">
                    <i class="fa fa-play-circle"></i> Học thử</a>
            </h5>
        </div>
        <div class="uk-child-width-1-2 uk-grid-small mb-4 mt20" uk-grid>
            <div class="text-center" >
                <a href="javascript:;void(0)" title="Thêm giỏ hàng" data-url="{{ route('get_user.cart.add',['id' => $course->id,'type' => 'course']) }}" class="btn btn-primary js-add-cart"><i class="fa fa-shopping-bag"></i>Giỏ hàng</a>
            </div>
            <div class="text-center">
                <a href="javascript:;void(0)" title="Yêu thích" data-url="{{ route('get_user.favourite.add',['type' => 'course', 'id' => $course->id]) }}" class="btn btn-danger {{ get_data_user('web') ? 'js-save-favorite' : 'js-show-login' }}"><i class="uil-heart"></i>Yêu thích</a>
            </div>
        </div>
    </div>
</div>

{{-- <div class="item list-course item-4-20 mr20 box-course mb20">
        <div class="avatar-item">
            <div class="img">
                <a href="{{ route('get.course.render',['slug' => $course->c_slug.'-cr']) }}" title="{{ $course->c_name }}">
                    <img src="{{ pare_url_file($course->c_avatar) }}" alt="{{ $course->c_name }}">
                </a>
                <div class="img_badget">
                    <p class="flex flex-jc-sb pl10 pr10">
                        <span><i class="fa fa-play-circle"></i> {{ $course->video_count ?? 0 }}</span>
                        <span><i class="fa fa-star"></i> {{ $course->c_total_evaluate ?? 0 }}</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="info">
            <h3 class="title">
                <a href="{{ route('get.course.render',['slug' => $course->c_slug.'-cr']) }}" title="{{ $course->c_name }}">{{ $course->c_name }}</a>
            </h3>
            <p class="info-auth">
                <span class="icon"><i class="fa fa-user-md"></i></span>
                <span class="name">{{ $course->teacher->t_name ?? "[N\A]"}}</span>
            </p>
            <p class="info-auth" style="min-height: 42px">
                <span class="icon"><i class="fa fa-briefcase"></i></span>
                <span class="name">{{ $course->teacher->t_job ?? "[N\A]"}}</span>
            </p>
            <p class="flex flex-jc-sb mt10">
                <a href="" class="video">
                    <i class="fa fa-play-circle"></i> Học thử
                </a>
                @if ($course->c_price > 0)
                    <span class="price">{{ number_format($course->c_price,0,',','.') }} đ</span>
                @else
                    <span class="price">Miễn phí</span>
                @endif
            </p>
        </div>
    </div> --}}
