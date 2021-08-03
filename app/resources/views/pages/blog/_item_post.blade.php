@forelse ($blog_post as $key => $item)
                     
    <div class="c-story-block {{ $key % 2 != 0 ? 'c-story-block--flipped':'' }}">
        <div class="c-story-block__content-wrapper">
            <div class="c-story-block__content">
              <h2 class="c-story-block__headline">{{ $item->name }}</h2>
              <p class="c-story-block__description">{{ $item->desscription }}</p>
              <div class="c-story-block__cta">
                <a class="a-btn a-btn--secondary" href="{{ $item->slug }}" title="{{ $item->name }}">Read More</a>
              </div>
            </div>
        </div>

        <div class="c-story-block__image-wrapper">
            <picture>
              <source media="(min-width: 768px)" data-srcset="{{ pare_url_file($item->thumbnail) }}" srcset="{{ pare_url_file($item->thumbnail) }}">
              <img class=" lazyloaded" data-src="{{ pare_url_file($item->thumbnail) }}" alt="{{ $item->name }}" src="{{ pare_url_file($item->thumbnail) }}">
            </picture>
        </div>
    </div>
@empty
    
@endforelse