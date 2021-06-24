
<h3> Tags </h3>
<div uk-margin="">
    @foreach ($tag_home as $item)
        <a href="#" class="btn btn-small btn-light uk-first-column">{{ $item->t_name }}</a>
    @endforeach
</div>
