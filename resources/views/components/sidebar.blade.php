<h3>Bài viết nổi bật</h3>
@if ($featurePosts->count() > 0)
    @foreach ($featurePosts as $item)
        <ul class="p-0">
            <li class="col-lg-12 mb-2 card-side-bar">
                <div class="col-lg-4">
                    <a href="{{ Route('post.show', [$item->slug, $item->id]) }}">
                        <img class="img-fluid" style="width: 100%; height: 100px;object-fit: fill;"
                        src="{{ Asset($item->image) }}">
                    </a>
                </div>
                <div class="col-lg-8" style="margin-left: 5px;">
                    <div class="dots-22">
                        <a href="{{ Route('post.show', [$item->slug, $item->id]) }}">{{ $item->translate(app()->getLocale())->name }}</a>
                    </div>
                    <div class="card-description-sidebar">
                        <span>{!! $item->translate(app()->getLocale())->description !!}</span>
                    </div>
                </div>
            </li>
        </ul>
    @endforeach
@endif
