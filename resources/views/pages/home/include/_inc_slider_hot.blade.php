<section class="slider-hot">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="heading-h2"><span>Học viên nói gì</span> về chúng tôi</h2>
        </div>
        <div class="lists js-slider-hot owl-carousel owl-theme">
         
            @foreach ($slideshot as $keys => $item)
                @if ($keys != 0)
                    <div class="uniform uk-grid">
                        <div class="uk-width-1-3@s uni-img">
                            <img src="{{ pare_url_file($item->s_banner) }}" alt="{{ $item->s_name }}">
                        </div>
                        <div class="uk-width-2-3@s uni-sl-content">
                            <p class="quote"><i class="fa fa-quote-left"></i></p>
                            <div>{!! $item->s_desscription !!}</div>
                            <p class="quote uk-align-right"><i class="fa fa-quote-right"></i></p>
                            <div class="name"><p>-{{ $item->s_name }}</p></div>                       
                        </div>
                        
                    </div>
                    
                @endif
            @endforeach
        </div>
</section>
