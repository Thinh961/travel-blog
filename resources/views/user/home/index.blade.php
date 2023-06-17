@extends('layouts.user')

@section('content')
    @include('components.about')

    <!-- Bài viết nổi bật ( Trang chủ) -->
    <div class="container">
        <div class="row mt-5" style="justify-content: center">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3"></h6>
                <h1 class="mb-5">{{ __('msg.featurePost') }}</h1>
            </div>
            <div class="wrap justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                @if ($featurePosts->count() > 0)
                @foreach ($featurePosts as $item)
                    <div class="box">
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
                                {{-- <p class="user-follow-info">Giá tiền</p> --}}
                            </div>
                            <p class="description">{!! $item->translate(app()->getLocale())->description !!}</p>
                        </div>
                        <a href="{{ Route('post.show', [$item->slug, $item->id]) }}" class="button">{{ __('msg.readMore') }}</a>
                    </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- Package End -->

    {{-- Danh mục --}}
    @foreach ($categories as $category)
        @if ($category->getAllPosts()->count() > 0)
            <div class="container">
                <div class="row mt-5" style="justify-content: center">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center text-primary px-3"></h6>
                        <h1 class="mb-5">{{ $category->translate(app()->getLocale())->name }}</h1>
                    </div>
                    <div class="wrap justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                        @foreach ($featurePosts as $item)
                            <div class="box">
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
                                        {{-- <p class="user-follow-info">Giá tiền</p> --}}
                                    </div>
                                    <p class="description">{!! $item->translate(app()->getLocale())->description !!}</p>
                                </div>
                                <a href="{{ Route('post.show', [$item->slug, $item->id]) }}" class="button">{{ __('msg.readMore') }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    @endforeach

    {{-- Slide (trang chủ) --}}
    <!-- Slider Start-->
    <div class="container">
        <div class="row mt-5" style="justify-content: center">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3"></h6>
                <h1 class="mb-5">{{ __('msg.maybeYouCare') }}</h1>
            </div>
            {{-- <div class="owl-carousel testimonial-carousel"> --}}
                <div class="wrap justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                    @foreach ($mostViewPosts as $item)
                        <div class="box">
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
                </div>
            {{-- </div> --}}
        </div>
    </div>
    <!-- Slider End -->
@endsection
