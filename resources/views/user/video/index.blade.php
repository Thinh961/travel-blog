@extends('layouts.user')

@section('content')
    <div class="container-xxl destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">laibaoxinchuan</h6>
                <h1 class="mb-5">Video</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-8 col-md-6">
                    <div class="row g-4 justify-content-center">
                        @if ($videos->count() > 0)
                            @foreach ($videos as $item)
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="package-item">
                                        <div class="overflow-hidden">
                                            <a class="position-relative d-block h-100 overflow-hidden" href="">
                                                <iframe width="420" height="315"
                                                    src="https://www.youtube.com/embed/{{ $item->videoId }}" frameborder="0"
                                                    allowfullscreen></iframe>
                                            </a>
                                        </div>
                                        <div class="text-center p-1">
                                            <h3 class="mb-0">{{ $item->translate(app()->getLocale())->name }}</h3>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.7s">
                    @include('components.sidebar')
                </div>
            </div>
        </div>
        <div class="mt-2">
            {{ $videos->render('pagination') }}
        </div>
    </div>
@endsection
