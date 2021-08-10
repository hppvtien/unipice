<div class="layout layout--onecol">
    <div class="layout__region layout__region--content">
        <div data-block-plugin-id="entity_view:taxonomy_term">
            <div class="c-page-header c-page-header--light">
                <picture class="c-page-header__image">
                    <source media="(min-width: 1024px)" data-srcset="{{ pare_url_file($category->banner) }}">
                    <img class="lazyload" data-src="{{ pare_url_file($category->banner) }}" alt="{{ $category->name }}">
                </picture>
                <div class="c-page-header__content">
                    <h1 class="c-page-header__headline">
                        <div class="field field--name-name field--type-string field--label-hidden field__item">{{ $category->name }}</div>
                    </h1>
                </div>
            </div>

        </div>
    </div>
</div>