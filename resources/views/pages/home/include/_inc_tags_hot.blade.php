<section class="tags_hot">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="heading-h2 heading-before">Từ khoá nổi bật</h2>
        </div>
        <style>
            @media only screen and (max-width: 768px) {
            .lists ul {
                display: flex;
                flex-wrap: wrap;
            }

            .lists ul li {
                flex: 0 0 46%;
                max-width: 46%;
                margin-right: 0 !important;
                margin: 10px;
            }
        }
        </style>
        <div class="lists">
            <ul>
                @foreach($tags as $item)
                <li>
                    <a href="{{ route('get.course.render',['slug' => $item->t_slug.'-t']) }}" target="_blank" title="{{ $item->t_name }}">{{ $item->t_name }}</a>
                </li>
                @endforeach
            </ul>
            <div class="clear"></div>
        </div>
    </div>
</section>