<ul>
    @foreach ($categories as $item)
        <li><a class="{{ count($item->descendants) > 0 ? 'dropdown-toggle' : '' }}"
                href="{{ Route('post.index', [$item->slug, $item->id]) }}">{{ $item->translate(app()->getLocale())->name }}</a>
            @if (count($item->descendants) > 0)
                @include('components.menu', ['categories' => $item->descendants])
            @endif
        </li>
    @endforeach
</ul>
