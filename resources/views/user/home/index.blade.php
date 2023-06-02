@extends('layouts.user')

@section('content')
    @include('components.about')

    <!-- Bài viết nổi bật ( Trang chủ) -->
    <div class="container-xxl">
        <div class="row">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3"></h6>
                <h1 class="mb-5">{{ __('msg.featurePost') }}</h1>
            </div>
            {{-- <div class="row g-4 justify-content-center">
                @if ($featurePosts->count() > 0)
                    @foreach ($featurePosts as $item)
                        <div class="col-lg-3 col-md-3 wow fadeInUp card-home" data-wow-delay="0.1s">
                            <div class="package-item">
                                <a href="{{ Route('post.show', [$item->slug, $item->id]) }}">
                                    <div class="overflow-hidden">
                                        <img class="img-fluid img-config" src="{{ Asset($item->image) }}" alt="">
                                    </div>
                                </a>
                                <div class="text-center p-2">
                                    <div class="dots-2">
                                        <a href="{{ Route('post.show', [$item->slug, $item->id]) }}"
                                            title="{{ $item->translate(app()->getLocale())->name }}">
                                            {{ $item->translate(app()->getLocale())->name }}
                                        </a>
                                    </div>
                                    <div class="card-description">
                                        <span>{!! $item->translate(app()->getLocale())->description !!}</span>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center mb-2">
                                        <a href="{{ Route('post.show', [$item->slug, $item->id]) }}"
                                            class="btn btn-sm btn-primary px-3 border-radius"
                                            style="border-radius: 30px;">{{ __('msg.readMore') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div> --}}

            <div class="wrap justify-content-center">
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
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center text-primary px-3"></h6>
                        <h1 class="mb-5">{{ $category->translate(app()->getLocale())->name }}</h1>
                    </div>
                    <div class="row g-4 justify-content-center">
                        @foreach ($category->getAllPosts() as $item)
                            <div class="col-lg-3 col-md-3 wow fadeInUp card-home" data-wow-delay="0.1s">
                                <div class="package-item">
                                    <a href="{{ Route('post.show', [$item->slug, $item->id]) }}">
                                        <div class="overflow-hidden">
                                            <img class="img-fluid img-config" src="{{ Asset($item->image) }}"
                                                alt="">
                                        </div>
                                    </a>
                                    <div class="text-center p-2">
                                        <div class="dots-2">
                                            <a href="{{ Route('post.show', [$item->slug, $item->id]) }}">
                                                {{ $item->translate(app()->getLocale())->name }}
                                            </a>
                                        </div>
                                        <div class="card-description">
                                            <span>{!! $item->translate(app()->getLocale())->description !!}</span>
                                        </div>
                                            <a href="{{ Route('post.show', [$item->slug, $item->id]) }}"
                                                class="btn btn-sm btn-primary px-3 border-radius"
                                                style="border-radius: 30px;">{{ __('msg.readMore') }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        @endif
    @endforeach

    {{-- Slide (trang chủ) --}}
    <!-- Slider Start-->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3"></h6>
                <h1 class="mb-5">{{ __('msg.maybeYouCare') }}</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                @foreach ($mostViewPosts as $item)
                    <div class="wow fadeInUp card-home-slide" data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden div-config">
                                <img class="img-fluid img-config-slide" src="{{ Asset($item->image) }}" alt="">
                            </div>
                            <div class="text-center p-2">
                                <div class="dots-2">
                                    <a href="{{ Route('post.show', [$item->slug, $item->id]) }}">
                                        {{ $item->translate(app()->getLocale())->name }}
                                    </a>
                                </div>
                                <div class="card-description">
                                    <span>{!! $item->translate(app()->getLocale())->description !!}</span>
                                </div>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="{{ Route('post.show', [$item->slug, $item->id]) }}"
                                        class="btn btn-sm btn-primary px-3 border-end"
                                        style="border-radius: 30px;">{{ __('msg.readMore') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Slider End -->
@endsection
