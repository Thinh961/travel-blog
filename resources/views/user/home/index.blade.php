@extends('layouts.user')

@section('content')
    @include('components.about')

    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3"></h6>
                <h1 class="mb-5">Bài viết nổi bật</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @if ($featurePosts->count() > 0)
                    @foreach ($featurePosts as $item)
                        <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="package-item">
                                <a href="{{ Route('post.show', [$item->slug, $item->id]) }}">
                                    <div class="overflow-hidden">
                                        <img class="img-fluid" src="{{ Asset($item->image) }}" alt="">
                                    </div>
                                </a>
                                <div class="text-center p-4">
                                    <a href="{{ Route('post.show', [$item->slug, $item->id]) }}"
                                        class="mb-0">{{ $item->translate(app()->getLocale())->name }}</a>
                                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam
                                        eos</p>
                                    <div class="d-flex justify-content-center mb-2">
                                        <a href="detail.html" class="btn btn-sm btn-primary px-3 border-radius"
                                            style="border-radius: 30px;">Đọc thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- Package End -->

    <!-- Slider Start-->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3"></h6>
                <h1 class="mb-5">Có thể bạn quan tâm</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                @foreach ($mostViewPosts as $item)
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{ Asset($item->image) }}" alt="">
                            </div>
                            <div class="text-center p-4">
                                <h3 class="mb-0">{{ $item->translate(app()->getLocale())->name }}</h3>
                                <p>{!! $item->translate(app()->getLocale())->description !!}</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="{{ Route('post.show', [$item->slug, $item->id]) }}"
                                        class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px;">Read
                                        More</a>
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
