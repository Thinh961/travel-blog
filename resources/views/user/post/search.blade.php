@extends('layouts.user')

@section('content')
    <div class="container destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">laibaoxinchuan</h6>
                <h1 class="mb-5">{{ __('msg.searchWithKeyword') }}: {{ $keyword }}</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-8 col-md-6">
                    @if ($posts->count() > 0)
                        <div class="row g-4 justify-content-center">
                            @foreach ($posts as $item)
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="package-item">
                                        <a href="{{ Route('post.show', [$item->slug, $item->id]) }}">
                                            <div class="overflow-hidden">
                                                <img class="img-fluid img-config-slide" src="{{ Asset($item->image) }}"
                                                    alt="">
                                            </div>
                                        </a>
                                        <div class="text-center p-4">
                                            <a href="{{ Route('post.show', [$item->slug, $item->id]) }}"
                                                class="mb-0">{{ $item->translate(app()->getLocale())->name }}</a>
                                            <p>{!! $item->translate(app()->getLocale())->description !!}</p>
                                            <div class="d-flex justify-content-center mb-2">
                                                <a href="{{ Route('post.show', [$item->slug, $item->id]) }}"
                                                    class="btn btn-sm btn-primary px-3 border-radius"
                                                    style="border-radius: 30px;">{{ __('msg.readMore') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    @else
                        <div>
                            <img src="{{ Asset('user/img/no-data.png') }}" class="img-fluid" alt="">
                        </div>
                    @endif
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.7s">
                    @include('components.sidebar')
                </div>
            </div>
        </div>
        <div class="mt-2">
            {{ $posts->render('pagination') }}
        </div>
    </div>
@endsection
