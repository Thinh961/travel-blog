@extends('layouts.user')

@section('content')
    <div class="container-xxl destination">
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-8 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <p>{{ $post->created_at }}</p>
                            <h5>
                                {{ $post->translate(app()->getLocale())->name }}
                            </h5>
                            <p>{!! $post->translate(app()->getLocale())->content !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.7s">
                    @include('components.sidebar')
                </div>
            </div>
        </div>
    </div>
@endsection
