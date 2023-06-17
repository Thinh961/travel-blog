@extends('layouts.user')

@section('content')
    <div class="container destination">
        <div class="row" style="justify-content: center">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">来宝心传</h6>
                <h1 class="mb-5">{{ $category ? $category->translate(app()->getLocale())->name : '' }}</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-8 col-md-6">
                    @if ($posts->count() > 0)
                        <div class="wrap justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                            @if ($posts->count() > 0)
                            @foreach ($posts as $item)
                                <div class="box-post">
                                    <div class="box-top">
                                        <a href="{{ Route('post.show', [$item->slug, $item->id]) }}">
                                            <img class="box-image" src="{{ Asset($item->image) }}" alt="">
                                        </a>
                                        <div class="title-flex">
                                            <h3 class="box-title">
                                                <a href="{{ Route('post.show', [$item->slug, $item->id]) }}"
                                                    title="{{ $item->translate(app()->getLocale())->name }}">
                                                    {{ $item->translate(app()->getLocale())->name }}
                                                </a>
                                            </h3>
                                        </div>
                                        <p class="description">{!! $item->translate(app()->getLocale())->description !!}</p>
                                    </div>
                                    <a href="{{ Route('post.show', [$item->slug, $item->id]) }}" class="button">{{ __('msg.readMore') }}</a>
                                </div>
                            @endforeach
                            @endif
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
