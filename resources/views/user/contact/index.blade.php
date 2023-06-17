@extends('layouts.user')

@section('content')
    <!-- Contact Start -->
    <div class="container py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
                <h1 class="mb-5">{{ __('msg.contact') }}</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5>{{ __('msg.contactUs') }}</h5>
                    <p class="mb-4">{{ __('msg.contactUsDescription') }}</p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0"
                            style="width: 50px; height: 50px; background-color: #86b817; border-radius: 10px; margin-right: 4px">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary" style="margin: 0">{{ __('msg.address') }}</h5>
                            <p class="mb-0">{{ $aboutUs ? $aboutUs->address : '' }}</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0"
                            style="width: 50px; height: 50px; background-color: #86b817; border-radius: 10px; margin-right: 4px">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary" style="margin: 0">{{ __('msg.phone') }}</h5>
                            <p class="mb-0">{{ $aboutUs ? $aboutUs->phone : '' }}</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0"
                            style="width: 50px; height: 50px; background-color: #86b817; border-radius: 10px; margin-right: 4px">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary" style="margin: 0">{{ __('msg.email') }}</h5>
                            <p class="mb-0">{{ $aboutUs ? $aboutUs->email : '' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.2100321260255!2d105.82520371440995!3d21.02851193549293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab37abdeefdb%3A0xaddae1f35afaf1a9!2zSMOgbmcgdHkgSMOgbmcgVGjDtG5nLCBI4buTIENow60gTWluaCwgQsOsbmgsIFZp4buHdCBOYW0!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form method="POST" action="{{ Route('contact.submit') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <label for="fullname">{{ __('msg.fullname') }}</label>
                                    <input type="text" class="form-control" id="fullname" name="fullname"
                                        value="{{ old('fullname') }}" placeholder="Your Name">
                                    @error('fullname')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email">{{ __('msg.email') }}</label>
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ old('email') }}" placeholder="Your Email">
                                </div>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <label for="phone">{{ __('msg.phone') }}</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        value="{{ old('phone') }}" placeholder="phone">
                                </div>
                                @error('phone')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <label for="message">{{ __('msg.note') }}</label>
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 100px"></textarea>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <button class="btn btn-primary w-100 py-3" type="submit">{{ __('msg.sendInfo') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
