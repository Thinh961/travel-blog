@extends('layouts.user')

@section('content')
    <div class="container-xxl destination">
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-8 col-md-6">
                    @if (!empty($aboutUs->description))
                        <div class="row g-3">
                            <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                                <p>{{ !empty($aboutUs) ? $aboutUs->created_at : '' }}</p>
                                <h5>
                                    {{ !empty($aboutUs) ? $aboutUs->translate(app()->getLocale())->name : '' }}
                                </h5>
                                <span>{!! !empty($aboutUs) ? $aboutUs->translate(app()->getLocale())->description : '' !!}</span>
                            </div>
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
    </div>
@endsection
