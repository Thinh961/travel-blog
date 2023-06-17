<ul>
    @foreach ($categories as $item)
        <li>
            <div class="d-flex">
                <a 
                    href="{{ Route('post.index', [$item->slug, $item->id]) }}">{{ $item->translate(app()->getLocale())->name }}
                </a>
                <span class="nav-item nav-link {{ count($item->descendants) > 0 ? 'dropdown-toggle' : '' }}" id="dropLi"></span>
            </div>
                
            @if (count($item->descendants) > 0)
                @include('components.menu', ['categories' => $item->descendants])
            @endif
        </li>
    @endforeach
</ul>
