<h3>Bài viết nổi bật</h3>
<ul style="border: 1px solid #ddd" class="p-0">
    @if ($featurePosts->count() > 0)
        @foreach ($featurePosts as $item)
            <li class="col-lg-12 mb-2"
                style="max-height: 200px; padding: 0; display: flex; border-bottom: 1px solid #ddd">
                <div class="col-lg-4">
                    {{-- <a href="{{ Route('post.show', [$item->slug, $item->id]) }}"> --}}
                        <img class="img-fluid" style="width: 100%; height: 100px;object-fit: cover;"
                        src="{{ Asset($item->image) }}">
                    {{-- </a> --}}
                </div>
                <div class="col-lg-8" style="margin-left: 5px;">
                    <a href="{{ Route('post.show', [$item->slug, $item->id]) }}">{{ $item->translate(app()->getLocale())->name }}</a>
                    <span>{!! $item->translate(app()->getLocale())->description !!}</span>
                </div>
            </li>
        @endforeach
    @endif
</ul>
