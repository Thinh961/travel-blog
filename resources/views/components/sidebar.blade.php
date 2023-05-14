<div class="col-lg-12">
    <a class="position-relative d-block h-100 overflow-hidden" href="">
        <iframe width="420" height="315"
            src="https://www.youtube.com/embed/watch?v=90yG-PLLfD8&list=RD90yG-PLLfD8&start_radio=1" frameborder="0"
            allowfullscreen></iframe>
    </a>
    {{-- <h5 class="text-center">Bài viết nổi bật</h5> --}}
</div>
<ul style="border: 1px solid #ddd" class="p-0">
    @if ($featurePosts->count() > 0)
        @foreach ($featurePosts as $item)
            <li class="col-lg-12 mb-2"
                style="max-height: 200px; padding: 0; display: flex; border-bottom: 1px solid #ddd">
                <div class="col-lg-4">
                    <img class="img-fluid" style="width: 100%; height: 100px;object-fit: cover;"
                        src="{{ Asset($item->image) }}">
                </div>
                <div class="col-lg-8" style="margin-left: 5px;">
                    <h5>{{ $item->translate(app()->getLocale())->name }}</h5>
                    <p class="dots">{!! $item->translate(app()->getLocale())->description !!}</p>
                    <a href="{{ Route('post.show', [$item->slug, $item->id]) }}">Xem thêm</a>
                </div>
            </li>
        @endforeach
    @endif
</ul>
