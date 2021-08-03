{{-- <div class="blog_banner">
    <div class="container">
        <div class="box">
            <div class="box-50 first">
                @include('blog::pages.home.include._inc_item_banner',['article' => $articlesHotOne[0] ?? ''])
            </div>
            <div class="box-50">
                <div class="top">
                    @include('blog::pages.home.include._inc_item_banner',['article' => $articlesHotOne[1] ?? ''])
                </div>
                <div class="bottom">
                    <div class="box">
                        <div class="box-50">
                            @include('blog::pages.home.include._inc_item_banner',['article' => $articlesHotOne[2] ?? ''])
                        </div>
                        <div class="box-50">
                            @include('blog::pages.home.include._inc_item_banner',['article' => $articlesHotOne[3] ?? ''])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class="uk-child-width-1-2@m uk-grid-match uk-grid-small uk-grid" uk-grid="">
    <div class="uk-first-column">
        @include('blog::pages.home.include._inc_item_banner',['article' => $articlesHotOne[0] ?? ''])
    </div>
    <div>
        <div class="uk-child-width-1-2@m uk-grid-small uk-card-match uk-grid" uk-grid="">
            <div class="uk-first-column"> 
                @include('blog::pages.home.include._inc_item_banner',['article' => $articlesHotOne[1] ?? ''])
            </div>
            <div>
                @include('blog::pages.home.include._inc_item_banner',['article' => $articlesHotOne[2] ?? ''])
            </div>
            <div class="uk-grid-margin uk-first-column">
                @include('blog::pages.home.include._inc_item_banner',['article' => $articlesHotOne[3] ?? ''])
            </div>
            <div class="uk-grid-margin">
                @include('blog::pages.home.include._inc_item_banner',['article' => $articlesHotOne[4] ?? ''])
            </div>
        </div>
    </div>
</div>